<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use PrevailExcel\Coinremitter\Facades\Coinremitter;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class PaymentController extends Controller
{


    public function bitcoin($totalprice)
    {
        return view('home.bitcoin', compact('totalprice'));
    }

    /**
     * Collect Order data and Redirect user to Payment gateway
     */
    public function pay(Request $request, $totalprice)
    {
        try {
            $data = array(
                'amount' => $totalprice, //required
                'name' => 'NormanBii', //Name accepts only numbers, letters, hyphens.
                'currency' => 'usd',
                'expire_time' => '20', //optional, invoice will expire in 20 minutes. 
                'description' => 'X10Aibots',
                'custom_data1' => '',
                'custom_data2' => '',
            );
            //dd($data);
            return Coinremitter::redirectToGateway($data);


            // or alternatively use the helper
            // return coinremitter()->redirectToGateway($data);
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
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => "There's an error in the data", 'type' => 'error']);
        }
    }
}
