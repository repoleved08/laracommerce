<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function add_post()
    {
        if (Auth::id()) {
        return view("admin.add_post");
        }
        else{
            return redirect('login');
        }
    }

    public function handle_post(Request $request)
    {
        if (Auth::id()) {
        $post = new Post;
        $post->title  =  $request->title;
        $post->short_description  =  $request->short_description;
        $post->body = $request->body;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('products', $imagename);
        $post->image = $imagename;

        $post->save();


        return redirect()->back()->with('message', 'Post Added successuly');
        }
        else{
            return redirect('login');
        }
    }

    public function edit_post(Post $post)
    {
        if (Auth::id()) {
        return view('adm.edtpost');
        }
        else{
            return redirect('login');
        }
    }

    public function update_post(Request $request, Post $post)
    {
        if (Auth::id()) {
        $post->title = $request->title;
        $post->short_description = $request->short_description;
        $post->body = $request->body;
        $image = $request->image;
        $imagename = time() .'.' . $image->getClientOriginalExtension();
        $request->image->move('products', $imagename);
        $post->image = $imagename;
        $post->save();
        return redirect()->back()->with('message',' Post Upated successfully!');
        }
        else{
            return redirect('login');
        }
    }

    public function view_post()
    {
        
        if (Auth::id()) {
        $post = Post::all();
        return view('admin.view_post', compact('post'));
        }
        else{
            return redirect('login');
        }
    }
}
