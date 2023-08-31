<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Display the login page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $validated_data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $valid = DB::statement('SELECT password FROM users WHERE username = "' . $validated_data['username'] . '" AND password = "' . $validated_data['password'] . '"');
        if (!$valid) {
            return redirect()->route('login')->withErrors('Incorrect credentials.');
        }

        $user = User::where('username', $validated_data['username'])->first();
        Auth::login($user);
        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate(true);
        return redirect()->route('home');
    }
}
