<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location\Division;
use App\Models\Location\District;

class DistrictController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $districts = District::latest()->get();
        $divisions = Division::latest()->get();
        $count = 1;
        return view('admin.location.district',compact('districts','divisions','count'));
    }

    
    public function create()
    {
    	$district = District::create($this->validateRequest());
        $this->storeImage($district);
        if($district){
    		$notification = array(
	            'messege' => 'district added Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..district not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }
        
    public function update(District $district)
    {
        $district->update($this->validateRequest());
        $this->storeUpdateImage($district);
        if ($district) {
    		$notification = array(
    			'messege' => 'district Information Updated!',
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
    public function delete(District $district)
    {
		if($district->image){
		unlink('storage/'.$district->image);
		}
        $district->delete();
        if($district){
    		$notification = array(
	            'messege' => 'district deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..district not deleted',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }


    
    //private methods
    private function validateRequest()
    {
    	return request()->validate([
            'division_id'=>'required',
            'name'=>'required',
            'code'=>'required',
            'image'=>'sometimes|file|image|max:6000',
        ]);
    }

    private function storeImage($district)
    {
    	if(request()->hasFile('image')){
    		$district->update([
    			'image' => request()->image->store('location/district','public'),
    		]);
    	}
	}
	
    private function storeUpdateImage($district)
    {
        if(request()->has('image')){
            if(request()->old_image){
                unlink('storage/'.request()->old_image);
            }
            $district->update([
                'image' => request()->image->store('location/district','public'),
            ]);
            // $resize = Image::make('storage/app/public/'.$district->image)->resize(300,300);
            // $resize->save();
        }
    }
}
