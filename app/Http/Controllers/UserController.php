<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request) {
        $incomingFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create($incomingFields);
        
        
        return "Hello from login function";
    }
}
