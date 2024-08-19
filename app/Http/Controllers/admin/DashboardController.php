<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Etudiant;
use App\Models\Externalisation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //dashboard pour admin
     public function index(){
        $externalisations = Externalisation::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("MONTH(created_at)"), DB::raw("MONTHNAME(created_at)"))
        ->pluck('count', 'month_name');


        $inscrit = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("MONTH(created_at)"), DB::raw("MONTHNAME(created_at)"))
        ->pluck('count', 'month_name');

        $etudiant = Etudiant::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("MONTH(created_at)"), DB::raw("MONTHNAME(created_at)"))
        ->pluck('count', 'month_name');
        $labeletu = $etudiant->keys();
        $dataetu = $etudiant->values();
        $labels = $externalisations->keys();
        $data = $externalisations->values();
        $label = $inscrit->keys();
        $datas = $inscrit->values();
        $nbruser = User::count();
        $inscription = Etudiant::count();
        $externalisation = Externalisation::count();
        return view('admin.dashboard',compact('externalisation', 'nbruser', 'inscription','labels','data','label','datas','labeletu','dataetu'));
    }
}
