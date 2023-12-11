<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginuser');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Redirect ke halaman setelah login sukses
            return redirect()->route('user.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function showSignupUserForm()
    {
        return view('auth.signupuser');
    }

    public function signupUser(Request $request)
    {
        // Validasi data yang diterima dari formulir pendaftaran
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'age' => 'required|numeric',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Proses pendaftaran pengguna ke dalam basis data
        User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'age' => $request->input('age'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('user.login')->with('success', 'Pendaftaran pengguna berhasil!');
    }
}
