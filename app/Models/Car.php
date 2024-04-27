<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Manufacturer;
use App\Models\Category;

class Car extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'manufacturer_id',
        'category_id',
        'price',
        'description',
        'producing_year',
        'images',
        'avatar',
        'slug'
    ];

    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
