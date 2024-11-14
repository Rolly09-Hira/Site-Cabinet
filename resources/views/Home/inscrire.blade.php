@extends('base')

@section('title','Inscription')

@section('content')
  <div class="user" style="margin-top: 120px">
    <div class="card">
        <div class="card-header">Veillez remplir toute l'information </div><br>
        @if (Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        <div class="card-body">
            <form class="userForm" action="{{ route('Etudiant.registerproces')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3" style="text-align:center">
                    <label class="form-label">Photo</label><br>
                    <input type="file" id="file" name="Image" accept="image/*" onchange="previewImage(event)"><br>
                    <img id="imagePreview" src="icon/default_image_etudiant.png" alt="Image par défaut" style="width: 100px; height: 100px; margin: 20px;  border-radius:100%;">
                    @error('Image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" name="full_name" value="{{old('full-name')}}" class="form-control" id="name" placeholder="Votre nom">
                    @error('full_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="adress" class="form-label">Adresse</label>
                    <input type="texe" name="adresse" value="{{old('adresse')}}" class="form-control" id="adress" placeholder="votre Adresse">
                    @error('full_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email" placeholder=" votre email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" name="contact" value="{{old('contact')}}" class="form-control" id="contact" placeholder=" votre numero telephone">
                    @error('contact')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label style="text-decoration: underline; "><b>Categories :</b></label>
                    <div class="opt1">
                        <div class="opt">
                            <label  >Etudiant(e)</label>
                            <input type="radio" name="categorie" value="Etudiant(e)">
                        </div>
                        <div class="opt">
                            <label >Travailleur</label>
                            <input type="radio" name="categorie" value="Travailleur">
                        </div>
                    </div>
                    @error('categorie')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="fb" class="form-label">Facebook</label>
                    <input type="text" name="fb" class="form-control" id="fb" placeholder="Compte facebook">
                </div>
                <div class="mb-3">
                    <label for="Age" class="form-label">Age</label>
                    <input type="text" value="{{ old('age') }}" name="age" class="form-control" id="Age" placeholder="Votre age">
                    @error('age')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label style="text-decoration: underline; "><b>Option :</b></label>
                    <div class="option">
                        <div class="opt1">
                            <div class="opt">
                                <label  >Comptabilité I, II, III</label>
                                <input type="radio" name="option" value="Comptabilité I, II, III">
                            </div>
                            <div class="opt">
                                <label  >Developpements personnel</label>
                               <input type="radio" name="option" value="Developpements personnel">
                            </div>
                            <div class="opt">
                                <label >Assistant(e) marketing</label>
                                 <input type="radio" name="option" value="Assistant(e) marketing">
                            </div>
                            <div class="opt">
                                <label >Contrôleur de gestion</label>
                                <input type="radio" name="option" value="Contrôleur de gestion">
                            </div>
                        </div>
                        <div class="opt2">
                            <div class="opt">
                                <label  >Magasinier</label>
                               <input type="radio" name="option" value="Magasinier ">
                            </div>
                            <div class="opt">
                                <label  >Fiscalité I, II, III</label>
                                <input type="radio" name="option" value="Fiscalité I, II, III">
                            </div>
                            <div class="opt">
                                <label  >Assistant(e) polyvalent(e)</label>
                                <input type="radio" name="option" value="Assistant(e) polyvalent(e)">
                            </div>
                            <div class="opt">
                                <label  >Agent commercial</label>
                                <input type="radio" name="option" value="Agent commercial">
                            </div>
                        </div>
                        <div class="opt3">
                            <div class="opt">
                                <label >Audit Junior ou Sénior</label>
                                <input type="radio" name="option" value="Audit Junior ou Sénior">
                            </div>
                            <div class="opt">
                                <label >Assistant(e) direction</label>
                                <input type="radio" name="option" value="Assistant(e) direction">
                            </div>
                            <div class="opt">
                                <label >Assistant(e) Juridique</label>
                                <input type="radio" name="option" value="Assistant(e) Juridique">
                            </div>
                            <div class="opt">
                                <label  >Assistant(e) RH</label>
                                <input type="radio" name="option" value="Assistant(e) RH">
                            </div>

                        </div>
                        <div class="opt1">
                            <div class="opt">
                                <label  >Autre</label>
                                <input type="radio" name="option" value="Comptabilité I, II, III">
                            </div>
                        </div>
                    </div>
                    @error('option')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label style="text-decoration: underline; "><b>Module :</b></label>
                    <div class="opt1">
                        <div class="opt">
                            <label  >Module I ou Niveau I</label>
                            <input type="radio" name="Module" value="Module I ou Niveau I">
                        </div>
                        <div class="opt">
                            <label >Module II ou Niveau II</label>
                            <input type="radio" name="Module" value="Module II ou Niveau II">
                        </div>
                        <div class="opt">
                            <label >Module III ou Niveau III</label>
                            <input type="radio" name="Module" value="Module III ou Niveau III">
                        </div>
                    </div>
                    @error('Module')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label style="text-decoration: underline; "><b>Niveau d' Etude:</b></label>
                    <div class="opt1">
                        <div class="opt">
                            <label >Bacc</label>
                            <input type="radio" name="Niveau" value="Bacc">
                        </div>
                        <div class="opt">
                            <label >Licence</label>
                            <input type="radio" name="Niveau" value="Licence">
                        </div>
                        <div class="opt">
                            <label >Master</label>
                            <input type="radio" name="Niveau" value="Master">
                        </div>
                    </div>
                    @error('Niveau')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-danger">Annuler</button>

            </form>
        </div>
    </div>
  </div>
@endsection
