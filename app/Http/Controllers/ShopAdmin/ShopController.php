<?php

namespace App\Http\Controllers\ShopAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Shopadmin\Shop;

class ShopController extends Controller
{
    public function shop()
    {
        return view('shopadmin.index');
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

    
    private function validateRequest()
    {
        return request()->validate([
            'shopmall_id' => 'required',
            'user_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'logo' => 'required',
            'cover_image' => 'required',
            'offer_image' => 'required',
            'floor' => 'required',
            'shop_no' => '',
            'slider_image' => 'required',
        ]);
    }
    private function storeImage($shop)
    {
    	if (request()->has('logo')) {
    		$shop->update([
    			'logo' => request()->logo->store('shopadmin/shop','public'),
    		]);
    	}
    	if (request()->has('cover_image')) {
    		$shop->update([
    			'cover_image' => request()->cover_image->store('shopadmin/shop','public'),
    		]);
    	}
    	if (request()->has('offer_image')) {
    		$shop->update([
    			'offer_image' => request()->offer_image->store('shopadmin/shop','public'),
    		]);
        }
        
    }
}
