<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = new Post();
        $posts = $posts->getPaginateByLimit(3);
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(int $id)
    {
        return view('posts.show', ['post' => Post::find($id)]);
        // return "hello world";
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'body' => 'required|string',
        // ]);

        $post = new Post();
        $post = $post->createPost($request->all());
        return redirect()->route('posts.show', ['id' => $post->id]);
    }
}
