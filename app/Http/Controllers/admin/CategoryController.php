<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Database\QueryException;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.category.list', compact('categories'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // Chuyển đến trang add
    public function add()
    {
        return view('admin.category.add');
    }

    // Xử lý chức năng add
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        // dd($category);
        try {
            $category->save();
            return redirect()->route('categories.index')->with('success', 'The category has been added successfully.');
        } catch (QueryException $e) {
            return redirect()->route('categories.index')->with('error', 'Failed to add category. Please try again.');
        }
    }

    // Chuyển đến trang edit
    public function edit($id)
    {
        $category = Category::find($id);
        if (!$category) {
            abort(404);
        }
        return view('admin.category.edit', compact('category'));
    }

    // Xử lý chức năng update
    public function update(Request $request, $id){
        $category = new Category();
        $category->name = $request->input('name');

        try {
            $category->save();
            return redirect()->route('categories.index')->with('success', 'The category has been edited successfully.');
        } catch (QueryException $e) {
            return redirect()->route('categories.index')->with('error', 'Failed to edit category. Please try again.');
        }
    }

    // Xử lý chức năng delete
    public function delete($id){
        $category = Category::find($id);

        if ($category->cars()->count() > 0){
            return redirect()->back()->with('error', 'Cannot delete this category "'. $category->name.'" because it contains cars.');
        }

        try {
            $category->delete();
            return redirect()->route('categories.index')->with('success', 'The category has been deleted successfully.');
        } catch (QueryException $e) {
            return redirect()->route('categories.index')->with('error', 'Failed to delete category. Please try again.');
        }
    }
}
