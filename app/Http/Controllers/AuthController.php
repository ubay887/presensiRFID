<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        $remember = $request->remember == 'on' ? true : false;
        $username = $request->username; //the input field has name='username' in form
        $password = $request->pass;

        if (Auth::attempt(array('username' => $username, 'password' => $password), $remember) || $request->validate(['username' => 'email:rfc,dns']) && Auth::attempt(array('email' => $username, 'password' => $password), $remember)) {
            //user sent their email or username
            return redirect()->intended('dashboard');
        }
        return back()->withInput($request->only('username', 'pass'));
    }
}
