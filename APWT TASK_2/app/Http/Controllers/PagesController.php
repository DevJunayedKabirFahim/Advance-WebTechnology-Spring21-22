<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function service()
    {
        $service = array("Website Development", "Web Hosting", "Full Stack Web Development Course", "Others Services Coming Soon....");
        return view('service')
            ->with('service', $service);
    }

    public function teams()
    {
        $names = array("Junayed Kabir Fahim", "Ritu Basak", "Shaheen Alam Jony", "Faria Hossain Borna");
        return view('teams')
            ->with('names', $names);
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactmessage(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required|min:5|string',
            'email'=>'required|email',
            'subject'=> 'required|min:5',
            'message'=>'required|min:50'
        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 charcters'
        ],
        );

        return view('pages.registration.contactsuccess');
    }
}
