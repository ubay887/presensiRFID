<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function login(){
        return view('login');
    }
    public function dashboard(){
        return view("template.master");
    }
}
