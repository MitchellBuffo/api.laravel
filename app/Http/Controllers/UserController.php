<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        // $user = Auth::user();
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6', 'max:25']
        ]);

        $user = User::create($request->all());

        event(new Registered($user));
        Auth::login($user);


        return redirect()->route('verification.notice');
    }
    public function login()
    {
        return view('user.login');
    }
    public function dashboard()
    {
        return view('user.dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
