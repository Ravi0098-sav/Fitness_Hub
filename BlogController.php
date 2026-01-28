<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class BlogController
{
      public function index()
    {
        return view('frontend.blog');
    }
}
