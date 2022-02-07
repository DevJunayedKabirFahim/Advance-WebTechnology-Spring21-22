<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('pages.registration.login');
    }

    public function loginvalidation(Request $request)
    {
        $validate = $request->validate([
            'email'=>'required|email',
            'password'=> 'required|string|min:8'
        ],
        [
            'password.required'=>'Please put your password',
            'password.min'=>'Password must be greater than or equal 8 charcters'
        ]
    );
    
    return "426 | Upgrade Required";

    }
}
