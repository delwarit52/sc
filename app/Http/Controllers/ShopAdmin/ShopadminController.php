<?php

namespace App\Http\Controllers\Shopadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shopadmin\Shop;
use Auth;

class ShopadminController extends Controller
{
    public function dashboard()
    {
        $shops = Shop::where('user_id',Auth::id())->get();
        return view('shopadmin.index',compact('shops'));
    }
}
