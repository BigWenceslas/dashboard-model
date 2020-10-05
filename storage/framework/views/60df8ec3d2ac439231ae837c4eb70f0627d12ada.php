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
                    <img src="<?php echo e(asset('design/parfait_integration/ressources/img/afri2.png')); ?>" id="logo_header" alt="logo">
                </a>
            </div>

            <ul class="liste_responsive nav nav-tabs" role="tablist">
                <li class="active">
                    <a class="anul_lien nav-tabs active" id="nav-home-tab" data-toggle="tab" href="#vue_ensemble" role="tab" aria-controls="#vue_ensemble" aria-selected="true">Présentation</a>
                </li>
                <li>
                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#information_complementaire" aria-controls="#information_complementaire" aria-selected="false">Informations Complémentaires</a>
                </li>
                <li>
                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#cursus_academique" aria-controls="#cursus_academique" aria-selected="false">Cursus Academique</a>
                </li>
                <li>
                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#experience_professionnelle" aria-controls="#experience_professionnelle" aria-selected="false">Expérience professionnelle</a>
                </li>
                <li>
                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#reference" aria-controls="#reference" aria-selected="false">Références</a>
                </li>
                <li>
                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#competences" aria-controls="#competences" aria-selected="false">Compétences</a>
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
                    <a href="" target="_blank" class="anul_lien" id="lien_espace">Aller au site web</a>
                </div>
                <a href="#" class="bouton_africkup couleur_africkup">partagez votre profil</a>
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
                            <a class="anul_lien nav-tabs active" id="nav-home-tab" data-toggle="tab" href="#vue_ensemble" role="tab" aria-controls="#vue_ensemble" aria-selected="true">Présentation</a>
                        </li>
                        <li>
                            <a class="anul_lien nav-tabs" data-toggle="tab" href="#information_complementaire" aria-controls="#information_complementaire" aria-selected="false">Informations complémentaires</a>
                        </li>
                        <li>
                            <a class="anul_lien nav-tabs" data-toggle="tab" href="#cursus_academique" role="tab" aria-controls="#cursus_academique" aria-selected="false">Cursus Académique</a>
                        </li>
                        <li>
                            <a class="anul_lien nav-tabs" data-toggle="tab" href="#experience_professionnelle" aria-controls="#experience_professionnelle" aria-selected="false">Expérience professionnelle</a>
                        </li>
                        <li>
                            <a class="anul_lien nav-tabs" data-toggle="tab" href="#references" aria-controls="#references" aria-selected="false">Références</a>
                        </li>
                        <li>
                            <a class="anul_lien nav-tabs" data-toggle="tab" href="#competences" aria-controls="#competences" aria-selected="false">Compétences</a>
                        </li>
                        
                    </ul>
                    <button class="navbar-toggler" id="bouton_derouleur" type="button" data-toggle="collapse" data-target="#bloc_menu_header" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="<?php echo e(asset('design/parfait_integration/ressources/img/open-menu.svg')); ?>" alt="icone_menu">
                    </button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                        <div id="vue_ensemble" class="tab-pane fade show active">
                            <div class="container_rubrique">
                                <h2 class="titre_rubrique">Résumé des informations relatives à l'entreprise</h2>
                                <div class="corps_rubrique">
                                    <p>Présentez-vous au monde entier et expliquez ce qui permet à votre entreprise de se distinguer.</p>
                                    <form action="<?php echo e(route('etudiant.description')); ?>" method="post" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <textarea placeholder="Lettre de motivation" class="description_text ckeditor" name="lettre_motivation" id="lettre_motivation" cols="30" rows="10"><?php echo $user->getUserData->lettre_motivation; ?></textarea>
                                        <div class="bloc_depot">
                                            <p class="paragraphe_depot"><?php if($user->getUserData->video): ?>
                                                Augmentez l'impact de votre profil en mettant a jour votre présentation
                                            <?php else: ?>
                                                Augmentez l'impact de votre profil en téléchargeant une courte video de présentation
                                            <?php endif; ?></p>
                                            <input type="file" accept=".mp4" class="image_upload" name="video_presentation" id="video_presentation" />
                                        </div>
                                        <button type="submit" class="form-group btn btn-primary mt-2">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="information_complementaire" class="tab-pane fade">
                            <div class="container_rubrique">
                                <h2 class="titre_rubrique">Informations sur l'entreprise</h2>
                                <div class="corps_rubrique">
                                    <p>Présentez-vous au monde entier et expliquez ce qui permet à votre entreprise de se distinguer.</p>
                                    <form action="<?php echo e(route('etudiant.informations')); ?>" method="post" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="sous_form">
                                            <input type="text" class="champs_africkup" name="nom" placeholder="Nom">
                                            <input type="text" class="champs_africkup" name="prenom" placeholder="Prenom">
                                        </div>
                                        <div class="sous_form">
                                            <select id="pays" name="pays" class="champs_africkup">
                                                <?php $__currentLoopData = $all_countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                                    <option value="<?php echo e($country->name->common); ?>" <?php if($country->name->common == $user->getUserData->pays): ?> selected <?php endif; ?>><?php echo $country->name->common; ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <input type="text" class="champs_africkup" name="ville" placeholder="Ville">
                                        </div>
                                        <div class="sous_form">
                                            <input type="date" class="champs_africkup" name="derniere_annee_etude" value="<?php echo e($user->getUserData->date_creation_entreprise); ?>" placeholder="Dernière année d'étude">
                                            <input type="file" class="champs_africkup" name="photo" placeholder="photo">
                                        </div>
                                        <div class="sous_form">
                                            <input type="text" class="champs_africkup" name="telephone" value="<?php echo e($user->getUserData->telephone); ?>" placeholder="telephone">
                                            <input type="text" class="champs_africkup" name="email" value="<?php echo e($user->getUserData->email); ?>" placeholder="Email">
                                        </div>
                                        <div class="sous_form">
                                            <input type="file" class="champs_africkup" name="cv">
                                            <input type="file" class="champs_africkup" name="dernier_diplome">
                                        </div>
                                         <div class="sous_form">
                                            <select id="type_stage_recherche" name="type_stage_recherche" class="champs_africkup">
                                                <option value="">Type de stage</option>
                                                <option <?php if($user->getUserData->type_stage_recherche == "stage-academique"): ?> selected <?php endif; ?> value="stage-academique">Stage Academique</option>
                                                <option <?php if($user->getUserData->type_stage_recherche == "stage-professionnel"): ?> selected <?php endif; ?> value="stage-professionnel">Stage Professionnel</option>
                                            </select>
                                            
                                            <select id="duree_stage_recherche" name="duree_stage_recherche" class="champs_africkup">
                                                <?php $__currentLoopData = $all_countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="">Durée souhaité</option>
                                                    <option <?php if($user->getUserData->duree_stage_souhaitee == 3): ?> selected <?php endif; ?> value="3">3 ans</option>
                                                    <option <?php if($user->getUserData->duree_stage_souhaitee == 2): ?> selected <?php endif; ?>  value="2">2 ans</option>
                                                    <option <?php if($user->getUserData->duree_stage_souhaitee == 1): ?> selected <?php endif; ?>  value="1">1 ans</option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    <button class="form-group btn btn-primary mt-2">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="cursus_academique" class="tab-pane fade">
                            <div class="container_rubrique">
                                <h2 class="titre_rubrique">Cursus Academique</h2>
                                <div class="corps_rubrique">
                                    <p>Présentez-vous au monde entier et expliquez ce qui permet à votre entreprise de se distinguer.</p>
                                    <button class="btn btn-success">Ajouter une Expérience académique</button>
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
                        <div id="experience_professionnelle" class="tab-pane fade">
                            <div class="container_rubrique">
                                <h2 class="titre_rubrique">Expérience Professionnelle</h2>
                                <div class="corps_rubrique">
                                    <p>Présentez vos Experiences professionnelles.</p>
                                    <button class="btn btn-success">Ajouter une Expérience professionnelle</button>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="competences" class="tab-pane fade">
                            <div class="container_rubrique">
                                <h2 class="titre_rubrique">Compétences</h2>
                                <div class="corps_rubrique">
                                    <p>Présentez vos compétences.</p>
                                    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('register.etudiant.competence.create',['donnees_id' => $user->getUserData->id])->dom;
} elseif ($_instance->childHasBeenRendered('tN81opX')) {
    $componentId = $_instance->getRenderedChildComponentId('tN81opX');
    $componentTag = $_instance->getRenderedChildComponentTagName('tN81opX');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('tN81opX');
} else {
    $response = \Livewire\Livewire::mount('register.etudiant.competence.create',['donnees_id' => $user->getUserData->id]);
    $dom = $response->dom;
    $_instance->logRenderedChild('tN81opX', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
                                    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('register.etudiant.competence.competence',['donnees_id' => $user->getUserData->id])->dom;
} elseif ($_instance->childHasBeenRendered('GrPEOOl')) {
    $componentId = $_instance->getRenderedChildComponentId('GrPEOOl');
    $componentTag = $_instance->getRenderedChildComponentTagName('GrPEOOl');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GrPEOOl');
} else {
    $response = \Livewire\Livewire::mount('register.etudiant.competence.competence',['donnees_id' => $user->getUserData->id]);
    $dom = $response->dom;
    $_instance->logRenderedChild('GrPEOOl', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
                                </div>
                            </div>
                        </div>
                        <div id="references" class="tab-pane fade">
                            <div class="container_rubrique">
                                <h2 class="titre_rubrique">Réferences</h2>
                                <div class="corps_rubrique">
                                    <p>Présentez-vous au monde entier et expliquez ce qui permet à votre entreprise de se distinguer.</p>
                                    <button class="btn btn-success">Ajouter une Expérience référence</button>
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
                    <span class="bloc_gauche_resume">Nom</span>
                    <span class="bloc_droit_resume"> <?php if($user->getUserData->nom): ?>
                    <?php echo e($user->getUserData->nom); ?><?php else: ?>--<?php endif; ?></span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Prénom</span>
                    <span class="bloc_droit_resume"><?php if($user->getUserData->prenom): ?>
                    <?php echo e($user->getUserData->prenom); ?><?php else: ?>--<?php endif; ?></span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Pays</span>
                    <span class="bloc_droit_resume"><?php if($user->getUserData->pays): ?>
                    <?php echo e($user->getUserData->pays); ?><?php else: ?>--<?php endif; ?></span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Ville</span>
                    <span class="bloc_droit_resume"><?php if($user->getUserData->ville): ?>
                    <?php echo e($user->getUserData->ville); ?><?php else: ?>--<?php endif; ?></span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Téléphone</span>
                    <span class="bloc_droit_resume"><?php if($user->getUserData->telephone): ?>
                    <?php echo e($user->getUserData->telephone); ?><?php else: ?>--<?php endif; ?></span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Email</span>
                    <span class="bloc_droit_resume"><?php if($user->getUserData->email): ?>
                    <?php echo e($user->getUserData->email); ?><?php else: ?>--<?php endif; ?></span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Dernière diplome</span>
                    <span class="bloc_droit_resume"><?php if($user->getUserData->dernier_diplome): ?>
                    <?php echo e($user->getUserData->dernier_diplome); ?><?php else: ?>--<?php endif; ?></span>
                </div>
                <div class="bloc_boutons">
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
                    <span class="bloc_droit_resume"> <?php if($user->getUserData->nom): ?>
                    <?php echo e($user->getUserData->nom); ?><?php else: ?>--<?php endif; ?></span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Prénom</span>
                    <span class="bloc_droit_resume"><?php if($user->getUserData->prenom): ?>
                    <?php echo e($user->getUserData->prenom); ?><?php else: ?>--<?php endif; ?></span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Pays</span>
                    <span class="bloc_droit_resume"><?php if($user->getUserData->pays): ?>
                    <?php echo e($user->getUserData->pays); ?><?php else: ?>--<?php endif; ?></span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Ville</span>
                    <span class="bloc_droit_resume"><?php if($user->getUserData->ville): ?>
                    <?php echo e($user->getUserData->ville); ?><?php else: ?>--<?php endif; ?></span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Téléphone</span>
                    <span class="bloc_droit_resume"><?php if($user->getUserData->telephone): ?>
                    <?php echo e($user->getUserData->telephone); ?><?php else: ?>--<?php endif; ?></span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Email</span>
                    <span class="bloc_droit_resume"><?php if($user->getUserData->email): ?>
                    <?php echo e($user->getUserData->email); ?><?php else: ?>--<?php endif; ?></span>
                </div>
                <div class="ligne_resume">
                    <span class="bloc_gauche_resume">Dernière diplome</span>
                    <span class="bloc_droit_resume"><?php if($user->getUserData->dernier_diplome): ?>
                    <?php echo e($user->getUserData->dernier_diplome); ?><?php else: ?>--<?php endif; ?></span>
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
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html><?php /**PATH /opt/lampp/htdocs/afq/resources/views/register/etudiant/profile.blade.php ENDPATH**/ ?>