<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'performance',
        'efficency_range',
        'tech_innovation',
        'torque',
        'value',
        'comment'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
