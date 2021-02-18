<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function shopRequest()
    {
        return view('shop_request');
    }
}
