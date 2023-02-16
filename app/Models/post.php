<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
    protected $fillable = [
        'users_id',
        'post_text',
    ];
}
