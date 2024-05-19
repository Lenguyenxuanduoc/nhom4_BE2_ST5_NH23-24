<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'free_maintenance_miles',
        'full_warranty_miles',
        'powertrain_warranty_miles',
        'roadside_warranty_miles',
        'corrosion_warranty_miles',
        'free_maintenance_months',
        'full_warranty_months',
        'powertrain_warranty_months',
        'roadside_warranty_months',
        'corrosion_warranty_months'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
