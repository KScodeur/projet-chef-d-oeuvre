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
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">total élèves{{$total}}</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <!-- cadres de couleur bleu(primary) -->
            <div class="col-md-3 mb-3">
              <div class="card text-white bg-warning h-100">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Primary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card text-white bg-success h-100">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Primary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card text-white bg-danger h-100">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Primary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- fin des cadres de couleurs  -->
          {{-- <!-- debut du chart    -->
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">Charts</div>
                <div class="card-body">
                  <canvas class="chart" width="400" height="200"></canvas>
                </div>
              </div>  
            </div>
          </div> --}}
          <div class="col-md-12 fw-bold fs-3 ">Le top des dix(10) dernier élèves inscites</div>
        
       


       
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
                      <a href="#" class="btn btn-info">Editer</a>
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


