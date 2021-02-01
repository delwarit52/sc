<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location\Division;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::latest()->get();
        $count = 1;
        return view('admin.location.division',compact('divisions','count'));
    }

    public function create()
    {
    	$division = Division::create($this->validateRequest());
        $this->storeImage($division);
        if($division){
    		$notification = array(
	            'messege' => 'Division added Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Division not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    public function update(Division $division)
    {
        $division->update($this->validateRequest());
        $this->storeUpdateImage($division);
        if ($division) {
    		$notification = array(
    			'messege' => 'Division Information Updated!',
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
    public function delete(Division $division)
    {
		if($division->image){
		unlink('storage/'.$division->image);
		}
        $division->delete();
        if($division){
    		$notification = array(
	            'messege' => 'Division deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Division not deleted',
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
            'image'=>'sometimes|file|image|max:6000',
        ]);
    }

    private function storeImage($division)
    {
    	if(request()->hasFile('image')){
    		$division->update([
    			'image' => request()->image->store('location/division','public'),
    		]);
    	}
	}
	
	
    private function storeUpdateImage($division)
    {
        if(request()->has('image')){
            if(request()->old_image){
                unlink('storage/'.request()->old_image);
            }
            $division->update([
                'image' => request()->image->store('location/division','public'),
            ]);

            // $resize = Image::make('storage/app/public/'.$division->image)->resize(300,300);
            // $resize->save();
        }
    }


}
