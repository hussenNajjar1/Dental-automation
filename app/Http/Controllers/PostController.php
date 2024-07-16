<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
{
    $posts = Post::all();

    // التحقق من فارغ أم لا
    if ($posts->isEmpty()) {
        // إذا كانت البيانات فارغة، قم بتعيين $posts إلى قيمة null
        $posts = null;
    }

    return view('index', compact('posts'));
}

    
    public function showpost()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        
        $post = Post::create($request->all());
       
        return back()->with('info', 'Post created successfully');
        
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post->update($request->all());

        return redirect('/posts')->with('info', 'Post update successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts')->with('info', 'Post delete successfully');
    }
}
