<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\Bot;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }


    public function add_category(Request $request)
    {
        $data = new category;
        $data->cat_name = $request->cat_name;
        $data->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function delete_cat(Request $request)
    {
        $data = Category::find($request->id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function add_product(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->description = strip_tags($request->description);
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->category = $request->category;
        $product->bot = $request->bot;
        $product->quantity = $request->quantity;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('products', $imagename);
        $product->image = $imagename;

        $product->save();
        return redirect()->back()->with('message', 'Product Added successuly');
    }

    public function bot()
    {
        return view('admin.bot');
    }

    public function add_bot(Request $request)
    {
        $data = new Bot;
        $data->name = $request->name;
        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('bots', $filename);
        $data->file = $filename;
        $data->save();
        return redirect()->back()->with('message', 'Product Added successuly');
    }

    public function view_product()
    {
        $bot = Bot::all();
        $category = Category::all();
        return view('admin.product', compact('category','bot'));
    }

    public function show_product()
    {
        $product = Product::all();
        return view('admin.product_detail', compact('product'));
    }

    public function delete_product($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    public function update_product($id, Request $request)
    {
        $category = Category::all();
        $product = Product::find($id);
        $product->update($request->all());
        return view('admin.update_product', compact('product', 'category'));
        //return redirect()->back()->with('message','Product Updated Successfully');
    }

    
    public function change_product($id, Request $request)
    {
        $product = Product::find($id);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image_path = public_path("/products/" . $product->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $image = $request->file('image');
            $imgName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/products/');
            $image->move($destinationPath, $imgName);

            $product->image = $imgName;
        }

        $product->update($request->only('name', 'description', 'price', 'discount_price', 'quantity', 'category'));
        return redirect()->back()->with('message','Products updated successfully!');
    }

    public function orders()
    {
        $order = Order::all();
        return view('admin.orders', compact('order'));
    }

    public function delivered($id)
    {
        $order = Order::find($id);
        $order->delivery_status = "Processed";
        $order->save(); 
        return redirect()->back()->with("message","Approved");
    }

   
}
