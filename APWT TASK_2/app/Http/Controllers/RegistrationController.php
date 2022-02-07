<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('pages.registration.registration');
    }

    public function regsuccessfull(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required|min:5|string',
            'email'=>'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'=> 'required|string|min:8'
        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 charcters'
        ],
        [
            'password.required'=>'Please put your password',
            'password.min'=>'Password must be greater than or equal 8 charcters'
        ]
    );
        return view('pages.registration.registersuccess');
    }

}
