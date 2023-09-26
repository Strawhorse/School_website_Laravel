<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    //
    public function query(Request $request) {

        $incomingFields = $request->validate([
            'person_name' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'contact_message' => 'required'
        ]);

        // model to perform CRUD on data
        User::create($incomingFields);
        


        return "Hello, your query works";

    }
}
