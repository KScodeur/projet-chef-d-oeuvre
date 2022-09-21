<!-- le side bar --> 
     <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            
        <div class="offcanvas-body p-1 ">
          <nav class="navbar-dark">
            <ul class="navbar-nav ">
                {{-- <li>
                  <div class="text-muted small fw-bold text-uppercase ">Core</div>
                </li> --}}
                <hr class="dropdown-divider mt-0" />
                <li class="ms-2 hover">
                  <a href="{{route('dashboard')}}" class="nav-link px-1 active ">
                    {{-- <span> <i class="bi bi-speedometer2"></i></span> --}}
                    <span class="me-2 "><img src="/images/dashboard-line.png" alt=""></span>
                    <span>Dashboard</span>
                  </a>
                </li>
              
                  <hr class="dropdown-divider" />
            
                {{-- <li>
                  <div class="text-muted small fw-bold text-uppercase ">Interface</div>
              </li> --}}

             {{-- debut de la partie "élèves" --}}
             <li class="ms-2">
              <a class="nav-link px-1 active sidebar-link" data-bs-toggle="collapse" href="#collapseExample" 
              role="button" aria-expanded="false" aria-controls="collapseExample">
               <span class="me-2"><img src="/images/eleves.png" alt=""></span>
                <span>Elèves</span>
                <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
              </a>
              <div class="collapse ms-4" id="collapseExample">
               <ul class="navbar-nav ps-3 me-2">
                  <li>
                    <a href="{{route('createEleve')}}" class="nav-link active" >
                      {{-- <span class="me-2"><i class="bi bi-layout-split"></i></span> --}}
                      <span>Inscription</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('readEleve')}}" class="nav-link active" >
                      {{-- <span class="me-2"><i class="bi bi-layout-split"></i></span> --}}
                      <span>liste total</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('listByClass')}}" class="nav-link active" >
                      {{-- <span class="me-2"><i class="bi bi-layout-split"></i></span> --}}
                      <span>Liste par classe</span>
                    </a>
                  </li>
                  </ul>
              </div>
            </li> 
             {{-- fin de la partie élèves --}}

              <hr class="dropdown-divider" />
            {{-- les classes --}}
            <li class="ms-2">
              <a href="{{route('classes')}}" class="nav-link px-1 active">
                {{-- <span> <i class="bi bi-speedometer2"></i></span> --}}
                <span class="me-2 "><img src="/images/classe.png" alt=""></span>
                <span>Scolarité</span>
              </a>
            </li>
            {{-- fin des classes --}}
            <hr class="dropdown-divider" />

             {{-- les emploi du temps --}}
             <li class="ms-2">
              <a href="{{route('matieres')}}" class="nav-link px-1 active">
                {{-- <span> <i class="bi bi-speedometer2"></i></span> --}}
                <span class="me-2 "><img src="/images/emploi_du_temps.png" alt=""></span>
                <span>Matières</span>
              </a>
            </li>
            {{-- fin des emplo du temps --}}
            <hr class="dropdown-divider" />

            {{-- Professeurs --}}
            <li class="ms-2">
              <a class="nav-link px-1 active sidebar-link" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
               <span class="me-2"><img src="/images/eleves.png" alt=""></span>
                <span>Professeurs</span>
                <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
              </a>
              <div class="collapse ms-4" id="collapseExample2">
               <ul class="navbar-nav ps-3 ">
                  <li >
                    <a href="{{route('createProf')}}" class="nav-link active" >
                      {{-- <span class="me-2"><i class="bi bi-layout-split"></i></span> --}}
                      <span>Nouveau</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('readProf')}}" class="nav-link active" >
                      {{-- <span class="me-2"><i class="bi bi-layout-split"></i></span> --}}
                      <span>Nom et matière</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link active" >
                      {{-- <span class="me-2"><i class="bi bi-layout-split"></i></span> --}}
                      <span>Liste par classe</span>
                    </a>
                  </li>
                  </ul>
              </div>
            </li> 
            {{-- fin  Professeurs --}}
            <hr class="dropdown-divider" />
            </ul>
          </nav>
        </div>
    </div>
  <!--fin du side bar  -->
    
