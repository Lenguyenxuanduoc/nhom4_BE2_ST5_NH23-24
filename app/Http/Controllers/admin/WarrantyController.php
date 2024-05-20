<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warranty;
use App\Models\Car;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Database\QueryException;

class WarrantyController extends Controller
{
    // Chuyển đến trang warranty list
    public function index()
    {
        $warranties = Warranty::paginate(10);
        return view('admin.warranty.list', compact('warranties'));
    }

    // Chuyển đến trang add
    public function add()
    {
        $cars = Car::orderBy('name')->get();
        return view('admin.warranty.add', compact('cars'));
    }

    // Xử lý chức năng add
    public function store(Request $request)
    { 
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'free_maintenance_miles' => 'nullable|string',
            'full_warranty_miles' => 'nullable|string',
            'powertrain_warranty_miles' => 'nullable|string',
            'roadside_warranty_miles' => 'nullable|string',
            'corrosion_warranty_miles' => 'nullable|string',
            'free_maintenance_months' => 'nullable|string',
            'full_warranty_months' => 'nullable|string',
            'powertrain_warranty_months' => 'nullable|string',
            'roadside_warranty_months' => 'nullable|string',
            'corrosion_warranty_months' => 'nullable|string',
        ]);

        try {
            Warranty::create($request->all());
            return redirect()->route('warranties.index')->with('success', 'The warranty has been added successfully.');
        } catch (\Exception $e) {
            return redirect()->route('warranties.index')->with('error', 'Failed to add warranty. Please try again.');
        }
    }

    // Chuyển đến trang edit
    public function edit($id)
    {
        $warranty = Warranty::find($id);
        if (!$warranty) {
            abort(404);
        }
        $cars = Car::all();
        return view('admin.warranty.edit', compact('warranty', 'cars'));
    }

    // Xử lý chức năng update
    public function update(Request $request, $id)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'free_maintenance_miles' => 'nullable|string',
            'full_warranty_miles' => 'nullable|string',
            'powertrain_warranty_miles' => 'nullable|string',
            'roadside_warranty_miles' => 'nullable|string',
            'corrosion_warranty_miles' => 'nullable|string',
            'free_maintenance_months' => 'nullable|string',
            'full_warranty_months' => 'nullable|string',
            'powertrain_warranty_months' => 'nullable|string',
            'roadside_warranty_months' => 'nullable|string',
            'corrosion_warranty_months' => 'nullable|string',
        ]);

        try {
            $warranty = Warranty::find($id);
            $warranty->update($request->all());
            return redirect()->route('warranties.index')->with('success', 'The warranty details have been updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('warranties.index')->with('error', 'Failed to update warranty details. Please try again.');
        }
    }

    // Xử lý chức năng delete
    public function delete($id)
    {
        $warranty = Warranty::find($id);
        if (!$warranty) {
            return redirect()->back()->with('error', 'Warranty not found.');
        }

        try {
            $warranty->delete();
            return redirect()->back()->with('success', 'The warranty has been deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete warranty. Please try again.');
        }
    }
}
