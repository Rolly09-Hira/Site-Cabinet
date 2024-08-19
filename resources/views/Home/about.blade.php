@extends('base')

@section('title','About')

@section('content')
<div class="about" style="margin-top:110px;">
            <h1 class="abouttitre">CABINET EXCELLENT</h1>
            <div class="aboutcab">
                <p>Le CABINET EXCELLENT offre une gamme variée de services en tant que
                    prestataire ou sous-traitant, adaptés aux besoins des entrepreneurs désireux d'externaliser tout
                    ou partie de leurs activités.</p>
            </div>
</div>
<footer class="aboutfoot">
        <div class="div1">
            <div class="menu">
                <div class="footttr">
                     <h5 class="divttr"><i class="fas fa-align-justify"></i>  Menu</h5>
                </div>
                <div class="menuctnt">
                    <a class="btn" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="fas fa-history"></i> Historique</a><br>
                    <a class="btn" data-bs-toggle="modal" href="#exampleModalperso" role="button"><i class="fas fa-users"></i> Personnel du cabinet</a>
                </div>
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Historique</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    CABINET EXCELLENT SARLU (société à responsabilité limité unipersonnel),
                                    créé le 12 avril durant une assemblée générale extraordinaire. Elle a acquis une expertise de 10
                                    ans à Madagascar.
                                </p>
                                <p>
                                    Avant 2019, le cabinet opérait sous le nom de "DECONFISC", se spécialisant dans les
                                    conseils fiscaux et juridiques, avant de changer de nom pour "CABINET NAKAY". Ce
                                    nouveau nom, signifiant "mon" ou "à moi" en malgache de la partie ouest de Madagascar,
                                    reflète les origines du fondateur dans cette région. En même temps, le cabinet a élargi son
                                    domaine d'activité pour devenir un cabinet d'étude et de services d'externalisation.
                                </p>
                                <p>
                                    Par définition, afin de donner quelques explications, une externalisation du point de
                                    vue économique est un accord passé entre une organisation et un tiers pour la prise en charge,
                                    l'exploitation, la gestion continue et l'amélioration :
                                </p>
                                <p>
                                    <ul>
                                        <li>
                                            de fonctions entières de l'organisation (ex. : informatique, nettoyage, ressources
                                            humaines, paie/revenus, facturation, comptabilité, marketing et communication) ;
                                        </li>
                                        <li>
                                            d'infrastructures (ex. : système d'informations, systèmes de sécurité, réseaux de
                                            télécommunications) ;
                                        </li>
                                        <li>
                                            de processus opérationnels (ex. : exploitation de matières premières, production
                                            industrielle, exploitation d'un réseau de télécommunications, stockage, logistique,
                                            transports) en amont ou aval de l'organisation.
                                        </li>
                                    </ul>
                                </p>
                                <p>
                                    L'externalisation repose en termes juridiques sur un contrat à durée fixe portant sur le transfert
                                    de tout ou partie de la fonction, du service et/ou de l'infrastructure ou du processus
                                    opérationnel de l'organisation entre l'organisation propriétaire et un opérateur. Les clauses de
                                    retour ou de réversibilité sont la clef d'une externalisation réussie.
                                </p>
                                <p>
                                    Ce contrat peut inclure un transfert d'actifs et/ou de personnel. Le client se concentre sur la
                                    définition des résultats à atteindre.
                                </p>
                                <p>
                                    L'externalisation est susceptible de toucher des organisations publiques et privées.
                                </p>
                                <p>
                                    Les services et les expériences se sont évalués au cours du temps et ont dépassée largement de
                                    ce qui a été prévue au début.
                                </p>
                                <p>
                                    A partir de l’année 2023, le propriétaire décida de changer la dénomination du cabinet
                                    en <b>« CABINET EXCELLENT »</b>.
                                </p>
                                <p>
                                    Son slogan est de <b>« Près de vous à tout moment »</b>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalperso" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Personel</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    pplpopojoîu(société à responsabilité limité unipersonnel),
                                    créé le 12 avril durant une assemblée générale extraordinaire. Elle a acquis une expertise de 10
                                    ans à Madagascar.
                                </p>
                                <p>
                                    Avant 2019, le cabinet opérait sous le nom de "DECONFISC", se spécialisant dans les
                                    conseils fiscaux et juridiques, avant de changer de nom pour "CABINET NAKAY". Ce
                                    nouveau nom, signifiant "mon" ou "à moi" en malgache de la partie ouest de Madagascar,
                                    reflète les origines du fondateur dans cette région. En même temps, le cabinet a élargi son
                                    domaine d'activité pour devenir un cabinet d'étude et de services d'externalisation.
                                </p>
                                <p>
                                    Par définition, afin de donner quelques explications, une externalisation du point de
                                    vue économique est un accord passé entre une organisation et un tiers pour la prise en charge,
                                    l'exploitation, la gestion continue et l'amélioration :
                                </p>
                                <p>
                                    <ul>
                                        <li>
                                            de fonctions entières de l'organisation (ex. : informatique, nettoyage, ressources
                                            humaines, paie/revenus, facturation, comptabilité, marketing et communication) ;
                                        </li>
                                        <li>
                                            d'infrastructures (ex. : système d'informations, systèmes de sécurité, réseaux de
                                            télécommunications) ;
                                        </li>
                                        <li>
                                            de processus opérationnels (ex. : exploitation de matières premières, production
                                            industrielle, exploitation d'un réseau de télécommunications, stockage, logistique,
                                            transports) en amont ou aval de l'organisation.
                                        </li>
                                    </ul>
                                </p>
                                <p>
                                    L'externalisation repose en termes juridiques sur un contrat à durée fixe portant sur le transfert
                                    de tout ou partie de la fonction, du service et/ou de l'infrastructure ou du processus
                                    opérationnel de l'organisation entre l'organisation propriétaire et un opérateur. Les clauses de
                                    retour ou de réversibilité sont la clef d'une externalisation réussie.
                                </p>
                                <p>
                                    Ce contrat peut inclure un transfert d'actifs et/ou de personnel. Le client se concentre sur la
                                    définition des résultats à atteindre.
                                </p>
                                <p>
                                    L'externalisation est susceptible de toucher des organisations publiques et privées.
                                </p>
                                <p>
                                    Les services et les expériences se sont évalués au cours du temps et ont dépassée largement de
                                    ce qui a été prévue au début.
                                </p>
                                <p>
                                    A partir de l’année 2023, le propriétaire décida de changer la dénomination du cabinet
                                    en <b>« CABINET EXCELLENT »</b>.
                                </p>
                                <p>
                                    Son slogan est de <b>« Près de vous à tout moment »</b>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partenaire">
                <div class="footttr">
                    <h5 class="divttr"><i class="far fa-handshake"></i> Nos partenaire</h5>
               </div>
               <div class="logopartenaire">
                   <div class="associationnakay">
                       <b class="souslog">Association nakay</b><br>
                       <img src="/icon/associationnakay.jpg" style="width: 40px;" alt="">
                   </div>
                   <div class="cabinetnakay">
                        <b class="souslog">Cabinet Nakay</b><br>
                        <img src="/icon/cabinetnakay.jpg" style="width: 40px;" alt="">
                   </div>
                   <div class="ase">
                        <b class="souslog">ASE</b><br>
                        <img src="/icon/ise.png" style="width: 40px;" alt="">
                   </div>
               </div>
            </div>
        </div>
        <div class="div2">
            <div class="contact">
                <div class="footttr">
                    <h5 class="divttr"><i class="fas fa-phone-volume"></i> Contact</h5>
               </div>
               <div class="ul">
                <li><i class="fas fa-mail-bulk"></i>Mail : <b>Cabinet.nakay@gmail.com</b></li>
                <li><i class="fab fa-facebook"></i>Facebook : Cabinet.Nakay</li>
                <li><i class="fas fa-phone-square"></i>Télephone : 0343281166 / 0338785139</li>
               </div>
            </div>
            <div class="aboutapp">
                <div class="footttr">
                    <h5 class="divttr"><i class="fas fa-info-circle"></i> A propos de l'appli</h5>
                </div>
               <div class="aboutdev">
                <a class="btn" data-bs-toggle="modal" href="#exampleModaldev" role="button"><i class="fas fa-user-astronaut"></i> <b>Voir le Devellopeur</b></a><br>
                <p><b>Creér en :</b><br>Août 2024 à Avardoha Anatananarivo Madagascar</p>

               </div>
               <div class="modal fade" id="exampleModaldev" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Developpeur</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                devrol (société à responsabilité limité unipersonnel),
                                créé le 12 avril durant une assemblée générale extraordinaire. Elle a acquis une expertise de 10
                                ans à Madagascar.
                            </p>
                            <p>
                                Avant 2019, le cabinet opérait sous le nom de "DECONFISC", se spécialisant dans les
                                conseils fiscaux et juridiques, avant de changer de nom pour "CABINET NAKAY". Ce
                                nouveau nom, signifiant "mon" ou "à moi" en malgache de la partie ouest de Madagascar,
                                reflète les origines du fondateur dans cette région. En même temps, le cabinet a élargi son
                                domaine d'activité pour devenir un cabinet d'étude et de services d'externalisation.
                            </p>
                            <p>
                                Par définition, afin de donner quelques explications, une externalisation du point de
                                vue économique est un accord passé entre une organisation et un tiers pour la prise en charge,
                                l'exploitation, la gestion continue et l'amélioration :
                            </p>
                            <p>
                                <ul>
                                    <li>
                                        de fonctions entières de l'organisation (ex. : informatique, nettoyage, ressources
                                        humaines, paie/revenus, facturation, comptabilité, marketing et communication) ;
                                    </li>
                                    <li>
                                        d'infrastructures (ex. : système d'informations, systèmes de sécurité, réseaux de
                                        télécommunications) ;
                                    </li>
                                    <li>
                                        de processus opérationnels (ex. : exploitation de matières premières, production
                                        industrielle, exploitation d'un réseau de télécommunications, stockage, logistique,
                                        transports) en amont ou aval de l'organisation.
                                    </li>
                                </ul>
                            </p>
                            <p>
                                L'externalisation repose en termes juridiques sur un contrat à durée fixe portant sur le transfert
                                de tout ou partie de la fonction, du service et/ou de l'infrastructure ou du processus
                                opérationnel de l'organisation entre l'organisation propriétaire et un opérateur. Les clauses de
                                retour ou de réversibilité sont la clef d'une externalisation réussie.
                            </p>
                            <p>
                                Ce contrat peut inclure un transfert d'actifs et/ou de personnel. Le client se concentre sur la
                                définition des résultats à atteindre.
                            </p>
                            <p>
                                L'externalisation est susceptible de toucher des organisations publiques et privées.
                            </p>
                            <p>
                                Les services et les expériences se sont évalués au cours du temps et ont dépassée largement de
                                ce qui a été prévue au début.
                            </p>
                            <p>
                                A partir de l’année 2023, le propriétaire décida de changer la dénomination du cabinet
                                en <b>« CABINET EXCELLENT »</b>.
                            </p>
                            <p>
                                Son slogan est de <b>« Près de vous à tout moment »</b>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
</footer>

@endsection
