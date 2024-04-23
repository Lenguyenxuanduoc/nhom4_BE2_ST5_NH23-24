<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('client.brand.brands', [
            'title' => 'Exotic Cars | Brands'
        ]);
    }

    public function getBrand($id){
        $title = 'BMW';
        return view('client.brand.detail',[
            'id'=>$id,
            'title'=>$title
        ]);
    }
}
