<?php

namespace App\Http\Controllers\Shopadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shopadmin\Productdetail;

class ProductdetailController extends Controller
{
    public function detailCreate()
    {
        return view('shopadmin.addproductmoredetails');
    }
    public function detailStore(Request $request)
    {
        // return "Hello Create";
        $this->validateRequest();

        $code = "code12";
        
        $productdetail = Productdetail::create(
            [
                'product_id'=> $request->product_id,
                'size'=> $request->size,
                'color'=> $request->color,
                'quantity'=> $request->quantity,
                'unit'=> $request->unit,
                'image_front'=> $request->image_front,
                'image_back'=> $request->image_back,
                'code'=> $code,
            ]
        );
        $this->storeImage($productdetail);
        if($productdetail){
    		$notification = array(
	            'messege' => 'Product added Successful',
	            'alert-type' => 'success',
	        );
            return redirect()->back()->with($notification);;
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Product not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
        
    }

    
    private function validateRequest()
    {
        return request()->validate([
            'product_id' => 'required',
            'size' => 'required',
            'color' => 'required',
            'quantity' => 'required',
            'unit' => 'required',
            'image_front' => 'required',
            'image_back' => 'required',
            'code' => '',
        ]);
    }
    
    private function storeImage($product)
    {
    	if(request()->hasFile('image_front')){
    		$product->update([
    			'image_front' => request()->image_front->store('shopadmin/product','public'),
    		]);
    	}
    	if(request()->hasFile('image_back')){
    		$product->update([
    			'image_back' => request()->image_back->store('shopadmin/product','public'),
    		]);
    	}
	}
}
