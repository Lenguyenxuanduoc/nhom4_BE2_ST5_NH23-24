<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('Admin.index');
});

Route::get('/welcome', function () {
    return view('welcome');
});
 
 

// Route::get('Admin/Pages/car', function () {
    //     return view('Admin.Pages.car');
    // });
    Route::get('car', function () {
        return view('Admin.car');
    });
    Route::get('edit-car', function () {
        return view('Admin.edit-car');
    });
    Route::get('create-car', function () {
        return view('Admin.create-car');
    });
    Route::get('categories', function () {
        return view('Admin.categories');
    });
    Route::get('edit-categories', function () {
        return view('Admin.edit-categories');
    });
    Route::get('create-categories', function () {
        return view('Admin.create-categories');
    });
    Route::get('manufacturers', function () {
        return view('Admin.manufacturers');
    });
    Route::get('edit-manufacturers', function () {
        return view('Admin.edit-manufacturers');
    });
    Route::get('create-manufacturers', function () {
        return view('Admin.create-manufacturers');
    });
    Route::get('car-performance', function () {
        return view('Admin.car-performance');
    });
    Route::get('car-interior', function () {
        return view('Admin.car-interior');
    });
    Route::get('car-exterior', function () {
        return view('Admin.car-exterior');
    });
    Route::get('car-reviews', function () {
        return view('Admin.car-reviews');
    });
    
    Route::get('/login', function () {
        return view('login');
    })->middleware(['auth', 'verified'])->name('login');
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    
     require __DIR__.'/auth.php';
    
    
    