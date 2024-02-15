<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Strategy;
use App\Models\Category;
use App\Models\StrategyCart;

class StrategyController extends Controller
{
    public function strategies()
    {
        if (Auth::id()) {
        $strategy = Strategy::all();
        return view("home.strategies", compact("strategy"));
        }
        else{
            return redirect('login');
        }
    }
    //Admin
    public function add_strategy()
    {
        if (Auth::id()) {
        $category = Category::all();
        return view("admin.add_strategy", compact("category"));
        }
        else{
            return redirect('login');
        }
    }
    //Admin

    public function handle_strategy(Request $request)
    {
        if (Auth::id()) {
        $post = new Strategy;
        $post->title  =  $request->title;
        $post->short_description  =  $request->short_description;
        $post->price = $request->price;
        $post->category = $request->category;
        $post->telegram_link = $request->telegram_link;

        $post->save();


        return redirect()->back()->with('message', 'Post Added successuly');
        }
        else{
            return redirect('login');
        }
    }

    public function strategy_cart($id)
    {
        if (Auth::id()) {
        $strategy = Strategy::find($id);
        return view('home.strategy_cart', compact('strategy'));
        }
        else{
            return redirect('login');
        }
    }

    public function add_cart($id, Request $request)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $strategy = Strategy::find($id);
            $strategycart = new StrategyCart;
            $strategycart->name = $user->name;
            $strategycart->email = $user->email;

            $strategycart->price = $strategy->price;
            $strategycart->telegram_link = $strategy->telegram_link;
            $strategycart->user_id = $user->id;
            $strategycart->product_title = $strategy->title;
            $strategycart->product_id = $strategy->id;
            $strategycart->save();

            return redirect('display_strategy_cart');
        } else {
            return redirect('login');
        }
    }

    public function display_strategy_cart()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart = StrategyCart::where('user_id', '=', $id)->get();
            return view('home.display_strategy_cart', compact('cart'));
        } else {
            return redirect('login');
        }
    }

    public function del_cart($id)
    {
        if (Auth::id()) {
        $cart = StrategyCart::find($id);
        $cart->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
        }
        else{
            return redirect('login');
        }
    }
}
