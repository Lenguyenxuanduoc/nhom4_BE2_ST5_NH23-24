<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $title = "Exotic Cars | Contact";
        return view('client.contact.contact', compact('title'));
    }
}
