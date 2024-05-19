<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Safety extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'IIHS_best_pick',
        'IIHS_front_small_overlap',
        'IIHS_rear_crash',
        'IIHS_rating_front_driver',
        'IIHS_rating_front_side',
        'IIHS_rating_rear_side',
        'IIHS_front_moderate_overlap',
        'IIHS_overall_side_crash',
        'IIHS_roof_strength',
        'NHTSA_rating_front_passenger',
        'NHTSA_rating_overall',
        'NHTSA_rating_rollover'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
