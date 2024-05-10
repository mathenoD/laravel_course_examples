<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = Post::create($request->all());

        event(new PostCreated($post));

        return back()->with('success', 'Post created successfully!');
    }
}
