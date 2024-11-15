<?php

namespace App\Http\Controllers;

use App\Models\Externalisation;
use Illuminate\Http\Request;

class ExternalisationController extends Controller
{
    //
    public function AddExternalisation(Request $request){
        //registre etudiant
        $request -> validate([

            'commercial' => 'required|string',
            'entreprise' => 'required|string',
            'client' => 'required|string',
            'activite'=>'required|string',
            'mail' => 'required|string|email',
            'fb' => 'required|string',
            'adresse' => 'required|string',
            'existance' =>'required|string',
            'nombreperso' =>'required|integer',
            'chiffre' =>'required|integer',
            'regime' =>'required|string',
            'status' =>'required|string',
            'domaine' =>'required|string',
            'service' =>'required|string',
            'delai' =>'required|string',
            'contact' => ['required','regex:/^(032|033|034|038)[0-9]{7}$/'],],[
                'contact.required' => ['Numero valide'],
                'contact.regex' => ['Veillez entrer un numero correct commencent par 032, 033, 034,038 '],
        ]);
        try{

            //added etudiant

            $externalisation = new Externalisation();

            $externalisation->commmercial = $request->commercial;
            $externalisation->nomentreprise = $request->entreprise;
            $externalisation->nomclient = $request->client;
            $externalisation->activites = $request ->activite;
            $externalisation->contact = $request ->contact;
            $externalisation->mail = $request ->mail;
            $externalisation->fb = $request ->fb;
            $externalisation->adresse = $request ->adresse;
            $externalisation->dureexistence = $request ->existance;
            $externalisation->nombrepersonnel = $request ->nombreperso;
            $externalisation->chiffreaffaire = $request ->chiffre;
            $externalisation->regime = $request ->regime;
            $externalisation->statjur= $request ->status;
            $externalisation->Domaine = $request ->input('domaine');
            $externalisation->servicesouhaiter = $request ->service;
            $externalisation->dureesouhaiter= $request ->delai;
            $externalisation->save();

            return redirect()->route('app_service')->with('success','Merci pour votre information,Nous vous contactera bientot!');
        }catch(\Exception $e){
            return redirect()->route('app_service')->with('fail',$e->getMessage());
        }

    }
    public function listExternalisation(){
        $all_externalisation = Externalisation::All();
        return view('admin.client.clientlist',compact('all_externalisation'));
    }
    public function Externalisation($id){
        $externalisation = Externalisation::find($id);
        return view('admin.client.pageclient',compact('externalisation'));
    }
}

