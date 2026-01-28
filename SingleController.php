<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class SingleController
{
      public function index()
    {
        return view('frontend.single');
    }
}
