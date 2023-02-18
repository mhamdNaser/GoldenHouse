<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CleanService extends Model
{
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
