                                    <div class="corps_documents">
                                        <?php if(isset($experiences_professionnelles)): ?>
                                        <?php $__currentLoopData = $experiences_professionnelles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience_professionnelle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="ligne_document">
                                            <div class="nom_fichier_corps">
                                                <span class=""><?php echo e($experience_professionnelle->titre); ?></span>
                                            </div>
                                            <div class="envoyer_le_corps">
                                                <span class=""><?php echo e($experience_professionnelle->annee); ?></span>
                                            </div>
                                            <div class="action_corps">
                                                <div class="container_boutons_tableau">
                                                    <div class="bouton_tableau">
                                                        <a data-toggle="modal" href="#cursusAcademiqueUpdateModal" class="anul_lien modalCursusUpdate" data-id="<?php echo e($experience_professionnelle->id); ?>" data-annee="<?php echo e($experience_professionnelle->annee); ?>" data-titre="<?php echo e($experience_professionnelle->titre); ?>">
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                            <span class="info">Editer</span>
                                                        </a>
                                                    </div>
                                                    <div class="bouton_tableau bouton_telechargement">
                                                        <a href="#" class="anul_lien deleteCursusItem" idCursusDelete="<?php echo e($experience_professionnelle->id); ?>">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                            <span class="info">Supprimer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle  trois_points" id="menu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                                    <div class="dropdown-menu dropdown-menu-right menu_action_responsive bloc_arrondi_blanc" aria-labelledby="menu1">
                                                        <button data-toggle="modal" data-target="cursusAcademiqueUpdateModal" class="dropdown-item modalCursusUpdate" data-id="<?php echo e($experience_professionnelle->id); ?>" data-annee="<?php echo e($experience_professionnelle->annee); ?>" data-titre="<?php echo e($experience_professionnelle->titre); ?>">
                                                            <span>Editer</span>
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="dropdown-item deleteCursusItem" idCursusDelete="<?php echo e($experience_professionnelle->id); ?>">
                                                            <span>Supprimer</span>
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
<?php /**PATH /opt/lampp/htdocs/afq/resources/views/livewire/register/etudiant/experience_professionnelle/experience_professionnelle.blade.php ENDPATH**/ ?>