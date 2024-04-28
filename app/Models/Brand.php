<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "images",
        "banner",
        "founder_year",
        "founder",
        "description",
    ];
}
