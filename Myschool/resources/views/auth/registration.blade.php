<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>registration</h1>
    <div>
        

        <form action="{{route('registerUser')}}">
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
            @csrf
            <div>
                <label for="">nom</label>
                <input type="text" name="nom" value={{old('nom')}}>
                <div class="text text-danger">
                    @error('nom')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div>
                <label for="">prenom</label>
                <input type="text" name="prenom">
            </div>
            <div>
                <label for="email">email</label>
                <input type="text" name="email"  >
            </div>
            <div>
                <label for="">nom_utilisateur</label>
                <input type="text" name="nom_utlisateur">
            </div>
            <div>
                <label for="password">password</label>
                <input type="password" name="password">
            </div>
            <div>
                 <button class="btn btn-block btn-primary" type="submit">enregistrer</button>
            </div>
            <br>
            <a href="{{route('login')}}">se connecter? c'est ici</a>
        </form>
    </div>
    <br>
</body>
</html>