<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseService extends Model
{
    use HasFactory;
    protected $fillable = [
        'serviceCategory',
        'partnerId',
        'serviceName',
        'serviceDescription',
        'price_bed',
        'romeNumber',
        'bedNumber',
        'service_photo1',
        'service_photo2',
        'service_photo3',
    ];
}
