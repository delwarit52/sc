<?php

namespace App\Http\Controllers\Shopadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shopadmin\Productdetail;
use Session;

class ProductdetailController extends Controller
{
    public function detailCreate()
    {
        return view('shopadmin.product.productdetail.productdetail_create');
    }
    public function detailStore(Request $request)
    {
        // return "Hello Create";
        
        $productdetail = Productdetail::create($this->validateRequest());
        $this->storeImage($productdetail);
		Session::forget('product_id');

        if($productdetail){
    		$notification = array(
	            'messege' => 'Product added Successful',
	            'alert-type' => 'success',
	        );
            return redirect('shop/list')->with($notification);;
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Product not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
        
    }

    public function detailEdit(Productdetail $productdetail)
    {
        return view('shopadmin.product.productdetail.productdetail_edit',compact('productdetail'));
    }

    public function detailUpdate(Request $request,Productdetail $productdetail)
    {
        
        // return "Hello Create";

        $code = "code12";

        
        $productdetail->update($this->validateRequest());
        $this->storeImageupdate($productdetail);
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
	        return redirect()->route()->with($notification);
    	}
        
        
    }

    
    public function detailDelete(Productdetail $productdetail)
    {
		if($productdetail->image){
		    unlink('storage/'.$product->image);
		}
        $productdetail->delete();
        if($productdetail){
    		$notification = array(
	            'messege' => 'Product more details deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..something went wrong',
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
            'image_front' => '',
            'image_back' => '',
            'code' => '',
        ]);
    }
    
    private function storeImage($productdetail)
    {
    	if(request()->hasFile('image_front')){
    		$productdetail->update([
    			'image_front' => request()->image_front->store('shopadmin/productdetail','public'),
    		]);
    	}
    	if(request()->hasFile('image_back')){
    		$productdetail->update([
    			'image_back' => request()->image_back->store('shopadmin/productdetail','public'),
    		]);
    	}
	}
    private function storeImageupdate($productdetail)
    {
    	if(request()->hasFile('image_front')){
    		$productdetail->update([
    			'image_front' => request()->image_front->store('shopadmin/productdetail','public'),
    		]);
            if(request()->old_image_front){
                unlink('storage/'.request()->old_image_front);
            }
    	}
    	if(request()->hasFile('image_back')){
    		$productdetail->update([
    			'image_back' => request()->image_back->store('shopadmin/productdetail','public'),
    		]);
            if(request()->old_image_back){
                unlink('storage/'.request()->old_image_back);
            }
    	}
	}
}
