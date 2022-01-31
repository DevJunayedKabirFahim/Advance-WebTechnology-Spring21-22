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
}
