<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'description' => 'Welcome to our website. Explore our content and services.',
        ]);
    }
}
