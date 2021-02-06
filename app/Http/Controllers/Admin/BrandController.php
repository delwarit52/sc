<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::latest()->get();
        $count = 1;
        return view('admin.brand.brand', compact('brands', 'count'));
    }


    public function create()
    {
        $brand = Brand::create($this->validateRequest());
        $this->storeImage($brand);
        if ($brand) {
            $notification = array(
                'messege' => 'Brand added Successful',
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Ups..Brand not Added',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }
    }


    public function update(Brand $brand)
    {
        $brand->update($this->validateRequest());
        $this->storeUpdateImage($brand);
        if ($brand) {
            $notification = array(
                'messege' => 'Brand Information Updated!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Something Went Wrong!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function delete(Brand $brand)
    {
        if ($brand->image) {
            unlink('storage/' . $brand->image);
        }
        $brand->delete();
        if ($brand) {
            $notification = array(
                'messege' => 'Brand deleted Successful',
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Ups..Brand not deleted',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }
    }



    //private methods
    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'image' => 'sometimes|file|image|max:6000',
        ]);
    }

    private function storeImage($brand)
    {
        if (request()->hasFile('image')) {
            $brand->update([
                'image' => request()->image->store('admin/brand', 'public'),
            ]);
        }
    }


    private function storeUpdateImage($brand)
    {
        if (request()->has('image')) {
            if (request()->old_image) {
                unlink('storage/' . request()->old_image);
            }
            $brand->update([
                'image' => request()->image->store('admin/brand', 'public'),
            ]);

            // $resize = Image::make('storage/app/public/'.$category->image)->resize(300,300);
            // $resize->save();
        }
    }
}
