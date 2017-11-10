<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function news()
    {
      $posts = POST::orderBy('featured', 'desc')->orderBy('created_at', 'desc')->paginate(5);
      return view('news', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Post::findBySlug($slug);
        return view('post-page', ['post' => $post]);
    }
}
