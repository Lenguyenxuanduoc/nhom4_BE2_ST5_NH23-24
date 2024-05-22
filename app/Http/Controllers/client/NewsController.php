<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Posts;
use App\Models\PostsComment;

class NewsController extends Controller
{
    public function index(){
        $title = 'Exotic Cars | News';
        $posts = DB::select('SELECT * FROM posts ORDER BY posting_date DESC');
        return view('client.posts.news', compact('title', 'posts'));
    }

    public function getPosts($slug){
        $posts_detail = Posts::where('slug', $slug)->first();

        if (!$posts_detail){
            abort(404);
        }

        $comments = PostsComment::where('posts_id', $posts_detail->id)->get();

        $title = $posts_detail->title;

        $latest_posts = Posts::where('slug', '!=', $slug)->orderBy('posting_date', 'desc')->take(6)->get();

        return view('client.posts.detail', compact('posts_detail', 'latest_posts', 'comments', 'title'));
    }
}
