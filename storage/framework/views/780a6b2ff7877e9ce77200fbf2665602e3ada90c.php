<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('design/assets/uploads/2019/04/favicon.png')); ?>"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('design/parfait_integration/css/header_respon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('design/parfait_integration/style_dashbord.css')); ?>">
    <?php echo toastr_css(); ?>
	<?php echo \Livewire\Livewire::styles(); ?> 
    <title>Dashbord Entreprise</title>
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
                    <img src="ressources/img/afri2.png" id="logo_header" alt="logo">
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
                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#information_entreprise" aria-controls="#information_entreprise" aria-selected="false">Information sur l'entreprise</a>
                </li>
                <li>
                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#finances" aria-controls="#finances" aria-selected="false">Finances</a>
                </li>
                <li>
                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#documents" aria-controls="#documents" aria-selected="false">Documents</a>
                </li>
                <li>
                    <button id="button_modal" data-toggle="modal" data-target="#modal_ensemble">Voir informations</button>
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
                    <a href="#" class="anul_lien" id="lien_espace">Aller au site web</a>
                </div>
                <a href="#" class="bouton_africkup couleur_africkup">partagez votre profil</a>
                <a href="#" class="bouton_africkup couleur_africkup">download one pager</a>
            </div>
        </nav>
    
        <!-- Page Content -->

        <!-- Dark Overlay element -->
        <div class="overlay_header"></div>
    </div>

    <main>
        <div class="container container_corps_dashbord">
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
                        <li>
                            <a class="anul_lien nav-tabs" data-toggle="tab" href="#finances" aria-controls="#finances" aria-selected="false">Finances</a>
                        </li>
                        <li>
                            <a class="anul_lien nav-tabs" data-toggle="tab" href="#documents" aria-controls="#documents" aria-selected="false">Documents</a>
                        </li>
                    </ul>
                    <button class="navbar-toggler" id="bouton_derouleur" type="button" data-toggle="collapse" data-target="#bloc_menu_header" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="ressources/img/open-menu.svg" alt="icone_menu">
                    </button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div id="vue_ensemble" class="tab-pane fade show active">
                        <div class="container_rubrique">
                            <h2 class="titre_rubrique">Résumé des informations relatives à l'entreprise</h2>
                            <div class="corps_rubrique">
                                <p>Présentez-vous au monde entier et expliquez ce qui permet à votre entreprise de se distinguer.</p>
                                <form action="">
                                    <textarea class="description_text" name="description" id="" cols="30" rows="10"></textarea>
                                    <div class="bloc_depot">
                                        <p class="paragraphe_depot">Augmentez l'impact de votre profil en téléchargeant une courte video de présentation</p>
                                        <input type="file" class="image_upload" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="presentation" class="tab-pane fade">
                        <div class="container_rubrique">
                            <h2 class="titre_rubrique">Presentation</h2>
                            <div class="corps_rubrique">
                                <p>Présentez-vous au monde entier et expliquez ce qui permet à votre entreprise de se distinguer.</p>
                                <form action="">
                                    <div class="sous_form">
                                        <input type="text" class="champs_africkup" name="nom" placeholder="Nom">
                                        <input type="text" class="champs_africkup" name="prenom" placeholder="prenom">
                                    </div>
                                    <div class="sous_form">
                                        <input type="text" class="champs_africkup" name="nom" placeholder="Adresse">
                                        <input type="text" class="champs_africkup" name="prenom" placeholder="Email">
                                    </div>
                                    <div class="sous_form">
                                        <input type="text" class="champs_africkup" name="nom" placeholder="Secteur d'acitvité">
                                        <input type="text" class="champs_africkup" name="prenom" placeholder="Autres">
                                    </div>
                                    <textarea class="description_text" name="resume" id="" cols="30" rows="10" placeholder="Historique de l'entreprise"></textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="information_entreprise" class="tab-pane fade">
                        <div class="container_rubrique">
                            <h2 class="titre_rubrique">Informations sur l'entreprise</h2>
                            <div class="corps_rubrique">
                                <p>Présentez-vous au monde entier et expliquez ce qui permet à votre entreprise de se distinguer.</p>
                                <form action="">
                                    <div class="sous_form">
                                        <input type="text" class="champs_africkup" name="nom" placeholder="Nom">
                                        <input type="text" class="champs_africkup" name="prenom" placeholder="prenom">
                                    </div>
                                    <div class="sous_form">
                                        <input type="text" class="champs_africkup" name="nom" placeholder="Adresse">
                                        <input type="text" class="champs_africkup" name="prenom" placeholder="Email">
                                    </div>
                                    <div class="sous_form">
                                        <input type="text" class="champs_africkup" name="nom" placeholder="Secteur d'acitvité">
                                        <input type="text" class="champs_africkup" name="prenom" placeholder="Autres">
                                    </div>
                                    <textarea class="description_text" name="resume" id="" cols="30" rows="10" placeholder="informations sur l'entreprise"></textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="finances" class="tab-pane fade">
                        <div class="container_rubrique">
                            <h2 class="titre_rubrique">Presentation</h2>
                            <div class="corps_rubrique">
                                <p>Présentez-vous au monde entier et expliquez ce qui permet à votre entreprise de se distinguer.</p>
                                <form action="">
                                    <div class="sous_form">
                                        <input type="text" class="champs_africkup" name="nom" placeholder="Nom">
                                        <input type="text" class="champs_africkup" name="prenom" placeholder="prenom">
                                    </div>
                                    <div class="sous_form">
                                        <input type="text" class="champs_africkup" name="nom" placeholder="Adresse">
                                        <input type="text" class="champs_africkup" name="prenom" placeholder="Email">
                                    </div>
                                    <div class="sous_form">
                                        <input type="text" class="champs_africkup" name="nom" placeholder="Secteur d'acitvité">
                                        <input type="text" class="champs_africkup" name="prenom" placeholder="Autres">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="documents" class="tab-pane fade">
                        <div class="container_rubrique">
                            <h2 class="titre_rubrique">Documents</h2>
                            <div class="corps_rubrique">
                                <p>Présentez-vous au monde entier et expliquez ce qui permet à votre entreprise de se distinguer.</p>
                                <div class="corps_documents">
                                    <div class="ligne_document">
                                        <div class="nom_fichier_corps">
                                            <span class="">Ma carte professionnelle</span>
                                        </div>
                                        <div class="envoyer_le_corps">
                                            <span class="">10 juillet 2019</span>
                                        </div>
                                        <div class="action_corps">
                                            <div class="container_boutons_tableau">
                                                <div class="bouton_tableau">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        <span class="info">Editer</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                        <span class="info">Voir</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau bouton_telechargement">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                        <span class="info">Télécharger</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau bouton_telechargement">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                        <span class="info">Supprimer</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle  trois_points" id="menu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                                <div class="dropdown-menu dropdown-menu-right menu_action_responsive bloc_arrondi_blanc" aria-labelledby="menu1">
                                                    <a class="dropdown-item" href="#">
                                                        <span>Editer</span>
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Voir</span>  
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Téléchargement</span>
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Supprimer</span>
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ligne_document">
                                        <div class="nom_fichier_corps">
                                            <span class="">Mon autorisation de stationnement</span>
                                        </div>
                                        <div class="envoyer_le_corps">
                                            <span class="">10 juillet 2019</span>
                                        </div>
                                        <div class="action_corps">
                                            <div class="container_boutons_tableau">
                                                <div class="bouton_tableau">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        <span class="info">Editer</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                        <span class="info">Voir</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau bouton_telechargement">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                        <span class="info">Télécharger</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau bouton_telechargement">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                        <span class="info">Supprimer</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle  trois_points" id="menu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                                <div class="dropdown-menu dropdown-menu-right menu_action_responsive bloc_arrondi_blanc" aria-labelledby="menu2">
                                                    <a class="dropdown-item" href="#">
                                                        <span>Editer</span>
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Voir</span>  
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Téléchargement</span>
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Supprimer</span>
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ligne_document">
                                        <div class="nom_fichier_corps">
                                            <span class="">Mes bilans</span>
                                        </div>
                                        <div class="envoyer_le_corps">
                                            <span class="">10 juillet 2019</span>
                                        </div>
                                        <div class="action_corps">
                                            <div class="container_boutons_tableau">
                                                <div class="bouton_tableau">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        <span class="info">Editer</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                        <span class="info">Voir</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau bouton_telechargement">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                        <span class="info">Télécharger</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau bouton_telechargement">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                        <span class="info">Supprimer</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle  trois_points" id="menu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                                <div class="dropdown-menu dropdown-menu-right menu_action_responsive bloc_arrondi_blanc" aria-labelledby="menu3">
                                                    <a class="dropdown-item" href="#">
                                                        <span>Editer</span>
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Voir</span>  
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Téléchargement</span>
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Supprimer</span>
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ligne_document">
                                        <div class="nom_fichier_corps">
                                            <span class="">Mon inscription au répertoire SIREN</span>
                                        </div>
                                        <div class="envoyer_le_corps">
                                            <span class="">10 juillet 2019</span>
                                        </div>
                                        <div class="action_corps">
                                            <div class="container_boutons_tableau">
                                                <div class="bouton_tableau">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        <span class="info">Editer</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                        <span class="info">Voir</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau bouton_telechargement">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                        <span class="info">Télécharger</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau bouton_telechargement">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                        <span class="info">Supprimer</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle  trois_points" id="menu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                                <div class="dropdown-menu dropdown-menu-right menu_action_responsive bloc_arrondi_blanc" aria-labelledby="menu4">
                                                    <a class="dropdown-item" href="#">
                                                        <span>Editer</span>
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Voir</span>  
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Téléchargement</span>
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Supprimer</span>
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ligne_document">
                                        <div class="nom_fichier_corps">
                                            <span class="">Mon certificat d’aptitude physique</span>
                                        </div>
                                        <div class="envoyer_le_corps">
                                            <span class="">10 juillet 2019</span>
                                        </div>
                                        <div class="action_corps">
                                            <div class="container_boutons_tableau">
                                                <div class="bouton_tableau">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        <span class="info">Editer</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                        <span class="info">Voir</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau bouton_telechargement">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                        <span class="info">Télécharger</span>
                                                    </a>
                                                </div>
                                                <div class="bouton_tableau bouton_telechargement">
                                                    <a href="#" class="anul_lien">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                        <span class="info">Supprimer</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle  trois_points" id="menu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                                <div class="dropdown-menu dropdown-menu-right menu_action_responsive bloc_arrondi_blanc" aria-labelledby="menu5">
                                                    <a class="dropdown-item" href="#">
                                                        <span>Editer</span>
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Voir</span>  
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Téléchargement</span>
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <span>Supprimer</span>
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    <span class="bloc_gauche_resume">Etape</span>
                    <span class="bloc_droit_resume">Concept seulement</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Secteur d'activité</span>
                    <span class="bloc_droit_resume">--</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Lieu</span>
                    <span class="bloc_droit_resume">Hoboken, NJ, USA</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Devise</span>
                    <span class="bloc_droit_resume">USD</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Fondée</span>
                    <span class="bloc_droit_resume">--</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Employés</span>
                    <span class="bloc_droit_resume">--</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Incorporation Type</span>
                    <span class="bloc_droit_resume">LLC</span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Site web</span>
                    <span class="bloc_droit_resume">--</span>
                </div>
                <div class="bloc_boutons">
                    <a href="#" class="bouton_africkup couleur_africkup">partagez votre profil</a>
                    <a href="#" class="bouton_africkup couleur_africkup">download one pager</a>
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
                            <span class="bloc_gauche_resume">Etape</span>
                            <span class="bloc_droit_resume">Concept seulement</span>
                        </div>
                        <div class="ligne_resume">
                            <span class="bloc_gauche_resume">Secteur d'activité</span>
                            <span class="bloc_droit_resume">--</span>
                        </div>
                        <div class="ligne_resume">
                            <span class="bloc_gauche_resume">Lieu</span>
                            <span class="bloc_droit_resume">Hoboken, NJ, USA</span>
                        </div>
                        <div class="ligne_resume">
                            <span class="bloc_gauche_resume">Devise</span>
                            <span class="bloc_droit_resume">USD</span>
                        </div>
                        <div class="ligne_resume">
                            <span class="bloc_gauche_resume">Fondée</span>
                            <span class="bloc_droit_resume">--</span>
                        </div>
                        <div class="ligne_resume">
                            <span class="bloc_gauche_resume">Employés</span>
                            <span class="bloc_droit_resume">--</span>
                        </div>
                        <div class="ligne_resume">
                            <span class="bloc_gauche_resume">Incorporation Type</span>
                            <span class="bloc_droit_resume">LLC</span>
                        </div>
                        <div class="ligne_resume">
                            <span class="bloc_gauche_resume">Site web</span>
                            <span class="bloc_droit_resume">--</span>
                        </div>
                        <div class="bloc_boutons">
                            <a href="#" class="bouton_africkup couleur_africkup">partagez votre profil</a>
                            <a href="#" class="bouton_africkup couleur_africkup">download one pager</a>
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
    <script src="<?php echo e(asset('design/parfait_integration/js/jquery.js')); ?>"></script>
    <script src="https://kit.fontawesome.com/772ee43bf0.js" crossorigin="anonymous"></script>
    <?php echo toastr_js(); ?>
    <?php echo app('toastr')->render(); ?>
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
    </script>
</body>

</html><?php /**PATH /opt/lampp/htdocs/afq/resources/views/register/entreprise/profile.blade.php ENDPATH**/ ?>