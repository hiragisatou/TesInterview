<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register()
    {
        return view('register');
    }

    public function v_login()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:user',
            'password' => 'required',
            'phone' => 'required',
            'photo' => 'image|file|max:10000',
        ]);

        $user = new User;
        $user->firstname = $validated['firstname'];
        $user->lastname = $validated['lastname'];
        $user->username = $validated['username'];
        $user->password = bcrypt($validated['password']);
        $user->phone = $validated['phone'];
        $user->photo = $request->file('photo')->store('profil');
        $user->save();

        return redirect('/login')->with('success', 'Registration Successful');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->with('error', 'Username or Password is Not Correct!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
