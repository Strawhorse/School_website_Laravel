<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Directions extends Controller
{
    public function home() {
        return view('home');
        // return '<h1>Home page</h1></br><a href="/about">About page</a></br><a href="/curriculum">Curriculum</a></br><a href="/contact">Contact us</a></br><a href="/login">Login page</a></br>';
    }

    public function about() {
        return view('about');
    }

    public function curriculum() {
        return view('curriculum');
    }

    public function contact() {
        return view('contact');
    }

    public function login() {
        return view('login');
    }
}
