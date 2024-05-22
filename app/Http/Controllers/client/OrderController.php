<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;

class OrderController extends Controller
{
    public function order($id, $total){
        $userCarts = Cart::where('user_id', $id)->get();
        
        if ($userCarts->isEmpty()){
            return redirect()->back()->with('error', 'Order failed, your cart is empty.');
        }

        // // Tạo đơn hàng mới
        // $order = new Order();
        // $order->user_id = $id;
        // $order->order_date = now();
        // $order->save();

        // foreach ($userCarts as $cartItem) {
        //     $orderDetail = new OrderDetail();
        //     $orderDetail->order_id = $order->id;
        //     $orderDetail->car_id = $cartItem->car_id;
        //     $orderDetail->price = $cartItem->car->price; // Giả sử bạn lưu giá của xe trong bảng car
        //     $orderDetail->quantity = $cartItem->quantity;
        //     $orderDetail->save();
        // }

        // // Xóa mục khỏi giỏ hàng sau khi đã đặt hàng thành công
        // Cart::where('user_id', $id)->delete();

        // // Redirect về trang thông báo đặt hàng thành công
        // return redirect()->route('order.success')->with('success', 'Order succeessfully.');
    }
}
