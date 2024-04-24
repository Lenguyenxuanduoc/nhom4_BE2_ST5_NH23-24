<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacturer;

class ManufacturersController extends Controller
{
    public function index(){
        $data = Manufacturer::orderBy('id','ASC')->paginate(30);

        return view('admin.manufacturer.list',compact('data'));
    }

    public function add(){
        return view('admin.manufacturer.add');
    }
}
