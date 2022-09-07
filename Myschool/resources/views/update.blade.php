@extends('layouts.app')

@section('content')
<main class="mt-5 pt-3 ">
           
    <div>
       @if ($errors->any())
       <ul>
            @foreach ($errors->all() as $error)
                <li class="alert alert-success col-md-12 fw-bold fs-3">{{$error}}</li>
             @endforeach
        </ul>
       @endif
       
    </div>
    <form  method="POST" action="{{url('update-data/'.$eleves->id)}}" class="container-fluid">
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
        @method('PUT')
        <div>
            <div><label for="">classe</label></div>
            <div>
                <select name="classe_id" >
                    @foreach ($classes as $classe)
                        <option value="{{$classe->id}}" name="classe_id">{{$classe->id}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div>
            <div><label for="">Nom</label></div>
            <div><input type="text" placeholder="veiller entrer le nom du produit" name="nom" value="{{$eleves->nom}}"></div>
        </div> 
        <div>
            <div><label for="">Prénom</label> </div>
            <div><input type="text" placeholder="mettre la description" name="prenom" value="{{$eleves->prenom}}"></div> 
        </div>
        
        <div>
            <div><label for="">sexe</label></div>
            <div>
                <select name="" id="" value="{{$eleves->sexe}}">le Sexe
                    <option value="f">femme</option>
                    <option value="m">homme</option>
                </select>
            </div>
        </div>
        <div>
            <div><label for="">date de naissance</label> </div>
            <div><input type="date" placeholder="mettre la date de naissance" name="date_naissance" value="{{$eleves->date_naissance}}"></div> 
        </div>
        <div>
          <div><label for="">lieu de naissance</label> </div>
          <div><input type="text" placeholder="mettre la date de naissance" name="lieu_naissance" value="{{$eleves->lieu_naissance}}"></div> 
      </div>
        <div>
            <div><label for="">nationalité</label> </div>
            <div><input type="text" placeholder="la mass du prix" name="nationalite" value="{{$eleves->nationalite}}"></div> 
        </div>
        
        <div>
            <div><label for="">Nom du pere</label> </div>
            <div><input type="text" placeholder="mettre la date de naissance" name="nom_pere" value="{{$eleves->nom_pere}}"></div> 
        </div>
        <div>
            <div><label for="">profession du pere</label> </div>
            <div><input type="text" placeholder="mettre la date de naissance" name="pere_profession" value="{{$eleves->pere_profession}}"></div> 
        </div>
        <div>
            <div><label for="">Numéro de telephone</label> </div>
            <div><input type="text" placeholder="mettre la date de naissance" name="tel" value="{{$eleves->tel}}"></div> 
        </div>
        <div>
            <div><label for="">Nom du mère</label> </div>
            <div><input type="text" placeholder="mettre la date de naissance" name="nom_mere" value="{{$eleves->nom_mere}}"></div> 
        </div>
        <div>
            <div><label for="">profession du mere</label> </div>
            <div><input type="text" placeholder="mettre la date de naissance" name="mere_profession" value="{{$eleves->mere_profession}}"></div> 
        </div>
        <div>
            <div><label for="">email</label> </div>
            <div><input type="text" placeholder="mettre la date de naissance" name="email" value="{{$eleves->email}}"></div> 
        </div>
        
        {{-- <div> 
            <div><label for="">Prix</label> </div>
            <div><input type="text" placeholder="le prix de vente" name="price"></div> 
        </div>
        <div>
            <div class="color"><label for="">Stock</label> </div>
            <div><input type="text" placeholder="le stock disponible" name="stock"></div> 
        </div> --}}
        <div class="container-button2">
            <div>
                <button>Annuler</button>
            </div>
            <div>
                <button type="submit" name="">Envoyer</button>
            </div>
        </div>
    </form>
</main>
@endsection

{{-- <form class="row g-3">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">State</label>
      <select id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form> --}}