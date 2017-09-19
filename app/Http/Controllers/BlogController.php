<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function news()
    {
      $posts = Post::paginate(2);
      return view('news', ['posts' => $posts]);
    }
}
