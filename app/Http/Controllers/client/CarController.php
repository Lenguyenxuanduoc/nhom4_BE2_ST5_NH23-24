<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Car;

class CarController extends Controller
{
    public function getCar($slug){
        $title = '';
        return view('client.car.detail', compact('slug', 'title'));
    }
}
