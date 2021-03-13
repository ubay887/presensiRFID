<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function postLogout()
    {


        if (Auth::guard('admin')->user()) {
            auth()->guard('admin')->logout();
        } elseif (Auth::guard('guru')->user()) {
            auth()->guard('guru')->logout();
        }
        session()->flush();

        return redirect()->route('login');
    }
    public function valueAuth()
    {
        if (Auth::guard('admin')->user()) {
            $time = Carbon::parse(session()->get(Auth::guard('admin')->user()->id. 'last_login_at'))->diffForHumans();
        } elseif (Auth::guard('guru')->user()) {
            $time = Carbon::parse(Auth::guard('guru')->user()->last_login_at)->diffForHumans();
        }
        return response()->json(compact('time'));
    }
}
