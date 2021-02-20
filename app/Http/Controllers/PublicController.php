<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shopadmin\Shopadmindetail;

class PublicController extends Controller
{
    public function shopRequest()
    {
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
