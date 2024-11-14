<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Matiere;
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
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:512000',
            'pdf' => 'required|mimetypes:application/*',
          ]);
          if($validate->passes()){
            $videoPath = $request->file('video')->store('videos', 'public');
            if($request->hasFile('video')){
                $video = $request->file('video');
                $videoName = time().'.'.$video->extension();
                $video->move(public_path('videos'),$videoName);
                $videoPath = 'videos/' . $videoName;
            }else{
                $videoPath = null;
            }
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
            $formation->video = $videoPath;
            $formation->pdf = $pdfPath;
            $formation->save();

            return redirect()->route('admin.listeformation')->with('success','Ajout avec succes');
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
            Formation::where('formation_ID',$id)->delete();
            return redirect()->route('admin.listeformation')->with('success','Formation supprimer avec succes');
        } catch (\Throwable $e) {
            return redirect()->route('admin.listeformation')->with('fail',$e->getMessage());
        }
    }
    public function ajoutMatiere(){
        return view('admin.formation.matiere');
    }
    public function processajoutmat(Request $request){
        $validate = Validator::make($request->all(),[
            'id_matiere' => 'required|unique:matiere',
            'Nom_matiere' => 'required',
        ]);
        if($validate->passes()){
            $matiere = new Matiere();
            $matiere->id_matiere = $request->id_matiere;
            $matiere->Nom_matiere = $request->Nom_matiere;
             $matiere->save();

             return redirect()->route('admin.listematiere')->with('success','Ajout Matiere avec succes');
        }else{
            return redirect()->route('matiere.ajout')
            ->withInput()->withErrors($validate);
        }
    }
    public function listMatiere(){
        $all_matiere= Matiere::All();
          return view('admin.formation.listematiere',compact('all_matiere'));
    }
    public function deleteMatiere($id){
        try {
            Matiere::where('id_matiere',$id)->delete();
            return redirect()->route('admin.listematiere')->with('success','Matiere supprimer avec succes');
        } catch (\Throwable $e) {
            return redirect()->route('admin.listematiere')->with('fail',$e->getMessage());
        }
    }
}
