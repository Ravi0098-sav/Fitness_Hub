<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class FeatureController
{
      public function index()
    {
        return view('frontend.feature');
    }
}
