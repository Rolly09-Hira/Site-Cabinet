<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //dashboard pour etudiant
    public function index(){
        $user = Auth::User();
        $formation = Formation::where('id_matiere', $user->id_matiere)->get();
        return view('profil.dashboard', compact('formation'));
    }

}
