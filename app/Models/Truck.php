<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }




    public function scopeSearch($query, $term){
        $term = "%$term%";
        $query->where(function ($query) use ($term){
            $query->where('name','like',$term)
                ->orWhere('description','like',$term)
                ->orWhere('plate_number','like',$term)
                ->orWhere('status','like',$term)
                ->orWhere('created_at','like',$term);
        });
    }
}
