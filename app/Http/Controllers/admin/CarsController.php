<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index(){
        return view('admin.car.list');
    }

    public function add(){
        return view('admin.car.add');
    }

    public function edit($id){
        return view('admin.car.edit', compact('id'));
    }
}
