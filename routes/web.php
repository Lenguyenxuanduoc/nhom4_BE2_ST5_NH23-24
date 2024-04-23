<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\NewsController;
use App\Http\Controllers\client\BrandController;
use App\Http\Controllers\client\LoginController;
use App\Http\Controllers\admin\MainController;


// Client routes 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

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

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin routes
Route::get('/admin', [MainController::class, 'index'])->name('admin');


// Route::get('/brand/detail', function(){
//     return view('client.brand.detail',[
//         'title'=>''
//     ]);
// });