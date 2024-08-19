@extends('base')
@section('title','service-bachelier')
@section('content')
<div class="cont">
    <div class="gdr">
        <h1 class="gdttr">FORMATION</h1>
        <div class="servinteresse">
            <a class="btn btn-success" data-bs-toggle="modal" href="#exampleservicebachelier" role="button"><i class="fas fa-lightbulb"></i> S'interesser</a><br>
        </div>
    </div>
    <div class="modal fade" id="exampleservicebachelier" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel"><i class="fa-solid fa-file-pen"></i> Veillez remplir ce formation pour profiter des formation/Stage</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @if (Session::has('success'))
                   <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                   <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif

                <div class="modal-body">
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
                            <input type="text" name="age" class="form-control" id="Age" placeholder="Votre age">
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
    </div>
    <div class="carrousel">
        <div class="bt">
            <button class="bouton" id="g" onclick="plusDivs(-1)"><i class="fa-solid fa-caret-left"></i></button>
            <button class="bouton" id="d" onclick="plusDivs(1)"><i class="fa-solid fa-caret-right"></i></button>
        </div>
        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/assistlog.jpg');">
            <h4 class="ttr">Assistant logistique </h4>
            <div class="extserv">
                <form class="serv">
                    <div class="desc">
                        <p>Notre programme de formation en assistant
                            logistique vous prépare à exceller dans la
                            gestion des stocks, la coordination des livraisons et
                            l’optimisation des processus logistiques, en vous dotant
                            des compétences essentielles pour réussir dans ce domaine
                            dynamique et en constante évolution.</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Polyvalence</b> : Vous apprendrez à gérer divers aspects de la logistique, tels que la gestion des stocks, la coordination des livraisons et l’optimisation des processus.</p>
                        </div>
                        <div class="av2">
                            <p><b>Opportunités d’emploi </b>: Avec la croissance de l’e-commerce et des plateformes de distribution, les assistants logistiques sont très recherchés.</p>
                        </div>
                        <div class="av3">
                            <p><b>Stabilité professionnelle</b> : Le secteur de la logistique offre une stabilité d’emploi et des perspectives d’évolution intéressantes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/commercemarketing.png');">
            <h4 class="ttr">Commerce et marketing </h4>
            <div class="extserv">
                <form class="serv">
                    <div class="desc">
                        <p>Notre formation en commerce et marketing vous dote des compétences
                             indispensables pour maîtriser la gestion des ventes, élaborer des
                             stratégies marketing efficaces et analyser les marchés. Ce programme
                            vous prépare à jouer un rôle déterminant dans le secteur des affaires.</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Opportunités de carrière diversifiées</b> : Avec cette formation, vous pouvez accéder à une multitude de postes tels que chef de produit, responsable marketing, analyste commercial, consultant en marketing, et bien d’autres.</p>
                        </div>
                        <div class="av2">
                            <p><b>Possibilité d’entreprendre </b>: Vous apprendrez les compétences nécessaires pour créer et gérer votre propre entreprise, que ce soit dans le e-commerce, les services ou les biens de consommation.</p>
                        </div>
                        <div class="av3">
                            <p><b>Flexibilité</b> : Les formations en commerce et marketing peuvent souvent être suivies en alternance, offrant ainsi une plus grande flexibilité pour combiner études et expérience professionnelle.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/entrepreneur.webp');">
            <h4 class="ttr">Entreprenariat </h4>
            <div class="extserv">
                <form class="serv">
                    <div class="desc">
                        <p>Notre programme de formation en entrepreneuriat vous équipe des
                            compétences nécessaires pour transformer vos idées en entreprises
                            prospères, en vous offrant des outils pratiques et des stratégies
                            innovantes pour réussir dans le monde des affaires.</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Développement de compétences clés</b> : Vous apprendrez à identifier des opportunités, à élaborer des plans d’affaires solides et à gérer efficacement une entreprise</p>
                        </div>
                        <div class="av2">
                            <p><b>Autonomie </b>:  En tant qu’entrepreneur, vous aurez la liberté de prendre vos propres décisions et de diriger votre entreprise selon votre vision.</p>
                        </div>
                        <div class="av3">
                            <p><b>Innovation et créativité</b> : La formation encourage la pensée innovante et créative, essentielle pour se démarquer dans le monde des affaires.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/controleurgestion.jpg');">
            <h4 class="ttr">Contrôleur de gestion </h4>
            <div class="extserv">
                <form class="serv">
                    <div class="desc">
                        <p>Le contrôleur de gestion est un acteur clé dans
                            l’optimisation des ressources et la performance
                             financière de l’entreprise, en assurant un suivi
                              rigoureux des budgets et en fournissant des analyses
                              précises pour guider les décisions stratégiques.</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Rôle central dans l’entreprise</b> : En tant que contrôleur de gestion, vous jouerez un rôle crucial dans l’optimisation des ressources et la prise de décisions stratégiques.</p>
                        </div>
                        <div class="av2">
                            <p><b>Polyvalence et précision </b>:  La formation vous permettra de développer une polyvalence et une précision dans la gestion des chiffres, des compétences très recherchées sur le marché du travail.
                            </p>
                        </div>
                        <div class="av3">
                            <p><b>Opportunités de carrière</b> : Avec une formation en contrôle de gestion, vous pourrez accéder à des postes variés dans différents secteurs, augmentant ainsi vos perspectives de carrière.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/comptableII.jpg');">
            <h4 class="ttr">comptabilite module II </h4>
            <div class="extserv">
                <form class="serv">
                    <div class="desc">
                        <p>Notre formation en comptabilité Module II vous offre une maîtrise approfondie des
                             principes comptables essentiels, vous permettant de gérer efficacement les achats,
                             les ventes et les inventaires pour une gestion financière optimale.</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Conformité réglementaire</b> : Assurez-vous que les pratiques comptables de votre entreprise respectent les normes et régulations en vigueur.</p>
                        </div>
                        <div class="av2">
                            <p><b>Optimisation des ressources </b>:  Développez des stratégies pour optimiser les ressources financières et améliorer la rentabilité de l’entreprise.
                            </p>
                        </div>
                        <div class="av3">
                            <p><b>Compétences avancées</b> :  Acquérez une compréhension approfondie des processus comptables complexes, renforçant ainsi votre expertise.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/assisjuridique.jpg');">
            <h4 class="ttr">Assistant Juridique </h4>
            <div class="extserv">
                <form class="serv">
                    <div class="desc">
                        <p>Notre formation en assistant juridique vous prépare à devenir un pilier essentiel du département juridique, en vous dotant des compétences nécessaires
                             pour gérer efficacement les tâches administratives et juridiques, tout en assurant un soutien précieux aux avocats et aux professionnels du droit.</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Soutien juridique efficace</b> : Apprenez à préparer des documents juridiques, à gérer les dossiers et à assister les avocats dans leurs tâches quotidiennes.</p>
                        </div>
                        <div class="av2">
                            <p><b>Connaissance approfondie du droit </b>:  Acquérez une compréhension solide des procédures et des terminologies juridiques, vous permettant de naviguer efficacement dans le domaine juridique.</p>
                        </div>
                        <div class="av3">
                            <p><b>Développement professionnel continu</b> :  Restez à jour avec les évolutions législatives et réglementaires, renforçant ainsi votre expertise et votre valeur sur le marché du travail.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/assisdir.jpg');">
            <h4 class="ttr">Assistant de Direction </h4>
            <div class="extserv">
                <form class="serv">
                    <div class="desc">
                        <p>Notre formation en assistant de direction vous prépare à devenir un soutien indispensable pour la direction, en vous dotant des compétences nécessaires pour gérer
                            efficacement les tâches administratives, coordonner les projets et assurer une communication fluide au sein de l’entreprise.</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Soutien stratégique</b> : Apprenez à assister la direction dans la prise de décisions stratégiques et la gestion quotidienne.</p>
                        </div>
                        <div class="av2">
                            <p><b>Efficacité organisationnelle</b>:  Améliorez vos capacités à organiser et à prioriser les tâches, ce qui est essentiel pour le bon fonctionnement de l’entreprise.</p>
                        </div>
                        <div class="av3">
                            <p><b>Développement professionnel continu</b> :  Restez à jour avec les meilleures pratiques et les nouvelles technologies pour renforcer votre expertise et votre valeur sur le marché du travail.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/comptconfirme.jpg');">
            <h4 class="ttr">Comptabilite Confirme</h4>
            <div class="extserv">
                <form class="serv">
                    <div class="desc">
                        <p>Notre formation en comptabilité confirmée vous permet de maîtriser les aspects avancés de la comptabilité,
                            incluant la gestion de la paie, la fiscalité, et la trésorerie, tout en vous préparant à assumer des responsabilités accrues au sein de votre entreprise.</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Expertise avancée</b> : Acquérez des compétences approfondies en comptabilité générale, gestion de la paie, fiscalité, et trésorerie.</p>
                        </div>
                        <div class="av2">
                            <p><b>Conformité réglementaire</b>:  Assurez-vous que les pratiques comptables de votre entreprise respectent les normes et régulations en vigueur.</p>
                        </div>
                        <div class="av3">
                            <p><b>Opportunités de carrière</b> :  Augmentez vos perspectives professionnelles et accédez à des postes de comptable confirmé ou de chef comptable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if ({{ $errors->any() ? 'true' : 'false' }}) {
            var myModal = new bootstrap.Modal(document.getElementById('exampleservicebachelier'));
            myModal.show();
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        if ({{ session('success') ? 'true' : 'false' }}) {
            var myModal = new bootstrap.Modal(document.getElementById('exampleservicebachelier'));
            myModal.show();
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        if ({{ session('fail') ? 'true' : 'false' }}) {
            var myModal = new bootstrap.Modal(document.getElementById('exampleservicebachelier'));
            myModal.show();
        }
    });
</script>
@endsection


