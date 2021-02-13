<?php

namespace App\Models\Shopadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shopadmin\Product;

class Productdetail extends Model
{
    use HasFactory;
    protected $guarded =[];
    
    public function Product()
    {
    	return $this->belongsTo(Product::class);
    }
    
}
