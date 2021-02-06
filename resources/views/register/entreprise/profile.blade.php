@extends('layout.monProfil')
 
@section('title') Dashboard Entreprise @endsection

@section('body')

    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
    
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>
    
            <div class="sidebar-header">
                <a href="#" class="anul_lien" id="bloc_logo">
                    <img src="{{asset('design/parfait_integration/ressources/img/afri2.png')}}" id="logo_header" alt="logo">
                </a>
            </div>

            <ul class="liste_responsive nav nav-tabs" role="tablist">
                <li class="active">
                    <a class="anul_lien nav-tabs active" id="nav-home-tab" data-toggle="tab" href="#vue_ensemble" role="tab" aria-controls="#vue_ensemble" aria-selected="true">Vue d'ensemble</a>
                </li>
                <li>
                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#presentation" role="tab" aria-controls="#presentation" aria-selected="false">Présentation</a>
                </li>
                <li>
                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#information_entreprise" aria-controls="#information_entreprise" aria-selected="false">Informations sur l'entreprise</a>
                </li>
                <li>
                    <button id="button_modal" data-toggle="modal" data-target="#modal_ensemble">Voir informations</button>
                </li>
            </ul>
            <div class="sous_bloc_haut">
            </div>
            <div class="bloc_boutons">
                <div id="bloc_site">
                    <a href="{{route('home',['locale' => App::getlocale()])}}" class="anul_lien" id="lien_espace">Retour au site web</a>
                </div>
                {{-- <a href="#" class="bouton_africkup couleur_africkup">partagez votre profil</a> --}}
                {{-- <a href="#" class="bouton_africkup couleur_africkup">download one pager</a> --}}
            </div>
        </nav>
    
        <!-- Page Content -->

        <!-- Dark Overlay element -->
        <div class="overlay_header"></div>
    </div>
    <main>
        <div class="container container_corps_dashbord class_dashbord">
            <div class="sous_container_droit">
                <div class="header_container">
                    <ul class="liste_type_1 nav nav-tabs" role="tablist">
                        <li class="active">
                            <a class="anul_lien nav-tabs active" id="nav-home-tab" data-toggle="tab" href="#vue_ensemble" role="tab" aria-controls="#vue_ensemble" aria-selected="true">Vue d'ensemble</a>
                        </li>
                        <li>
                            <a class="anul_lien nav-tabs" data-toggle="tab" href="#presentation" role="tab" aria-controls="#presentation" aria-selected="false">Présentation</a>
                        </li>
                        <li>
                            <a class="anul_lien nav-tabs" data-toggle="tab" href="#information_entreprise" aria-controls="#information_entreprise" aria-selected="false">Information sur l'entreprise</a>
                        </li>
                    </ul>
                    <button class="navbar-toggler" id="bouton_derouleur" type="button" data-toggle="collapse" data-target="#bloc_menu_header" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="{{asset('design/parfait_integration/ressources/img/open-menu.svg')}}" alt="icone_menu">
                    </button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div id="vue_ensemble" class="tab-pane fade show active">
                        <div class="container_rubrique">
                            <h2 class="titre_rubrique">Résumé des informations relatives à l'entreprise</h2>
                            <div class="corps_rubrique">
                                <p>Présentez-vous au monde entier et expliquez ce qui permet à votre entreprise de se distinguer.</p>
                                <form action="{{route('entreprise.description',['locale' => App::getlocale()])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <textarea placeholder="Description de l'entreprise" class="description_text ckeditor" name="description_entreprise" id="description_entreprise" cols="30" rows="10">{!! $user->getUserData->description_entreprise !!}</textarea>
                                    <div class="bloc_depot">
                                        <p class="paragraphe_depot">Augmentez l'impact de votre profil en téléchargeant une courte video de présentation</p>
                                        <input type="file" accept=".mp4" class="image_upload" name="video_presentation" id="video_presentation" />
                                    </div>
                                    <button type="submit" class="form-group btn btn-primary mt-4">Enregistrer</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                    <div id="presentation" class="tab-pane fade">
                        <div class="container_rubrique">
                            <h2 class="titre_rubrique">Presentation</h2>
                            <div class="corps_rubrique">
                                <p>Présentez-vous au monde entier et expliquez ce qui permet à votre entreprise de se distinguer.</p>
                                <form action="{{route('entreprise.presentation',['locale' => App::getlocale()])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="sous_form">
                                        <div class="champ_court">
                                            <label for="nom">Nom:</label>
                                            <input type="text" class="champs_africkup" name="nom" placeholder="Nom de l'entreprise" value="{{$user->getUserData->nom}}">
                                        </div>
                                        <div class="champ_court">
                                            <label for="adresse">Adresse:</label>
                                            <input type="text" class="champs_africkup" name="adresse" placeholder="Adresse de l'entreprise" value="{{$user->getUserData->adresse}}">
                                        </div>
                                    </div>
                                    <div class="sous_form">
                                        <div class="champ_court">
                                            <label for="telephone">Telephone:</label>
                                            <input type="text" class="champs_africkup" name="telephone" placeholder="Telephone" value="{{$user->getUserData->telephone}}">
                                        </div>
                                        <div class="champ_court">
                                            <label for="email">Email:</label>
                                            <input type="text" class="champs_africkup" name="email" placeholder="Email" value="{{$user->getUserData->email}}">
                                        </div>
                                    </div>
                                    <div class="sous_form">
                                        <div class="champ_court">
                                            <label for="domaine_activite">Domaine d'activité:</label>
                                            <select id="domaine_activite" name="domaine_activite" class="champs_africkup">
                                                @foreach ($categories as $item)
                                                    <option value="{{$item->id}}" @if ($item->id == $user->entreprise->categorie)selected @endif>{{$item->nom}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        <div class="champ_court">
                                            <label for="format_juridique">Format juridique/Fiscal:</label>
                                            <select id="format_juridique" name="format_juridique" class="champs_africkup">
                                                <option value="">Format juridique/Fiscal</option>
                                                <option @if ($user->getUserData->format_juridique == "pas-encore-inscrit")selected                                       
                                                @endif value="pas-encore-inscrit">Pas encore inscrit</option>
                                                <option @if ($user->getUserData->format_juridique == "etablissement")selected                                       
                                                @endif value="etablissement">Etablissement</option>
                                                <option @if ($user->getUserData->format_juridique == "sarl")selected                                       
                                                @endif value="sarl">SARL</option>
                                                <option @if ($user->getUserData->format_juridique == "sa")selected                                       
                                                @endif value="sa">SA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="sous_form">
                                        <div class="champ_court">
                                            <label for="nombre_employes">Nombre Employes:</label>
                                            <input type="number" class="champs_africkup" id="nombre_employes" name="nombre_employes" placeholder="Nombre Employes" value="{{$user->getUserData->nombre_employes}}">
                                        </div>
                                        <div class="champ_court">
                                            <label for="site_web">Site Web:</label>
                                            <input type="url" class="champs_africkup" name="site_web" id="site_web" placeholder="Site Web" value="{{$user->getUserData->site_web}}">
                                        </div>
                                    </div>
                                    <button type="submit" class="form-group btn btn-primary mt-4">Enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="information_entreprise" class="tab-pane fade">
                        <div class="container_rubrique">
                            <h2 class="titre_rubrique">Informations sur l'entreprise</h2>
                            <div class="corps_rubrique">
                                <p>Présentez-vous au monde entier et expliquez ce qui permet à votre entreprise de se distinguer.</p>
                                <form action="{{route('entreprise.informations',['locale' => App::getlocale()])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="sous_form">
                                        <div class="champ_court">
                                            <label for="pays">Pays:</label>
                                            <select id="pays" name="pays" class="champs_africkup">
                                                @include('partials.pays')
                                            </select>
                                        </div>
                                        <div class="champ_court">
                                            <label for="ville">Ville:</label>
                                            <input type="text" class="champs_africkup" name="ville" value="{{$user->getUserData->ville}}" placeholder="Ville">
                                        </div>
                                    </div>
                                    <div class="sous_form">
                                        <div class="champ_court">
                                            <label for="date_creation">Dates de création et mise en service:</label>
                                            <input type="date" class="champs_africkup" id="date_creation" name="date_creation" value="{{$user->getUserData->date_creation_entreprise}}" placeholder="Dates de création et mise en service">
                                        </div>
                                        <div class="champ_court">
                                            <label for="logo">Logo:</label>
                                            <input type="file" class="champs_africkup" name="logo" placeholder="Logo">
                                        </div>
                                    </div>
                                    <div class="sous_form mt-3">
                                        <div class="champ_court champs_long">
                                            <label for="profils_recherches">TYPE DE PROFILS RECHERCHES:</label>
                                            <textarea class="champs_africkup ckeditor" name="profils_recherches" id="profils_recherches" rows="5" placeholder="TYPE DE PROFILS RECHERCHES">{!! $user->getUserData->profil_recherche !!}</textarea>
                                        </div>
                                        <div class="champ_court champs_long">
                                            <label for="formation_recherchee">FORMATION RECHERCHEE:</label>
                                            <textarea class="champs_africkup ckeditor" name="formation_recherchee" id="formation_recherchee" rows="5" placeholder="FORMATION RECHERCHEE">{!! $user->getUserData->formation_recherchee !!}</textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="form-group btn btn-primary mt-4">Enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bloc_resume">
                <h3 class="titre">Ajoutez un concept en ligne qui met en valeur votre position commerciale unique.</h3>
                <div class="bloc_principal_resume">
                    <div class="ligne_resume">
                        <span class="bloc_gauche_resume">Entreprise</span>
                        <span class="bloc_droit_resume">{{$user->getUserData->nom}}</span>
                    </div>
                    <div class="ligne_resume">
                        <span class="bloc_gauche_resume">Adresse</span>
                        <span class="bloc_droit_resume">@if ($user->getUserData->adresse)
                            {{$user->getUserData->adresse}}
                        @else
                            --
                        @endif</span>
                    </div>
                    <div class="ligne_resume">
                        <span class="bloc_gauche_resume">Pays</span>
                        <span class="bloc_droit_resume">{{$user->getUserData->pays}}</span>
                    </div>
                    <div class="ligne_resume">
                        <span class="bloc_gauche_resume">Ville</span>
                        <span class="bloc_droit_resume">{{$user->getUserData->ville}}</span>
                    </div>
                    <div class="ligne_resume">
                        <span class="bloc_gauche_resume">Fondée le</span>
                        <span class="bloc_droit_resume">{{$user->getUserData->date_creation_entreprise}}</span>
                    </div>
                    <div class="ligne_resume">
                        <span class="bloc_gauche_resume">Employés</span>
                        <span class="bloc_droit_resume">@if ($user->getUserData->nombre_employes)
                            {{$user->getUserData->nombre_employes}}
                        @else
                            --
                        @endif</span>
                    </div>
                    <div class="ligne_resume">
                        <span class="bloc_gauche_resume">Site web</span>
                        <span class="bloc_droit_resume">@if ($user->getUserData->site_web)
                            {{$user->getUserData->site_web}}
                        @else
                            --
                        @endif</span>
                    </div>
                    <div class="bloc_boutons">
                         <a href="{{route('home',['locale' => App::getlocale()])}}" class="bouton_africkup couleur_africkup">Retour au site</a>
                       {{--  <a href="#" class="bouton_africkup couleur_africkup">Partagez votre profil</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="modal_ensemble" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="bloc_resume">
                    <h3 class="titre">Ajoutez un concept en ligne qui met en valeur votre position commerciale unique.</h3>
                    <div class="bloc_principal_resume">
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Entreprise</span>
                    <span class="bloc_droit_resume">{{$user->getUserData->nom}}</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Adresse</span>
                    <span class="bloc_droit_resume">@if ($user->getUserData->adresse)
                        {{$user->getUserData->adresse}}
                    @else
                        --
                    @endif</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Pays</span>
                    <span class="bloc_droit_resume">{{$user->getUserData->pays}}</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Ville</span>
                    <span class="bloc_droit_resume">{{$user->getUserData->ville}}</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Fondée le</span>
                    <span class="bloc_droit_resume">{{$user->getUserData->date_creation_entreprise}}</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Employés</span>
                    <span class="bloc_droit_resume">@if ($user->getUserData->nombre_employes)
                        {{$user->getUserData->nombre_employes}}
                    @else
                        --
                    @endif</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Site web</span>
                    <span class="bloc_droit_resume">@if ($user->getUserData->site_web)
                        {{$user->getUserData->site_web}}
                    @else
                        --
                    @endif</span>
                </div>
                    <div class="bloc_boutons">
                        <a href="#" class="bouton_africkup couleur_africkup">partagez votre profil</a>
                       {{--  <a href="#" class="bouton_africkup couleur_africkup">download one pager</a> --}}
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
@section('scripts')
<script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
    
            $('#dismiss, .overlay_header').on('click', function () {
                // hide sidebar
                $('#sidebar').removeClass('active');
                // hide overlay_header
                $('.overlay_header').removeClass('active');
            });

            $('#sidebar .nav-tabs').on('click', function () {
                // hide sidebar
                $('#sidebar').removeClass('active');
                // hide overlay_header
                $('.overlay_header').removeClass('active');
            });
    
            $('#bouton_derouleur').on('click', function () {
                // open sidebar
                $('#sidebar').addClass('active');
                // fade in the overlay_header
                $('.overlay_header').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
@endsection

