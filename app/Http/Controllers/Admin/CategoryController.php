<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use Image;


class CategoryController extends Controller
{    
	public function __construct()
    {
        $this->middleware('auth');
	}
	
    public function index()
    {
        $categories = Category::latest()->get();
        $count = 1;
        return view('admin.category.category',compact('categories','count'));
	}
	
    
    public function create()
    {
    	$category = Category::create($this->validateRequest());
        $this->storeImage($category);
        if($category){
    		$notification = array(
	            'messege' => 'Category added Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Category not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    
    public function update(Category $category)
    {
        $category->update($this->validateRequest());
        $this->storeUpdateImage($category);
        if ($category) {
    		$notification = array(
    			'messege' => 'Category Information Updated!',
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
    public function delete(Category $category)
    {
		if($category->image){
		unlink('storage/'.$category->image);
		}
        $category->delete();
        if($category){
    		$notification = array(
	            'messege' => 'Category deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..category not deleted',
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

    private function storeImage($category)
    {
    	if(request()->hasFile('image')){
    		$category->update([
    			'image' => request()->image->store('admin/category','public'),
    		]);
            $resize = Image::make('storage/'.$category->image)->resize(300,300);
            $resize->save();
    	}
	}
	
	
    private function storeUpdateImage($category)
    {
        if(request()->has('image')){
            if(request()->old_image){
                unlink('storage/'.request()->old_image);
            }
            $category->update([
                'image' => request()->image->store('admin/category','public'),
            ]);

            $resize = Image::make('storage/'.$category->image)->resize(300,300);
            $resize->save();
        }
    }

}
