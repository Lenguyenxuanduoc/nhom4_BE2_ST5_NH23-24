<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'engine',
        'horsepower',
        'trim',
        'torque',
        'cylinders',
        'standard_mpg',
        'transmission',
        'transmission_type'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
