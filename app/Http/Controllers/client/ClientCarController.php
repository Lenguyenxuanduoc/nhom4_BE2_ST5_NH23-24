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
        $car = Car::where('slug', $slug)->first();

        if (!$car) {
            abort(404);
        }

        $carId = $car->id;
        $performance = Performance::where('car_id', $carId)->first();
        $interior = Interior::where('car_id', $carId)->first();
        $review = Review::where('car_id', $carId)->first();
        $exterior = Exterior::where('car_id', $carId)->first();
        $weightCapacity = WeightCapacity::where('car_id', $carId)->first();
        $warranty = Warranty::where('car_id', $carId)->first();
        $safety = Safety::where('car_id', $carId)->first();

        $mt_score = 0;
        $performanceInReview = 0;
        $efficency_rangeInReview = 0;
        $tech_innovationInReview = 0;
        $valueInReview = 0;

        if ($review){
            $performanceInReview = $review->performance;
            $efficency_rangeInReview = $review->efficency_range;
            $tech_innovationInReview = $review->tech_innovation;
            $valueInReview = $review->value;
            $mt_score = ($performanceInReview + $efficency_rangeInReview + $valueInReview + $tech_innovationInReview) / 4;
            $mt_score = round($mt_score, 1);
        }

        $title = $car->name;

        $related_cars = Car::where('slug', '!=', $slug)
            ->where('brand_id', $car->brand_id)
            ->get();

        return view('client.car.detail', compact('slug', 'car', 'related_cars', 'mt_score', 'performanceInReview',
                                                'efficency_rangeInReview', 'tech_innovationInReview', 'valueInReview',
                                                'title', 'performance', 'interior', 'review', 
                                                'exterior', 'weightCapacity', 'safety', 'warranty'));
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
