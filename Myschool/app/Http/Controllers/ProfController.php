<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Models\Professeur;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Models\Matiere_professeur;
use Illuminate\Support\Facades\Session;

class ProfController extends Controller
{
    public function create()
    {
        if(Session::has('loginId')){
            $data=Utilisateur::where('id',Session::get('loginId'))->first();
            }else{
                return redirect('/');
            }
        // $matieres=Matiere::get();
        $matieres=Matiere::with('professeurs')->get();

        return  view('createProf',compact('data','matieres'));
    }
    public function store(Request $request)
    {
        // $routes = $this->get($request->getMethod());
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "date_naissance",
            "sexe", 
            "grade", 
            "specialite" 
        ]);                                                         
        // lorsque qu'on a declarer les fillable dans le model c'est le cas chez moi
        Professeur::create($request->all()); 
        // où dans le cas contraire,
        //    Eleve::create([
        //        "nom"=>$request->nom,
        //        "prenom"=>$request->nom,
        //        "classe_id"=>$request->nom,
        //    ]);
        // return dd($_POST);

    // reviens sur la meme page ou il y a le formulaire et affiche le message
        return back()->with("success","Professeur ajouter avec succès");
    }
    public function getAll(Request $request){
        if(Session::has('loginId')){
            $data=Utilisateur::where('id',Session::get('loginId'))->first();
            }else{
                return redirect('/');
            }

            $search=$request['search'] ?? "";
            if ($search !="") {
                // where
                $professeurs=Professeur::where('nom','LIKE','%'.$search.'%')
                                        ->orwhere('prenom','LIKE','%'.$search.'%')
                                        ->orwhere('sexe','LIKE','%'.$search.'%')
                                        ->orwhere('grade','LIKE','%'.$search.'%')
                                        ->orwhere('specialite','LIKE','%'.$search.'%')
                                        ->get(); 
                $matieres=Matiere::with('professeurs')->get();
                
            }else{
                $matieres=Matiere::with('professeurs')->get();
                $professeurs=Professeur::get();
            }
        // $professeurs->with('matieres')->get();
        // $professeurs->with('matieres')->get();
        return view('profList',compact('data','matieres','professeurs','search'));
    }
}
