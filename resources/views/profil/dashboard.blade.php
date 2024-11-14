@extends('profil.baseprofil')
@section('title','User-dashboard')
@section('usercontente')
  <div class="sup">
    <h5>Support de cours :</h5>
  </div>
    @if($formation->isEmpty())
      <p>Aucune formation trouvée.</p>
    @else
        <div class="row">
            @foreach ($formation as $items)
             <div class="col-md-6">
                 <div class="card" style="margin: 10px;">
                     <video class="card-img-top"  controls>
                         <source src="{{ asset($items->video) }}" type="video/mp4">
                         Votre navigateur ne supporte pas la balise vidéo.
                     </video>
                     <div class="card-body">
                     <h5 class="card-title">Titre :</h5>
                     <p class="card-text">{{ $items->titre }}</p>
                     <button onclick="openPDF('{{ asset($items->pdf) }}')" class="btn btn-primary">Afficher le PDF</button>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
    @endif

    <script>
        function openPDF(pdfUrl) {
          window.open(pdfUrl, '_blank');
        }
    </script>
@endsection
