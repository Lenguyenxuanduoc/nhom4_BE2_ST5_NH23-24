<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.user.list', compact('users'));
    }

    public function toggleAdmin($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->permission = !$user->permission;
            $user->save();

            if ($user->permission) {
                Session::flash('success', 'Admin rights granted successfully.');
            } else {
                Session::flash('success', 'Admin rights revoked successfully.');
            }
        } else {
            Session::flash('error', 'User not found.');
        }

        return redirect()->route('users.index');
    }
}
