<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\NewsController;
use App\Http\Controllers\client\BrandController;

// Client routes 
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::prefix('/news')->group(function(){
    Route::get('/', [NewsController::class, 'index']);

    // Lấy chi tiết 1 posts
    Route::get('/posts/{id}', [NewsController::class, 'getPosts']);
});

Route::prefix('/brands')->group(function(){
    Route::get('/', [BrandController::class, 'index']);

    // Lấy chi tiết 1 brand
    Route::get('/brand/{id}', [BrandController::class, 'getBrand']);
});

Route::get('/detail', function(){
    return view('client.car.detail',[
        'title'=>''
    ]);
});

Route::get('/admin', function(){
    return view('/admin/home');
});

// Route::get('/brand/detail', function(){
//     return view('client.brand.detail',[
//         'title'=>''
//     ]);
// });