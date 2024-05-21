<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Car;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Performance;
use App\Models\Exterior;
use App\Models\Interior;
use App\Models\Review;
use App\Models\WeightCapacity;
use App\Models\Safety;
use App\Models\Warranty;

class ClientCarController extends Controller
{
    public function getCar($slug)
    {
        $car_detail = Car::select('cars.id', 'cars.name', 'cars.msrp', 'cars.fair_market_price', 'cars.avatar', 'cars.slug', 'cars.producing_year', 'cars.images', 'cars.brand_id', 'cars.category_id', 'performances.engine', 'performances.horsepower', 'performances.trim', 'performances.torque', 'performances.cylinders', 'performances.standard_mpg', 'performances.transmission', 'performances.transmission_type', 'interiors.front_headroom', 'interiors.rear_headroom', 'interiors.front_legroom', 'interiors.rear_legroom', 'interiors.front_shoulder_room', 'interiors.rear_shoulder_room', 'exteriors.length', 'exteriors.width', 'exteriors.height', 'exteriors.wheelbase', 'weights_capacities.fuel_capacity', 'weights_capacities.cargo_capacity', 'weights_capacities.curb_weight')
            ->leftJoin('performances', 'cars.id', '=', 'performances.car_id')
            ->leftJoin('interiors', 'cars.id', '=', 'interiors.car_id')
            ->leftJoin('exteriors', 'cars.id', '=', 'exteriors.car_id')
            ->leftJoin('weights_capacities', 'cars.id', '=', 'weights_capacities.car_id')
            ->where('cars.slug', $slug)
            ->first();

        if (!$car_detail) {
            abort(404);
        }

        $title = $car_detail->name;

        $related_cars = Car::where('slug', '!=', $slug)
            ->where('brand_id', $car_detail->brand_id)
            ->get();

        return view('client.car.detail', compact('slug', 'car_detail', 'related_cars', 'title'));
    }

    public function getCarsByBrandAndCategory(Request $request)
    {
        $brandId = $request->input('brandID');
        $categoryId = $request->input('categoryID');
        $cars = Car::where('brand_id', $brandId)->where('category_id', $categoryId)->get();
        return response()->json($cars);
    }

    public function compare()
    {
        $allBrands = Brand::get();

        $allCategories = Category::get();

        $title = 'Exotic Cars | Comparison';

        return view('client.car.compare', compact('title', 'allBrands', 'allCategories'));
    }

    public function getCarByCarID(Request $request)
    {
        try {
            $carId = $request->input('id');
            $car = Car::findOrFail($carId);

            if ($car) {
                $performance = Performance::where('car_id', $carId)->first();
                $interior = Interior::where('car_id', $carId)->first();
                $review = Review::where('car_id', $carId)->first();
                $exterior = Exterior::where('car_id', $carId)->first();
                $weightCapacity = WeightCapacity::where('car_id', $carId)->first();
                $warranty = Warranty::where('car_id', $carId)->first();
                $safety = Safety::where('car_id', $carId)->first();
            }

            return response()->json([
                'car' => $car,
                'performance' => $performance,
                'interior' => $interior,
                'review' => $review,
                'exterior' => $exterior,
                'weightCapacity' => $weightCapacity,
                'warranty' => $warranty,
                'safety' => $safety,
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Car not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }
}
