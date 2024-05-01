<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interior extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'front_headroom',
        'rear_headroom',
        'front_legroom',
        'rear_legroom',
        'front_shoulder_room',
        'rear_shoulder_room'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
