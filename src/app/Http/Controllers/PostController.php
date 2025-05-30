<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = new Post();
        $posts = $posts->getPaginateByLimit(5);
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(int $id)
    {
        return view('posts.show', ['post' => Post::find($id)]);
        // return "hello world";
    }

    public function create()
    {
        return view('posts.create', ['categories' => Category::all()]);
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

    public function edit(int $id)
    {
        $post = new Post();
        $post = $post->find($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, int $id)
    {
        $post = new Post();
        $post = $post->findOrFail($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('posts.show', ['id' => $post->id]);
    }

    public function destroy(int $id)
    {
        $post = new Post();
        $result = $post->deletePost($id);
        // dd($result);
        return redirect()->route('posts.index');
    }
}
