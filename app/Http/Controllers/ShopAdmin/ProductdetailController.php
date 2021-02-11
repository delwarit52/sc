<?php

namespace App\Http\Controllers\Shopadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductdetailController extends Controller
{
    public function detailCreate()
    {
        return view('shopadmin.addproductmoredetails');
    }
    public function detailStore()
    {
        $productdetail = Productdetail::create($this->validateData());
        $this->storeImage($productdetail);
        if ($productdetail) {
            $notification = array(
                'messege' => 'Information Upload Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Something Went Wrong!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        
    }

    
    private function validateData()
    {
        return request()->validate([
            'product_id' => 'required',
            'meta_description' => '',
            'size' => '',
            'color' => '',
            'quantity' => '',
            'unit' => '',
            'image_front' => '',
            'image_back' => '',
            'code' => '',
        ]);
    }
}
