@extends('layouts.app')

@section('content')
     
    <!-- le début du contenu les row sont les lignes -->
    <main class="mt-5 pt-3">
       <div class="container-fluid">
          <!-- le titre du main -->
          <div class="row">
            <div class="col-md-12 fw-bold fs-3 ">Dashboard</div>
          </div>
          <!-- les cadres  -->
          <div class="row">
            <!-- cadres de couleur bleu(primary) -->
            <div class="col-md-3 mb-3">
              <div class="card text-white bg-primary h-100" >
                <div class="card-header" >le nombre total d'élèves</div>
                <div class="card-body">
                  <h1 class="card-title me-2">{{$total}}</h1>
                </div>
              </div>
            </div>
            <!-- cadres de couleur bleu(primary) -->
            <div class="col-md-3 mb-3">
              <div class="card text-white bg-warning h-100">
                <div class="card-header">Garçons</div>
                <div class="card-body">
                  <h1 class="card-title align-end">{{$garcons}}</h1>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card text-white bg-success h-100">
                <div class="card-header">Filles</div>
                <div class="card-body">
                  <h1 class="card-title">{{$filles}}</h1>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card text-white bg-danger h-100">
                <div class="card-header">Classes</div>
                <div class="card-body">
                  <h1 class="card-title">{{$nbClasses}}</h1>
                </div>
              </div>
            </div>
          </div>

  <div class="d-flex col-md-12 fw-bold fs-3 "><span>Le top des dix(10) dernier élèves inscites</span>
  {{-- inscription modal --}}
  <!-- Button trigger modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
inscription
</button></div>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog .modal-dialog-scrollable.modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
          @if ($errors->any())
          <ul>
               @foreach ($errors->all() as $error)
                   <li class="alert alert-success col-md-12 fw-bold fs-3">{{$error}}</li>
                @endforeach
           </ul>
          @endif
          </div>
        <form  method="POST" action="{{route('storeEleve')}}" class="container-fluid">
          <div class="row">
              @if(session()->has("success"))
              <div class="alert alert-success">
               {{session()->get('success')}}
              </div>
           @endif
            {{-- <div class="col-md-12 fw-bold fs-3 ">Dashboard</div> --}}
          </div>
          @csrf
          <h1>CONNEXION</h1>
          <div class="row mb-3">
            <div class="col">
                <label for="">Nom</label>
                <input type="text" class="form-control" placeholder="veiller entrer le nom" name="nom">
            </div>
            <div class="col">
                <label for="">Prénom</label>
                <input type="text" class="form-control" placeholder="mettre la description" name="prenom">
            </div>
        </div>
        <div class="row mb-3">
          <div class="col">
              <label for="">Sexe</label>
              <select name="sexe" id="" class="form-select">
                <option value="">Selectionner le sexe</option>
                <option value="F" name="sexe">Fille</option>
                <option value="M" name="sexe">Garçons</option>
              </select>
          </div>
          <div class="col">
              <label for="">Classe</label>
              <select name="classe_id" id="" class="form-select">
                <option>Selectionner la classe</option>
              @foreach ($classes as $classe)
                <option value="{{$classe->id}}">{{$classe->nom_classe}}</option>
              @endforeach
              </select>
          </div>
      </div>
      <div class="row mb-3">
          <div class="col">
            <label for="">date de naissance</label>
            <input type="date" class="form-control" placeholder="mettre la date de naissance" name="date_naissance">
          </div>
          <div class="col">
            <label for="">Lieu de naissance</label>
            <input type="text" class="form-control" placeholder="mettre la date de naissance" name="lieu_naissance">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
              <label for="">Nationalité</label>
              <input type="text" class="form-control" name="nationalite">
          </div>
          <div class="col">
              <label for="">Nom du père</label>
              <input type="text" class="form-control" name="nom_pere">
          </div>
      </div>
      <div class="row mb-3">
          <div class="col">
              <label for="">Profession du père</label>
              <input type="text" class="form-control" name="pere_profession">
          </div>
          <div class="col">
              <label for="">Numero du père</label>
              <input type="text" class="form-control" name="tel">
          </div>
      </div>
      <div class="row mb-3">
          <div class="col">
              <label for="">Nom de la mère</label>
              <input type="text" class="form-control" name="nom_mere">
          </div>
          <div class="col">
              <label for="">Profession de la mère</label>
              <input type="text" class="form-control" name="mere_profession">
          </div>
      </div>
      <div class="row">
          <div class="col">
              <label for="" >Email</label>
              <input type="text" class="form-control" name="email">
          </div>  
      </div>
      
          
          {{-- <div class="container-button2">
              <div>
                  <button>Annuler</button>
              </div>
              <div>
                  <button type="submit" name="">Envoyer</button>
              </div>
          </div> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary" data-bs-toggle="modal">Enregistrer</button>
        </div>
      </form>
     
    </div>
  </div>
</div>
        {{-- inscription modal --}}
       


       
            {{-- début du tableau --}}
        <div class="row m-3">
          {{-- <div class="m-auto"> --}}
            <table class="table table-striped">
              {{-- table-striped table-hover --}}
              <thead>
                <tr >
                  <th>Numero</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Date de naissance</th>
                  <th>Sexe</th>
                  <th>Classe</th>
                  <th>Matricule</th>
                  <th>Est inscrit</th>
                  <th>Action</th>
                </tr>
              </thead>
            
              <tbody >
                @foreach ($eleves as $eleve)
                <tr>
                    {{-- <td>{{$eleve->id}}</td> --}}
                    <td>{{$loop->index+1}}</td>
                    <td>{{$eleve->nom}}</td>
                    <td>{{$eleve->prenom}}</td>
                    <td>{{$eleve->date_naissance}}</td>
                    <td>{{$eleve->sexe}}</td>
                    <td>{{$eleve->classe->nom_classe}}</td>
                    <td>{{$eleve->prenom}}</td>
                    <td>{{$eleve->prenom}}</td>
                    <td>
                      <a href="{{url('edit/'.$eleve->id)}}" class="btn btn-info">Editer</a>
                      <a href="#" class="btn btn-danger">Supprimer</a>
                    </td>
                  </tr>   
                @endforeach
              </tbody>
            </table>
        {{-- </div> --}}
        </div>
      {{-- fin du tableeau --}}
    </div>
    </main>

@endsection


