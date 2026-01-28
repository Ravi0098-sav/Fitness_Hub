<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class AboutController
{
      public function index()
    {
        return view('frontend.about');
    }
}
