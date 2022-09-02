@extends('layouts.app')

@section('content')
<main class="mt-5 pt-3 ">
    <h1>
        La liste des élèves par classes
    </h1>
    @foreach ($classes as $classe)
    <span class="btn btn-primary btn-lg me-2">{{$classe->nom_classe}}</span>

    
    @endforeach
</main>
@endsection