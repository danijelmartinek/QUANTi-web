<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    	$posts = Post::orderBy('created_at', 'desc')->Paginate(5);
    	return view('index', ['posts' => $posts]);
    }

    public function show($slug)
    {
    	$post = Post::findBySlug($slug);
    	return view('post.show', ['post'=> $post ]);
    }
}
