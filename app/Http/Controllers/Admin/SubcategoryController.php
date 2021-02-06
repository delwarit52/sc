<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Subcategory;
use App\Models\Admin\Category;

class SubcategoryController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $subcategories = Subcategory::latest()->get();
        $categories = Category::latest()->get();
        $count = 1;
        return view('admin.category.subcategory',compact('subcategories','categories','count'));
    }

    
    public function create()
    {
    	$subcategory = Subcategory::create($this->validateRequest());
        $this->storeImage($subcategory);
        if($subcategory){
    		$notification = array(
	            'messege' => 'Subcategory added Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Subcategory not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }
        
    public function update(Subcategory $subcategory)
    {
        $subcategory->update($this->validateRequest());
        $this->storeUpdateImage($subcategory);
        if ($subcategory) {
    		$notification = array(
    			'messege' => 'Subcategory Information Updated!',
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
    public function delete(Subcategory $subcategory)
    {
		if($subcategory->image){
		unlink('storage/'.$subcategory->image);
		}
        $subcategory->delete();
        if($subcategory){
    		$notification = array(
	            'messege' => 'Subcategory deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Subcategory not deleted',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }


    
    //private methods
    private function validateRequest()
    {
    	return request()->validate([
            'category_id'=>'required',
            'name'=>'required',
            'image'=>'sometimes|file|image|max:6000',
        ]);
    }

    private function storeImage($subcategory)
    {
    	if(request()->hasFile('image')){
    		$subcategory->update([
    			'image' => request()->image->store('admin/subcategory','public'),
    		]);
    	}
	}
	
    private function storeUpdateImage($subcategory)
    {
        if(request()->has('image')){
            if(request()->old_image){
                unlink('storage/'.request()->old_image);
            }
            $subcategory->update([
                'image' => request()->image->store('admin/subcategory','public'),
            ]);
            // $resize = Image::make('storage/app/public/'.$subcategory->image)->resize(300,300);
            // $resize->save();
        }
    }
}
