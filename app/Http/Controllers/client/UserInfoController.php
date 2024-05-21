<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class UserInfoController extends Controller
{
    public function index(){
        $title = "Exotic Cars | User Info";
        $user = Auth::user();
        return view('client.user.info', compact('user', 'title'));
    }


    public function update(Request $request, $id){
        $user = User::find($id);

        $user->username = $request->input('username'); 
        $user->name = $request->input('name'); 
        $user->email = $request->input('email'); 
        $user->address = $request->input('address'); 

        $users = User::get();
        foreach ($users as $item) {
            if ($item->username == $user->username && $item->id != $user->id){
                return redirect()->back()->with('error', 'Username "'.$user->username.'" already exists. Please choose a different one.');
            }

            if ($item->email == $user->email && $item->id != $user->id){
                return redirect()->back()->with('error', 'Email "'.$user->email.'" is already in use by another account. Please choose a different one.');
            }
        }

        // dd($user);
        try {
            $user->save();
            return redirect()->back()->with('success', 'Update info successfully.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Failed to edit info. Please try again.');
        }
    }


    public function changePassword(Request $request, $id){
        $user = User::find($id);

        $current_password = $request->input('current_password'); 
        $new_password = $request->input('new_password'); 
        $repeat_password = $request->input('repeat_password'); 

        // Kiểm tra user nhập mk cũ có đúng vs mk hiện tại của user không 
        if (!Hash::check($current_password, $user->password)){
            return redirect()->back()->with('error', 'The current password is not correct');
        }

        // Kiểm tra repeat password mà user nhập có trùng vs new password không
        if ($new_password != $repeat_password){
            return redirect()->back()->with('error', 'The new password does not match.');
        }

        $user->password = Hash::make($new_password); 
        // dd($user);
        try {
            $user->save();
            return redirect()->back()->with('success', 'Change password successfully.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Failed to change password. Please try again.');
        }
    }
}
