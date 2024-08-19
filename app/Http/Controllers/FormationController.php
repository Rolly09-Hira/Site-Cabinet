<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormationController extends Controller
{
    //
    public function ajoutformation(){
        return view('admin.formation.formation');
    }
    public function processajoutformation(Request $request){
          $validate = Validator::make($request->all(),[
            'titre' => 'required',
            'idmatiere' => 'required',
            //'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000',
            'pdf' => 'required|mimetypes:application/*',
          ]);
          if($validate->passes()){
            //$videoPath = $request->file('video')->store('videos', 'public');
            if ($request->hasFile('pdf')) {
                $pdf = $request->file('pdf');
                $pdfName = time().'.'.$pdf->extension();
                $pdf->move(public_path('files'), $pdfName);
                $pdfPath = 'files/' . $pdfName;
            } else {
                $pdfPath = null;
            }
            $formation = new Formation();
            $formation->titre = $request->titre;
            $formation->id_matiere = $request->idmatiere;
            //$formation->video = $videoPath;
            $formation->pdf = $pdfPath;
            $formation->save();

            return redirect()->route('formation.ajout')->with('success','Ajout avec succes');
        }else{
            return redirect()->route('formation.ajout')
            ->withInput()->withErrors($validate);
        }
    }
    public function listFormation(){
        $all_formation = Formation::All();
        return view('admin.formation.listeformation',compact('all_formation'));
    }
    public function deleteFormation($id){
        try {
            Formation::where('id',$id)->delete();
            return redirect()->route('admin.listeformation')->with('success','Formation supprimer avec succes');
        } catch (\Throwable $e) {
            return redirect()->route('admin.listeformation')->with('fail',$e->getMessage());
        }
    }
}
