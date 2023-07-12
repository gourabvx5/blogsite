<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request) {
        $posts = Post::all();
        return view('posts.posts', ['posts' => $posts]);
    }

    public function show($id)
    {
        $posts = Post::find($id);
        return view('posts.post', ['posts' => $posts]);
    }
    

}
