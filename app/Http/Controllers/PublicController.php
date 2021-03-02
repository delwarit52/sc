<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shopadmin\Shopadmindetail;
use App\Models\Shopadmin\Shop;
use App\Models\Shopadmin\Product;
use App\Models\Admin\Category;
use Auth;

class PublicController extends Controller
{
    
    public function index()
    {
        return view('home');
    }

    public function mall()
    {
        $shops = Shop::where('enterpreneur_type','Female')->latest()->limit(16)->get();
        return view('malls',compact('shops'));
    }

    public function shop()
    {
        return view('shops');
    }

    public function womenEnterpreneur()
    {
        $shops = Shop::where('enterpreneur_type','Female')->paginate(24);
        return view('women_enterpreneurs',compact('shops'));
    }
    // single shop
    public function singleShop($slug)
    {
        $shop = Shop::where('slug',$slug)->first();
        $categories = Category::all();
        return view('single_shop',compact('shop','categories'));
    }
    // public product
    public function singleProduct($slug)
    {
        $product = Product::where('slug',$slug)->first();
        return view('single_product',compact('product'));
    } 


    public function shopRequest()
    {
        if(Auth::user()->user_type == 1 || Auth::user()->user_type ==2 ){
            return redirect()->back();
        }
        return view('shop_request');
    }
    
    public function detailStore(Request $request)
    {
    	$shopadmindetail = Shopadmindetail::create($this->validateRequest());
        $this->storeImage($shopadmindetail);
       return redirect()->back();
    }

    //private methods

    
    //private methods
    private function validateRequest()
    {
    	return request()->validate([
            'user_id'=>'required',
            'fullname'=>'required',
            'nid'=>'required',
            'email'=>'',
            'profession'=>'required',
            'birthdate'=>'required',
            'gender'=>'required',
            'maritial_status'=>'',
            'address'=>'required',
            'image'=>'',
        ]);
    }

    private function storeImage($shopadmindetail)
    {
    	if(request()->hasFile('image')){
    		$shopadmindetail->update([
    			'image' => request()->image->store('shopadmin/profile','public'),
    		]);
    	}
	}
	
    // private function storeUpdateImage($subcategory)
    // {
    //     if(request()->has('image')){
    //         if(request()->old_image){
    //             unlink('storage/'.request()->old_image);
    //         }
    //         $subcategory->update([
    //             'image' => request()->image->store('Shopadmin/profile','public'),
    //         ]);
    //         // $resize = Image::make('storage/app/public/'.$subcategory->image)->resize(300,300);
    //         // $resize->save();
    //     }
    // }


}
