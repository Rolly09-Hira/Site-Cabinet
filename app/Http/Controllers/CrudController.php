<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class CrudController extends Controller
{
    //
    public function listeUser(){
      $all_users = User::All();
        return view('admin..cruduser.user',compact('all_users'));
    }
    /**
     * Met à jour les informations de l'utilisateur.
     */

    public function edituser($id){
        $user = User::find($id);

        return view('admin.cruduser.edituser',compact('user'));
     }
    public function updateUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'password' => 'nullable|string|confirmed|min:8',
            'datedebut'=> 'required|date',
            'datefin'=> 'required|date|after:datedebut|after:today',
            'password_confirmation' => 'nullable',
            'phonenumber' => ['required','regex:/^(032|033|034|038)[0-9]{7}$/'],],[
                'datefin.after'=>['La date de fin de formation invalide'],
                'phonenumber.required' => ['Numero valide'],
                'phonenumber.regex' => ['Veillez entrer un numero correct commencent par 032, 033, 034,038 '],
        ]);
        try{
            User::where('id',$request->user_id)->update([

                'name' => $request->name,
                'email' => $request->email,
                'date_debut' => $request->datedebut,
                'date_fin' => $request->datefin,
                'phonenumber' => $request->phonenumber,

            ]);

        return redirect()->route('admin.liste')->with('success', 'Utilisateur mis à jour avec succès !');
        }catch(\Exception $e){
            return redirect()->route('admin.liste')->with('fail','Erreur de modification,mail deja prise ou autre!!!!!!');
        }
    }
}
