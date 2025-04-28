<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', ['posts' => Post::getPaginateByLimit(3)]);
    }

    public function show(int $id)
    {
        return view('posts.show', ['post' => Post::find($id)]);
        // return "hello world";
    }
}
