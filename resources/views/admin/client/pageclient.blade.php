<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service_Externalisation</title>
    <style>
        @page {
            size: A4;
            margin: 25mm;
        }
        body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            margin: 0;
            padding: 0;
        }
        .content {
            width: 100%;
            height: 100%;
            padding: 20mm;
            box-sizing: border-box;
        }
        .extttr{
            display: flex;
            justify-content: center;
            font-size: 20px;

        }
        h1{
            background: rgb(209, 211, 212);
            padding: 20px;
        }
        .matcom{
            float: right;
            font-size: 15px;
        }
        .lescontent{
            font-size: 15px;
            margin-top: 100px;
        }


    </style>
</head>
<body>
    <div class="content">
        <div class="extttr">
            <h1>EXTERNALISATION</h1>
        </div>
        <div class="matcom">
            <input type="hidden" name="user_id" value="{{$externalisation->id}}">
            <p>Nom de commercial : <b>{{$externalisation->commmercial}}</b></p>
            <p>N° matricule : <b>{{$externalisation->matricule}}</b></p>
        </div>
        <div class="lescontent">
        <p>Nom de l'Entreprise ou de la Société :  <b>{{$externalisation->nomentreprise}}</b></p>
        <p>Nom du Client ou Entreprise:  <b>{{$externalisation->nomclient}}</b></p>
        <p>Activités :  <b>{{$externalisation->activites}}</b></p>
        <p>Contact :  <b>{{$externalisation->contact}}</b></p>
        <p>Adresse Mail :  <b>{{$externalisation->mail}}</b></p>
        <p>Compte Facebook:  <b>{{$externalisation->fb}}</b></p>
        <p>Adresse :  <b>{{$externalisation->adresse}}</b></p>
        <p>Durée d'existence :  <b>{{$externalisation->dureexistence}}</b></p>
        <p>Nombre du Personnel:  <b>{{$externalisation->nombrepersonnel}}</b></p>
        <p>Chiffre d'affaire Mensuel :  <b>{{$externalisation->chiffreaffaire}}</b></p>
        <p>Regime d'imposition:  <b>{{$externalisation->regime}}</b></p>
        <p>Status juridique:  <b>{{$externalisation->statjur}}</b></p>
        <p>Domaine :  <b>{{$externalisation->Domaine}}</b></p>
        <p>Services Souhaiter :  <b>{{$externalisation->servicesouhaiter}}</b></p>
        <p>Durée de services souhaiter:  <b>{{$externalisation->dureesouhaiter}}</b></p>
        </div>
        <p>
            <b>OBSERVATION : </b><br>
            <p>{{ $externalisation->observation }}</p>
        </p>
    </div>


   {{--   <button class="download-btn" onclick="downloadPDF()">Télécharger en PDF</button>

    <!-- Inclure la bibliothèque html2pdf.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script>
        function downloadPDF() {
            const element = document.getElementById('content');
            html2pdf().from(element).save();
        }
    </script>--}}
</body>
</html>
