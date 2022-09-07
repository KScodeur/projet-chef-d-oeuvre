<?php 

namespace App\Http\Controllers;

use App\Models\Eleve;

// connection avec la base de donnée
use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EleveController extends Controller{
   //fonction permettant le dashboard
   public function authentification()
   {
       return view('authentification');
   }
    public function index()
    {
        // $eleve=Eleve::get();
        $total=Eleve::count();
        $filles=Eleve::where('sexe','F')->count();
        $garcons=Eleve::where('sexe','M')->count();
        $classes=Classe::get();
        $nbClasses=Classe::count();
        $eleves=Eleve::orderBy("id","desc")->limit(10)->get();
        // $eleve= DB::table('eleves')->find(10);
        // on utilise find(le nombre qu'on veut recuperer) a la place de get()
        // return dd($topTen);
        return view('dashboard',compact('classes','eleves','total','filles','garcons','nbClasses'));
        // c'est la variable qui est compacté ici
    }

    // pour inserer un "élève" c-a-dire l"affichage de la page de formulaire
    public function create()
    {
        $classes=Classe::all();
        // $eleve = new Eleve;
        // $eleve->nom = $request->nom;
        // $eleve->prenom = $request->prenom;
        // $eleve->nationalité = $request->nationalité;
            // return $request->input();
            return compact('classes');
    }

    // cette fonction ci dessous permet d'enregistrer l'élève après l'insertion dans le formulaire.
    public function store(Request $request)
    {
        // $routes = $this->get($request->getMethod());
        $request->validate([
            "classe_id",
            "nom"=>"required",
            "prenom"=>"required",
            "date_naissance",
            "lieu_naissance",
            "nom_pere", 
            "nationalite",
            "sexe", 
            "nom_pere", 
            "pere_profession", 
            "tel",
            "nom_mere",
            "mere_profession",
            "email" 
        ]);
        // lorsque qu'on a declarer les fillable dans le model c'est le cas chez moi
        Eleve::create($request->all()); 
        // où dans le cas contraire,
        //    Eleve::create([
        //        "nom"=>$request->nom,
        //        "prenom"=>$request->nom,
        //        "classe_id"=>$request->nom,
        //    ]);
        // return dd($_POST);

    // reviens sur la meme page ou il y a le formulaire et affiche le message
        return redirect('/eleve{staticBackdrop}')->with("success","élève ajouter avec succès");
    }


    public function getAll()
    {
        $eleves=Eleve::orderBy("nom","asc")->paginate(10);
        $classes=Classe::get();
        return view('getAllEleves',compact('eleves','classes'));

    }
    public function edit($id){
            $classes=Classe::get();
            $eleves=Eleve::find($id);
            return view('update',compact('classes','eleves'));
    }
    public function update(Request $request,$id)
    {
        // $eleve=Eleve::get();
        // $eleves=Eleve::find($id);
        // $eleves->nom = $request->input('nom');
        // $eleves->prenom = $request->input('prenom');
        // $eleves->date_naissance = $request->input('date_naissance');
        // $eleves->lieu_naissance = $request->input('lieu_naissance');
        // $eleves->nom_pere = $request->input('nom_pere');
        // $eleves->nationalite = $request->input('nationalite');
        // $eleves->sexe = $request->input('sexe');
        // $eleves->nom_pere = $request->input('nom_pere');
        // $eleves->pere_profession = $request->input('pere_profession');
        // $eleves->tel = $request->input('tel');
        // $eleves->nom_mere = $request->input('nom_mere');
        // $eleves->mere_profession = $request->input('mere_profession');
        // $eleves->email = $request->input('email');

        // $request->update();
     
        // $eleves::update($request->all()); 
        // $request->update();
        // return $this->to($this->generator->action($action, $parameters), $status, $headers);
        $data = $request->validate([
                 "classe_id",
                 "nom"=>"required",
                 "prenom"=>"required",
                 "date_naissance",
                 "lieu_naissance",
                 "nom_pere", 
                 "nationalite",
                 "sexe", 
                 "nom_pere", 
                 "pere_profession", 
                 "tel",
                 "nom_mere",
                 "mere_profession",
                 "email" ]);

        Eleve::update($request->all()); 

        $eleves=Eleve::get();
        // $eleves->fill($data);
        // $eleves->save();

        
        return redirect('create/list')->with("success","élève ajouter avec succès"); 
    }
    public function delete($id)
    {
        $data=Eleve::find($id);
        $data->delete();
        return redirect('create/list')->with("success","élève supprimer avec succès");
    }
} 
?> 