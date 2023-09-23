<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        Log::info('start');

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        Log::info('validated');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Log::info('success');

            return redirect()->intended('home');
        }

        Log::info('failed');

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function signupPost(Request $request)
    {
        $values = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        if (User::create($values)) {
            return redirect('login');
        }

        return back()->withErrors($values);
    }
}
