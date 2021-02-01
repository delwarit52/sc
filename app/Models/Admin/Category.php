<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Subcategory;

class Category extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function Subcategory()
    {
    	return $this->hasMany(Subcategory::class);
    }
}
