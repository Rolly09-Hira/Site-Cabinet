<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    //
    public function listeUser(){
      $all_users = User::All();
        return view('admin..cruduser.user',compact('all_users'));
    }
}
