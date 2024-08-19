<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //dashboard pour etudiant
    public function index(){
        return view('profil.dashboard');
    }
}
