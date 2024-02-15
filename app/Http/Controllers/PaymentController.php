<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use PrevailExcel\Coinremitter\Facades\Coinremitter;
use Stripe\StripeClient;
use Stripe\Exception\CardException;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\StrategyCart;
use App\Models\StrategyOrder;
//use Omnipay;
//use Omnipay\PayPal;
//use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Omnipay\Omnipay;
//use Omnipay\Omnipay;
//use Illuminate\Support\Facades\Auth;
//use Omnipay\Common\Http;

class PaymentController extends Controller
{


    public function bitcoin($totalprice)
    {
        if (Auth::id()) {
            return view('home.bitcoin', compact('totalprice'));
        } else {
            return redirect('login');
        }
    }

    /**
     * Collect Order data and Redirect user to Payment gateway
     */
    public function pay(Request $request, $totalprice)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $dat = Cart::where('user_id', '=', $userid)->get();
            foreach ($dat as $dat) {
                $order = new Order;
                $order->name = $dat->name;
                $order->email = $dat->email;
                $order->user_id = $dat->user_id;
                $order->price = $dat->price;
                $order->product_title = $dat->product_title;
                $order->quantity = $dat->quantity;
                $order->image = $dat->image;
                $order->payment_status = "Bitcoin";
                $order->delivery_status = "Processing";
                $order->save();

                $cart_id = $dat->id;
                $cart = Cart::find($cart_id);
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

    //stripe
    public function index_payment($totalprice)
    {
        if (Auth::id()) {
            return view('home.index_payment', compact('totalprice'));
        } else {
            return redirect('login');
        }
    }

    public function stripenew($totalprice)
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
            $data = StrategyCart::where('user_id', '=', $userid)->get();
            foreach ($data as $data) {
                $order = new StrategyOrder;
                $order->name = $data->name;
                $order->email = $data->email;
                $order->user_id = $data->user_id;
                $order->telegram_link = $data->telegram_link;
                $order->price = $data->price;
                $order->product_title = $data->product_title;
                $order->product_id = $data->product_id;
                $order->payment_status = "Stripe";
                $order->delivery_status = "Processing";
                $order->save();

                $cart_id = $data->id;
                $cart = StrategyCart::find($cart_id);
                $cart->delete();
            }

            return view('home.success');
        } else {
            return redirect()->route('cancel');
        }
    }

    public function cancel()
    {
        return view('home.cancel');
    }

    public function strategy_orders()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $sorders = StrategyOrder::where('user_id', $user->id)->get();

            return view("home.strategy_orders", compact("sorders"));
        } else {
            return redirect('login');
        }
    }

    //Paypal
    public function paypal_page($totalprice)

    {
        if (Auth::id()) {
            return view("home.paypal_page",  compact('totalprice'));
        } else {
            return redirect('login');
        }
    }

    private $gateway;



    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); // Or false when you are ready for live transactions
    }

    public function paypalnew($totalprice)
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

    public function paypal_cancel()
    {
        if (Auth::id()) {
            return view('home.cancel');
        } else {
            return redirect('login');
        }
    }
}
