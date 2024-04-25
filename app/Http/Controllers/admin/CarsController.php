<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;
 
class CarsController extends Controller
{
    public function index(){
        // $data = Car::orderBy('id','ASC')->paginate(30);
        return view('admin.car.list', compact('data'));
    }

    public function add(){
        dd();
        // return view('admin.car.add');
    }

    public function edit($id){
        return view('admin.car.edit', compact('id'));
    }
}
