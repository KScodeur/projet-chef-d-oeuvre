<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MatiereController extends Controller
{
    public function read()
    {   if(Session::has('loginId')){
        $data=Utilisateur::where('id',Session::get('loginId'))->first();
        }else{
            return redirect('/');
        }
        $matieres=Matiere::get();
        return view('matieres',compact('matieres','data'));
    }
}
