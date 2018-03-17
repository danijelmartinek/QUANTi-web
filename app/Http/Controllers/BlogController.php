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
        $post = POST::findBySlug($slug);
        $other_posts = POST::where('id','!=', $post->id )->orderBy('created_at', 'desc')->where('status', 'PUBLISHED' )->paginate(3);
        return view('post-page', ['post' => $post, 'other_posts' => $other_posts]);
    }

}

