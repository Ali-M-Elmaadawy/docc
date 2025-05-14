<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->only(['showLoginForm', 'login']);
        $this->middleware('auth:admin')->only(['showChangePasswordForm', 'changePassword', 'logout']);
    }



    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request) {

//         dd($request);
        $validator = \Validator::make($request->all() , [

            'username'  => 'required',
            'password'  => 'required'

        ])->validate();

        $remember_me = $request->has('remember') ? true : false;
        if(auth()->guard('admin')->attempt(['username' => $request->username , 'password' => $request->password ], $remember_me)) 
        {

            return redirect()->route('admin.home');

        } else {

            session()->flash('error' , 'Wrong Credentials');

            return back()->withInput();
        }

    }

    public function logout(Request $request)
    {
        if(Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function showChangePasswordForm()
    {
//        dd('channge');
        return view('admin.change-password');
    }
    
    public function changePassword(Request $request)
    {
        $admin = Auth::guard('admin')->user();

        // Validate the request
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Check if the current password matches the one stored in the database
        if (!Hash::check($request->current_password, $admin->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect');
        }

        // Update the password in the database
        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return redirect()->back()->with('success', 'Password updated successfully!');
    }
}
