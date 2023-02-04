<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comment1(){
        return $this->belongsTo(post::class);
    }
    
    protected $fillable = [
        'users_id',
        'posts_id',
        'comment_text'
    ];
}
