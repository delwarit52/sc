<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Subcategory;
use App\Models\Shopadmin\Shop;

class Category extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function Subcategory()
    {
    	return $this->hasMany(Subcategory::class);
    }

    public function Shop()
    {
        return $this->belongsToMany(Shop::class)->withTimestamps();
    }
}
