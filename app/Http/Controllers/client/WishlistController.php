<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addToWishlist($id){
        if (!Auth::check()){
            return redirect()->back()->with('error', "You need to login to add cars to your favorite list.");
        }

        $user = Auth::user();
        $car = Car::find($id);

        if (!$car){
            return redirect()->back()->with('error', 'Car not found.');
        }

        $wishlist = Wishlist::firstOrCreate([
            'user_id' => $user->id,
            'car_id' => $id
        ]);

        return redirect()->back()->with('success', 'Car added to your wishlist.');
    }

    public function removeToWishlist($id){
        if (!Auth::check()){
            return redirect()->back()->with('error', "You need to login to remove cars from your favorite list.");
        }

        $user = Auth::user();
        $wishlist = Wishlist::where('user_id', $user->id)->where('car_id', $id)->first();

        if (!$wishlist) {
            return redirect()->back()->with('error', 'Car not found in your wishlist.');
        }

        $wishlist->delete();

        return redirect()->back()->with('success', 'Car removed from your wishlist.');
    }
}
