<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{


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
        $validated = $request->validate([
          'email' => 'required|email',
          'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($validated)) {
          $request->session()->regenerate();

          return redirect()->route('dashboard.home');
        }

        throw ValidationException::withMessages([
          'credentials' => 'Sorry, incorrect credentials',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('dashboard.login');
    }


}
