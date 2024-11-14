@extends('Admin.base.baseadmin')

@section('title','Gestion des services')

@section('contente')
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajoutserv">
    AJOUTER UN NOUVEAU SERVICE
  </button>

  <!-- Modal -->
  <div class="modal fade" id="ajoutserv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Ajouter un nouveau offre de service d'externalisation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        <div class="modal-body">
         <form class="row g-3" method="post" action="{{ route('ajoutservice') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
              <label for="idserv" class="form-label">identifiant du service</label>
              <input type="text" name="id_serv" class="form-control" id="idserv">
              @error('id_serv')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-md-6">
                <label for="imgserv" class="form-label" style="">Font</label>
                <input type="file"  id="imgserv" class="form-control" name="fontserv" accept="image/*" onchange="previewImage(event)">
                @error('fontserv')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-12">
              <label for="nomserv" class="form-label">Nom du service</label>
              <input type="text" name="nom_serv" class="form-control" id="nomserv">
              @error('nom_serv')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-md-12">
              <label for="descderv" class="form-label">Description en quelque phrase</label>
              <textarea  name="desc_serv" rows="5" class="form-control" cols="4" id="descderv"></textarea>
              @error('desc_serv')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-md-12">
              <label for="avantageserv" class="form-label">Les avantage en quelque phrase</label>
              <textarea  name="av_serv" rows="5" cols="4" class="form-control" id="avantageserv"></textarea>
              @error('av_serv')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="col-md-12">
                <label for="autre" class="form-label">Autre à mentionner</label>
                <textarea  name="autre_serv" rows="5" class="form-control" cols="4" id="autre"></textarea>
                @error('autre_serv')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Terminer</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        if ({{ $errors->any() ? 'true' : 'false' }}) {
            var myModal = new bootstrap.Modal(document.getElementById('ajoutserv'));
            myModal.show();
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        if ({{ session('success') ? 'true' : 'false' }}) {
            var myModal = new bootstrap.Modal(document.getElementById('ajoutserv'));
            myModal.show();
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        if ({{ session('fail') ? 'true' : 'false' }}) {
            var myModal = new bootstrap.Modal(document.getElementById('ajoutserv'));
            myModal.show();
        }
    });
  </script>
@endsection
