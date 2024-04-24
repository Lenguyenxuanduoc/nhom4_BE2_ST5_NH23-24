<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacturer;
use App\Models\Car;
use DB;

class BrandController extends Controller
{
    public function index(){
        $brands = DB::select('SELECT * FROM manufacturers ORDER BY name');
        $title = 'Exotic Cars | Brands';
  
        $featured_cars = Car::select('cars.id', 'cars.name','cars.price', 'cars.avatar', 'cars.slug', 'cars.producing_year', 
                DB::raw('AVG(reviews.performance) as performance_avg'), 
                DB::raw('AVG(reviews.value) as value_avg'),
                DB::raw('AVG(reviews.tech_innovation) as innovation_avg'),
                DB::raw('AVG(reviews.efficency_range) as efficency_range_avg'))
        ->leftJoin('reviews', 'cars.id', '=', 'reviews.car_id')
        ->groupBy('cars.id', 'cars.name', 'cars.price', 'cars.avatar', 'cars.slug', 'cars.producing_year')
        ->orderByRaw('(AVG(reviews.performance) + AVG(reviews.value) + AVG(reviews.tech_innovation) + AVG(reviews.efficency_range)) DESC')
        ->take(6)
        ->get(); 

        return view('client.brand.brands', compact('brands', 'featured_cars', 'title'));
    }


    public function getBrand($slug){
        $brand_detail = Manufacturer::where('slug', $slug)->first();

        if (!$brand_detail){
            abort(404);
        }

        $cars = Car::select('cars.id', 'cars.name','cars.price', 'cars.avatar', 'cars.slug', 'cars.producing_year',
                    DB::raw('AVG(reviews.performance) as performance_avg'), 
                    DB::raw('AVG(reviews.value) as value_avg'),
                    DB::raw('AVG(reviews.tech_innovation) as innovation_avg'),
                    DB::raw('AVG(reviews.efficency_range) as efficency_range_avg'))
                ->leftJoin('reviews', 'cars.id', '=', 'reviews.car_id')
                ->where('cars.manufacturer_id', $brand_detail->id)
                ->groupBy('cars.id', 'cars.name', 'cars.price', 'cars.avatar', 'cars.slug', 'cars.producing_year')
                ->get();


        $title = $brand_detail->name;

        return view('client.brand.detail',compact('brand_detail', 'cars', 'title'));
    }
}
