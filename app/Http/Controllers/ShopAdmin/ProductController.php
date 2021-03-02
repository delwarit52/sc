<?php

namespace App\Http\Controllers\ShopAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shopadmin\Shop;
use App\Models\Admin\Category;
use App\Models\Admin\Brand;
use App\Models\Admin\Subcategory;
use App\Models\Shopadmin\Product;
use App\Models\Shopadmin\Productdetail;
use Session;
use Auth;

class ProductController extends Controller
{
    
    public function addindex()
    {
        $shops = Shop::where('user_id',Auth::id())->get();
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        $subcategories = Subcategory::latest()->get();
        $count = 1;
        return view('shopadmin.product.addproduct',compact('categories','shops','brands','subcategories','count'));
    }
    
    public function productEdit($id)
    {
        $product = Product::where('id', $id)->first();
        $shops = Shop::latest()->get();
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        $subcategories = Subcategory::latest()->get();
        $count = 1;
        return view('shopadmin.product.product_edit',compact('product','shops','categories','brands','subcategories','count'));
    }

    public function productUpdate(Product $product)
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
        return view('shopadmin.product.productlist',
            ['products' => $products]
        );
    }

    public function productlist()
    {
        $products = Product::latest()->get();
        $shoplists = Shop::where('user_id',Auth::id())->get();
        $productdetails = Productdetail::latest()->get();
        $count= 1;
        return view('shopadmin.product.productlist',compact('products','productdetails','count','shoplists'));
    }

    public function createproduct(Request $request)
    {
        // return "Hello Create";
        // $this->validateRequest();
        
        $product = Product::create($this->validateRequest());
        $this->storeImage($product);
        if($product){
    		$notification = array(
	            'messege' => 'Product added Successful',
	            'alert-type' => 'success',
	        );
            Session::put('product_id', $product->id);
            return redirect('product/productdetail');
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


    public function shopProduct($shop)
    {
        $shoplists = Shop::where('user_id',Auth::id())->get();
        $products = Product::where('shop_id',$shop)->get(); 
        $count = 1;
        return view('shopadmin.product.shopproduct',compact('products','count','shoplists'));
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
            'product_price_discount'=>'max:2',
            'product_small_description'=>'required|max:100',
            'product_full_description'=>'required',
            'product_shipping_and_return'=>'required',
            'code' =>'required',
            'image'=>'sometimes|file|image|max:6000',
            
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
            $subcategory->update([
                'image' => request()->image->store('shopadmin/product','public'),
            ]);
            // $resize = Image::make('storage/app/public/'.$subcategory->image)->resize(255,180);
            // $resize->save();
        }
    }



    // public function fetchDist($id){
    //     $category = Category::where('division_id',$id)->get();
    //     return json_encode($category);
    // }

    // public function fetchupzila($id){
    //     $subcategory = Subcategory::where('district_id',$id)->get();
    //     return json_encode($subcategory);
    // }
    
}
