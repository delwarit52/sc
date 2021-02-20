<?php

namespace App\Models\Shopadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Shopadmindetail extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function User()
    {
        return $this->hasOne(User::class);
    }

}
