<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exterior;
use App\Models\Car;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Paginator;



class ExteriorController extends Controller
{
    // Chuyển đến trang danh sách các xe
    public function index()
    {
        $exteriors = Exterior::with('car')->paginate(10);
        return view('admin.exterior.list', compact('exteriors'));
    }

    // Chuyển đến trang thêm
    public function add()
    {
        $cars = Car::orderBy('name')->get();
        return view('admin.exterior.add', compact('cars'));
    }

    // Xử lý chức năng thêm
    public function store(Request $request)
    { 
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'length' => 'required',
            'width' => 'required',
            'height' => 'required',
            'wheelbase' => 'required',
        ]);

        try {
            Exterior::create($request->all());
            return redirect()->route('exteriors.index')->with('success', 'The exterior has been added successfully.');
        } catch (QueryException $e) {
            return redirect()->route('exteriors.index')->with('error', 'Failed to add exterior. Please try again.');
        }
    }

    // Chuyển đến trang sửa
    public function edit($id)
    {
        $exterior = Exterior::with('car')->find($id);
        if (!$exterior) {
            abort(404);
        }
        $cars = Car::all();
        return view('admin.exterior.edit', compact('exterior', 'cars'));
    }

    // Xử lý chức năng cập nhật
    public function update(Request $request, $id)
    {
        $request->validate([
            'length' => 'required',
            'width' => 'required',
            'height' => 'required',
            'wheelbase' => 'required',
        ]);

        try {
            $exterior = Exterior::find($id);
            $exterior->update($request->all());
            return redirect()->route('exteriors.index')->with('success', 'The exterior details have been updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('exteriors.index')->with('error', 'Failed to update exterior details. Please try again.');
        }
    }

    // Xử lý chức năng xóa
    public function delete($id)
    {
        $exterior = Exterior::find($id);
        if (!$exterior) {
            return redirect()->back()->with('error', 'Exterior not found.');
        }

        try {
            $exterior->delete();
            return redirect()->back()->with('success', 'The exterior has been deleted successfully.');
        } catch (\QueryException $e) {
            return redirect()->back()->with('error', 'Failed to delete exterior. Please try again.');
        }
    }
}

