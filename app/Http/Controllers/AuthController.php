<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function postLogin(Request $request)
    {
        $remember = $request->remember == 'on' ? true : false;
        $username = $request->username; //the input field has name='username' in form
        $password = $request->pass;
        
        if (Auth::guard('admin')->attempt(array('username' => $username, 'password' => $password), $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('admin\dashboard');
        }
        if (Auth::guard('guru')->attempt(array('username' => $username, 'password' => $password), $remember) || $request->validate(['username' => 'email:rfc,dns']) && Auth::guard('guru')->attempt(array('email' => $username, 'password' => $password), $remember)) {
            //guru sent their email or username
            $request->session()->regenerate();
            return redirect()->intended('guru\dashboard');
        }            
        return back()->withInput($request->only('username', 'pass'));
    }
    public function postLogout(){
        auth()->guard('admin')->logout();
        auth()->guard('guru')->logout();
        session()->flush();

        return redirect()->route('login');
    }
}
