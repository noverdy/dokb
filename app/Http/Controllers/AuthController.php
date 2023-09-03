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

        $valid = DB::select('SELECT * FROM users WHERE username = "' . $validated_data['username'] . '" AND password = "' . $validated_data['password'] . '"');
        if (!$valid) {
            return redirect()->route('login')->withErrors('Incorrect credentials.');
        }

        Auth::login(User::where(get_object_vars($valid[0]))->first());
        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate(true);
        return redirect()->route('home');
    }
}
