<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use PrevailExcel\Coinremitter\Facades\Coinremitter;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Stripe;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::paginate(2);
        return view('home.userpage', compact('product'));
    }


    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.home');
        } else {
            $product = Product::paginate(2);
            return view('home.userpage', compact('product'));
        }
    }

    public function item_detail($id)
    {
        $product = Product::find($id);
        return view('home.item_detail', compact('product'));
    }

    public function addto_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $product = Product::find($id);
            $cart = new Cart;
            $cart->name = $user->name;
            $cart->email = $user->email;
            if ($product->discount_price != null) {
                $cart->price = $product->discount_price * $request->quantity;
            } else {
                $cart->price = $product->price * $request->quantity;
            }
            $cart->user_id = $user->id;
            $cart->product_title = $product->name;
            $cart->product_id = $product->id;
            $cart->image = $product->image;
            $cart->quantity = $request->quantity;
            $cart->save();

            return redirect('show_cart');
        } else {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart = Cart::where('user_id', '=', $id)->get();
            return view('home.show_cart', compact('cart'));
        } else {
            return redirect('login');
        }
    }

    public function delete_cart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function payment_option($totalprice)
    {
        $cart = Cart::where('user_id', '=', Auth::id())->where('user_id', '=', $totalprice)->get();
        //dd($totalprice);
        return view('home.payment_option', compact('totalprice'));
    }

    public function stripe($totalprice)
    {
        return view('home.stripe', compact('totalprice'));
    }

    // public function bitcoin($totalprice)
    // {
    //     $btc_wallet = new Coinremitter('BTC');
    //     $balance = $btc_wallet->get_balance();
    // }


    public function stripePost(Request $request, $totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => $totalprice * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment made from x10aibots."
        ]);
        
        $user = Auth::user();
        $userid = $user->id;
        $data = Cart::where('user_id', '=', $userid)->get();
        foreach ($data as $data) {
            $order = new Order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->user_id = $data->user_id;
            $order->price = $data->price;
            $order->product_title = $data->product_title;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->payment_status = "Stripe";
            $order->delivery_status = "Processing";
            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }

        return view('home.success');
    }
    public function userorders()
    {
        $user = Auth::user();
        $order = Order::where('user_id', $user->id)->get();

        return view("home.userorders", compact("order"));
    }

    public function orders()
    {
        $user = Auth::user();
        $userid = $user->id;
        $data = Cart::where('user_id', '=', $userid)->get();
        foreach ($data as $data) {
            $order = new Order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->user_id = $data->user_id;
            $order->price = $data->price;
            $order->product_title = $data->product_title;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->payment_status = "Stripe";
            $order->delivery_status = "Processing";
            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }
        return redirect()->back()->with("success", "We have recieved your order. It is now processing!");
    }

    public function blogpost()
    {
        return view("home.blogpost");
    }


    
}
