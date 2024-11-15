
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
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Formation de:</label>
                                            <select class="form-select" name="idmatiere"  id="inputGroupSelect01" required>
                                              <option value="" selected>Choose...</option>
                                              <option value="Comptabilité I, II, III">Comptabilité I, II, III</option>
                                              <option value="Developpements personnel">Developpements personnel</option>
                                              <option value="Assistant(e) marketing">Assistant(e) marketing</option>
                                              <option value="Contrôleur de gestion">Contrôleur de gestion</option>
                                              <option value="Magasinier">Magasinier</option>
                                              <option value="Fiscalité I, II, III">Fiscalité I, II, III</option>
                                              <option value="Assistant(e) polyvalent(e)">Assistant(e) polyvalent(e)</option>
                                              <option value="Agent commercial">Agent commercial</option>
                                              <option value="Audit Junior ou Sénior">Audit Junior ou Sénior</option>
                                              <option value="Assistant(e) direction">Assistant(e) direction</option>
                                              <option value="Assistant(e) Juridique">Assistant(e) Juridique</option>
                                              <option value="Assistant(e) RH">Assistant(e) RH</option>
                                            </select>
                                            @error('idmatiere')
                                               <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="video" class="form-label">video</label>
                                            <input type="file" id="video" class="form-control" name="video" accept="video/*" required >
                                            @error('video')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="formFile" class="form-label">Support pdf</label>
                                            <input class="form-control" type="file" name="pdf" id="formFile" accept="application/*">
                                            @error('pdf')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
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
