
@extends('admin.base.baseadmin')

@section('title','Ajout-Formation')

@section('contente')
        <section class=" p-3 p-md-4 p-xl-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5" style="min-width:60%;">
                        <div class="card border border-light-subtle rounded-4">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-5 photouser">
                                            <div class="Registrehere"><h4 class="text-center">Ajouter une nouvelle formation</h4></div>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('formation.ajoutproces') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-3 overflow-hidden">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" value="{{ old('titre') }}" class="form-control @error('titre') is invalid @enderror" name="titre" id="titre" placeholder="titre" >
                                                <label for="titre" class="form-label">Titre de la formation</label>
                                                @error('titre')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 date">
                                            <div class="form-floating mb-3" style="min-width: 40%;">
                                                <input type="text" value="{{ old('idmatiere') }}" class="form-control @error('idmatiere') is invalid @enderror" name="idmatiere" id="idmatiere" placeholder="name@example.com" >
                                                <label for="idmatiere" class="form-label">Formation de:</label>
                                                @error('idmatiere')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                       {{--  <div class="col-12 date">
                                            <div class="form-floating mb-3" style="min-width: 40%;">
                                                <input type="file" id="video" class="form-control" name="video" accept="video/*" required >
                                                <label for="video" class="form-label">video</label>
                                                @error('video')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>--}}
                                        <div class="col-12 date">
                                            <div class="form-floating mb-3">
                                                <input type="file" id="pdf" class="form-control" name="pdf" accept="application/*" >
                                                <label for="pdf" class="form-label">Support fichier</label>
                                                @error('pdf')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button class="btn bsb-btn-xl btn-primary py-3" type="submit">Ajouter</button>
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
