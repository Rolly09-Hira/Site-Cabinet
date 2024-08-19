<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
     //page de  registre etudiant
     public function inscrire(){

        return view('Home.inscrire');
    }
    public function AddEtudiant(Request $request){
        //registre etudiant
        $request -> validate([

            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'full_name' => 'required|string',
            'adresse' => 'required|string',
            'email' => 'required|email|unique:etudiants',
            'categorie'=>'required|string',
            'contact' => 'required|string',
            'fb' => 'required|string',
            'age' => 'required|string',
            'option' =>'required|string',
            'Module' =>'required|string',
            'Niveau' =>'required|string',



        ]);
        try{

            if ($request->hasFile('Image')) {
                $image = $request->file('Image');
                $imageName = time().'.'.$image->extension();
                $image->move(public_path('images'), $imageName);
                $imagePath = 'images/' . $imageName;
            } else {
                $imagePath = null;
            }

            //added etudiant

            $new_etudiant = new Etudiant();
            $new_etudiant->Image = $imagePath;
            $new_etudiant->name = $request->full_name;
            $new_etudiant->adresse = $request->adresse;
            $new_etudiant->email = $request->email;
            $new_etudiant->contact = $request ->contact;
            $new_etudiant->categorie = $request ->input('categorie');
            $new_etudiant->fb = $request ->fb;
            $new_etudiant->age = $request ->age;
            $new_etudiant->option = $request ->input('option');
            $new_etudiant->Module = $request ->input('Module');
            $new_etudiant->Niveau = $request ->input('Niveau');
            $new_etudiant->save();

            return redirect()->route('service.bachelier')->with('success','Inscription reussi,Veullez approcher Notre Bureau pour confirmer votre inscription');
        }catch(\Exception $e){
            return redirect()->route('service.bachelier')->with('fail',$e->getMessage());
        }

    }
    public function listEtudiant(){
        $all_etudiants = Etudiant::All();
        return view('admin.inscription',compact('all_etudiants'));
    }
    public function AfficheEtudiant($id){
        $etudiant = Etudiant::find($id);
        return view('admin.cruduser.afichetudiant',compact('etudiant'));
    }
    public function deleteEtudiant($id){
        try {
            Etudiant::where('id',$id)->delete();
            return redirect()->route('admin.listeEtudiant')->with('success','User deleted successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.listeEtudiant')->with('fail',$e->getMessage());
        }
    }
    public function formmodifier($id){
        $etudiant = Etudiant::find($id);
        return view('admin.cruduser.editetudiant',compact('etudiant'));
    }
    public function EditEtudiant(Request $request){
        //Editer user
        $request -> validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'contact' => 'required|string',
            'categorie' => 'required|string',
            'fb' => 'required|string',
            'adresse' => 'required|string',
            'Age' => 'required|string',
            'option' => 'required|string',
            'Module' => 'required|string',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Niveau' => 'required|string',
        ]);
        try{
            if ($request->hasFile('Image')) {
                $image = $request->file('Image');
                $imageName = time().'.'.$image->extension();
                $image->move(public_path('images'), $imageName);
                $imagePath = 'images/' . $imageName;
            } else {
                $imagePath = null;
            }

            //update user
            $update_etudiant = Etudiant::where('id',$request->etudiant_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'contact' => $request->contact,
                'categorie' => $request->categorie,
                'fb' => $request->fb,
                'Age' => $request->age,
                'option' => $request->option,
                'Module' => $request->Module,
                'Image' => $request->$imagePath,
                'Niveau' => $request->Niveau,
            ]);


            return redirect('admin.listeEtudiant')->with('success','Modification reussi');
        }catch(\Exception $e){
            return redirect('admin.listeEtudiant')->with('fail',$e->getMessage());
        }

    }

}
