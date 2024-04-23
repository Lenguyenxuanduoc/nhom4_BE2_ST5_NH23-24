<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
            $user = Auth::user();
            if ($user->permission == 1){
                return redirect()->route('home');
            }
        }
        return back();
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
