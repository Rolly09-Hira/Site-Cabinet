@extends('base')

@section('title','service')

@section('content')

<div class="cont">
    <div class="gdr">
        <div class="servttr">
            <h1 class="gdttr">SERVICE D ' EXTERNALISATION</h1>
        </div>
        <div class="servinteresse">
            <a class="btn btn-success" data-bs-toggle="modal" href="#exampleModalProfiter" role="button"><i class="fas fa-lightbulb"></i> S'interesser</a><br>
        </div>
    </div>
    <div class="modal fade" id="exampleModalProfiter" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel"><i class="fa-solid fa-file-pen"></i> Veillez remplir ce formation pour profiter nos service d'externalisation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @if (Session::has('success'))
                   <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                   <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif

                <div class="modal-body">
                    <form class="row g-3" action="{{ route('ajout.externalisation') }}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <label for="commercial"  class="form-label">Nom du commercial</label>
                            <input type="text" name="commercial" class="form-control" id="commercial">
                            @error('commercial')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="etreprise"   class="form-label">Nom de l'entreprise ou de la societé</label>
                            <input type="text" name="entreprise" class="form-control" id="etreprise">
                            @error('entreprise')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="client" class="form-label">Nom du Client ou Responsable</label>
                            <input type="text" name="client" class="form-control" id="client" placeholder="1234 Main St">
                            @error('client')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="activite" class="form-label">Activités</label>
                            <input type="text" name="activite" class="form-control" id="activite" placeholder="">
                            @error('activite')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">Adresse e-mail</label>
                            <input type="email" name="mail" class="form-control" id="email">
                            @error('mail')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="text" name="contact" class="form-control" id="contact">
                            @error('contact')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="fb" class="form-label">Facebook</label>
                            <input type="text" name="fb" class="form-control" id="fb">
                            @error('fb')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="adresse" class="form-label">Adresse</label>
                            <input type="text" name="adresse" class="form-control" id="adresse">
                            @error('adresse')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="existance" class="form-label">Durée d'existance</label>
                            <input type="text" name="existance" class="form-control" id="existance">
                            @error('existance')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nombreperso" class="form-label">Nombre de personnele</label>
                            <input type="number" name="nombreperso" class="form-control" id="nombreperso">
                            @error('nombreperso')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="chiffre" class="form-label">Chiffre d'affaire</label>
                            <input type="number" name="chiffre" class="form-control" id="chiffre">
                            @error('chiffre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="regime" class="form-label">Regime d'imposition</label>
                            <input type="text" name="regime" class="form-control" id="regime">
                            @error('regime')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="status" class="form-label">Status juridique</label>
                            <input type="text" name="status" class="form-control" id="status">
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <fieldset class="col-md-12 bg-light">
                            <legend class="col-form-label col-sm-2 pt-0"><b>Domaine:</b></legend>
                            <div class="col-sm-10 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="domaine" id="compta" value="Comptabilité" >
                                    <label class="form-check-label" for="compta">
                                        Comptabilité
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="domaine" id="fiscale" value="Fiscale">
                                    <label class="form-check-label" for="fiscale">
                                        Fiscale
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="domaine" id="audit" value="Audit interne" >
                                    <label class="form-check-label" for="audit">
                                        Audi Interne
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="domaine" id="rh" value="Ressource Humaine" >
                                    <label class="form-check-label" for="rh">
                                        Ressource Humaine
                                    </label>
                                </div>
                                @error('domaine')
                                        <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>
                        <div class="col-md-12">
                            <label for="service" class="form-label"><b>Service souhaiter</b></label>
                            <select id="service" name="service" class="form-select" required>
                                <option value="" selected>Choisir...</option>
                                <option value="Récuperation des pièces">Récuperation des pièces</option>
                                <option value="Saisie comptable">Saisie comptable</option>
                                <option value="Envoye des situiation quotidiens">Envoye des situiation quotidiens</option>
                                <option value="Etablissement des états financiers">Etablissement des états financiers</option>
                                <option value="Suivi contrat, Dossier">Suivi contrat, Dossier</option>
                                <option value="TVA">TVA</option>
                                <option value="IRSA">IRSA</option>
                                <option value="IR">IR</option>
                                <option value="Cnaps et Ostie">Cnaps et Ostie</option>
                                <option value="Integration des employers et employés à la Cnaps et à l'OSTIE">Integration des employers et employés à la Cnaps et à l'OSTIE</option>
                                <option value="Audit et prevention fiscaux">Audit et prevention fiscaux</option>
                                <option value="Assistance sur contrôle fiscal">Assistance sur contrôle fiscal</option>
                                <option value="Audit Interne">Audit Interne</option>
                                <option value="Mise en place et mise à jour des procédures">Mise en place et mise à jour des procédures</option>
                                <option value="Mise en place d'organisation">Mise en place d'organisation</option>
                            </select>
                            @error('service')
                                        <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="delai" class="form-label">Delai d'execution souhaiter:</label>
                            <input type="text" name="delai" class="form-control" id="delai">
                            @error('delai')
                                        <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Terminer</button>
                        </div>
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

        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/empoule.jpg');">
            <h4 class="ttr">Externalisation de service</h4>
            <div class="extserv">
                <form class="serv">
                    <div class="ltserv">
                        <br>
                        <b>- Etude de faisabilité</b> <br><br>
                        <b>- Insistance à la création</b><br><br>
                        <b>- Location de gérance et de siège sociale </b>
                    </div>

                    <div class="desc">
                        <p>Nous offre une stratégie commerciale qui
                           consiste pour une entreprise à confier
                           certaines tâches à un prestataire externe spécialisé.</p><br>
                           <p>
                            Nous avons des experience qui permet au donneur dordres de se concentrer
                            sur des activités à forte valeur ajoutée, daugmenter
                            sa compétitivité et sa productivité. Voici quelques
                            avantages de lexternalisation du service client.
                        </p><br>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Couverture horaire étendue</b> : Votre service client peut être disponible 24h/24 et 7j/7 grâce à des centres dappels travaillant à linternational.</p>
                        </div>
                        <div class="av2">
                            <p><b>Service client multilingue </b>: Externaliser permet de recruter des collaborateurs bilingues ou natifs des pays ciblés, offrant un support dans différentes langues.</p>
                        </div>
                        <div class="av3">
                            <p><b>Gestion des pics dactivité</b> : Lors de périodes de suractivité, le prestataire met à disposition des ressources pour répondre aux appels.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/busunescreate.jpg');">
            <h4 class="ttr">Création d'entreprise ou de societé</h4>
            <div class="extserv">

                <form class="serv">
                    <div class="create">
                        <p>Transformez vos idées en réalité avec notre expertise en création d'entreprise et de société.</p>
                        <p>Lancez-vous dans l'entrepreneuriat avec notre accompagnement personnalisé pour la création de votre société.</p>
                        <p>Des solutions sur mesure pour votre entreprise : de la création à la croissance.</p>
                        <p>Votre succès commence ici : Création dentreprise et de société, simplifiée.</p>
                        <p>Innovez, créez, prospérez : choisissez notre service de création d'entreprise.</p>
                    </div>
                </form>

                <div class="avantage">
                    <b>Les Avantage:</b>
                    <div class="av">

                        <div class="av1">
                            <p><b>Liberté et Indépendance</b> : En créant votre entreprise, vous avez la liberté de décider quand, comment et avec qui travailler. Cest un luxe que beaucoup de salariés aimeraient avoir.</p>
                        </div>
                        <div class="av2">
                            <p><b>Expertise personnalisée </b>: Notre équipe possède une vaste expérience dans la création d’entreprises. Nous vous guidons à travers les formalités spécifiques à votre secteur d’activité.</p>
                        </div>
                        <div class="av3">
                            <p><b>Conseils stratégiques </b> : Nous vous aidons à prendre des décisions éclairées concernant la structure de votre société, les partenariats et les obligations légales.</p>
                        </div>
                        <div class="av3">
                            <p><b>Réseau de partenaires </b> : Bénéficiez de notre réseau de professionnels (avocats, comptables, etc.) pour faciliter votre lancement.</p>
                        </div>
                        <div class="av3">
                            <p><b>Suivi continu </b> :  Nous restons à vos côtés après la création de votre entreprise, vous aidant à surmonter les défis et à prospérer.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/bene.jpg');">
            <h4 class="ttr"> Externalisation de la comptabilité</h4>

            <div class="extserv">
                <form class="serv">
                    <div class="ltserve">
                        <br>
                        <b>-  Récupération des pièces ou envoie scan</b> <br><br>
                        <b>-  Saisie comptable</b> <br><br>
                        <b>-  Envoie des situations quotidiennes</b><br><br>
                        <b>-  Etablissements des états financiers</b>
                    </div>

                    <div class="desc">
                        <p>Libérez-vous des tâches comptables ! Confiez-les à nos experts pour plus de temps et de sérénité dans votre activité.</p>
                        <p>Externalisez votre comptabilité avec confiance. Bénéficiez de conseils professionnels et d’une gestion efficace.</p>
                        <p>Gagnez du temps et réduisez vos coûts en externalisant votre comptabilité. Nous nous occupons de tout !</p>
                        <p>Expertise comptable sur mesure : externalisez vos obligations fiscales et concentrez-vous sur votre cœur de métier.</p>
                        <p>Externalisation comptable : la clé pour une gestion financière optimale. Contactez-nous dès aujourd’hui !</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                            <div class="av1">
                                <p><b>Expertise spécialisée </b> : Nos professionnels de la comptabilité sont hautement qualifiés et connaissent les spécificités de votre secteur d’activité.</p>
                            </div>
                            <div class="av2">
                                <p><b>Réduction des coûts</b>: L’externalisation vous permet d’économiser sur les salaires, les avantages sociaux et les frais de formation liés à l’embauche d’un comptable interne.</p>
                            </div>
                            <div class="av3">
                                <p><b>Gain de temps</b> : En externalisant, vous pouvez vous concentrer sur votre cœur de métier pendant que nous gérons vos finances.</p>
                            </div>
                            <div class="av3">
                                <p><b>Conformité fiscale</b> : Nous veillons à ce que vos déclarations fiscales soient précises et soumises en temps voulu, évitant ainsi des pénalités potentielles.</p>
                            </div>
                            <div class="av3">
                                <p><b>Flexibilité</b> : Vous pouvez ajuster les services d’externalisation en fonction de vos besoins, que ce soit pour la tenue des livres, la paie ou la gestion des impôts.</p>
                            </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/idee.jpg');">
            <h4 class="ttr">Externalisation de la declaration fiscal et sociales</h4>

            <div class="extserv">
                <form class="serv">
                    <div class="ltserve">
                        <br>
                        <b>- Conseil et répartition des déclarations TVA, IRSA, IR, CNaPS et OSTIE sur le papier et en ligne</b> <br><br>
                        <b>- Interrogation des employeurs et employés à la CNaPS et à l’OSTIE</b> <br><br>
                        <b>- Audit et prévisions fiscaux</b><br><br>
                        <b>- Assistance sur le contrôle fiscal</b><br>
                    </div>

                    <div class="decfis">
                        <p>Simplifiez vos obligations fiscales et sociales ! Confiez-les à nos experts pour une gestion efficace et conforme.</p>
                        <p>Externalisez vos déclarations fiscales et gagnez du temps. Nous veillons à votre conformité et à la précision des informations.</p>
                        <p>Profitez de notre expertise en déclarations fiscales et sociales. Libérez-vous des tâches administratives et concentrez-vous sur votre activité.</p>
                        <p>Externalisation fiscale et sociale : la solution pour une gestion transparente et sans souci.</p>
                        <p>Nous prenons en charge vos déclarations avec rigueur et professionnalisme. Faites confiance à notre équipe !</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Expertise spécialisée</b> : Nos professionnels maîtrisent les subtilités des déclarations fiscales et sociales. Ils vous assurent une conformité rigoureuse et des conseils adaptés.</p>
                        </div>
                        <div class="av2">
                            <p><b>Gain de temps</b>: En externalisant ces tâches, vous libérez du temps pour vous concentrer sur votre activité principale. Nous nous occupons des formalités administratives.</p>
                        </div>
                        <div class="av3">
                            <p><b>Réduction des risques d’erreur</b> : Nos experts veillent à ce que vos déclarations soient précises et soumises en temps voulu, minimisant ainsi les risques de pénalités.</p>
                        </div>
                        <div class="av3">
                            <p><b>Flexibilité</b> : Vous pouvez ajuster nos services en fonction de vos besoins, que ce soit pour la TVA, les cotisations sociales ou les déclarations annuelles.</p>
                        </div>
                        <div class="av3">
                            <p><b>Confidentialité</b> : Vos données sont traitées avec la plus grande confidentialité et sécurité.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/audit.jpg');">
            <h4 class="ttr"> Externalisation de la cellule d'Audit interne et de controle</h4>

            <div class="extserv">
                <form class="serv">
                    <div class="ltserve">
                        <br>
                        <b>-  audit interne</b> <br><br>
                        <b>-  mise en place et mise à jour des procédures</b> <br><br>
                        <b>-  mise en place d’organisation</b>
                    </div>

                    <div class="decfis">
                        <p>Optimisez vos ressources en externalisant votre audit interne et de contrôle. Bénéficiez de l’expertise de professionnels aguerris.</p>
                        <p>Libérez-vous des tâches administratives et concentrez-vous sur votre cœur de métier. Externalisez votre audit interne pour une gestion plus efficace.</p>
                        <p>Confiez votre audit interne à notre équipe spécialisée. Nous garantissons la qualité, la conformité et la confidentialité.</p>
                        <p>Externalisation de l’audit interne : la voie vers une meilleure gouvernance et une maîtrise accrue des risques.</p>
                        <p>Économisez du temps et des ressources en externalisant votre audit interne. Contactez-nous pour en savoir plus !</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Expertise spécialisée</b> : Nos professionnels maîtrisent les subtilités des audits internes et des contrôles. Ils vous assurent une évaluation rigoureuse des processus et des risques.</p>
                        </div>
                        <div class="av2">
                            <p><b>Indépendance</b>: En externalisant, vous bénéficiez d’une perspective impartiale et objective. Notre équipe n’est pas influencée par les relations internes ou les pressions organisationnelles.</p>
                        </div>
                        <div class="av3">
                            <p><b>Flexibilité</b> : Vous pouvez ajuster nos services en fonction de vos besoins. Que ce soit pour des audits ponctuels ou une collaboration à long terme, nous sommes là pour vous.</p>
                        </div>
                        <div class="av3">
                            <p><b>Réduction des coût</b> : Externaliser vous permet d’économiser sur les salaires, la formation et les infrastructures nécessaires pour une cellule d’audit interne.</p>
                        </div>
                        <div class="av3">
                            <p><b>Confidentialité et conformité</b> : Vos données sont traitées avec la plus grande confidentialité, et nous veillons à respecter toutes les réglementations en vigueur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/etude.jpg');">
                <h4 class="ttr"> Formation pratique en comptabilité , fiscalite, Audit, ressources
                humaines, marketing, commerce, communication, entrepreneuriat,
                informatique, logistique et developpement personnel</h4>

                <div class="extserv">
                    <form class="serv">
                        <div class="ltserv">
                            <b>- Niveau 1 : assistant</b> <br><br>
                            <b>-  Niveau 2 : confirmé</b> <br><br>
                            <b>-  Niveau 3 : responsable</b>
                        </div>

                        <div class="decfis">
                            <p>Acquérez des compétences pratiques en comptabilité et fiscalité grâce à nos formations sur mesure.</p>
                            <p>Devenez un expert en audit financier avec nos programmes de formation adaptés à vos besoins.</p>
                            <p>Investissez dans votre développement personnel en participant à nos ateliers sur la gestion du temps, la communication et la confiance en soi.</p>
                            <p>Formez-vous efficacement aux enjeux comptables et fiscaux pour une meilleure performance professionnelle.</p>
                            <p>Optimisez vos compétences grâce à nos formations pratiques en comptabilité, fiscalité, audit et développement personnel.</p>
                        </div>
                    </form>
                    <div class="avantage">
                        <b>Les Avantage:</b><br>
                        <div class="av">
                            <div class="av1">
                                <p><b>Expertise pédagogique</b> : Nos formateurs sont des experts dans leurs domaines respectifs. Ils vous guideront avec des méthodes pédagogiques efficaces.</p>
                            </div>
                            <div class="av2">
                                <p><b>Programmes personnalisés </b>: Nous adaptons nos formations à vos besoins spécifiques. Que vous soyez débutant ou expérimenté, nous avons des modules pour vous.</p>
                            </div>
                            <div class="av3">
                                <p><b>Mises en situation réelles</b> : Nos formations pratiques incluent des exercices concrets et des cas réels pour une meilleure compréhension.</p>
                            </div>
                            <div class="av3">
                                <p><b>Certification</b> : À la fin de la formation, vous recevrez une certification reconnue, valorisant vos compétences.</p>
                            </div>
                            <div class="av3">
                                <p><b>Réseautage</b> : Profitez des opportunités de réseautage avec d’autres professionnels du secteur lors de nos sessions.</p>
                            </div>
                        </div>
                    </div>
                </div>

        </div>

        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/recr.jpg');">
            <h4 class="ttr"> recrutement</h4>

            <div class="extserv">
                <form class="serv">
                    <div class="ltserve">
                        <b>-  Définition du poste </b> <br><br>
                        <b>-  Définition de profil</b> <br><br>
                        <b>-  Campagne de recrutement</b><br><br>
                        <b>-  Sélection</b><br><br>
                        <b>-  Assistance, suivie et évaluation</b>
                    </div>

                    <div class="decfis">
                        <p>Trouvez votre prochain talent avec nous ! Notre équipe dédiée vous accompagne dans la recherche des meilleurs candidats.</p>
                        <p>Recrutez intelligemment : nous analysons les compétences, la personnalité et la culture d’entreprise pour des embauches réussies.</p>
                        <p>Votre succès commence avec les bonnes personnes. Faites confiance à notre expertise en recrutement.</p>
                        <p>Des talents exceptionnels pour votre entreprise : découvrez notre approche personnalisée.</p>
                        <p>Recruter n’a jamais été aussi simple. Contactez-nous pour trouver les profils qui correspondent à vos besoins !</p>

                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Expertise en sélection</b> : Notre équipe possède une connaissance approfondie des processus de recrutement. Nous identifions les candidats les mieux adaptés à vos besoins.</p>
                        </div>
                        <div class="av2">
                            <p><b> Gain de temps</b>: Externaliser le recrutement vous permet de vous concentrer sur votre cœur de métier pendant que nous gérons la recherche et la présélection des candidats.</p>
                        </div>
                        <div class="av3">
                            <p><b>Réseau de talents</b> : Nous avons accès à un vaste réseau de professionnels qualifiés, ce qui facilite la recherche de candidats compétents</p>
                        </div>
                        <div class="av3">
                            <p><b>Évaluation complète</b> : Nous évaluons non seulement les compétences techniques, mais aussi la personnalité, la culture d’entreprise et la motivation des candidats.</p>
                        </div>
                        <div class="av3">
                            <p><b>Réduction des risques</b> : En confiant le recrutement à des experts, vous minimisez les risques d’embaucher des candidats inadaptés.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/conception.jpg');">
            <h4 class="ttr"> Preparation de documents de credit et d'appel d'offre</h4>

            <div class="extserv">
                <form class="serv">
                    <div class="ltserv">
                        <b>- Préparation des documents d’octroi</b> <br><br>
                        <b>- Préparation des documents d’appel d’offre</b> <br><br>
                        <b>- Renouvellement de crédit bancaire ou micro finance</b>
                    </div>

                    <div class="desc">

                        <p>Externalisez la préparation de vos documents de crédit et d’appel d’offre pour une gestion efficace et des réponses personnalisées.</p>
                        <p>Gagnez du temps et améliorez la qualité de vos dossiers grâce à notre expertise en externalisation.</p>
                        <p>Optimisez vos ressources en confiant la préparation de vos documents à des professionnels compétents.</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Accélération du traitement</b> : Externaliser la préparation de documents permet de gagner du temps dans la recherche d’informations et d’accélérer le processus.</p>
                        </div>
                        <div class="av2">
                            <p><b> Amélioration de la qualité</b>: Les prestataires externes peuvent améliorer la qualité des dossiers de crédit en apportant leur expertise et leur rigueur.</p>
                        </div>
                        <div class="av3">
                            <p><b>Réduction des coûts</b> : L’externalisation génère des économies en obligeant les fournisseurs à offrir des prix compétitifs pour remporter le contrat.</p>
                        </div>
                        <div class="av3">
                            <p><b>Personnalisation des réponses</b> : Externaliser la gestion administrative et technique des dossiers permet une analyse pointue et la personnalisation des réponses aux appels d’offres.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/appris.jpg');">
            <h4 class="ttr"> Guide et accompagnement dans les projets et dans la collecte de produits locaux (ex:vanille, girofle…)</h4>

            <div class="extserv">
                <form class="serv">
                    <div class="ltserve">
                        <b>-  Représentation de société et de la marque</b> <br><br>
                        <b>-  Achats</b> <br><br>
                        <b>-  Préparation des documents d’exploitation</b><br><br>
                        <b>-  Envoie au destinataire</b>
                    </div>

                    <div class="decfis">

                        <p>Explorez nos services de guide expert pour vos projets locaux ! Nous vous accompagnons dans chaque étape, de la conception à la réalisation.</p>
                        <p>Collectez des produits locaux de qualité avec notre assistance personnalisée. Nous mettons en avant les richesses de votre région.</p>
                        <p>Optimisez vos initiatives locales grâce à notre expertise. Ensemble, créons un impact positif sur votre communauté.</p>
                        <p>Découvrez notre service de collecte de produits locaux. Nous valorisons les producteurs et artisans de votre région.</p>
                        <p>Faites confiance à notre équipe pour guider vos projets locaux vers le succès. Ensemble, construisons un avenir durable.</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Expertise locale</b> : Notre équipe connaît bien la région et les acteurs locaux. Nous pouvons vous guider vers les meilleures ressources et opportunités.</p>
                        </div>
                        <div class="av2">
                            <p><b> Optimisation des ressources</b>: Nous vous aidons à maximiser l’utilisation des ressources disponibles, que ce soit en termes de financement, de partenariats ou de logistique.</p>
                        </div>
                        <div class="av3">
                            <p><b>Réseau de contacts</b> : Grâce à notre réseau étendu, nous pouvons vous mettre en relation avec des producteurs, des artisans et d’autres professionnels locaux.</p>
                        </div>
                        <div class="av3">
                            <p><b>Impact positif</b> : En soutenant les produits locaux, vous contribuez au développement économique de votre communauté et à la préservation de l’environnement.</p>
                        </div>
                        <div class="av3">
                            <p><b>Personnalisation</b> : Notre accompagnement est adapté à vos besoins spécifiques. Que vous ayez un projet agricole, culturel ou social, nous sommes là pour vous.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/balance.jpg');">
            <h4 class="ttr"> Commenrcialisation de produits</h4>

            <div class="extserv">
                <form class="serv">
                    <div class="ltserve">
                        <b>-  Design de logo</b> <br><br>
                        <b>-  Conception de brochure</b> <br><br>
                        <b>-  Plaque publicitaire</b><br><br>
                        <b>-  Distribution de prospectus</b><br><br>
                        <b>-  Community management (communication sur les réseau sociaux, choix des médias)</b>
                    </div>

                    <div class="desc">

                        <p>Découvrez nos produits exceptionnels ! Nous les commercialisons avec passion et expertise.</p>
                        <p>Optimisez vos ventes grâce à notre stratégie de commercialisation efficace.</p>
                        <p>Des produits de qualité, une mise en marché percutante : choisissez notre expertise.</p>
                        <p>Faites confiance à notre équipe pour promouvoir vos produits auprès du public.</p>
                        <p>Commercialisation intelligente, résultats concrets : c’est notre engagement.</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Stratégie ciblée</b> : Nous élaborons des plans de commercialisation spécifiques à votre produit, en tenant compte de votre marché cible et de vos objectifs.</p>
                        </div>
                        <div class="av2">
                            <p><b> Visibilité accrue</b>: Grâce à nos efforts de marketing, votre produit gagnera en visibilité auprès des consommateurs et des partenaires potentiels.</p>
                        </div>
                        <div class="av3">
                            <p><b>Positionnement optimal</b> : Nous mettons en avant les caractéristiques uniques de votre produit pour le différencier de la concurrence.</p>
                        </div>
                        <div class="av3">
                            <p><b>Suivi et ajustements</b> : Nous surveillons les performances de votre produit et apportons des ajustements si nécessaire pour maximiser les ventes.</p>
                        </div>
                        <div class="av3">
                            <p><b>Réseau de distribution</b> : Notre réseau de partenaires et de canaux de distribution facilite la mise en marché de votre produit.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/icon/reun.jpg');">
            <h4 class="ttr">renouvelement de documents</h4>

            <div class="extserv">
                <form class="serv">
                    <div class="ltserv">
                        <br>
                        <b>-  Visa et carte résident pour les étrangers</b> <br><br>
                        <b>-  Passeport</b> <br>
                    </div>

                    <div class="decfis">

                        <p>Simplifiez vos démarches administratives ! Nous prenons en charge le renouvellement de vos documents avec efficacité.</p>
                        <p>Gagnez du temps en confiant vos renouvellements à notre équipe expérimentée. Nous veillons à la conformité et à la précision.</p>
                        <p>Renouvelez vos documents en toute tranquillité. Faites appel à nos services pour une gestion sans souci.</p>
                        <p>Optimisez la validité de vos documents grâce à notre expertise. Nous vous accompagnons à chaque étape.</p>
                        <p>Renouvellement de documents ? Nous sommes là pour vous simplifier la vie !</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Efficacité</b> : Nous gérons le processus de renouvellement de manière rapide et efficace, vous évitant ainsi des retards ou des oublis.</p>
                        </div>
                        <div class="av2">
                            <p><b> Conformité</b>: Nous veillons à ce que vos documents soient renouvelés conformément aux réglementations en vigueur, évitant ainsi des problèmes juridiques.</p>
                        </div>
                        <div class="av3">
                            <p><b>Suivi personnalisé</b> : Notre équipe vous accompagne tout au long du processus, répondant à vos questions et vous tenant informé(e) des progrès.</p>
                        </div>
                        <div class="av3">
                            <p><b>Réduction du stress</b> : En externalisant cette tâche, vous pouvez vous concentrer sur d’autres aspects de votre vie professionnelle ou personnelle.</p>
                        </div>
                        <div class="av3">
                            <p><b>Gain de temps</b> : Nous prenons en charge les démarches administratives, vous libérant du temps précieux.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="count" id="cnt" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/icon/disc.jpg');">
            <h4 class="ttr"> coursier et recouvrement</h4>

            <div class="extserv">
                <form class="serv">
                    <div class="ltserv">
                        <b>-  Distribution des plis </b> <br><br>
                        <b>-  Recouvrement</b> <br><br>
                        <b>-  Livraison</b>
                    </div>

                    <div class="decfis">

                        <p>Besoin d’un service de coursier rapide et fiable ? Faites confiance à notre équipe pour des livraisons sécurisées et ponctuelles !</p>
                        <p>Optimisez vos opérations de recouvrement avec notre expertise. Nous récupérons vos créances de manière efficace et professionnelle.</p>
                        <p>Livraison express, recouvrement sans tracas : choisissez notre entreprise pour une gestion optimale de vos besoins logistiques et financiers.</p>
                        <p>Nos coursiers sont à votre service 24/7. Confiez-nous vos colis et vos dossiers de recouvrement en toute confiance.</p>
                        <p>Coursier et recouvrement : deux services essentiels, un seul partenaire de confiance.</p>
                    </div>
                </form>
                <div class="avantage">
                    <b>Les Avantage:</b><br>
                    <div class="av">
                        <div class="av1">
                            <p><b>Livraisons rapides et sécurisées </b> : Nos coursiers sont formés pour effectuer des livraisons ponctuelles et en toute sécurité. Vos colis arriveront à destination sans délai.</p>
                        </div>
                        <div class="av2">
                            <p><b> Réduction des coûts logistiques</b>: Externaliser la livraison vous permet d’économiser sur les frais de transport, de stockage et de gestion des véhicules.</p>
                        </div>
                        <div class="av3">
                            <p><b>Expertise en recouvrement</b> : Notre équipe de recouvrement gère efficacement les créances, vous aidant à récupérer les paiements en souffrance.</p>
                        </div>
                        <div class="av3">
                            <p><b>Flexibilité des horaires</b> : Nous sommes disponibles selon vos besoins, que ce soit pour une livraison urgente ou une action de recouvrement.</p>
                        </div>
                        <div class="av3">
                            <p><b>Confidentialité et professionnalisme</b> : Vos colis et vos dossiers sont traités avec la plus grande confidentialité et dans le respect des normes professionnelles.</p>
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
            var myModal = new bootstrap.Modal(document.getElementById('exampleModalProfiter'));
            myModal.show();
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        if ({{ session('success') ? 'true' : 'false' }}) {
            var myModal = new bootstrap.Modal(document.getElementById('exampleModalProfiter'));
            myModal.show();
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        if ({{ session('fail') ? 'true' : 'false' }}) {
            var myModal = new bootstrap.Modal(document.getElementById('exampleModalProfiter'));
            myModal.show();
        }
    });
</script>
@endsection
