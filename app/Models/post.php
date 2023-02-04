<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comment1(){
        return $this->hasMany(comment::class);
    }
    
    protected $fillable = [
        'users_id',
        'post_text',
    ];
}
