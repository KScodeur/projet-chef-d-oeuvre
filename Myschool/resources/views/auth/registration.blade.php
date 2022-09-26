<!DOCTYPE html>
<html lang="en">
<head>
	<title>Myschool suscribe</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> --}}
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	{{-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> --}}
	<link rel="stylesheet" href="/css/login.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>
	<section class="h-100 gradient-form" style="background-color: #eee;">
		<div class="container py-5 h-100">
		  <div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-xl-10">
			  <div class="card rounded-3 text-black">
				<div class="row g-0">
				  <div class="col-lg-6">
					<div class="card-body p-md-5 mx-md-4">
	  
					  <div class="text-center">
						<img src="/images/index.png" alt="" width="300px">
						<h5 class="mt-1 mb-5 pb-1">L'info securisé</h5>
					  </div>
	  
					  <form class="login100-form validate-form" method="POST" action="{{route('registerUser')}}">
						@csrf
						
						<p>Veuillez vous inscrire</p>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example11">Nom</label>
                              <input type="text" id="form2Example11" class="form-control" name="nom"
                                placeholder="" />	
                            </div>
						<div><span class="text-danger">@error('nom'){{$error}} @enderror</span></div>
	  
						<div class="form-outline mb-4">
							<label class="form-label" for="form2Example22">Prénom</label>
						  <input type="text" id="form2Example22" class="form-control" name="prenom"/>
						</div>
						
                            <span class="text-danger">@error('prenom'){{$error}} @enderror</span>
                        
                        <div class="form-outline mb-4">
							<label class="form-label" for="form2Example22">Email</label>
						  <input type="email" id="form2Example22" class="form-control" name="email"/>
						</div>
						<div>
                            <span class="text-danger">@error('email'){{$error}} @enderror</span>
                        </div>
                        <div class="form-outline mb-4">
							<label class="form-label" for="form2Example22">Nom utilisateur</label>
						  <input type="text" id="form2Example22" class="form-control" name="nom_utilisateur"/>
						</div>
						<div>
                            <span class="text-danger">@error('nom_utilisateur'){{$error}} @enderror</span>
                        </div>
                        <div class="form-outline mb-4">
							<label class="form-label" for="form2Example22">Mot de passe</label>
						  <input type="password" id="form2Example22" class="form-control" name="password"/>
						</div>
						<div><span class="text-danger">@error('prenom'){{$error}} @enderror</span></div>
	  
						<div class="text-center pt-1 mb-5 pb-1">
						  <button class="btn btn-primary" type="submit">Save</button>
						  {{-- <a class="text-muted" href="#!">Forgot password?</a> --}}
						</div>
                        <a href="{{route('login')}}">se connecter? c'est ici</a>
						<div class="d-none">
							<div class="d-flex align-items-center justify-content-center pb-4">
								<p class="mb-0 me-2">Don't have an account?</p>
								<button type="button" class="btn btn-outline-danger">Create new</button>
							  </div>
						</div>
	  
					  </form>
	  
					</div>
				  </div>
				  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
					<div class="text-white px-3 py-4 p-md-5 mx-md-4">
					  <h4 class="mb-4">Bienvenue sur l'appli Myschool</h4>
					  <p class="small mb-0">Myschool est une application de gestion administrative d'ecole </p>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
</body>
</html>

