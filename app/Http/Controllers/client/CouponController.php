<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function checkCoupon(Request $request){
        $code = $request->input('code');
        $subtotal = $request->input('subtotal');

        $coupon = Coupon::where('code', $code)->first();

        if (!$coupon){
            return redirect()->back()->with('error', "Coupon does not exist.");
        }

        // Kiểm tra tính hợp lệ của coupon (ví dụ: ngày hiệu lực, số lần sử dụng tối đa, ...)
        if ($coupon->valid_from && now()->lt($coupon->valid_from)) {
            return redirect()->back()->with('error', 'Coupon is not yet valid.');
        }

        if ($coupon->valid_until && now()->gt($coupon->valid_until)) {
            return redirect()->back()->with('error', 'Coupon has expired.');
        }

        if ($coupon->usage_limit && $coupon->times_used >= $coupon->usage_limit) {
            return redirect()->back()->with('error', 'Coupon usage limit has been reached.');
        }

        $discount = 0;

        if ($coupon->discount_type == 'fixed') {
            $discount = $coupon->discount;
        } elseif ($coupon->discount_type == 'percent') {
            $discount = ($subtotal * $coupon->discount) / 100;
        }

        return redirect()->back()->with([
            'success' => 'Coupon applied successfully.',
            'code' => $code,
            'discount' => $discount,
            'subtotal' => $subtotal
        ]);
    }

    public function removeCoupon(Request $request){
        session()->forget('coupon');

        // Chuyển hướng trở lại trang trước đó hoặc trang chủ
        return redirect()->back()->with('error', 'Coupon removed successfully.');
    }
}
