<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(10);
        return view('admin.brand.list', compact('brands'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // Chuyển đến trang add
    public function add()
    {
        return view('admin.brand.add');
    }

    // Thực hiện chức năng add
    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->input('name');
        $brand->founded_year = $request->input('founded_year');
        $brand->founder_name = $request->input('founder_name');
        $brand->description = $request->input('description');
        $brand->slug = \Str::slug($brand->name);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $fileName = strtolower($brand->name) . '.' . $extension;
            $file->move('images/logos/', $fileName);
            $brand->logo = $fileName;
        }

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $extension = $file->getClientOriginalExtension();
            $fileName = strtolower($brand->name) . '.' . $extension;
            $file->move('images/banners/', $fileName);
            $brand->banner = $fileName;
        }

        // dd($brand);
        try {
            $brand->save();
            return redirect()->route('brands.index')->with('success', 'The brand has been added successfully.');
        } catch (QueryException $e) {
            return redirect()->route('brands.index')->with('error', 'Failed to add brand. Please try again.');
        }
    }

    // Chuyển đến trang add
    public function edit($id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            abort(404);
        }
        return view('admin.brand.edit', compact('brand'));
    }
    // Thực hiện chức năng add
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->name = $request->input('name');
        $brand->founded_year = $request->input('founded_year');
        $brand->founder_name = $request->input('founder_name');
        $brand->description = $request->input('description');
        $brand->slug = \Str::slug($brand->name);

        if ($request->hasFile('logo')) {
            $oldImg = 'images/logos' . $brand->logo;
            if (File::exists($oldImg)) {
                File::delete($oldImg);
            }
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $fileName = strtolower($brand->name) . '.' . $extension;
            $file->move('images/logos/', $fileName);
            $brand->logo = $fileName;
        }

        if ($request->hasFile('banner')) {
            $oldImg = 'images/banners' . $brand->banner;
            if (File::exists($oldImg)) {
                File::delete($oldImg);
            }
            $file = $request->file('banner');
            $extension = $file->getClientOriginalExtension();
            $fileName = strtolower($brand->name) . '.' . $extension;
            $file->move('images/banners/', $fileName);
            $brand->banner = $fileName;
        }

        // dd($brand);
        try {
            $brand->save();
            return redirect()->route('brands.index')->with('success', 'The brand has been edited successfully.');
        } catch (QueryException $e) {
            return redirect()->route('brands.index')->with('error', 'Failed to edit brand. Please try again.');
        }
    }

    // Xử lý chức năng delete
    public function delete($id)
    {
        $brand = Brand::find($id);

        if ($brand->cars()->count() > 0) {
            return redirect()->back()->with('error', 'Cannot delete this brand "'. $brand->name.'" because it contains cars.');
        }
        $logo = 'images/logos/' . $brand->logo;
        $banner = 'images/banners/' . $brand->banner;

        if (File::exists($banner) || File::exists($logo)) {
            File::delete($logo);
            File::delete($banner);
        }

        try {
            $brand->delete();
            return redirect()->back()->with('success', 'The brand has been deleted successfully.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Failed to delete brand. Please try again.');
        }
    }
}
