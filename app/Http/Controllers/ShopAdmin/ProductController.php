<?php

namespace App\Http\Controllers\ShopAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Shopadmin\Product;

class ProductController extends Controller
{
    
    public function addindex()
    {
        // $categories = Category::latest()->get();
        // $count = 1;
        return view('shopadmin.addproduct');
    }
    
    public function productbasicedit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('shopadmin.productbasicedit',
            ['product' => $product]
        );
    }

    public function productbasiceditupdate(Product $product)
    {
        $product->update($this->validateRequest());
        return redirect()->back();
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
    

    public function productlistsingleshop($id)
    {
        $products = Product::where('shop_id', $id)->get();
        return view('shopadmin.productlist',
            ['products' => $products]
        );
    }

    public function productlist()
    {
        $products = Product::latest()->get();
        return view('shopadmin.productlist',
            ['products' => $products]
        );
    }

    public function createproduct(Request $request)
    {
        // return "Hello Create";
        $this->validateRequest();

        $code = "code-1";
        
        $product = Product::create(
            [
                'name'=> $request->name,
                'shop_id'=> $request->shop_id,
                'brand_id'=> $request->brand_id,
                'product_category_id'=> $request->product_category_id,
                'product_subcategory_id'=> $request->product_subcategory_id,
                'product_price'=> $request->product_price,
                'product_price_discount'=> $request->product_price_discount,
                'product_small_description'=> $request->product_small_description,
                'product_full_description'=> $request->product_full_description,
                'product_shipping_and_return'=> $request->product_shipping_and_return,
                'image'=> $request->image,
                'code'=> $code,
            ]
        );
        $this->storeImage($product);
        if($product){
    		$notification = array(
	            'messege' => 'Product added Successful',
	            'alert-type' => 'success',
	        );
    		// return redirect()->back()->with($notification);
            return view('shopadmin.addproductmoredetails', ['notification' => $notification, 'lastinsertid' => $product->id]);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Product not Added',
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
            'name'=>'required',
            'shop_id'=>'required',
            'brand_id'=>'required',
            'product_category_id'=>'required',
            'product_subcategory_id'=>'required',
            'product_price'=>'required',
            'product_price_discount'=>'required',
            'product_small_description'=>'required|max:100',
            'product_full_description'=>'required',
            'product_shipping_and_return'=>'required',
            'image'=>'required|file|image|max:6000',
        ]);
    }

    private function storeImage($product)
    {
    	if(request()->hasFile('image')){
    		$product->update([
    			'image' => request()->image->store('shopadmin/product','public'),
    		]);
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
