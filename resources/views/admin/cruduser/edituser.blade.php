
@extends('admin.base.baseadmin')

@section('title','Modifier')

@section('contente')
        <section class=" p-3 p-md-4 p-xl-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5" style="min-width:60%;">
                        <div class="card border border-light-subtle rounded-4">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                @if (Session::has('fail'))
                                  <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
                                @endif
                                <form class="row g-3" action="{{ route('admin.userEditprocess',['id' => $user->id]) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <div class="col-md-12">
                                        <label for="name"  class="form-label">Nom</label>
                                        <input type="text" value="{{$user->name}}" name="name" class="form-control" id="name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="email"  class="form-label">Adresse Mail</label>
                                        <input type="mail" value="{{$user->email}}" name="email" class="form-control" id="email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="datedebut"  class="form-label">Debut de formation</label>
                                        <input type="date" value="{{$user->date_debut}}"  name="datedebut" class="form-control" id="datedebut">
                                        @error('datedebut')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="datefin"  class="form-label">Fin de formation</label>
                                        <input type="date" value="{{$user->date_fin}}" name="datefin" class="form-control" id="datefin">
                                        @error('datefin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phonenumber"  class="form-label">Contact</label>
                                        <input type="text" value="{{$user->phonenumber}}" name="phonenumber" class="form-control" id="phonenumber">
                                        @error('phonenumber')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="role"  class="form-label">Rôle</label>
                                        <input type="text" value="{{$user->role}}" name="role" class="form-control" id="role">
                                        @error('role')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password"  class="form-label">Mots de passe</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password-confirmation"  class="form-label">Confirmer mots de passe</label>
                                        <input type="password" name="password-confirmation" class="form-control" id="password-confirmation">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection
