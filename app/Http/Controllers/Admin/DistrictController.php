<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location\Division;
use App\Models\Location\District;

class DistrictController extends Controller
{
    public function index()
    {
        $divisions = Division::latest()->get();
        $districts = District::latest()->get();
        $count = 1;
        return view('admin.location.district',compact('divisions','districts','count'));
    }

    public function create()
    {
    	$district = District::create($this->validateRequest());
        $this->storeImage($district);
        if($district){
    		$notification = array(
	            'messege' => 'District added Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..District not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    public function update(District $district)
    {
        
    }

    //private methods
    private function validateRequest()
    {
    	return request()->validate([
            'name'=>'required',
            'division_id'=>'required',
            'code'=>'required',
            'image'=>'sometimes|file|image|max:6000',
        ]);
    }

    private function storeImage($district)
    {
    	if(request()->hasFile('image')){
    		$district->update([
    			'image' => request()->image->store('district','public'),
    		]);
    	}
    }

    public function delete(District $district)
    {
        $district->delete();
        if($district){
    		$notification = array(
	            'messege' => 'District deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..District not deleted',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

}
