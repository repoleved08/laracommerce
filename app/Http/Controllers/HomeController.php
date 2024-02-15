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
use App\Models\StrategyOrder;
use App\Models\StrategyCart;
use App\Models\Post;
use Omnipay\Omnipay;
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
            $total_products = Product::all()->count();
            $total_orders = Order::all()->count();
            $total_users = User::all()->count();


            $order = Order::all();
            $total_revenue = 0;

            foreach ($order as $key => $order) {
                $total_revenue += $order->price;
            }

            $total_delivered = Order::where('delivery_status', '=', 'Processed')->get()->count();
            $total_processing = Order::where('delivery_status', '=', 'Processing')->get()->count();

            return view('admin.home', compact('total_products', 'total_orders', 'total_users', 'total_revenue', 'total_delivered', 'total_processing'));
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
            $cart->category = $product->category;
            $cart->bot = $product->bot;
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
        return redirect()->back()->with('message', 'Item Deleted Successfully');
    }

    public function payment_option($totalprice)
    {
        $cart = Cart::where('user_id', '=', Auth::id())->where('user_id', '=', $totalprice)->get();
        //dd($totalprice);
        return view('home.payment_option', compact('totalprice'));
    }

    public function stripebtn($totalprice)
    {
        return view('home.stripebtn', compact('totalprice'));
    }

    // public function bitcoin($totalprice)
    // {
    //     $btc_wallet = new Coinremitter('BTC');
    //     $balance = $btc_wallet->get_balance();
    // }


    public function stripenewer($totalprice)
    {
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));

        $response = $stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => ['name' => 'Bundle #1'],
                        'unit_amount' => $totalprice * 100,
                    ],

                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('cancel'),
        ]);
        //dd($response);
        $user = Auth::user();
        $userid = $user->id;
        $data = Cart::where('user_id', '=', $userid)->get();
        foreach ($data as $data) {
            $order = new Order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->user_id = $data->user_id;
            $order->quantity = $data->quantity;
            $order->price = $data->price;
            $order->product_title = $data->product_title;
            $order->product_id = $data->product_id;
            $order->image = $data->image;
            $order->category = $data->category;
            $order->bot = $data->bot;
            $order->payment_status = "Stripe";
            $order->delivery_status = "Processing";
            $order->save();

            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        if (isset($response->id) && !empty($response->id)) {
            return redirect($response->url);
        } else {
            return redirect()->route('cancel');
        }
    }

    public function success(Request $request)
    {
        if (isset($request->session_id) && !empty($request->session_id)) {
            $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));
            $session = $stripe->checkout->sessions->retrieve($request->session_id);
            //dd($session);
            //dd($session);
            $user = Auth::user();
            $userid = $user->id;
            $data = Cart::where('user_id', '=', $userid)->get();
            foreach ($data as $data) {
                $order = new Order;
                $order->name = $data->name;
                $order->email = $data->email;
                $order->user_id = $data->user_id;
                $order->quantity = $data->quantity;
                $order->price = $data->price;
                $order->product_title = $data->product_title;
                $order->product_id = $data->product_id;
                $order->category = $data->category;
                $order->bot = $data->bot;
                $order->image = $data->image;
                $order->payment_status = "Stripe";
                $order->delivery_status = "Processing";
                $order->save();

                $cart_id = $data->id;
                $cart = Cart::find($cart_id);
                $cart->delete();
            }

            return view('home.success');
        } else {
            return redirect()->route('cancel');
        }
    }


    public function userorders()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $order = Order::where('user_id', $user->id)->get();

            return view("home.userorders", compact("order"));
        } else {
            return redirect('login');
        }
    }

    public function cancel_order($id)
    {
        $order = Order::find($id);
        $order->delivery_status = "Cancelled!";
        $order->save();
        return redirect()->back();
    }

    public function download($filename)
    {
        if (Auth::id()) {
            $file = public_path('bots/' . $filename);
            if (file_exists($file)) {
                return response()->download($file);
            } else {
                abort(404);
            }
        } else {
            return redirect('login');
        }
    }

    public function search(Request $request)
    {
        if (Auth::id()) {
            $search = $request->search;
            $product = Product::where('name', 'LIKE', '%' . $search . '%')->get();
            return view('home.search', compact('product'));
        } else {
            return redirect('login');
        }
    }

    public function blogpost()
    {
        if (Auth::id()) {
            $post = Post::all();
            return view("home.blogpost", compact("post"));
        } else {
            return redirect('login');
        }
    }
    public function detailed_page($id)
    {

        if (Auth::id()) {
            $postd = Post::find($id);
            return view("home.detailed_page", compact("postd"));
        } else {
            return redirect('login');
        }
    }


    public function bots_page()
    {
        $product = Product::paginate(2);
        return view("home.bots_page", compact("product"));
    }

    //paypal function called paypal_strat
    public function paypal_strat($totalprice)
    {
        if (Auth::id()) {
            return view('home.paypal_strat', compact('totalprice'));
        } else {
            return redirect('login');
        }
        return view('home.paypal_strat', compact('totalprice'));
    }


    private $gateway;



    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); // Or false when you are ready for live transactions
    }

    public function paypals($totalprice)
    {
        if (Auth::id()) {
            $response = $this->gateway->purchase(array(
                'amount' => $totalprice,
                'currency' => 'USD',
                'returnUrl' => url('/home/success'),
                'cancelUrl' => url('/home/cancel'),
            ))->send();
            if ($response->isRedirect()) {
                $user = Auth::user();
                $userid = $user->id;
                $data = Cart::where('user_id', '=', $userid)->get();
                foreach ($data as $data) {
                    $order = new Order;
                    $order->name = $data->name;
                    $order->email = $data->email;
                    $order->user_id = $data->user_id;
                    $order->quantity = $data->quantity;
                    $order->price = $data->price;
                    $order->product_title = $data->product_title;
                    $order->product_id = $data->product_id;
                    $order->payment_status = "Paypal";
                    $order->delivery_status = "Processing";
                    $order->save();

                    $cart_id = $data->id;
                    $cart = Cart::find($cart_id);
                    $cart->delete();
                }
                $response->redirect();
            } else {
                // payment failed: display message to customer
                echo $response->getMessage();
            }
            return redirect('success');
        } else {
            return redirect('login');
        }
    }

    public function paypal_success()
    {
        if (Auth::id()) {
            return view('home.success');
        } else {
            return redirect('login');
        }
    }

    //strategy_payment function called strategy_payment
    public function strategy_payment(Request $request, $totalprice)
    {
        if (Auth::id()) {
            return view('home.strategy_payment', compact('totalprice'));
        } else {
            return redirect('login');
        }
    }

    //bitcoin function called bitcoin_strat
    public function bitcoin_strat($totalprice)
    {
        if (Auth::id()) {
            return view('home.bitcoin_strat', compact('totalprice'));
        } else {
            return redirect('login');
        }
    }

    public function pay_strat(Request $request, $totalprice)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $dat = StrategyCart::where('user_id', '=', $userid)->get();
            foreach ($dat as $dat) {
                $order = new StrategyOrder;
                $order->name = $dat->name;
                $order->email = $dat->email;
                $order->user_id = $dat->user_id;
                $order->price = $dat->price;
                $order->product_title = $dat->product_title;
                //$order->quantity = $dat->quantity;
                //$order->image = $dat->image;
                $order->payment_status = "Bitcoin";
                $order->delivery_status = "Processing";
                $order->save();

                $cart_id = $dat->id;
                $cart = StrategyCart::find($cart_id);
                $cart->delete();
            }
            try {
                $data = array(
                    'amount' => $totalprice, //required
                    'name' => 'Ultimate', //Name accepts only numbers, letters, hyphens.
                    'currency' => 'usd',
                    'expire_time' => '20', //optional, invoice will expire in 20 minutes. 
                    'description' => 'X10Aibots',
                    'custom_data1' => 'Bundle #01',
                    'custom_data2' => '',
                );

                //dd($data);
                return Coinremitter::redirectToGateway($data);


                // or alternatively use the helper
                // return coinremitter()->redirectToGateway($data);


                return view('home.success');
            } catch (\Exception $e) {
                return Redirect::back()->withMessage(['msg' => "There's an error in the data", 'type' => 'error']);
            }
        } else {
            return redirect('login');
        }
    }
}
