<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Interior;
use App\Models\Car;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Database\QueryException;
class InteriorController extends Controller
{
    // Chuyển đến trang car list
    public function index()
    {
        $interiors = Interior::paginate(10);
        return view('admin.interior.list', compact('interiors'));
    }

    // Chuyển đến trang add
    public function add()
    {
        $cars = Car::orderBy('name')->get();
        return view('admin.interior.add', compact('cars'));
    }

    // Xử lý chức năng add
    public function store(Request $request)
    { 
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'front_headroom' => 'nullable|string',
            'rear_headroom' => 'nullable|string',
            'front_legroom' => 'nullable|string',
            'rear_legroom' => 'nullable|string',
            'front_shoulder_room' => 'nullable|string',
            'rear_shoulder_room' => 'nullable|string',
        ]);

        try {
            Interior::create($request->all());
            return redirect()->route('interiors.index')->with('success', 'The interior has been added successfully.');
        } catch (\Exception $e) {
            return redirect()->route('interiors.index')->with('error', 'Failed to add interior. Please try again.');
        }
    }

    // Chuyển đến trang edit
    public function edit($id)
    {
        $interior = Interior::find($id);
        if (!$interior) {
            abort(404);
        }
        $cars = Car::all();
        return view('admin.interior.edit', compact('interior', 'cars'));
    }

    // Xử lý chức năng update
    public function update(Request $request, $id)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'front_headroom' => 'nullable|string',
            'rear_headroom' => 'nullable|string',
            'front_legroom' => 'nullable|string',
            'rear_legroom' => 'nullable|string',
            'front_shoulder_room' => 'nullable|string',
            'rear_shoulder_room' => 'nullable|string',
        ]);

        try {
            $interior = Interior::find($id);
            $interior->update($request->all());
            return redirect()->route('interiors.index')->with('success', 'The interior details have been updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('interiors.index')->with('error', 'Failed to update interior details. Please try again.');
        }
    }

    // Xử lý chức năng delete
    public function delete($id)
    {
        $interior = Interior::find($id);
        if (!$interior) {
            return redirect()->back()->with('error', 'Interior not found.');
        }

        try {
            $interior->delete();
            return redirect()->back()->with('success', 'The interior has been deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete interior. Please try again.');
        }
    }
}
