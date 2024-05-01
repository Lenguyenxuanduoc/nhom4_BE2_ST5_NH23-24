<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightCapacity extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'fuel_capacity',
        'cargo_capacity',
        'curb_weight'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
