<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'category',
        'price_per_day',
        'total_stock',
        'photo',
    ];

    protected $casts = [
        'price_per_day' => 'decimal:2',
    ];

    public function reservationItems()
    {
        return $this->hasMany(ReservationItem::class, 'package_id');
    }
}
