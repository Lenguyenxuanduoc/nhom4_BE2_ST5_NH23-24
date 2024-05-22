<?php

namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PasswordReset;
use App\Mail\ForgotPassword;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Mail;
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
  
//     public function check_resetPassword(Request $req)
//    {    $req->validate([
//     'email'=>'required|exists:users'
//    ]);
//        // Tìm kiếm người dùng bằng email từ request
//        $user = User::where('email', $req->email)->first();
    
//            $token=\Str::random(40);
//            $tokenData=[
//             'email'=>$req->email,
//             'tonken'=>$token
//            ];
//            if(PasswordReset::create($tokenData)){
//        Mail::to($req->email)->send(new ResetPassword($user, $token));    
//        } 
//     return redirect()->back()->with('error','');
//     }
   
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



    public function forgot_password()
    { 
        $title = "Exotic Cars | ForGot Password";
        return view('client.user.forgot_password',compact('title'));

    }
    public function check_forgot_password(Request $req)
    {
        $req->validate([
            'email'=>'required|exists:users'
        ]);

        $user = User::where('email',$req->email)->first();

        $token= \Str::random(40);
        $tokenData=[
            'email'=>$req->email,
            'token'=>$token

        ];
        if (PasswordReset::create($tokenData)) {
        Mail::to($req->email)->send(new ForgotPassword($user,$token));
      return redirect()->back()->with('success','Send Mail successfully, please check mail to continue');
    }
    return redirect()->back()->with('error','Something error, please check agian');

    }
    public function reset_password($token){
        $title = "Exotic Cars | Reset Password";
       
        $tokenData=PasswordReset::where('token',$token)->firstOrFail();
        $user= $tokenData->user;
        return view('client.user.reset_password',compact('title'));
    }
    public function check_reset_password($token){
        request()->validate([
            'password'=>'required|min:4'
        ]);
        $tokenData=PasswordReset::checkToken($token);
        $user=$tokenData->user;
        $data=[
            'password'=>bcrypt(request(('password')))
        ];
        $check=$user->update($data);
        if($check){
            return redirect()->back()->with('success','Update successfuly');
          }
         return redirect()->back()->with('error','Something error, please check agian');
    }

}
