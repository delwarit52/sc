<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location\District;

class Division extends Model
{
    use HasFactory;
    protected $fillable =['name','image','status'];
    public function District()
    {
        return $this->hasMany(District::class);
    }
}
