<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Directions extends Controller
{
    public function home() {
        return view('home');
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
