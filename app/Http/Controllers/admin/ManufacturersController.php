<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManufacturersController extends Controller
{
    public function index(){
        return view('admin.manufacturer.list');
    }

    public function add(){
        return view('admin.manufacturer.add');
    }
}
