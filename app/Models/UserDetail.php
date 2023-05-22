<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function activeAddress(){
        return $this->belongsTo(UserAddress::class, 'user_address_id');
    }

    public function addresses(){
        return $this->hasMany(UserAddress::class, 'user_id');
    }


}
