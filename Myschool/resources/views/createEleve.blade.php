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
        <form  method="POST" action="" class="container-fluid">
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
            <div>
                <div><label for="">classe</label></div>
                <div>
                    <select name="classe_id">
                        @foreach ($classes as $classe)
                            <option value="{{$classe->id}}" name="classe_id">{{$classe->id}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <div><label for="">Nom</label></div>
                <div><input type="text" placeholder="veiller entrer le nom du produit" name="nom"></div>
            </div> 
            <div>
                <div><label for="">Prénom</label> </div>
                <div><input type="text" placeholder="mettre la description" name="prenom"></div> 
            </div>
            
            <div>
                <div><label for="">sexe</label></div>
                <div>
                    <select name="" id="">le Sexe
                        <option value="f">femme</option>
                        <option value="m">homme</option>
                    </select>
                </div>
            </div>
            <div>
                <div><label for="">date de naissance</label> </div>
                <div><input type="date" placeholder="mettre la date de naissance" name="date_naissance"></div> 
            </div>
            <div>
                <div><label for="">nationalité</label> </div>
                <div><input type="text" placeholder="la mass du prix" name="nationalite"></div> 
            </div>
            
            <div>
                <div><label for="">Nom du pere</label> </div>
                <div><input type="text" placeholder="mettre la date de naissance" name="nom_pere"></div> 
            </div>
            <div>
                <div><label for="">profession du pere</label> </div>
                <div><input type="text" placeholder="mettre la date de naissance" name="pere_profession"></div> 
            </div>
            <div>
                <div><label for="">Nulero de telephone</label> </div>
                <div><input type="text" placeholder="mettre la date de naissance" name="tel"></div> 
            </div>
            <div>
                <div><label for="">Nom du mère</label> </div>
                <div><input type="text" placeholder="mettre la date de naissance" name="nom_mere"></div> 
            </div>
            <div>
                <div><label for="">profession du mere</label> </div>
                <div><input type="text" placeholder="mettre la date de naissance" name="mere_profession"></div> 
            </div>
            <div>
                <div><label for="">email</label> </div>
                <div><input type="text" placeholder="mettre la date de naissance" name="email"></div> 
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
