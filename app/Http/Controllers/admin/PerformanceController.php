<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Performance;
use App\Models\Car;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Database\QueryException;
class PerformanceController extends Controller
{
    // Chuyển đến trang performance list
    public function index()
    {
        $performances = Performance::paginate(10);
        return view('admin.performance.list', compact('performances'));
    }

    // Chuyển đến trang add
    public function add()
    {
        $cars = Car::orderBy('name')->get();
        return view('admin.performance.add', compact('cars'));
    }

    // Xử lý chức năng add
    public function store(Request $request)
    { 
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'engine' => 'nullable|string',
            'horsepower' => 'nullable|string',
            'trim' => 'nullable|string',
            'torque' => 'nullable|string',
            'cylinders' => 'nullable|integer',
            'standard_mpg' => 'nullable|string',
            'transmission' => 'nullable|string',
            'transmission_type' => 'nullable|string',
        ]);

        try {
            Performance::create($request->all());
            return redirect()->route('performances.index')->with('success', 'The performance has been added successfully.');
        } catch (\Exception $e) {
            return redirect()->route('performances.index')->with('error', 'Failed to add performance. Please try again.');
        }
    }

    // Chuyển đến trang edit
    public function edit($id)
    {
        $performance = Performance::find($id);
        if (!$performance) {
            abort(404);
        }
        $cars = Car::all();
        return view('admin.performance.edit', compact('performance', 'cars'));
    }

    // Xử lý chức năng update
    public function update(Request $request, $id)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'engine' => 'nullable|string',
            'horsepower' => 'nullable|string',
            'trim' => 'nullable|string',
            'torque' => 'nullable|string',
            'cylinders' => 'nullable|integer',
            'standard_mpg' => 'nullable|string',
            'transmission' => 'nullable|string',
            'transmission_type' => 'nullable|string',
        ]);

        try {
            $performance = Performance::find($id);
            $performance->update($request->all());
            return redirect()->route('performances.index')->with('success', 'The performance details have been updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('performances.index')->with('error', 'Failed to update performance details. Please try again.');
        }
    }

    // Xử lý chức năng delete
    public function delete($id)
    {
        $performance = Performance::find($id);
        if (!$performance) {
            return redirect()->back()->with('error', 'Performance not found.');
        }

        try {
            $performance->delete();
            return redirect()->back()->with('success', 'The performance has been deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete performance. Please try again.');
        }
    }
}
