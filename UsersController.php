<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Database\QueryException;

class UsersController extends Controller
{
    public function index()
    {
        $user = Users::all();
        return view('users.index')->with('users',$user);
        // $user = User::paginate(10);
        // return view('admin.category.list', compact('user'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // Chuyển đến trang add
    public function add()
    {
        return view('admin.user.add');
    }

    // Xử lý chức năng add
    public function store(Request $request)
    {
        $user = new Users();
        $user->name = $request->input('name');
        // dd($category);
        try {
            $user->save();
            return redirect()->route('user.index')->with('success', 'The category has been added successfully.');
        } catch (QueryException $e) {
            return redirect()->route('user.index')->with('error', 'Failed to add category. Please try again.');
        }
    }

    // Chuyển đến trang edit
    public function edit($id)
    {
        $user = Users::find($id);
        if (!$user) {
            abort(404);
        }
        return view('admin.user.edit', compact('user'));
    }

    // Xử lý chức năng update
    public function update(Request $request, $id){
        $user = new Users();
        $user->name = $request->input('name');

        try {
            $user->save();
            return redirect()->route('user.index')->with('success', 'The category has been edited successfully.');
        } catch (QueryException $e) {
            return redirect()->route('user.index')->with('error', 'Failed to edit category. Please try again.');
        }
    }

    // Xử lý chức năng delete
    public function delete($id){
        $user = Users::find($id);
        try {
            $user->delete();
            return redirect()->route('user.index')->with('success', 'The category has been deleted successfully.');
        } catch (QueryException $e) {
            return redirect()->route('user.index')->with('error', 'Failed to delete category. Please try again.');
        }
    }
}
