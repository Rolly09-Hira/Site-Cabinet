@extends('Admin.base.baseadmin')

@section('title','Liste-formation')

@section('contente')
  {{--liste des user--}}
    <div class="container" style="min-width: 100%; padding-top:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Liste des etudiants inscrit
                        <a href="/add/user" class="btn btn-success btn-sm float-end"> Add new </a>
                    </div>
                    @if (Session::has('success'))
                            <span class="alert alert-success p-2">{{Session::get('success')}}</span>
                    @endif
                    @if (Session::has('fail'))
                            <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
                    @endif
                    <div class="card-body table-container">
                        <table class="table table-sm table-striped table-bordered max-width:100%;">
                            <thead>
                                <th class="thus">S/N</th>
                                <th class="thus">titre</th>
                                <th class="thus">Matiere</th>
                                <th class="thus">Video support</th>
                                <th class="thus">Fichier support</th>
                                <th class="thus">Date d'enregistrement</th>
                                <th class="thus">derniere modification</th>
                                <th  class="thus" colspan="3">Action</th>
                            </thead>
                            <tbody>
                                @if (count($all_formation)>0)
                                    @foreach ( $all_formation as $item )
                                        <tr>
                                            <td class="thus">{{$loop->iteration}}</td>
                                            <td class="thus">{{$item->titre}}</td>
                                            <td class="thus">{{$item->id_matiere}}</td>
                                            <td class="thus">{{$item->video}}</td>
                                            <td class="thus">{{$item->pdf}}</td>
                                            <td class="thus">{{$item->created_at}}</td>
                                            <td class="thus">{{$item->updated_at}}</td>
                                            <td class="thus"><a href="" class="btn btn-primary btn-sm">Edit</a></td>
                                            <td class="thus"><a href="deleteformation/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a></td>
                                            <td class="thus"><a href="" class="btn btn-success btn-sm">aficher</a></td>
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