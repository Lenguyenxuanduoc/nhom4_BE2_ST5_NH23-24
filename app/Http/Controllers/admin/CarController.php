<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Interior;
use App\Models\Exterior;
use App\Models\Performance;
use App\Models\WeightCapacity;
use App\Models\Warranty;
use App\Models\Safety;
use App\Models\Review;

use Illuminate\Support\Facades\Paginator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    // Chuyển đến trang car list
    public function index()
    {
        $cars = Car::with('brand', 'category')->paginate(10);

        return view('admin.car.list', compact('cars'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // Chuyển đến trang add
    public function add()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.car.add', compact('brands', 'categories'));
    }

    // Xử lý chức năng add
    public function store(Request $request)
    {
        $car = new Car();
        $car->name = $request->input('name');
        $car->brand_id = $request->input('brand_id');
        $car->category_id = $request->input('category_id');
        $car->msrp = $request->input('msrp');
        $car->fair_market_price = $request->input('fair_market_price');
        $car->quantity = $request->input('quantity');
        $car->description = $request->input('description');
        $car->producing_year = $request->input('producing_year');
        $car->slug = \Str::slug($car->name . ' ' . $car->producing_year);

        $MAX_IMAGE = 5;
        $allowedExtensions = ['png', 'jpg', 'jpeg'];
        $imgJson = [];
        for ($i = 1; $i <= $MAX_IMAGE; $i++) {
            if ($request->hasFile('img' . $i)) {
                $file = $request->file('img' . $i);
                $extension = $file->getClientOriginalExtension();
                if (!in_array(strtolower($extension), $allowedExtensions)) {
                    return redirect()->back()->with('error', 'Only PNG and JPG images are allowed.');
                }
                $fileName = uniqid() . '.' . $extension;
                $file->move('images/cars/', $fileName);
                $imgJson[] = $fileName;
            }
        }

        if (!empty($imgJson)) {
            $car->images = json_encode($imgJson);
        }

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            if (!in_array(strtolower($extension), $allowedExtensions)) {
                return redirect()->back()->with('error', 'Only PNG and JPG images are allowed.');
            }
            $fileName = uniqid() . '.' . $extension;
            $file->move('images/cars/', $fileName);
            $car->avatar = $fileName;
        }

        // dd($car);
        try {
            $car->save();
            return redirect()->route('cars.index')->with('success', 'The car has been added successfully.');
        } catch (QueryException $e) {
            return redirect()->route('cars.index')->with('error', 'Failed to add car. Please try again.');
        }
    }

    // Chuyển đến trang edit
    public function edit($id)
    {
        $car = Car::with('brand', 'category')->find($id);
        if (!$car) {
            abort(404);
        }

        $brands = Brand::all();
        $categories = Category::all();

        return view('admin.car.edit', compact('car', 'brands', 'categories'));
    }

    // Xử lý chức năng update
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->name = $request->input('name');
        $car->brand_id = $request->input('brand_id');
        $car->category_id = $request->input('category_id');
        $car->msrp = $request->input('msrp');
        $car->fair_market_price = $request->input('fair_market_price');
        $car->quantity = $request->input('quantity');
        $car->description = $request->input('description');
        $car->producing_year = $request->input('producing_year');
        $car->slug = \Str::slug($car->title);

        $allowedExtensions = ['png', 'jpg', 'jpeg'];
        $MAX_IMAGE = 5;
        $images = json_decode($car->images);
        for ($i = 1; $i <= $MAX_IMAGE; $i++) {
            if ($request->hasFile('img' . $i)) {
                $oldImg = 'images/cars/' . $images[$i - 1];
                if (File::exists($oldImg)) {
                    File::delete($oldImg);
                }

                $file = $request->file('img' . $i);
                $extension = $file->getClientOriginalExtension();
                if (!in_array(strtolower($extension), $allowedExtensions)) {
                    return redirect()->back()->with('error', 'Only PNG and JPG images are allowed.');
                }
                $fileName = uniqid() . '.' . $extension;
                $file->move('images/cars/', $fileName);
                $images[$i - 1] = $fileName;
            }
        }
        $car->images = $images;

        if ($request->hasFile('avatar')) {
            $oldImg = 'images/cars/' . $car->avatar;
            if (File::exists($oldImg)) {
                File::delete($oldImg);
            }
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            if (!in_array(strtolower($extension), $allowedExtensions)) {
                return redirect()->back()->with('error', 'Only PNG and JPG images are allowed.');
            }
            $fileName = uniqid() . '.' . $extension;
            $file->move('images/cars/', $fileName);
            $car->avatar = $fileName;
        }
        // dd($car);

        try {
            $car->save();
            return redirect()->route('cars.index')->with('success', 'The car has been edited successfully.');
        } catch (QueryException $e) {
            return redirect()->route('cars.index')->with('error', 'Failed to edit car. Please try again.');
        }
    }

    // Xử lý chức năng delete
    public function delete($id)
    {
        try {
            $car = Car::find($id);
            if (!$car) {
                return redirect()->back()->with('error', 'Car not found.');
            }

            // Xóa các bảng có khóa ngoại là car id trước khi xóa car
            $interior = Interior::where('car_id', $id)->delete();
            $exterior = Exterior::where('car_id', $id)->delete();
            $performance = Performance::where('car_id', $id)->delete();
            $weight_capacity = WeightCapacity::where('car_id', $id)->delete();
            $warranty = Warranty::where('car_id', $id)->delete();
            $safety = Safety::where('car_id', $id)->delete();
            $review = Review::where('car_id', $id)->delete();

            $car->delete();

            $images = json_decode($car->images);
            $avatar = 'images/cars/' . $car->avatar;

            if ($images) {
                foreach ($images as $image) {
                    $oldImg = 'images/cars/' . $image;
                    if (File::exists($oldImg)) {
                        File::delete($oldImg);
                    }
                }
            }
    
            if (File::exists($avatar)) {
                File::delete($avatar);
            }
    
            return redirect()->back()->with('success', 'The car has been deleted successfully.');
        } catch (QueryException $e) {
            dd($e);
            return redirect()->back()->with('error', 'Failed to delete car. Please try again.');
        }
    }
}
