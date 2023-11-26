<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    public function formLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|exists:admins',
            'password' => 'required'
        ]);


        if (Auth::guard('admin')->attempt($credentials)) {
            if (Auth::guard('admin')->user()->role == 'admin') {
                $request->session()->regenerate();
                return redirect()->intended(config('admin.path'));
            }
            if (Auth::guard('admin')->user()->role == 'tamu') {
                return redirect()->route('home');
            }
        }




        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
