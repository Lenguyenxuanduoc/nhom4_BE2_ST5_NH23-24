<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\NewsController;
use App\Http\Controllers\client\ClientBrandController;
use App\Http\Controllers\client\ClientCarController;
use App\Http\Controllers\client\LoginController;
use App\Http\Controllers\client\SearchController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\UserInfoController;
use App\Http\Controllers\client\WishlistController;
use App\Http\Controllers\client\CartInfoController;
use App\Http\Controllers\client\CommentController;
use App\Http\Controllers\client\CouponController;
use App\Http\Controllers\client\OrderController;

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CarController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\admin\ExteriorController;
use App\Http\Controllers\admin\InteriorController;
use App\Http\Controllers\admin\PerformanceController;
use App\Http\Controllers\admin\WeightCapacityController;
use App\Http\Controllers\admin\WarrantyController;
use App\Http\Controllers\Admin\SafetyController;
use App\Http\Controllers\Admin\UserController;


///////////////////////// Client routes ///////////////////////
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class,  'search_result'])->name('search');

// News
Route::prefix('/news')->group(function(){
    Route::get('/', [NewsController::class, 'index'])->name('news');

    // Lấy chi tiết 1 posts
    Route::get('/posts/{slug}', [NewsController::class, 'getPosts'])->name('posts.detail');
});


// Brands
Route::prefix('/all-brands')->group(function(){
    Route::get('/', [ClientBrandController::class, 'index'])->name('all.brands');

    // Lấy chi tiết 1 brand
    Route::get('/{slug}', [ClientBrandController::class, 'getBrand'])->name('brand.detail');
});


// Car
Route::prefix('/car')->group(function(){
    // Lấy chi tiết 1 car
    Route::get('/{slug}', [ClientCarController::class, 'getCar'])->name('car.detail');
});


// Compare
Route::get('/compare', [ClientCarController::class, 'compare'])->name('compare');
Route::get('/api/cars', [ClientCarController::class, 'getCarsByBrandAndCategory']);
Route::post('/api/car', [ClientCarController::class, 'getCarByCarID']);


// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');


// Login Logout
Route::get('/login', [LoginController::class, 'login'])->middleware('auth.check');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('notAuth.check');

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/reset-password', [LoginController::class, 'resetPassword'])->name('reset-password');
Route::get('/register', [LoginController::class, 'register'])->name('register')->middleware('auth.check');
Route::post('/register', [LoginController::class, 'store'])->name('store.user');


// User info
Route::middleware('notAuth.check')->prefix('/user')->group(function(){
    Route::get('/info', [UserInfoController::class, 'index'])->name('user.info');
    Route::post('/update/{id}', [UserInfoController::class, 'update'])->name('user.update');
    Route::post('/change_password/{id}', [UserInfoController::class, 'changePassword'])->name('user.change_password');
});

// Wishlist
Route::get('/addToWishlist/{id}', [WishlistController::class, 'addToWishlist'])->name('add.to.wishlist');
Route::get('/removeToWishlist/{id}', [WishlistController::class, 'removeToWishlist'])->name('remove.to.wishlist');

// // Cart
Route::middleware('notAuth.check')->prefix('/cart')->group(function(){
    Route::get('/info', [CartInfoController::class, 'index'])->name('cart.info');
    Route::get('/addToCart/{id}', [CartInfoController::class, 'addToCart'])->name('add.to.cart');
    Route::get('/removeFromCart/{id}', [CartInfoController::class, 'removeFromCart'])->name('remove.from.cart');
});

// Car Comment
Route::post('/storeCarComment', [CommentController::class, 'storeCarComment'])->name('store.car.comment');
Route::post('/storePostComment', [CommentController::class, 'storePostComment'])->name('store.post.comment');

// Check Coupon
Route::post('/checkCoupon', [CouponController::class, 'checkCoupon'])->name('check.coupon');
Route::post('/remove', [CouponController::class, 'removeCoupon'])->name('remove.coupon');

// Order
Route::get('/order/{id}/{total}', [OrderController::class, 'order'])->name('order');

///////////////////////// Client routes ///////////////////////



/////////////////////// Admin routes ///////////////////////
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

Route::post('/carsByCategory', [CarController::class, 'getCarsByCategory'])->name('cars.by.category');
Route::post('/carsByBrand', [CarController::class, 'getCarsByBrand'])->name('cars.by.brand');

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

// Warranties
Route::middleware('auth.admin')->prefix('warranties')->group(function(){
    Route::get('/', [WarrantyController::class, 'index'])->name('warranties.index');

    Route::get('/add', [WarrantyController::class, 'add'])->name('warranties.add');
    Route::post('/store', [WarrantyController::class, 'store'])->name('warranties.store');

    Route::get('/edit/{id}', [WarrantyController::class, 'edit'])->name('warranties.edit');
    Route::put('/update/{id}', [WarrantyController::class, 'update'])->name('warranties.update');

    Route::delete('/delete/{id}', [WarrantyController::class, 'delete'])->name('warranties.delete');
});

// Safeties
Route::middleware('auth.admin')->prefix('safeties')->group(function(){
    Route::get('/', [SafetyController::class, 'index'])->name('safeties.index');

    Route::get('/add', [SafetyController::class, 'add'])->name('safeties.add');
    Route::post('/store', [SafetyController::class, 'store'])->name('safeties.store');

    Route::get('/edit/{id}', [SafetyController::class, 'edit'])->name('safeties.edit');
    Route::put('/update/{id}', [SafetyController::class, 'update'])->name('safeties.update');

    Route::delete('/delete/{id}', [SafetyController::class, 'delete'])->name('safeties.delete');
});

//Users
Route::middleware('auth.admin')->prefix('users')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::post('/toggle-admin/{id}', [UserController::class, 'toggleAdmin'])->name('users.toggleAdmin');
});
/////////////////////// Admin routes ///////////////////////
