<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "manufacturer_id",
        "category_id",
        "category_id",
        "price",
        "description",
        "quantity",
        "producing_year",
        "images",
        "avatar",
    ];
}
