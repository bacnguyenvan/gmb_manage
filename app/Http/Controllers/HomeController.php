<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('home.dashboard');
    }

    public function connectAccount()
    {
        return view('home.connect_account');
    }

    public function reply()
    {
        return view('home.reply');
    }
}
