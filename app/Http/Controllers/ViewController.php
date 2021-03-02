<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
        $this->login();
    }
    public function login()
    {
        return view('login');
    }
}
