<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\CarComment;
use App\Models\PostsComment;

class CommentController extends Controller
{
    public function storeCarComment(Request $request)
    {
        if (!Auth::check()){
            return back()->with('error', "You need to login to comment.");
        }
        $user = Auth::user();
        $car_id = $request->input('car_id');
        $content = $request->input('content');
        $comment_date = Carbon::now();

        $comment = new CarComment();
        $comment->car_id = $car_id;
        $comment->user_id = $user->id;
        $comment->content = $content;
        $comment->comment_date = $comment_date;
        // dd($comment);
        $comment->save();
        return redirect()->back();
    }
    
    public function storePostComment(Request $request)
    {
        if (!Auth::check()){
            return back()->with('error', "You need to login to comment.");
        }
        $user = Auth::user();
        $posts_id = $request->input('posts_id');
        $content = $request->input('content');
        $comment_date = Carbon::now();

        $comment = new PostsComment();
        $comment->posts_id = $posts_id;
        $comment->user_id = $user->id;
        $comment->content = $content;
        $comment->comment_date = $comment_date;
        // dd($comment);
        $comment->save();
        return redirect()->back();
    }
}
