<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        //jika email dan password benar
        if (Auth::attempt($validate)) {
            //jika berhasil login
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])-> withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}                                    