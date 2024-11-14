<?php

namespace App\Http\Controllers;

use App\Models\servext;
use Illuminate\Http\Request;

class servextController extends Controller
{
    public function gestionservext(){
        return view('admin.gestionservext.servext');
    }
    //ajout
    public function ajoutservext(Request $request){
        $request -> validate([
            'id_serv' => 'required|string|unique',
            'nom_serv' => 'required|string',
            'desc_serv' => 'required|string',
            'av_serv' => 'required|string',
            'autre_serv' => 'nullable',
            'fontserv' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        try{
            if ($request->hasFile('fontserv')) {
                $image = $request->file('fontserv');
                $imageName = time().'.'.$image->extension();
                $image->move(public_path('images'), $imageName);
                $imagePath = 'images/' . $imageName;
            } else {
                $imagePath = null;
            }
            $new_servext = new servext();
            $new_servext->id_ext = $request->id_serv;
            $new_servext->nom_ext = $request->nom_serv;
            $new_servext->desc_ext = $request->desc_serv;
            $new_servext->avantage = $request->av_serv;
            $new_servext->autre = $request->autre_serv;
            $new_servext->image_ext = $imagePath;
            $new_servext->save();

            return redirect()->route('gestionserv')->with('success','nouveau service ajouter avec succes');
        }catch(\Exception $e){
            return redirect()->route('gestionserv')->with('fail',$e->getMessage());
        }
    }
}
