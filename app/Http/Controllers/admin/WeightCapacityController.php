<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WeightCapacity; // Thay đổi
use App\Models\Car;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Database\QueryException;

class WeightCapacityController extends Controller
{
    // Chuyển đến trang weight capacity list
    public function index()
    {
        $weights_capacities = WeightCapacity::paginate(10); // Thay đổi
        return view('admin.weightcapacity.list', compact('weights_capacities'));
    }

    // Chuyển đến trang add
    public function add()
    {
        $cars = Car::all();
        return view('admin.weightcapacity.add', compact('cars'));
    }

    // Xử lý chức năng add
    public function store(Request $request)
    { 
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'fuel_capacity' => 'nullable|string',
            'cargo_capacity' => 'nullable|string',
            'curb_weight' => 'nullable|string',
        ]);

        try {
            WeightCapacity::create($request->all());
            return redirect()->route('weights_capacities.index')->with('success', 'The weight capacity has been added successfully.');
        } catch (\Exception $e) {
            return redirect()->route('weights_capacities.index')->with('error', 'Failed to add weight capacity. Please try again.');
        }
    }

    // Chuyển đến trang edit
    public function edit($id)
    {
        $weightcapacity = WeightCapacity::find($id); // Thay đổi
        if (!$weightcapacity) {
            abort(404);
        }
        $cars = Car::all();
        return view('admin.weightcapacity.edit', compact('weightcapacity', 'cars'));
    }

    // Xử lý chức năng update
    public function update(Request $request, $id)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'fuel_capacity' => 'nullable|string',
            'cargo_capacity' => 'nullable|string',
            'curb_weight' => 'nullable|string',
        ]);

        try {
            $weightcapacity = WeightCapacity::find($id); // Thay đổi
            $weightcapacity->update($request->all());
            return redirect()->route('weights_capacities.index')->with('success', 'The weight capacity details have been updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('weights_capacities.index')->with('error', 'Failed to update weight capacity details. Please try again.');
        }
    }

    // Xử lý chức năng delete
    public function delete($id)
    {
        $weightcapacity = WeightCapacity::find($id); // Thay đổi
        if (!$weightcapacity) {
            return redirect()->back()->with('error', 'Weight capacity not found.');
        }

        try {
            $weightcapacity->delete();
            return redirect()->back()->with('success', 'The weight capacity has been deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete weight capacity. Please try again.');
        }
    }
}
