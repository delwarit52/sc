<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shopadmin\Shopadmindetail;
use App\Models\User;

class AdminController extends Controller
{
    public function shopadminRequest()
    {
        $shopadmins = Shopadmindetail::where('status',0)->get();
        $count = 1;
        return view('admin.shopadmin_request',compact('shopadmins','count'));
    }
    public function shopadminAccept($id)
    {
        $user = User::where('id',$id)->update(['user_type' => 2]);
        $shopadmin = Shopadmindetail::where('user_id',$id)->update(['status' => 1]);
        $notification = array(
            'messege' => 'Order Approved and threw next step',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
