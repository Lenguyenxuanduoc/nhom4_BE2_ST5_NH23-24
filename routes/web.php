<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\NewsController;
use App\Http\Controllers\client\ClientBrandController;
use App\Http\Controllers\client\ClientCarController;
use App\Http\Controllers\client\LoginController;

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CarController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\admin\ExteriorController;
use App\Http\Controllers\admin\InteriorController;
use App\Http\Controllers\admin\PerformanceController;
use App\Http\Controllers\admin\WeightCapacityController;

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
Route::prefix('/all-brands')->group(function(){
    Route::get('/', [ClientBrandController::class, 'index'])->name('all-brands');

    // Lấy chi tiết 1 brand
    Route::get('/{slug}', [ClientBrandController::class, 'getBrand'])->name('brand.detail');
});


// Car
Route::prefix('/car')->group(function(){
    // Lấy chi tiết 1 car
    Route::get('/{slug}', [ClientCarController::class, 'getCar']);
});


// Login Logout
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Admin routes
Route::middleware('auth.admin')->prefix('/admin')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
});

// Car
Route::middleware('auth.admin')->prefix('cars')->group(function(){
    Route::get('/', [CarController::class, 'index'])->name('cars.index');

    Route::get('/add', [CarController::class, 'add'])->name('cars.add');
    Route::post('/store', [CarController::class, 'store'])->name('cars.store');

    Route::get('/edit/{id}', [CarController::class, 'edit'])->name('cars.edit');
    Route::post('/update/{id}', [CarController::class, 'update'])->name('cars.update');

    Route::get('/delete/{id}', [CarController::class, 'delete'])->name('cars.delete');
});

// Category
Route::middleware('auth.admin')->prefix('categories')->group(function(){
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');

    Route::get('/add', [CategoryController::class, 'add'])->name('categories.add');
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');

    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');

    Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
});

Route::get('/add', [BrandController::class, 'add'])->name('brands.add');


// Brand
Route::middleware('auth.admin')->prefix('/brands')->group(function(){
    Route::get('/', [BrandController::class, 'index'])->name('brands.index');

    Route::get('/add', [BrandController::class, 'add'])->name('brands.add');
    Route::post('/store', [BrandController::class, 'store'])->name('brands.store');

    Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('brands.edit');
    Route::post('/update/{id}', [BrandController::class, 'update'])->name('brands.update');

    Route::get('/delete/{id}', [BrandController::class, 'delete'])->name('brands.delete');
});

// Posts
Route::middleware('auth.admin')->prefix('/posts')->group(function(){
    Route::get('/', [PostsController::class, 'index'])->name('posts.index');

    Route::get('/add', [PostsController::class, 'add'])->name('posts.add');
    Route::post('/store', [PostsController::class, 'store'])->name('posts.store');

    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('posts.edit');
    Route::post('/update/{id}', [PostsController::class, 'update'])->name('posts.update');

    Route::get('/delete/{id}', [PostsController::class, 'delete'])->name('posts.delete');
});
// Exteriors
Route::middleware('auth.admin')->prefix('exteriors')->group(function(){
    Route::get('/', [ExteriorController::class, 'index'])->name('exteriors.index');

    Route::get('/add', [ExteriorController::class, 'add'])->name('exteriors.add');
    Route::post('/store', [ExteriorController::class, 'store'])->name('exteriors.store');

    Route::get('/edit/{id}', [ExteriorController::class, 'edit'])->name('exteriors.edit');
    Route::post('/update/{id}', [ExteriorController::class, 'update'])->name('exteriors.update');

    Route::get('/delete/{id}', [ExteriorController::class, 'delete'])->name('exteriors.delete');
});
// Interiors
Route::middleware('auth.admin')->prefix('interiors')->group(function(){
    Route::get('/', [InteriorController::class, 'index'])->name('interiors.index');

    Route::get('/add', [InteriorController::class, 'add'])->name('interiors.add');
    Route::post('/store', [InteriorController::class, 'store'])->name('interiors.store');

    Route::get('/edit/{id}', [InteriorController::class, 'edit'])->name('interiors.edit');
    Route::post('/update/{id}', [InteriorController::class, 'update'])->name('interiors.update');

    Route::get('/delete/{id}', [InteriorController::class, 'delete'])->name('interiors.delete');
});
// Performances
Route::middleware('auth.admin')->prefix('performances')->group(function(){
    Route::get('/', [PerformanceController::class, 'index'])->name('performances.index');

    Route::get('/add', [PerformanceController::class, 'add'])->name('performances.add');
    Route::post('/store', [PerformanceController::class, 'store'])->name('performances.store');

    Route::get('/edit/{id}', [PerformanceController::class, 'edit'])->name('performances.edit');
    Route::post('/update/{id}', [PerformanceController::class, 'update'])->name('performances.update');

    Route::get('/delete/{id}', [PerformanceController::class, 'delete'])->name('performances.delete');
});
// Weights_capacties
Route::middleware('auth.admin')->prefix('weightcapacities')->group(function(){
    Route::get('/', [WeightCapacityController::class, 'index'])->name('weightcapacities.index');

    Route::get('/add', [WeightCapacityController::class, 'add'])->name('weightcapacities.add');
    Route::post('/store', [WeightCapacityController::class, 'store'])->name('weightcapacities.store');

    Route::get('/edit/{id}', [WeightCapacityController::class, 'edit'])->name('weightcapacities.edit');
    Route::post('/update/{id}', [WeightCapacityController::class, 'update'])->name('weightcapacities.update');

    Route::get('/delete/{id}', [WeightCapacityController::class, 'delete'])->name('weightcapacities.delete');
});
