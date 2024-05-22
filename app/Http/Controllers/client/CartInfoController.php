<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartInfoController extends Controller
{
    public function index()
    {
        $title = 'Exotic Cars | Cart';
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'You need to log in to perform this function.');
        }
        $user = Auth::user();
        $user_id = $user->id;

        $userCarts = Cart::where('user_id', $user_id)
            ->with('car')
            ->get();
        // dd($userCarts);
        return view('client.cart.cart', compact('title', 'userCarts', 'user_id'));
    }

    public function addToCart($id)
    {
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'You need to log in to perform this function.');
        }

        $user = Auth::user();
        $existingCart = Cart::where('user_id', $user->id)
            ->where('car_id', $id)
            ->first();

        if ($existingCart) {
            return redirect()->back()->with('error', 'Add to cart failed, you have already added this car.');
        } else {
            // Create a new cart item
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->car_id = $id;
            $cart->save();
        }

        return redirect()->back()->with('success', 'Car added to cart successfully.');
    }

    public function removeFromCart($id)
    {
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'You need to log in to perform this function.');
        }
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)
            ->where('car_id', $id)
            ->first();

        if ($cart) {
            $cart->delete();
            return redirect()->back()->with('success', 'Car removed from cart successfully.');
        } else {
            return redirect()->back()->with('error', 'The car is not in your cart.');
        }
    }
}
