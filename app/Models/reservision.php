<?php

namespace App\Models;

use App\Http\Controllers\users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class reservision extends Model
{
    use HasFactory;

    // public function posts()
    // {
    //     return $this->hasMany(reservision::class);
    // }

    public function User()           : BelongsToMany { return $this->belongsToMany(User::class); }
    public function HouseService()   : BelongsToMany { return $this->belongsToMany(HouseService::class); }
    public function CleanService()   : BelongsToMany { return $this->belongsToMany(CleanService::class); }
    public function DeliveryService(): BelongsToMany { return $this->belongsToMany(DeliveryService::class); }

    protected $fillable = [
        'userId',
        'partnerId',
        'categoryId',
        'serviceId',
        'reserState',
        'startDate',
        'endDate',
        'userIdCard'
    ];
}
