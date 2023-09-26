<?php

namespace App\Http\Controllers;

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


        return "Hello, your query works";

    }
}
