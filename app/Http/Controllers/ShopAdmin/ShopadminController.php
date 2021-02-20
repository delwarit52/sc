<?php

namespace App\Http\Controllers\Shopadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopadminController extends Controller
{
    public function dashboard()
    {
        return view('shopadmin.index');
    }
}
