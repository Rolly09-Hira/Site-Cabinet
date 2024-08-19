
@extends('admin.base.baseadmin')

@section('title','ajoutUser')

@section('contente')
        <div class="secregistre">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5" style="min-width:60%;">
                        <div class="card border border-light-subtle rounded-4">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-5 photouser">
                                            <div class="Registrehere"><h4 class="text-center">Ajouter un utilisateur</h4></div>
                                            <div class="p"><img id="imagePreview" src="/icon/default_image_etudiant.png" alt="Image par défaut" style="width: 40px; height: 40px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('account.processRegistre') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3 ">
                                        <div class="col-md-12">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" value="{{ old('name') }}" class="form-control @error('name') is invalid @enderror" name="name" id="name" placeholder="Name" >
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" value="{{ old('email') }}" class="form-control @error('email') is invalid @enderror" name="email" id="email" placeholder="name@example.com" >
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="contact" class="form-label">Contact</label>
                                            <input type="text" value="{{ old('contact') }}" class="form-control @error('contact') is invalid @enderror" name="contact" id="contact" placeholder="Numero telephone" >
                                            @error('contact')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="datedebut" class="form-label">Commencer le :</label>
                                            <input type="date" value="{{ old('datedebut') }}" class="form-control @error('datedebut') is invalid @enderror" name="datedebut" id="datedebut" placeholder="Date de debut" >
                                            @error('datedebut')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="datefin" class="form-label">Jusqu'au :</label>
                                            <input type="date" value="{{ old('datefin') }}" class="form-control @error('datefin') is invalid @enderror" name="datefin" id="datefin" placeholder="Date de la fin" >
                                            @error('datefin')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="file" class="form-label" style="">Photo</label>
                                            <input type="file" id="file" class="form-control" name="profile" accept="image/*" onchange="previewImage(event)"><br>
                                            @error('profile')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" value="{{ old('password') }}" class="form-control @error('password') is invalid @enderror" name="password" id="password" value="" placeholder="Password" >
                                            @error('password')
                                                  <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="password" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control @error('password_confirmation') is invalid @enderror" name="password_confirmation" id="password_confirmation" value="" placeholder="Confirm Password" >
                                            @error('password_confirmation')
                                                    <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-grid">
                                                <button class="btn bsb-btn-xl btn-primary py-3" type="submit">Enregistrer</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection
