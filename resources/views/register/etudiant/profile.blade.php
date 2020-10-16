<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="{{asset('design/assets/uploads/2019/04/favicon.png')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('design/parfait_integration/css/header_respon.css')}}">
    <link rel="stylesheet" href="{{asset('design/parfait_integration/style_dashbord.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
	@livewireStyles 
    <title>Dashbord Etudiant</title>
</head>
<body>
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
                <li class="@if (!session('onglet')) active @endif">
                    <a class="anul_lien nav-tabs @if (!session('onglet')) active @endif" id="nav-home-tab" data-toggle="tab" href="#vue_ensemble" role="tab" aria-controls="#vue_ensemble" aria-selected="@if (!session('onglet')) true @else false @endif">Présentation</a>
                </li>
                <li class="@if (session('onglet') == 'informations') active @endif">
                    <a class="anul_lien nav-tabs @if (session('onglet') == 'informations') active @endif" data-toggle="tab" href="#information_complementaire" aria-controls="#information_complementaire" aria-selected="@if (session('onglet') == 'informations') true @else false @endif">Informations Complémentaires</a>
                </li>
                <li class="@if (session('onglet') == 'cursus_academique') active @endif">
                    <a class="anul_lien nav-tabs @if (session('onglet') == 'cursus_academique') active @endif" data-toggle="tab" href="#cursus_academique" role="tab" aria-controls="#cursus_academique" aria-selected="@if (session('onglet') == 'cursus_academique') true @else false @endif">Cursus Académique</a>
                </li>
                <li class="@if (session('onglet') == 'experience_professionnelle') active @endif">
                    <a class="anul_lien nav-tabs @if (session('onglet') == 'experience_professionnelle') active @endif" data-toggle="tab" href="#experience_professionnelle" aria-controls="#experience_professionnelle" aria-selected="@if (session('onglet') == 'experience_professionnelle') true @else false @endif">Expérience professionnelle</a>
                </li>
                <li class="@if (session('onglet') == 'references') active @endif">
                    <a class="anul_lien nav-tabs @if (session('onglet') == 'references') active @endif" data-toggle="tab" href="#references" aria-controls="#references" aria-selected="@if (session('onglet') == 'references') true @else false @endif">Références</a>
                </li>
                <li class="@if (session('onglet') == 'competences') active @endif">
                    <a class="anul_lien nav-tabs @if (session('onglet') == 'competences') active @endif" data-toggle="tab" href="#competences" aria-controls="#competences" aria-selected="@if (session('onglet') == 'competences') true @else false @endif">Compétences</a>
                </li>
            </ul>
            <div class="sous_bloc_haut">

                <!-- <div class="dropdown" id="bloc_deroulant_header">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="button_langue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img data-src="../sources/images/down.svg" class="lazy" id="icone_fleche_bas" alt="icone flêche bas">
                        Fr
                    </button>
                    <div class="dropdown-menu" id="deroulant_langue" aria-labelledby="button_langue">
                      <a class="dropdown-item lien_langue" href="#">En</a>
                    </div>
                </div> -->
            </div>
            <div class="bloc_boutons">
                <div id="bloc_site">
                    <a href="" target="_blank" class="anul_lien" id="lien_espace">Aller au site web</a>
                </div>
                <a href="#" class="bouton_africkup couleur_africkup">partagez votre profil</a>
            </div>
        </nav>
    
        <!-- Page Content -->

        <!-- Dark Overlay element -->
        <div class="overlay_header"></div>
    </div>
{{--     <header>
            <ul class="liste_type_2 nav nav-tabs" role="tablist">
                <li class="active">
                    <a class="anul_lien nav-tabs active" id="nav-home-tab" data-toggle="tab" href="#toutes_procedures" role="tab" aria-controls="#toutes_procedures" aria-selected="true">Toutes procédures</a>
                </li>
                <li>
                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#procedure1" role="tab" aria-controls="#procedure1" aria-selected="false">Taxi contre état</a>
                </li>
                <li>
                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#procedure2" aria-controls="#procedure2" aria-selected="false">Taxi contre uber</a>
                </li>
            </ul>
        </div> -->
    </header> --}}
    <main>
        <div class="container container_corps_dashbord">
            <div class="sous_container_droit">
                <div class="header_container">
                    <ul class="liste_type_1 nav nav-tabs" role="tablist">
                        <li class="@if (!session('onglet')) active @endif">
                            <a class="anul_lien nav-tabs @if (!session('onglet')) active @endif" id="nav-home-tab" data-toggle="tab" href="#vue_ensemble" role="tab" aria-controls="#vue_ensemble" aria-selected="@if (!session('onglet')) true @else false @endif">Présentation</a>
                        </li>
                        <li class="@if (session('onglet') == 'informations') active @endif">
                            <a class="anul_lien nav-tabs @if (session('onglet') == 'informations') active @endif" data-toggle="tab" href="#information_complementaire" aria-controls="#information_complementaire" aria-selected="@if (session('onglet') == 'informations') true @else false @endif">Informations Complémentaires</a>
                        </li>
                        <li class="@if (session('onglet') == 'cursus_academique') active @endif">
                            <a class="anul_lien nav-tabs @if (session('onglet') == 'cursus_academique') active @endif" data-toggle="tab" href="#cursus_academique" role="tab" aria-controls="#cursus_academique" aria-selected="@if (session('onglet') == 'cursus_academique') true @else false @endif">Cursus Académique</a>
                        </li>
                        <li class="@if (session('onglet') == 'experience_professionnelle') active @endif">
                            <a class="anul_lien nav-tabs @if (session('onglet') == 'experience_professionnelle') active @endif" data-toggle="tab" href="#experience_professionnelle" aria-controls="#experience_professionnelle" aria-selected="@if (session('onglet') == 'experience_professionnelle') true @else false @endif">Expérience professionnelle</a>
                        </li>
                        <li class="@if (session('onglet') == 'references') active @endif">
                            <a class="anul_lien nav-tabs @if (session('onglet') == 'references') active @endif" data-toggle="tab" href="#references" aria-controls="#references" aria-selected="@if (session('onglet') == 'references') true @else false @endif">Références</a>
                        </li>
                        <li class="@if (session('onglet') == 'competences') active @endif">
                            <a class="anul_lien nav-tabs @if (session('onglet') == 'competences') active @endif" data-toggle="tab" href="#competences" aria-controls="#competences" aria-selected="@if (session('onglet') == 'competences') true @else false @endif">Compétences</a>
                        </li>
                        {{-- <li>
                            <a class="anul_lien nav-tabs" data-toggle="tab" href="#documents" aria-controls="#documents" aria-selected="false">Documents</a>
                        </li> --}}
                    </ul>
                    <button class="navbar-toggler" id="bouton_derouleur" type="button" data-toggle="collapse" data-target="#bloc_menu_header" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="{{asset('design/parfait_integration/ressources/img/open-menu.svg')}}" alt="icone_menu">
                    </button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                        <div id="vue_ensemble" class="tab-pane fade @if (!session('onglet')) show active @endif">
                            <div class="container_rubrique">
                                <h2 class="titre_rubrique">Résumé des informations relatives à l'étudiant</h2>
                                <div class="corps_rubrique">
                                    <p>Présentez-vous au monde entier et expliquez ce qui vous distingue des autres.</p>
                                    <form action="{{route('etudiant.description',['locale' => App::getlocale()])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <textarea placeholder="Lettre de motivation" class="description_text ckeditor" name="lettre_motivation" id="lettre_motivation" cols="30" rows="10">{!! $user->getUserData->lettre_motivation !!}</textarea>
                                        <div class="bloc_depot">
                                            <p class="paragraphe_depot">@if ($user->getUserData->video)
                                                Augmentez l'impact de votre profil en mettant a jour votre présentation
                                            @else
                                                Augmentez l'impact de votre profil en téléchargeant une courte video de présentation
                                            @endif</p>
                                            <input type="file" accept=".mp4" class="image_upload" name="video_presentation" id="video_presentation" />
                                        </div>
                                        <button type="submit" class="form-group btn btn-primary mt-4">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="information_complementaire" class="tab-pane fade @if (session('onglet') == 'informations') show active @endif">
                            <div class="container_rubrique">
                                <h2 class="titre_rubrique">Informations sur l'étudiant</h2>
                                <div class="corps_rubrique">
                                    <p>Présentez-vous au monde entier et expliquez ce qui vous distingue des autres.</p>
                                    <form action="{{route('etudiant.informations',['locale' => App::getlocale()])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="sous_form">
                                            <div class="champ_court">
                                                <label for="nom">Nom:</label>
                                                <input type="text" class="champs_africkup" name="nom" placeholder="Nom" value="{{$user->getUserData->nom}}">
                                            </div>
                                            <div class="champ_court">
                                                <label for="prenom">Prenom:</label>
                                                <input type="text" class="champs_africkup" name="prenom" placeholder="Prenom" value="{{$user->getUserData->prenom}}">
                                            </div>
                                        </div>
                                        <div class="sous_form">
                                            <div class="champ_court">
                                                <label for="pays">Pays:</label>
                                                <select id="pays" name="pays" class="champs_africkup">
                                                    @foreach($all_countries as $country) 
                                                        <option value="{{$country->name->common}}" @if ($country->name->common == $user->getUserData->pays) selected @endif>{!! $country->name->common !!}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="champ_court">
                                                <label for="ville">Ville:</label>
                                                <input type="text" class="champs_africkup" name="ville" placeholder="Ville" value="{{$user->getUserData->ville}}">
                                            </div> 
                                        </div>
                                        <div class="sous_form">
                                            <div class="champ_court">
                                                <label for="derniere_annee_etude">Dernière année d'étude:</label>
                                                <input type="date" class="champs_africkup" name="derniere_annee_etude" value="{{$user->getUserData->date_creation_entreprise}}" placeholder="Dernière année d'étude">
                                            </div>
                                            <div class="champ_court">
                                                <label for="photo">photo:</label>
                                                <input type="file" class="champs_africkup" name="photo" placeholder="photo">
                                            </div>
                                        </div>
                                        <div class="sous_form">
                                            <div class="champ_court">
                                                <label for="telephone">Telephone:</label>
                                                <input type="text" class="champs_africkup" name="telephone" value="{{$user->getUserData->telephone}}" placeholder="telephone">
                                            </div>
                                            <div class="champ_court">
                                                <label for="email">Email:</label>  
                                                <input type="text" class="champs_africkup" name="email" value="{{$user->getUserData->email}}" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="sous_form">
                                            <div class="champ_court">
                                                <label for="cv">CV:</label>
                                                <input type="file" class="champs_africkup" name="cv">
                                            </div>
                                            <div class="champ_court">
                                                <label for="dernier_diplome">Dernier diplôme:</label>
                                                <input type="file" class="champs_africkup" name="dernier_diplome">
                                            </div>
                                        </div>
                                        <div class="sous_form">
                                            <div class="champ_court">
                                                <label for="type_stage_recherche">Type de stage:</label>
                                                <select id="type_stage_recherche" name="type_stage_recherche" class="champs_africkup">
                                                    <option value="">Type de stage</option>
                                                    <option @if($user->getUserData->type_stage_recherche == "stage-academique") selected @endif value="stage-academique">Stage Academique</option>
                                                    <option @if($user->getUserData->type_stage_recherche == "stage-professionnel") selected @endif value="stage-professionnel">Stage Professionnel</option>
                                                </select>
                                            </div>
                                            <div class="champ_court">
                                                <label for="duree_stage_recherche">Durée du stage:</label>
                                                <select id="duree_stage_recherche" name="duree_stage_recherche" class="champs_africkup">
                                                    @foreach($all_countries as $country)
                                                        <option value="">Durée souhaité</option>
                                                        <option @if ($user->getUserData->duree_stage_souhaitee == 3) selected @endif value="3">3 ans</option>
                                                        <option @if ($user->getUserData->duree_stage_souhaitee == 2) selected @endif  value="2">2 ans</option>
                                                        <option @if ($user->getUserData->duree_stage_souhaitee == 1) selected @endif  value="1">1 ans</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    <button class="form-group btn btn-primary mt-4">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="cursus_academique" class="tab-pane fade @if (session('onglet') == 'cursus_academique') show active @endif">
                            <div class="container_rubrique">
                                <h2 class="titre_rubrique">Cursus Academique</h2>
                                @include('livewire.register.etudiant.cursus_academique.create',['donnees_id' => $user->getUserData->id])
                                @include('livewire.register.etudiant.cursus_academique.update',['donnees_id' => $user->getUserData->id])
                                @include('livewire.register.etudiant.cursus_academique.cursus_academique',['donnees_id' => $user->getUserData->id])
                            </div>
                        </div>
                        <div id="experience_professionnelle" class="tab-pane fade @if (session('onglet') == 'experience_professionnelle') show active @endif">
                            <div class="container_rubrique">
                                <h2 class="titre_rubrique">Expérience Professionnelle</h2>
                                <div class="corps_rubrique">
                                    <p>Présentez vos Experiences professionnelles.</p>
                                    @include('livewire.register.etudiant.experience_professionnelle.create',['donnees_id' => $user->getUserData->id])
                                    @include('livewire.register.etudiant.experience_professionnelle.update',['donnees_id' => $user->getUserData->id])
                                    @include('livewire.register.etudiant.experience_professionnelle.experience_professionnelle',['donnees_id' => $user->getUserData->id])
                                </div>
                            </div>
                        </div>
                        <div id="competences" class="tab-pane fade @if (session('onglet') == 'competences') show active @endif">
                            <div class="container_rubrique">
                                <h2 class="titre_rubrique">Compétences</h2>
                                <div class="corps_rubrique">
                                    <p>Présentez vos compétences.</p>
                                    @include('livewire.register.etudiant.competence.create',['donnees_id' => $user->getUserData->id])
                                    @include('livewire.register.etudiant.competence.update',['donnees_id' => $user->getUserData->id])
                                    @include('livewire.register.etudiant.competence.competence',['donnees_id' => $user->getUserData->id])
                                </div>
                            </div>
                        </div>
                        <div id="references" class="tab-pane fade @if (session('onglet') == 'references') show active @endif">
                            <div class="container_rubrique">
                                <h2 class="titre_rubrique">Réferences</h2>
                                <div class="corps_rubrique">
                                    <p>Présentez réferences.</p>
                                    @include('livewire.register.etudiant.reference.create',['donnees_id' => $user->getUserData->id])
                                    @include('livewire.register.etudiant.reference.update',['donnees_id' => $user->getUserData->id])
                                    @include('livewire.register.etudiant.reference.reference',['donnees_id' => $user->getUserData->id])
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="bloc_resume">
            <h3 class="titre">Ajoutez un concept en ligne qui met en valeur votre position commerciale unique.</h3>
            <div class="bloc_principal_resume">
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Nom</span>
                    <span class="bloc_droit_resume"> @if ($user->getUserData->nom)
                    {{$user->getUserData->nom}}@else--@endif</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Prénom</span>
                    <span class="bloc_droit_resume">@if ($user->getUserData->prenom)
                    {{$user->getUserData->prenom}}@else--@endif</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Pays</span>
                    <span class="bloc_droit_resume">@if ($user->getUserData->pays)
                    {{$user->getUserData->pays}}@else--@endif</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Ville</span>
                    <span class="bloc_droit_resume">@if ($user->getUserData->ville)
                    {{$user->getUserData->ville}}@else--@endif</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Téléphone</span>
                    <span class="bloc_droit_resume">@if ($user->getUserData->telephone)
                    {{$user->getUserData->telephone}}@else--@endif</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Email</span>
                    <span class="bloc_droit_resume">@if ($user->getUserData->email)
                    {{$user->getUserData->email}}@else--@endif</span>
                </div>
                <div class="bloc_boutons">
                    <a href="{{route('home',['locale' => App::getlocale()])}}" class="bouton_africkup couleur_africkup">Retour au site</a>
                    <a href="#" class="bouton_africkup couleur_africkup">Partagez votre profil</a>
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
                    <span class="bloc_gauche_resume">Nom</span>
                    <span class="bloc_droit_resume"> @if ($user->getUserData->nom)
                    {{$user->getUserData->nom}}@else--@endif</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Prénom</span>
                    <span class="bloc_droit_resume">@if ($user->getUserData->prenom)
                    {{$user->getUserData->prenom}}@else--@endif</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Pays</span>
                    <span class="bloc_droit_resume">@if ($user->getUserData->pays)
                    {{$user->getUserData->pays}}@else--@endif</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Ville</span>
                    <span class="bloc_droit_resume">@if ($user->getUserData->ville)
                    {{$user->getUserData->ville}}@else--@endif</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Téléphone</span>
                    <span class="bloc_droit_resume">@if ($user->getUserData->telephone)
                    {{$user->getUserData->telephone}}@else--@endif</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Email</span>
                    <span class="bloc_droit_resume">@if ($user->getUserData->email)
                    {{$user->getUserData->email}}@else--@endif</span>
                </div>
                    <div class="bloc_boutons">
                        <a href="{{route('home',['locale' => App::getlocale()])}}" class="bouton_africkup couleur_africkup">Retour au site</a>
                    </div>
                    <div class="bloc_boutons">
                        <a href="#" class="bouton_africkup couleur_africkup">partagez votre profil</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="{{asset('design/parfait_integration/js/jquery.js')}}"></script>
    <script src="https://kit.fontawesome.com/772ee43bf0.js" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    @toastr_js
    @toastr_render
    @livewireScripts
    <script type="text/javascript">
        $(document).ready(function () {
            // $("#sidebar").mCustomScrollbar({
            //     theme: "minimal"
            // });
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
        //Competence

        $(".deleteItem").click(function(e){
                e.preventDefault();
                window.id = $(this).attr('idDelete');
                window.elt = $(this);
                console.log(id);
                swal({
                    title: "Supprimer?",
                    text: "Confirmer la suppression de la compétence!",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Oui, Supprimer!",
                    cancelButtonText: "Non, annuler!",
                    reverseButtons: !0
                }).then(function (e) {
                    if (e.value === true) {
                    var token = $("meta[name='csrf-token']").attr("content");
                        var path = "/dashboard/etudiant/competence/effacer/"+id;

                        $.ajax({
                            url: path,
                            type: "DELETE",
                            dataType: "json",
                            data: {
                                "id": id,
                                "_token": "{{csrf_token()}}",
                            },
                            success: function(data, status) {
                                elt.parent().parent().parent().parent().remove();
                            },
                            error: function(xhr, textStatus, errorThrown) {
                                console.log(errorThrown);
                            }
                        });
                    }
                })
            });

            $(".modalUpdate").click(function(e){
                console.log("edition en cours");
                $("#competence_edit_id").val($(this).attr('data-id'));
                $("#competence_edit_titre").val($(this).attr('data-titre'));
                $("#competence_edit_description").val($(this).attr('data-description'));
                $("#updateModal").show();
            });

            //Fin Competence

            //Reference

        $(".deleteReferenceItem").click(function(e){
                e.preventDefault();
                window.id = $(this).attr('idReferenceDelete');
                window.elt = $(this);
                console.log(id);
                swal({
                    title: "Supprimer?",
                    text: "Confirmer la suppression de la référence!",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Oui, Supprimer!",
                    cancelButtonText: "Non, annuler!",
                    reverseButtons: !0
                }).then(function (e) {
                    if (e.value === true) {
                    var token = $("meta[name='csrf-token']").attr("content");
                        var path = "/dashboard/etudiant/reference/effacer/"+id;

                        $.ajax({
                            url: path,
                            type: "DELETE",
                            dataType: "json",
                            data: {
                                "id": id,
                                "_token": "{{csrf_token()}}",
                            },
                            success: function(data, status) {
                                elt.parent().parent().parent().parent().remove();
                            },
                            error: function(xhr, textStatus, errorThrown) {
                                console.log(errorThrown);
                            }
                        });
                    }
                })
            });

            $(".modalReferenceUpdate").click(function(e){
                console.log("edition en cours");
                $("#reference_edit_id").val($(this).attr('data-id'));
                $("#reference_edit_titre").val($(this).attr('data-titre'));
                $("#reference_edit_description").val($(this).attr('data-description'));
                $("#referenceUpdateModal").show();
            });

            //Fin Reference

            //Cursus Academique
        
        $(".deleteCursusItem").click(function(e){
                e.preventDefault();
                window.id = $(this).attr('idCursusDelete');
                window.elt = $(this);
                console.log(id);
                swal({
                    title: "Supprimer?",
                    text: "Confirmer la suppression de l'experience  academique!",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Oui, Supprimer!",
                    cancelButtonText: "Non, annuler!",
                    reverseButtons: !0
                }).then(function (e) {
                    if (e.value === true) {
                    var token = $("meta[name='csrf-token']").attr("content");
                        var path = "/dashboard/etudiant/cursus_academique/effacer/"+id;

                        $.ajax({
                            url: path,
                            type: "DELETE",
                            dataType: "json",
                            data: {
                                "id": id,
                                "_token": "{{csrf_token()}}",
                            },
                            success: function(data, status) {
                                elt.parent().parent().parent().parent().remove();
                            },
                            error: function(xhr, textStatus, errorThrown) {
                                console.log(errorThrown);
                            }
                        });
                    }
                })
            });

            $(".modalCursusUpdate").click(function(e){
                console.log("edition en cours");
                $("#cursus_academique_edit_id").val($(this).attr('data-id'));
                $("#cursus_academique_edit_titre").val($(this).attr('data-titre'));
                document.getElementById('cursus_academique_edit_annee').value  = $(this).attr('data-annee');
                $("#cursusAcademiqueUpdateModal").show();
            });

            //Fin Cursus Academique

             //Experience pro
        
        $(".deleteExpItem").click(function(e){
                e.preventDefault();
                window.id = $(this).attr('idExpDelete');
                window.elt = $(this);
                console.log(id);
                swal({
                    title: "Supprimer?",
                    text: "Confirmer la suppression de l'expérience professionnelle!",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Oui, Supprimer!",
                    cancelButtonText: "Non, annuler!",
                    reverseButtons: !0
                }).then(function (e) {
                    if (e.value === true) {
                    var token = $("meta[name='csrf-token']").attr("content");
                        var path = "/dashboard/etudiant/experience_professionnelle/effacer/"+id;

                        $.ajax({
                            url: path,
                            type: "DELETE",
                            dataType: "json",
                            data: {
                                "id": id,
                                "_token": "{{csrf_token()}}",
                            },
                            success: function(data, status) {
                                elt.parent().parent().parent().parent().remove();
                            },
                            error: function(xhr, textStatus, errorThrown) {
                                console.log(errorThrown);
                            }
                        });
                    }
                })
            });

            $(".modalExpUpdate").click(function(e){
                console.log("edition en cours");
                $("#exp_edit_id").val($(this).attr('data-id'));
                $("#exp_edit_poste").val($(this).attr('data-poste'));
                $("#exp_edit_entreprise").val($(this).attr('data-entreprise'));
                $("#exp_edit_date_debut").val($(this).attr('data-date-debut'));
                $("#exp_edit_date_fin").val($(this).attr('data-date-fin'));
                $("#expUpdateModal").show();
            });

            //Fin Exp Pro
    </script>
</body>

</html>