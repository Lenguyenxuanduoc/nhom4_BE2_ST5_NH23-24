<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Safety;
use App\Models\Car;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Database\QueryException;

class SafetyController extends Controller
{
    // Chuyển đến trang safety list
    public function index()
    {
        $safeties = Safety::paginate(10);
        return view('admin.safety.list', compact('safeties'));
    }

    // Chuyển đến trang add
    public function add()
    {
        $cars = Car::orderBy('name')->get();
        return view('admin.safety.add', compact('cars'));
    }

    // Xử lý chức năng add
    public function store(Request $request)
    { 
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'IIHS_best_pick' => 'nullable|string',
            'IIHS_front_small_overlap' => 'nullable|string',
            'IIHS_rear_crash' => 'nullable|string',
            'IIHS_rating_front_driver' => 'nullable|string',
            'IIHS_rating_front_side' => 'nullable|string',
            'IIHS_rating_rear_side' => 'nullable|string',
            'IIHS_front_moderate_overlap' => 'nullable|string',
            'IIHS_overall_side_crash' => 'nullable|string',
            'IIHS_roof_strength' => 'nullable|string',
            'NHTSA_rating_front_passenger' => 'nullable|string',
            'NHTSA_rating_overall' => 'nullable|string',
            'NHTSA_rating_rollover' => 'nullable|string',
        ]);

        try {
            Safety::create($request->all());
            return redirect()->route('safeties.index')->with('success', 'The safety has been added successfully.');
        } catch (\Exception $e) {
            return redirect()->route('safeties.index')->with('error', 'Failed to add safety. Please try again.');
        }
    }

    // Chuyển đến trang edit
    public function edit($id)
    {
        $safety = Safety::find($id);
        if (!$safety) {
            abort(404);
        }
        $cars = Car::all();
        return view('admin.safety.edit', compact('safety', 'cars'));
    }

    // Xử lý chức năng update
    public function update(Request $request, $id)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'IIHS_best_pick' => 'nullable|string',
            'IIHS_front_small_overlap' => 'nullable|string',
            'IIHS_rear_crash' => 'nullable|string',
            'IIHS_rating_front_driver' => 'nullable|string',
            'IIHS_rating_front_side' => 'nullable|string',
            'IIHS_rating_rear_side' => 'nullable|string',
            'IIHS_front_moderate_overlap' => 'nullable|string',
            'IIHS_overall_side_crash' => 'nullable|string',
            'IIHS_roof_strength' => 'nullable|string',
            'NHTSA_rating_front_passenger' => 'nullable|string',
            'NHTSA_rating_overall' => 'nullable|string',
            'NHTSA_rating_rollover' => 'nullable|string',
        ]);

        try {
            $safety = Safety::find($id);
            $safety->update($request->all());
            return redirect()->route('safeties.index')->with('success', 'The safety details have been updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('safeties.index')->with('error', 'Failed to update safety details. Please try again.');
        }
    }

    // Xử lý chức năng delete
    public function delete($id)
    {
        $safety = Safety::find($id);
        if (!$safety) {
            return redirect()->back()->with('error', 'Safety not found.');
        }

        try {
            $safety->delete();
            return redirect()->back()->with('success', 'The safety has been deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete safety. Please try again.');
        }
    }
}
