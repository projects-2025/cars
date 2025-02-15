<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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



    public function checklogin(Request $request)
    {

        $request->validate([

            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {

            return redirect()->intended($this->redirectTo);
        } else {

            return redirect()
                ->back()
                ->withInput(['email' => $request->email])
                ->withErrors('errorResponse', 'these credentails do not match');
        }
    }



    // public function checklogin(Request $request)
    // {
    //     $validated = $request->validate([
    //       'email' => 'required|email',
    //       'password' => 'required|string|min:8',
    //     ]);

    //     if (Auth::guard('admin')->attempt($validated )) {
    //       $request->session()->regenerate();

    //       return redirect()->route($this->redirectTo);
    //     }

    //     throw ValidationException::withMessages([
    //       'credentials' => 'Sorry, incorrect credentials',
    //     ]);
    // }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('dashboard.login');
    }
}
