<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;
use App\Models\Category;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Database\QueryException;

class CarController extends Controller
{
    // Chuyển đến trang car list
    public function index()
    {
        $cars = Car::with('manufacturer', 'category')->paginate(10);

        return view('admin.car.list', compact('cars'))->with('i', (request()->input('page', 1) - 1) * 10);
    }


    // Chuyển đến trang add
    public function add()
    {
        $manufacturers = Manufacturer::all();
        $categories = Category::all();
        return view('admin.car.add', compact('manufacturers', 'categories'));
    }


    // Xử lý chức năng add
    public function store(Request $request)
    {
        $car = new Car();
        $car->name = $request->input('name');
        $car->manufacturer_id = $request->input('manufacturer_id');
        $car->category_id = $request->input('category_id');
        $car->price = $request->input('price');
        $car->quantity = $request->input('quantity');
        $car->description = $request->input('description');
        $car->producing_year = $request->input('producing_year');

        // Xử lý các tệp hình ảnh
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                // Lấy phần mở rộng của tệp hình ảnh
                $extension = $image->getClientOriginalExtension();
                // Tạo tên tệp mới sử dụng thời gian và một chuỗi duy nhất
                $fileName = uniqid() . '.' . $extension;
                // Di chuyển tệp hình ảnh vào thư mục lưu trữ và đổi tên
                $image->move('images/cars/', $fileName);
                $images[] = $fileName;
            }
            $car->images = json_encode($images);
        }

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/cars/', $fileName);
            $car->avatar = $fileName;
        }

        $car->slug = \Str::slug($car->name . ' ' . $car->producing_year);
        try {
            $car->save();
            return redirect()->back()->with('success', 'The car has been added successfully.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Failed to add car. Please try again.');
        }
    }


    // Chuyển đến trang edit
    public function edit($id)
    {
        $car = Car::with('manufacturer', 'category')->find($id);
        if (!$car) {
            abort(404);
        }

        $manufacturers = Manufacturer::all();
        $categories = Category::all();

        return view('admin.car.edit', compact('car', 'manufacturers', 'categories'));
    }


    // Xử lý chức năng update 
    public function update(Request $request, $id){
        $car = Car::find($id);
        $car->name = $request->input('name');
        $car->manufacturer_id = $request->input('manufacturer_id');
        $car->category_id = $request->input('category_id');
        $car->price = $request->input('price');
        $car->quantity = $request->input('quantity');
        $car->description = $request->input('description');
        $car->producing_year = $request->input('producing_year');
        
        // Xử lý các tệp hình ảnh
        if ($request->hasFile('images')) {
            $images = [];
            // Có file đính kèm trong form update thì tìm file cũ và xóa đi
            foreach (json_decode($car->images) as $oldImg) {
                if (File::exists(public_path('images/cars/' . $oldImg))) {
                    File::delete(public_path('images/cars/' . $oldImg));
                }
            }
            foreach ($request->file('images') as $image) {
                // Lấy phần mở rộng của tệp hình ảnh
                $extension = $image->getClientOriginalExtension();
                // Tạo tên tệp mới sử dụng thời gian và một chuỗi duy nhất
                $fileName = uniqid() . '.' . $extension;
                // Di chuyển tệp hình ảnh vào thư mục lưu trữ và đổi tên
                $image->move('images/cars/', $fileName);
                $images[] = $fileName;
            }
            $car->images = json_encode($images);
        }

        if ($request->hasFile('avatar')) {
            $oldImg = 'images/cars/'.$car->avatar;
            if (\File::exists($oldImg)){
                \File::delete($oldImg);
            }
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $fileName = uniqid() . '.' . $extension;
            $file->move('images/cars/', $fileName);
            $car->avatar = $fileName;
        }

        $car->slug = \Str::slug($car->name . ' ' . $car->producing_year);
        dd($car);
        try {
            $car->save();
            return redirect()->back()->with('success', 'The car has been edited successfully.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Failed to edit car. Please try again.');
        }
    }


    // Xử lý chức năng delete
    public function delete($id){
        $car = Car::find($id);
        $avatar = 'images/cars/'.$car->avatar;
        if (\File::exists($avatar)){
            \File::delete($avatar);
        }

        try {
            $car->delete();
            return redirect()->back()->with('success', 'The car has been deleted successfully.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Failed to delete car. Please try again.');
        }
    }
}
