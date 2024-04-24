<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    public function index(){
        $title = 'Exotic Cars | News';
        $posts = DB::select('SELECT * FROM posts ORDER BY posting_date DESC');
        return view('client.posts.news', compact('title', 'posts'));
    }

    public function getPosts($id){
        $title = "Posts detail 1";

        return view('client.posts.detail', [
            'id'=>$id,
            'title'=>$title
        ]);
    }
}
