<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Anhskohbo\NoCaptcha\Facades\NoCaptcha;

public function index()
{
    $posts = Post::latest()->get();
    return view('posts.index', compact('posts'));
}

public function create()
{
    return view('posts.create');
}

public function store(Request $request)
{
    $request->validate([
        'headline' => 'required',
        'author_name' => 'required',
        'body_text' => 'required',
        'g-recaptcha-response' => 'required|recaptcha',
    ]);

    Post::create($request->all());

    return redirect()->route('posts.index');
}

public function index()
{
    $posts = Post::latest()->get();

    return view('posts.index', compact('posts'));
}