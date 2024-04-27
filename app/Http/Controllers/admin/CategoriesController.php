<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoriesController extends Controller
{
    public function index(){
        $data = Category::orderBy('id','ASC')->paginate(30);

        return view('admin.category.list', compact('data'));
    }

    public function add(){
        return view('admin.category.add');
    }
}