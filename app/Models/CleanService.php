<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class CleanService extends Model
{
    public function reservision(): HasMany
    {
        return $this->HasMany(reservision::class);
    }
    
    use HasFactory;
    protected $fillable = [
        'serviceCategory',
        'partnerId',
        'serviceName',
        'servicePrice',
        'serviceDescription',
        'service_photo1',
    ];
}
