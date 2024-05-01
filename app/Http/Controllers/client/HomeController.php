<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Posts;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.home', [
            'title' => 'Exotic Cars | Home',
        ]);
    }

    public function search_result(Request $request)
    {
        $title = 'Exotic Cars | Search Results';
        $keyword = $request->input('keyword');
        $posts = Posts::where('title', 'like', "%$keyword%")
            ->orWhere('author', 'like', "%$keyword%")
            ->orWhere('content', 'like', "%$keyword%")
            ->get();

        $cars = Car::where('name', 'like', "%$keyword%")
            ->orWhereHas('brand', function ($query) use ($keyword) {
                $query->where('name', 'like', "%$keyword%");
            })
            ->orWhereHas('category', function ($query) use ($keyword) {
                $query->where('name', 'like', "%$keyword%");
            })
            ->get();

        return view('client.search.search-result', compact('posts', 'cars', 'title', 'keyword'));
    }
}
