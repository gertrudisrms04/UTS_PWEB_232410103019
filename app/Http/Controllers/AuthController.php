<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
        return view('layouts.login');
    }
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
            $request->session()->put('login', true);
            $request->session()->put('email', $email);

            return redirect()->route('dashboard', ['email' => $email]);

    }

    public function dashboard(Request $request)
    {
        if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
            return redirect('/login')->with('error', 'Akses ditolak. Login dulu.');
        }
        $email = $request->query('email');
        return view('dashboard', compact('email'));
    }

    public function logout()
    {
        session_unset();
        return redirect('/')->with('error', 'Logout berhasil');
    }
}
