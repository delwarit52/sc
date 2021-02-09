<?php

namespace App\Http\Controllers\ShopAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Shopadmin\ProductMoreDetails;

class ProductMoreDetailsController extends Controller
{
    

    public function moredetails()
    {
        // $categories = Category::latest()->get();
        // $count = 1;
        return view('shopadmin.addproductmoredetails');
    }

    public function createmoredetails(Request $request)
    {
        // return "Hello Create";
        $this->validateRequest();

        $code = "code-1";

        $sliderImgs = "";
        // $this->storeImage($request->images);
        if($request->hasFile('images')){
            foreach($request->file('images') as $image)
            {
                // $data[] = $image;
                // array_push($data, $image);
                $sliderImgs .= $image->store('shopadmin/product/productslider','public').",";
            }
        }
        $sliderImgs = substr_replace($sliderImgs ,"",-1);
        $productMoreDetails = ProductMoreDetails::create(
            [                
                'product_id'=> $request->lastinsertid,
                'size'=> $request->size,
                'color'=> $request->color,
                'Quantity'=> $request->Quantity,
                'unit'=> $request->unit,
                'imgs'=> $sliderImgs,
                'code'=> $code,
            ]
        );
        
        if($productMoreDetails){
    		$notification = array(
	            'messege' => 'productMoreDetails added Successful',
	            'alert-type' => 'success',
	        );
    		// return redirect()->back()->with($notification);
            return view('shopadmin.addproductmoredetails', ['notification' => $notification, 'lastinsertid' => $request->lastinsertid]);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..productMoreDetails not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    
    public function update(Product $product)
    {
        $product->update($this->validateRequest());
        $this->storeUpdateImage($product);
        if ($product) {
    		$notification = array(
    			'messege' => 'Product Information Updated!',
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
    public function delete(Product $product)
    {
		if($product->image){
		unlink('storage/'.$product->image);
		}
        $product->delete();
        if($product){
    		$notification = array(
	            'messege' => 'Product deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Product not deleted',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }
    

    
    //private methods
    private function validateRequest()
    {
        return request()->validate([
            'lastinsertid'=>'required',
            'size'=>'required',
            'color'=>'required',
            'Quantity'=>'required',
            'unit'=>'required',
            'images'=>'required',
        ]);
    }

    private function storeImage($images)
    {
    	if($images){
            foreach($images as $image)
            {
                // $image->move(public_path('file'),$name);
                $image->store('shopadmin/product/productslider','public');
                
            }
        }
	}
	
	
    private function storeUpdateImage($product)
    {
        if(request()->has('image')){
            if(request()->old_image){
                unlink('storage/'.request()->old_image);
            }
            $product->update([
                'image' => request()->image->store('shopadmin/product','public'),
            ]);

            // $resize = Image::make('storage/app/public/'.$product->image)->resize(300,300);
            // $resize->save();
        }
    }
    
}
