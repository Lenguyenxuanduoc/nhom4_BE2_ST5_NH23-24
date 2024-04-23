<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('client.posts.news',[
            'title' => 'Exotic Cars | News'
        ]);
    }

    public function getPosts($id){
        $title = "Posts detail 1";

        return view('client.posts.detail', [
            'id'=>$id,
            'title'=>$title
        ]);
    }
}
