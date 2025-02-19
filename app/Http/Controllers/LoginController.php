<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login_proses(Request $request) {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            return view('dashboard');
        } else{
            return redirect()->route('login');
        }
    }
    
    public function dashboard() {
        return view('dashboard');
    }

    public function logout() {
        Auth::logout();
        return view('landing');
    }

    public function info() {
        return view('informasi.info');
    }

    public function form() {
        return view('penilaian.form');
    }

    public function tempat() {
        return view('tempat.tempat');
    }

    public function register() {
        return view('auth.register');
    }
}
