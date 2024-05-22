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
        'brand_id',
        'category_id',
        'msrp',
        'fair_market_price',
        'description',
        'producing_year',
        'images',
        'avatar',
        'slug'
    ];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function wishlistUsers()
    {
        return $this->belongsToMany(User::class, 'wishlists', 'car_id', 'user_id')
                    ->withTimestamps();
    }
}
