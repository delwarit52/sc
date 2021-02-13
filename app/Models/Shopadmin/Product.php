<?php

namespace App\Models\Shopadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shopadmin\Productdetail;

class Product extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function ProductMoreDetails()
    {
        return $this->hasMany(ProductMoreDetails::class, 'product_id', 'id');
    }
    
    public function Productdetail()
    {
    	return $this->hasMany(Productdetail::class,'product_id', 'id');
    }

    // public function Subcategory()
    // {
    // 	return $this->hasMany(Subcategory::class);
    // }

    // public function Subcategory()
    // {
    // 	return $this->hasMany(Subcategory::class);
    // }

    // public function Subcategory()
    // {
    // 	return $this->hasMany(Subcategory::class);
    // }
}
