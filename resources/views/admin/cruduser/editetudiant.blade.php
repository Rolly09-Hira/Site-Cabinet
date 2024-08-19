
@extends('admin.base.baseadmin')

@section('title','Affichage')

@section('contente')

        <section class=" p-3 p-md-4 p-xl-5">

            <div class="container">
                <div class="rows">
                    <div class="p"><img id="imagePreview" src="{{ asset($etudiant->Image) }}" alt="Image par défaut" style="width: 400px; height: 400px;"></div>
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5" style="min-width:60%;">
                        <div class="card border border-light-subtle rounded-4">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <form action="{{ route('Modifier-etudiant') }}" method="post" enctype="multipart/form-data>
                                    @csrf
                                    <input type="hidden" name="etudiant_id" value="{{$etudiant->id}}">
                                    <div class="row gy-3 overflow-hidden">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" value="{{ $etudiant->email }}" class="form-control @error('email') is invalid @enderror" name="email" id="email" placeholder="name@example.com" >
                                                <label for="email" class="form-label">Email</label>
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 date">
                                            <div class="form-floating mb-3">
                                                <input type="texte" value="{{ $etudiant->contact }}" class="form-control @error('contact') is invalid @enderror" name="contact" id="contact" placeholder="Contact" >
                                                <label for="contact" class="form-label">Telephone</label>
                                                @error('contact')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="texte" value="{{ $etudiant->categorie }}" class="form-control @error('categorie') is invalid @enderror" name="categorie" id="categorie" placeholder="Contact" >
                                                <label for="categorie" class="form-label">Categories</label>
                                                @error('categorie')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="texte" value="{{$etudiant->fb}}" class="form-control @error('fb') is invalid @enderror" name="fb" id="fb" placeholder="Facebook" >
                                                <label for="fb" class="form-label">Facebook</label>
                                                @error('fb')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 date">
                                            <div class="form-floating mb-3">
                                                <input type="texte" value="{{$etudiant->adresse}}" class="form-control @error('adresse') is invalid @enderror" name="adresse" id="adresse" placeholder="adresse" >
                                                <label for="adresse" class="form-label">Adresse</label>
                                                @error('adresse')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="texte" value="{{$etudiant->age}}" class="form-control @error('Age') is invalid @enderror" name="Age" id="Age" placeholder="Age" >
                                                <label for="Age" class="form-label">Age</label>
                                                @error('Age')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="texte" value="{{$etudiant->option}}" class="form-control @error('option') is invalid @enderror" name="option" id="option" placeholder="option" >
                                                <label for="option" class="form-label">option</label>
                                                @error('option')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 date">
                                            <div class="form-floating mb-3">
                                                <input type="texte" value="{{$etudiant->Module}}" class="form-control @error('Module') is invalid @enderror" name="Module" id="Module" placeholder="Module" >
                                                <label for="Module" class="form-label">Module</label>
                                                @error('Module')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="file" id="file" class="form-control" name="Image" accept="image/*" onchange="previewImage(event)"><br>
                                                <label for="file" class="form-label" style="">Photo</label>
                                                @error('Image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="texte" value="{{$etudiant->Niveau}}" class="form-control @error('Niveau') is invalid @enderror" name="Niveau" id="Niveau" placeholder="Niveau" >
                                                <label for="Niveau" class="form-label">Niveau</label>
                                                @error('Niveau')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button class="btn bsb-btn-xl btn-primary py-3" type="submit">Modifier</button>
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
