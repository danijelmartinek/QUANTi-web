<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ContactController extends Controller {

    public function create()
    {
        return view('contact');
    }

    public function store()
    {
    }

}
