<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class HouseService extends Model
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
        'serviceDescription',
        'price_bed',
        'romeNumber',
        'bedNumber',
        'allbed',
        'service_photo1',
        'service_photo2',
        'service_photo3',
    ];
}
