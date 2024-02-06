<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationFrom()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');

        return redirect()->route('welcome',['firstName' => $firstName, 'lastName' => $lastName]);
        
    }

    public function welcome(Request $request)
    {
        return view('welcome', [
        'firstName' => $request->input('first_name'),
        'lastName' => $request->input('last_name'),

   ]);
}
}