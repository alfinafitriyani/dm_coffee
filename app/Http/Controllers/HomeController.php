<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function redirects()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            $users = User::all(); // Fetch all users for the admin view
            return view('admin.adminhome', compact('users'));
        } else {
            return view('home');
        }
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);

        if ($user->usertype == '1') {
            return redirect()->back()->with('error', 'Admin users cannot be deleted');
        }

        $user->delete();
        return redirect()->back()->with('success', "User '{$user->name}' deleted successfully");
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edituser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->usertype = $request->input('usertype');
        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }
}
