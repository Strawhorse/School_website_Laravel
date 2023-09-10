<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class directions extends Controller
{
    public function home() {
        // return view('homepage');
        return '<h1>Home page</h1><a href="/">Back to home</a></br><a href="/about">About page</a></br><a href="/curriculum">Curriculum</a></br><a href="/contact">Contact us</a></br><a href="/login">Login page</a></br>';
    }

    public function about() {
        return '<h1>About page</h1><a href="/">Back to home</a>';
    }

    public function curriculum() {
        return '<h1>Curriculum</h1><a href="/">Back to home</a>';
    }

    public function contact() {
        return '<h1>Contact page</h1><a href="/">Back to home</a>';
    }

    public function login() {
        return '<h1>Teacher login</h1><a href="/">Back to home</a>';
    }
}
