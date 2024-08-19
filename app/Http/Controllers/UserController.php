<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //Ajout user
    public function register(){

        return view('Home.register');
    }
    public function processregistre(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'datedebut' => 'required|date',
            'profile' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'contact' => 'required',
            'datefin' => 'required|date',
            'password' => 'required|confirmed|min:5',
            'password_confirmation' => 'required',
        ]);
        if($validator->passes()){
            if ($request->hasFile('profile')) {
                $image = $request->file('profile');
                $imageName = time().'.'.$image->extension();
                $image->move(public_path('images'), $imageName);
                $imagePath = 'images/' . $imageName;
            } else {
                $imagePath = null;
            }
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phonenumber = $request->contact;
            $user->date_debut = $request->datedebut;
            $user->date_fin = $request->datefin;
            $user->password = Hash::make($request->password);
            $user->profile = $imagePath;
            $user->role = 'etudiant';
            $user->save();

            return redirect()->route('admin.liste')->with('success','Ajout avec succes');
        }else{
            return redirect()->route('account.register')
            ->withInput()->withErrors($validator);
        }
    }

    //delete user
    public function deleteUser($id){
        try {
            User::where('id',$id)->delete();
            return redirect()->route('admin.liste')->with('success','Un utilisateur suprimer avec succes');
        } catch (\Throwable $e) {
            return redirect()->route('admin.liste')->with('fail',$e->getMessage());
        }
    }
    public function AfficheUser($id){
        $user = User::find($id);
        return view('admin.cruduser.afficheuser',compact('user'));
    }
}
