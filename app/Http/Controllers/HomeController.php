<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

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
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        if (Auth::id())
        {
            $id=Auth::user()->id;
            $cart = Cart::where('user_id','=', $id)->get();
            return view('home.show_cart', compact('cart'));
        }
        else
        {
            return redirect('login');
        }
       
    }

    public function delete_cart($id)
    {
        $cart=Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function payment_option($totalprice)
    {
        $cart=Cart::where('user_id','=', Auth::id())->where('user_id','=', $totalprice)->get();
        //dd($totalprice);
        return view('home.payment_option', compact('totalprice'));
    }
}
