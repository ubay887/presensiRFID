<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewAdminController extends Controller
{
    public function dashboard()
    {
        return view("pages.guru.dashboard");
    }
}
