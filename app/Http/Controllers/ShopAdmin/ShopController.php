<?php

namespace App\Http\Controllers\ShopAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Shopadmin\Shop;

class ShopController extends Controller
{
    public function shopDashboard()
    {
        return view('shopadmin.index');
    }
    public function shopIndex()
    {
        $shops = Shop::latest()->get();
        $count = 1;
        return view('shopadmin.shop.shop_index',compact('shops','count'));
    }
    
    public function shopCreate()
    {
        $categories = Category::all();
        return view('shopadmin.shop.shop_create',compact('categories'));
    }


    public function shopStore(Request $request)
    {
    	Request()->validate([
    		'category' => '',
        ]);
        
        if($request->hasFile('slider_image')){
            foreach($request->file('slider_image') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path('file'),$name);
                $data[] = $name;
            }
        }

        $shop = Shop::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'logo' => $request->logo,
            'cover_image' => $request->cover_image,
            'offer_image' => $request->offer_image,
            'floor' => $request->floor,
            'shop_no' => $request->shop_no,
            'slider_image' =>json_encode($data),
        ]);
        $this->storeImage($shop);
        $shop->Category()->attach($request->category);

        if ($shop) {
            $notification = array(
                'message' => 'Shop Create Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'something went wrong!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
            
    }

    public function shopEdit(Shop $shop)
    {
        $categories = Category::all();
        return view('shopadmin.shop.shop_edit',compact('categories','shop'));
    }

    public function shopUpdate(Request $request,Shop $shop)
    {
        if($shop->slider_image){
            foreach(json_decode($shop->slider_image) as $slider_image){
                unlink('file/'.$slider_image);
            }
        }

        if($request->hasFile('slider_image')){
            foreach($request->file('slider_image') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path('file'),$name);
                $data[] = $name;
            }
        }
        
        $shop->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'logo' => $request->logo,
            'cover_image' =>$request->cover_image,
            'offer_image' => $request->offer_image,
            'floor' => $request->floor,
            'shop_no' => $request->shop_no,
            'slider_image' =>json_encode($data),
        ]);

        $this->updateImage($shop);

        if ($shop) {
            $notification = array(
                'message' => 'Shop Create Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'something went wrong!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }

    public function delete(Shop $shop)
    {
		if($shop->logo){
		unlink('storage/'.$shop->logo);
		}
		if($shop->cover_image){
		unlink('storage/'.$shop->cover_image);
		}
		if($shop->offer_image){
		unlink('storage/'.$shop->offer_image);
		}

        if($shop->slider_image){
            foreach(json_decode($shop->slider_image) as $slider_image){
                unlink('file/'.$slider_image);
            }
        }
        $shop->delete();
        if($shop){
    		$notification = array(
	            'messege' => 'shop deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..shop not deleted',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    
    // private function validateRequest()
    // {
    //     return request()->validate([
    //         'shopmall_id' => 'required',
    //         'user_id' => 'required',
    //         'name' => 'required',
    //         'phone' => 'required',
    //         'logo' => 'required',
    //         'cover_image' => 'required',
    //         'offer_image' => 'required',
    //         'floor' => 'required',
    //         'shop_no' => 'required',
    //         'slider_image' => 'required',
    //     ]);
    // }


    private function storeImage($shop)
    {
    	if (request()->has('logo')) {
            // if(request()->old_logo){
            //     unlink('storage/'.request()->old_logo);
            // }
    		$shop->update([
    			'logo' => request()->logo->store('shopadmin/shop/logo','public'),
    		]);
    	}
    	if (request()->has('cover_image')) {
            // if(request()->old_cover_image){
            //     unlink('storage/'.request()->old_cover_image);
            // }
    		$shop->update([
    			'cover_image' => request()->cover_image->store('shopadmin/shop/cover_image','public'),
    		]);
    	}
    	if (request()->has('offer_image')) {
            // if(request()->old_offer_image){
            //     unlink('storage/'.request()->old_offer_image);
            // }
    		$shop->update([
    			'offer_image' => request()->offer_image->store('shopadmin/shop/offer_image','public'),
    		]);
        }
        
    }
    private function updateImage($shop)
    {
        if(request()->has('logo')){
            if(request()->old_logo){
                unlink('storage/'.request()->old_logo);
            }
            $shop->update([
                'logo' => request()->logo->store('shopadmin/shop/logo','public'),
            ]);
        }

        if(request()->has('cover_image')){
            if(request()->old_cover_image){
                unlink('storage/'.request()->old_cover_image);
            }
            $shop->update([
                'cover_image' => request()->cover_image->store('shopadmin/shop/cover_image','public'),
            ]);
        }
        
        if(request()->has('offer_image')){
            if(request()->old_offer_image){
                unlink('storage/'.request()->old_offer_image);
            }
            $shop->update([
                'offer_image' => request()->offer_image->store('shopadmin/shop/offer_image','public'),
            ]);
        }
        
    }
}
