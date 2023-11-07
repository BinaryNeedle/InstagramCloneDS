<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $field = filter_var($request->username_or_email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $user = User::where($field, $request->username_or_email)->first();

        if (!$user) {
            return back()->withErrors([
                'username_or_email' => 'The provided username or email does not match our records.',
            ]);
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'password' => 'The provided password does not match our records.',
            ]);
        }

        Auth::login($user);

        return redirect()->intended('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
