<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;
use App\Models\Category;
use Illuminate\Support\Facades\Paginator;

class CarController extends Controller
{
    public function __construct()
    {
    }

    // Chuyển đến trang car list
    public function index()
    {
        $cars = Car::with('manufacturer', 'category')->paginate(10);

        return view('admin.car.list', compact('cars'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // Chuyển đến trang add car
    public function add()
    {
        $manufacturers = Manufacturer::all();
        $categories = Category::all();
        return view('admin.car.add', compact('manufacturers', 'categories'));
    }

    // Xử lý chức năng thêm car
    public function store(Request $request)
    {
        //dd($request);
        $validateData = $request->validate([
            'name' => 'required|string|max:100',
            'manufacturer_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'producing_year' => 'required|date_format:Y',
            'images' => 'required|array|min:1',
            'images.*' => 'required|string',
            'avatar' => 'required|string',
        ]);

        $slug = \Str::slug($validateData['name'] . ' ' . $validateData['producing_year']);
        $validateData['slug'] = $slug;
        $validateData['images'] = json_encode($validateData['images']);
        // dd($validateData);

        $newCar = Car::create($validateData);

        return redirect(route('cars.index'));
    }
}
