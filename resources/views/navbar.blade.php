<nav class="navb">
    <div class="logo">
      <img src="/icon/2D.png" alt="logo" style="width: 80px ">
    </div>
    <div class="dropdown">
      <i class="fa-solid fa-list"></i>
      <div class="dropdown-content">
          <a class="nav-link " aria-current="page" href="{{ Route('app_home') }}"><button type="button" class="btn btn-inherit @if( Request::route()->getName()=='app_home') bg-success @endif" ><i class="fa-solid fa-house"></i> Home</button></a>
          <a class="nav-link"  href="{{ Route('app_about') }}"><button type="button" class="btn btn-inherit @if( Request::route()->getName()=='app_about') bg-success @endif" ><i class="fas fa-door-open"></i> A propos</button></a>
          <div class="btnservice">
              <button type="button" class="btn btn-inherit @if( Request::route()->getName()=='app_service') bg-success @endif" ><i class="fas fa-diagnoses"></i> Nos service</button>
              <div class="btnservice-content">
                <a class="dropext" href="{{ Route('app_service') }}">Externalisation</a>
                <a class="dropext" href="{{ route('service.bachelier') }}">formation</a>
              </div>
          </div>
          {{--  <a class="logn" href="{{ Route('account.login') }}">Se connecter</a>
          <a class="logn" href="{{ Route('Etudiant.inscrire') }}">S'inscrire</a>--}}
          <a class="logn" href="{{ Route('admin.login') }}">Passer en Admin</a>
      </div>
    </div>

    <div class="container hafa">
      <div class="txt" >
        <div class="about_home">
            <a class="nav-link " aria-current="page" href="{{ Route('app_home') }}"> <button type="button" class="btn btn-inherit @if( Request::route()->getName()=='app_home') bg-success @endif" ><i class="fa-solid fa-house"></i>  Home</button></a>
            <a class="nav-link"  href="{{ Route('app_about') }}"><button type="button" class="btn btn-inherit @if( Request::route()->getName()=='app_about') bg-success @endif" ><i class="fas fa-door-open"></i> A propos</button></a>
            <div class="btnservice">
                <button type="button" class="btn btn-inherit @if( Request::route()->getName()=='app_service'|| Request::route()->getName()=='service.bachelier') bg-success @endif dropbt" ><i class="fas fa-diagnoses"></i> Nos service</button>
                <div class="btnservice-content">
                        <a class="dropext" href="{{ Route('app_service') }}">Externalisation</a>
                        <a class="dropext" href="{{ route('service.bachelier') }}">Formation</a>
                </div>
            </div>
        </div>
        <div class="login">
           {{--   <a class="logn @if (Request::route()->getName()=='account.login') bg-success text-white @endif " href="{{ Route('account.login') }}"><i class="fa-solid fa-user-alt"></i> Se connecter</a>
            <p class="ou"> ou </p>
            <a class="logn @if (Request::route()->getName()=='Etudiant.inscrire') bg-success text-white @endif" href="{{ Route('Etudiant.inscrire') }}"><i class="fa-solid fa-user-plus"></i> S'inscrire</a>
            <p class="ou"> ou </p>--}}
            <a class="logn @if (Request::route()->getName()=='admin.login') bg-success text-white @endif" href="{{ Route('admin.login') }}"><i class="fa-solid fa-user-tie"></i> passer en Admin</a>
        </div>
        <div class="dropdown1">
            <i class="fa-solid fa-list"></i>
            <div class="dropdown1-content">
              {{--    <a class="logn" href="{{ Route('account.login') }}">Se connecter</a>
                <a class="logn" href="{{ Route('Etudiant.inscrire') }}">S'inscrire</a>--}}
                <a class="logn" href="{{ Route('admin.login') }}">Passer en admin</a>
            </div>
        </div>
      </div>
    </div>
</nav>
