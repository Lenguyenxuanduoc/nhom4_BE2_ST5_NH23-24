<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['username'=>$request->username, 'password'=>$request->password])){
            $user = Auth::user();
            if ($user->permission == 1){
                return redirect()->route('home')->with('success', 'Login successfully.');
            }
            else{
                return redirect()->route('home')->with('success', 'Login successfully.');
            }
        }
        return redirect()->route('home')->with('error', 'Login failed.');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function resetPassword(){
        $title = "Exotic Cars | Reset Password";
        return view('client.user.reset-password', compact('title'));
    }

    public function register(){
        $title = "Exotic Cars | Register";
        return view('client.user.register', compact('title'));
    }

    public function store(Request $request){
        $users = User::get();

        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');
        $name = $request->input('name');

        foreach ($users as $user) {
            if ($user->email == $email){
                return redirect()->route('register')->with('error', 'Email "'.$email.'" has been used in 1 account.');
            }

            if ($user->username == $username){
                return redirect()->route('register')->with('error', 'Username "'.$username.'" has been used.');
            }
        }
        
        // if (preg_match('/[0-9\W]/', $name)){
        //     return redirect()->route('register')->with('error', '"'.$name.'" name is invalid.');
        // }

        if (strlen($password) < 8){
            return redirect()->route('register')->with('error', 'Password must have more than 8 characters.');
        }

        $user = new User();
        $user->username = $username;
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->address = null;
        $user->permission = false;
        
        try {
            $user->save();
            return redirect()->route('register')->with('success', 'Register successfully.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('register')->with('error', 'Failed to register. Please try again.');
        }
    }
}
