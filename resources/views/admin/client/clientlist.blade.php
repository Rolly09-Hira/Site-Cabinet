@extends('Admin.base.baseadmin')

@section('title','Liste-formation')

@section('contente')
  {{--liste des user--}}
    <div class="container" style="min-width: 100%; padding-top:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Liste des client d'externalisation
                    </div>
                    @if (Session::has('success'))
                            <span class="alert alert-success p-2">{{Session::get('success')}}</span>
                    @endif
                    @if (Session::has('fail'))
                            <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
                    @endif
                    <div class="input-group mb-3">
                        <span class="input-group-text" >Chercher</span>
                        <input type="text" class="form-control" id="searchInput" onkeyup="searchTable()" placeholder="Rechercher..."  >
                    </div>
                    <div class="card-body table-container">
                        <table class="table table-sm table-striped table-bordered max-width:100%;" id="mytable">
                            <thead>
                                <tr></tr>
                                    <th class="thus">S/N</th>
                                    <th class="thus">Commercial</th>
                                    <th class="thus">Entreprise</th>
                                    <th class="thus">Client</th>
                                    <th class="thus">Activités</th>
                                    <th class="thus">Contact</th>
                                    <th class="thus">Mail</th>
                                    <th class="thus">FAcebook</th>
                                    <th class="thus">Adresse</th>
                                    <th class="thus">Durée d'existance</th>
                                    <th class="thus">Nombre du personnel</th>
                                    <th class="thus">Chiffre d'affaire mensuel</th>
                                    <th class="thus">Regime d'imposition</th>
                                    <th class="thus">Statut juridique</th>
                                    <th class="thus">Domaine</th>
                                    <th class="thus">Service souhaiter</th>
                                    <th class="thus">Durée souhaiter</th>
                                    <th class="thus">Enregistrer le</th>
                                    <th class="thus" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($all_externalisation)>0)
                                    @foreach ( $all_externalisation as $item )
                                        <tr>
                                            <td class="thus">{{$loop->iteration}}</td>
                                            <td class="thus">{{$item->commmercial}}</td>
                                            <td class="thus">{{$item->nomentreprise}}</td>
                                            <td class="thus">{{$item->nomclient}}</td>
                                            <td class="thus">{{$item->activites}}</td>
                                            <td class="thus">{{$item->contact}}</td>
                                            <td class="thus">{{$item->mail}}</td>
                                            <td class="thus">{{$item->fb}}</td>
                                            <td class="thus">{{$item->adresse}}</td>
                                            <td class="thus">{{$item->dureexistence}}</td>
                                            <td class="thus">{{$item->nombrepersonnel}}</td>
                                            <td class="thus">{{$item->chiffreaffaire}}</td>
                                            <td class="thus">{{$item->regime}}</td>
                                            <td class="thus">{{$item->statjur}}</td>
                                            <td class="thus">{{$item->Domaine}}</td>
                                            <td class="thus">{{$item->servicesouhaiter}}</td>
                                            <td class="thus">{{$item->dureesouhaiter}}</td>
                                            <td class="thus">{{$item->created_at}}</td>
                                            <td class="thus"><a href="{{$item->id}}" class="btn btn-success btn-sm">afficher</a></td>
                                        </tr>
                                    @endforeach

                                @else
                                    <tr>
                                        <td  class="thus" colspan="8">Aucune formation</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
