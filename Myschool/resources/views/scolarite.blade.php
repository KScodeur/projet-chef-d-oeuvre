@extends('layouts.app')

@section('content')
<main class="mt-5 pt-3 ">
    <h1>
        La liste de tous les classes
    </h1>
    <table>
        <thead>
            <tr>
                <th>N</th>
                <th>Classe</th>
                <th>Scolarité de la Classe</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($classes as $classe)
               <tr>
                   <td>{{$classe->id}}</td>
                   <td>{{$classe->nom_classe}}</td>
                   <td>{{$classe->scolarite}}</td>
                   <td> 
                    <a href="#" class="btn btn-info">Editer</a>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                  </td>
               </tr>
           @endforeach

          
             
        </tbody>
    </table>
    <div>
        <h2> je peu faire un button d'ajout de classe</h2>
     </div>
</main>
@endsection