<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userDetail(){
        return $this->hasOne(UserDetail::class);
    }

    public function addresses(){
        return $this->hasMany(UserAddress::class, 'user_id');
    }

    public function orders(){
        return $this->hasMany(Order::class, 'user_id', 'id');
    }



    public function truck(){
        return $this->hasOne(Truck::class);
    }

    public function scopeSearch($query, $term){
        $term = "%$term%";

        $query->where(function ($query) use ($term){
            $query->where('name', 'like', $term)
                ->orWhere('email', 'like', $term)
                ->orWhereHas('userDetail', function($query) use ($term){
                    $query->where('address', 'like', $term)
                           ->orWhere('firstname', 'like', $term)
                           ->orWhere('lastname', 'like', $term)
                           ->orWhere('contact_number', 'like', $term);
                });

        });
    }



    public function getNicknameAttribute(){
        $nameParts = explode(' ', $this->name);
        $initials = '';
        foreach ($nameParts as $namePart) {
            $initials .= strtoupper(substr($namePart, 0, 1));
        }

        return substr($initials, 0, count($nameParts)-1).". ".array_pop($nameParts);
    }
}
