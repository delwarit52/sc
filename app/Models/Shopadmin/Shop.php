<?php

namespace App\Models\Shopadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Category;
use App\Models\Shopadmin\Product;
use App\Models\User;

class Shop extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Category()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
    
    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
