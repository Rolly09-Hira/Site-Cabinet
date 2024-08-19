@extends('Admin.base.baseadmin')

@section('title','User')

@section('contente')
  {{--liste des etidiant s'enregistrer--}}
    <div class="container" style="min-width: 100%; padding-top:20px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Client en Information/Stage
                    </div>
                    @if (Session::has('success'))
                            <span class="alert alert-success p-2">{{Session::get('success')}}</span>
                    @endif
                    @if (Session::has('fail'))
                            <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
                    @endif
                    <div class="card-body table-container">
                        <table class="table table-sm table-striped table-bordered">
                            <thead>
                                <th class="thus">S/N</th>
                                <th class="thus">Nom</th>
                                <th class="thus">Mail</th>
                                <th class="thus">Adresse</th>
                                <th class="thus">Numero</th>
                                <th class="thus">Categorie</th>
                                <th class="thus">Age</th>
                                <th class="thus">Facebook</th>
                                <th class="thus">Option</th>
                                <th class="thus">Module</th>
                                <th class="thus">Niveau</th>
                                <th class="thus">Image</th>
                                <th class="thus">Date d'enregistrement</th>
                                <th  class="thus" colspan="2">Action</th>
                            </thead>
                            <tbody>
                                @if (count($all_etudiants)>0)
                                    @foreach ( $all_etudiants as $item )
                                        <tr>
                                            <td class="thus">{{$loop->iteration}}</td>
                                            <td class="thus">{{$item->name}}</td>
                                            <td class="thus">{{$item->email}}</td>
                                            <td class="thus">{{$item->adresse}}</td>
                                            <td class="thus">{{$item->contact}}</td>
                                            <td class="thus">{{$item->categorie}}</td>
                                            <td class="thus">{{$item->age}}</td>
                                            <td class="thus">{{$item->fb}}</td>
                                            <td class="thus">{{$item->option}}</td>
                                            <td class="thus">{{$item->Module}}</td>
                                            <td class="thus">{{$item->Niveau}}</td>
                                            <td class="thus">{{$item->Image}}</td>
                                            <td class="thus">{{$item->created_at}}</td>
                                            <td class="thus"><a href="delete/{{ $item->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                                            <td class="thus"><a href="affichage_etudiant/{{ $item->id}}" class="btn btn-success btn-sm">afficher</a></td>
                                        </tr>
                                    @endforeach

                                @else
                                    <tr>
                                        <td  class="thus" colspan="8">Pas d'etudiant</td>
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
