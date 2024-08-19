<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //login page pour etudiants
    public function index(){
        return view('Home.login');
    }
    //Authenticate user
    public function authenticate(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($validator->passes()){

            if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
                return redirect()->route('account.dashboard');

            }else{
                return redirect()->route('account.login')
                ->with('error','Email ou mots de passe incorrect!');
            }

        }else{
            return redirect()->route('account.login')
            ->withInput()->withErrors($validator);
        }
    }
    ///page d'insertion des etudiant isncrit


    public function logout(){
        Auth::logout();
        return redirect()->route('account.login');
    }

}
