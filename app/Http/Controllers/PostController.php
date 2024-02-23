<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();   

        return view('post.index', ['posts'=>$posts]);
    }

    public function show($post)
    {
        return view('post.show', ['post'=>$post]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        return 'post create';
    }
}
