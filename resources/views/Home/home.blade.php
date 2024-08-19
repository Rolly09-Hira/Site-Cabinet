@extends('base')

@section('title','Home')

@section('content')
<div class="home">
    <h1>Bienvenue!</h1>
    <img class="lg" src="icon/2D.png" alt="logo" >
    <h1><b class="cab">CAB<span>INET</span> EX<span>CELLENT</span></b></h1>
    <div class="objectif">
        <form class="object">
            <h3>Notre objectif : </h3>
            <ul>
                <li><h5> La satisfaction des besoins des clients </h5></li>
                <li><h5> L ’ apport des services de bonne qualité aux clientèles </h5></li>
                <li><h5> La participation au développement économique de Madagascar</h5></li>
                <li><h5> L ’ offre de formation pratique pour perfectionner les jeunes</h5></li>
                <li><h5> L ’ initiation de jeunes diplômés dans la vie professionnelle </h5></li>
            </ul>
        </form>
    </div>
</div>
@endsection
