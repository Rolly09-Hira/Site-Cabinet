@extends('Admin.base.baseadmin')

@section('title','User')

@section('contente')
  {{--liste des user--}}
    <div class="container" style="min-width: 100%; padding-top:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Liste des etudiants en formation/Stage
                        <a href="{{ route('account.register') }}" class="btn btn-success btn-sm float-end"> Add new </a>
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
                                <th class="thus">Profile</th>
                                <th class="thus">Nom</th>
                                <th class="thus">Mail</th>
                                <th class="thus">Numero</th>
                                <th class="thus">Debut information/Stage</th>
                                <th class="thus">Fin information/Stage</th>
                                <th class="thus">Role</th>
                                <th class="thus">Date d'enregistrement</th>
                                <th class="thus">derniere modification</th>
                                <th  class="thus" colspan="3">Action</th>
                            </thead>
                            <tbody>
                                @if (count($all_users)>0)
                                    @foreach ( $all_users as $item )
                                        <tr>
                                            <td class="thus">{{$loop->iteration}}</td>
                                            <td class="thus">{{$item->profile}}</td>
                                            <td class="thus">{{$item->name}}</td>
                                            <td class="thus">{{$item->email}}</td>
                                            <td class="thus">{{$item->phonenumber}}</td>
                                            <td class="thus">{{$item->date_debut}}</td>
                                            <td class="thus">{{$item->date_fin}}</td>
                                            <td class="thus">{{$item->role}}</td>
                                            <td class="thus">{{$item->created_at}}</td>
                                            <td class="thus">{{$item->updated_at}}</td>
                                            <td class="thus"><a href="{{-- /edit/$item->id--}}" class="btn btn-primary btn-sm">Edit</a></td>
                                            <td class="thus"><a href="deleteuser/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                                            <td class="thus"><a href="affichage/{{$item->id}}" class="btn btn-success btn-sm">aficher</a></td>
                                        </tr>
                                    @endforeach

                                @else
                                    <tr>
                                        <td  class="thus" colspan="8">No user found!</td>
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
