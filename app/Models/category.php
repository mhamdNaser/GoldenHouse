<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public function reservision(): HasMany
    {
        return $this->HasMany(reservision::class);
    }

    protected $fillable = [
        'Category_Name',
        'Category_Image',
        'Category_Description',
    ];
}
