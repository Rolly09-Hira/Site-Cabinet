<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('home.home');
    }
    public function about()
    {
        return view('home.about');
    }

    public function service()
    {
        return view('home.service');
    }
    public function servicebachelier(){
        return view('home.servicebachelier');
    }
}
