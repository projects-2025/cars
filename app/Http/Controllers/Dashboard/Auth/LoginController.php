<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{

    protected $redirectTo = 'dashboard/home';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function login()
    {
        return view('dashboard.pages.auth.login');
    }





    public function checkLogin(Request $request)
    {


        $request->validate([

            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:8',
        ]);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {

            return redirect()->intended($this->redirectTo);
        } else {
            // dd('Login Successful');
            return redirect()
                ->back()
                ->withInput($request->only('email'))
                ->withErrors(['errorResponse' => ['These credentials do not match our records.']]);
        }
    }
    public function changeAuth()
    {
        return view('dashboard.pages.auth.updateAuth');
    }

    public function updateAuth(Request $request)
    {
        $validated =  $request->validate([

            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        $hashedPassword = Auth::admin()->password;
        if (Hash::check($request->old_password, $hashedPassword)) {
            $admins = Admin::find(Auth::id());
            $admins->password = bcrypt($request->new_password);
            $admins->save();
            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'Old Password is not correct');
        }

        // if($request->new_password == $request->confirm_password ){
        //     $admin = Admin::getSingle(Auth::admin()->id);
        //     if(Hash::check($request->old_password , $admin->password)){
        //         $admin->password = Hash::make($request->new_password);
        //         $admin->save();
        //         return redirect()->back()->with('success', 'Password Successfully Update');

        //     } else {
        //         return redirect()->back()->with('error', 'Old Password is not correct');
        //     }
        // }else {
        //     return redirect()->back()->with('error', 'Passwords don\'t match');
        // }
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('dashboard.login');
    }
}
