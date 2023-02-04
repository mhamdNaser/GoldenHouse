<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // public function address (){ return $this->hasMany(address::class); }
    // public function comment (){ return $this->hasMany(comment::class); }
    public function contact (){ return $this->hasMany(contact::class); }
    // public function pio     (){ return $this->hasMany(pio::class); }
    // public function post    (){ return $this->hasMany(post::class); }

    protected $fillable = [
        'userttype',
        'user_first_name',
        'user_last_name',
        'email',
        'photo',
        'user_phone',
        'gender',
        'Date_of_Birth',
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
}
