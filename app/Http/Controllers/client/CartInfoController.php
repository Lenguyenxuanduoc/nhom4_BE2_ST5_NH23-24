<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartInfoController extends Controller
{
    public function index(){
        $title = "Exotic Cars | Cart";
        return view('client.cart.cart', compact('title'));
    }
}
