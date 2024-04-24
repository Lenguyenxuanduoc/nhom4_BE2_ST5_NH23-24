<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\NewsController;
use App\Http\Controllers\client\BrandController;
use App\Http\Controllers\client\LoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CarsController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\ManufacturersController;
use App\Http\Controllers\client\CarController;


// Client routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');


// News
Route::prefix('/news')->group(function(){
    Route::get('/', [NewsController::class, 'index']);

    // Lấy chi tiết 1 posts
    Route::get('/posts/{slug}', [NewsController::class, 'getPosts']);
});


// Brands
Route::prefix('/brands')->group(function(){
    Route::get('/', [BrandController::class, 'index']);

    // Lấy chi tiết 1 brand
    Route::get('/{slug}', [BrandController::class, 'getBrand']);
});


// Car
Route::prefix('/car')->group(function(){
    // Lấy chi tiết 1 car
    Route::get('/{slug}', [CarController::class, 'getCar']);
});


// Login Logout
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Admin routes
Route::middleware('auth.admin')->prefix('/admin')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
});

Route::middleware('auth.admin')->group(function(){
    Route::get('/cars', [CarsController::class, 'index']);
    Route::get('/add_car', [CarsController::class, 'add']);

    Route::get('/categories', [CategoriesController::class, 'index']);
    Route::get('/add_category', [CategoriesController::class, 'add']);

    Route::get('/manufacturers', [ManufacturersController::class, 'index']);
    Route::get('/add_manufacturer', [ManufacturersController::class, 'add']);
});



