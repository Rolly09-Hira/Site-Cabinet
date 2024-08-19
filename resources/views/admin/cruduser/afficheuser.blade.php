
@extends('admin.base.baseadmin')

@section('title','Affichage')

@section('contente')
        <section class=" p-3 p-md-4 p-xl-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5" style="min-width:60%;">
                        <div class="card border border-light-subtle rounded-4">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-5 Affiche">
                                            <div class="p"><img id="imagePreview" src="{{ asset($user->profile) }}" alt="Image par défaut" style="width: 40px; height: 40px;"></div>
                                            <div class="col-12">
                                                <div class="affichenom">
                                                    <input type="text" value="{{$user->name}}" class="form-control" name="name" id="name"  >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <div class="row gy-3 overflow-hidden">

                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" value="{{ $user->email }}" class="form-control @error('email') is invalid @enderror" name="email" id="email" placeholder="name@example.com" >
                                                <label for="email" class="form-label">Email</label>
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 date">
                                            <div class="form-floating mb-3">
                                                <input type="date" value="{{ $user->date_debut }}" class="form-control @error('datedebut') is invalid @enderror" name="datedebut" id="datedebut" placeholder="Date de debut" >
                                                <label for="datedebut" class="form-label">Commencer le :</label>
                                                @error('datedebut')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="date" value="{{$user->date_fin}}" class="form-control @error('datefin') is invalid @enderror" name="datefin" id="datefin" placeholder="Date de la fin" >
                                                <label for="datefin" class="form-label">Jusqu'au :</label>
                                                @error('datefin')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="texte" value="{{$user->phonenumber}}" class="form-control @error('contact') is invalid @enderror" name="contact" id="datefin" placeholder="contact" >
                                            <label for="contact" class="form-label">Télephone</label>
                                            @error('datefin')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <a class="btn bsb-btn-xl btn-primary py-3" href="{{ route('admin.liste') }}">Retour</a>
                                            </div>
                                        </div>
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
