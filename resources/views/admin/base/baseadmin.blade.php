@extends('base')

@section('title','Home')

@section('content')
    <div class=" adminpage" >
        <div class="adminnav">
            <button class="btnadnav" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-rectangle-list"></i></button>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <div class="admin">
                        <img src="{{ asset(Auth::guard('admin')->User()->profile) }}" alt="image" style="width: 50px; height:50px; border-radius:100%; border:solid 2px #171f1c; padding:2px;">
                        <label class="bg-light nomadmin">{{ Auth::guard('admin')->User()->name }}</label>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="btnadm">
                        <div class="btnsurf">
                            <a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-chart-line" style="margin-right: 10px;"></i>  Dashboard</a>
                        </div>
                        <div class="btnsurf">
                            <a href="{{ route('admin.listeExternalisation') }}"><i class="fa-solid fa-right-from-bracket" style="margin-right: 10px;"></i> Client d'Externalisation</a>
                        </div>
                        <div class="btnsurf">
                            <a href="{{ route('admin.listeEtudiant') }}"><i class="fa-duotone fa-solid fa-user-group" style="margin-right: 10px;"></i>Client de Formation ou stage</a>
                        </div>
                        <div class="btnsurf">
                            <a href="{{ route('admin.liste') }}"><i class="fa-solid fa-user-pen" style="margin-right: 10px;"></i> Liste des Etudiants en formation/Stage</a>
                        </div>
                        <div class="btnsurf">
                            <a href="{{ route('admin.listeformation') }}"><i class="fa-solid fa-right-from-bracket" style="margin-right: 10px;"></i>Gestion d'information</a>
                        </div>
                        <div class="btnsurf">
                            <a href="{{ route('admin.listematiere') }}"><i class="fa-solid fa-right-from-bracket" style="margin-right: 10px;"></i>Gestion des Matiere</a>
                        </div>
                        <div class="btnsurf">
                            <a href="{{ route('gestionserv') }}"><i class="fa-solid fa-right-from-bracket" style="margin-right: 10px;"></i>Gestion des service</a>
                        </div>

                    </div>
                    <div class="adminlogout">
                       <a href="{{ route('admin.logout') }}"><i class="fa-solid fa-right-from-bracket" style="margin-right: 10px;"></i> Se deconnecter</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="variete">
            @yield('contente')
        </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection
