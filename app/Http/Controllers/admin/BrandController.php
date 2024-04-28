<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Database\QueryException;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::paginate(10);
        return view('admin.brand.list', compact('brands'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function add(){
        return view('admin.brand.add');
    }

    public function create(){
        echo 'create brand';
        // return view('admin.brand.add');
    }

    public function edit($id){
        echo $id;
    }
}
