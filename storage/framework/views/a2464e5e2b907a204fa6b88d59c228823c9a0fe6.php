                                    <div class="corps_documents">
                                        <?php if(isset($cursus_academiques)): ?>
                                        <?php $__currentLoopData = $cursus_academiques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cursus_academique): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="ligne_document">
                                            <div class="nom_fichier_corps">
                                                <span class=""><?php echo e($cursus_academique->titre); ?></span>
                                            </div>
                                            <div class="envoyer_le_corps">
                                                <span class=""><?php echo e($cursus_academique->annee); ?></span>
                                            </div>
                                            <div class="action_corps">
                                                <div class="container_boutons_tableau">
                                                    <div class="bouton_tableau">
                                                        <a target="_blank" download href="<?php echo e(asset('storage/etudiants/cursus_academique/'.$cursus_academique->document)); ?>" class="anul_lien">
                                                            <i class="fa fa-download" aria-hidden="true"></i>
                                                            <span class="info">telecharger</span>
                                                        </a>
                                                    </div>
                                                    <div class="bouton_tableau">
                                                        <a target="_blank" href="<?php echo e(asset('storage/etudiants/cursus_academique/'.$cursus_academique->document)); ?>" class="anul_lien">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                            <span class="info">Document</span>
                                                        </a>
                                                    </div>
                                                    <div class="bouton_tableau">
                                                        <a data-toggle="modal" href="#cursusAcademiqueUpdateModal" class="anul_lien modalCursusUpdate" data-id="<?php echo e($cursus_academique->id); ?>" data-annee="<?php echo e($cursus_academique->annee); ?>" data-titre="<?php echo e($cursus_academique->titre); ?>">
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                            <span class="info">Editer</span>
                                                        </a>
                                                    </div>
                                                    <div class="bouton_tableau bouton_telechargement">
                                                        <a href="#" class="anul_lien deleteCursusItem" idCursusDelete="<?php echo e($cursus_academique->id); ?>">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                            <span class="info">Supprimer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle  trois_points" id="menu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                                    <div class="dropdown-menu dropdown-menu-right menu_action_responsive bloc_arrondi_blanc" aria-labelledby="menu1">
                                                        <button data-toggle="modal" data-target="cursusAcademiqueUpdateModal" class="dropdown-item modalCursusUpdate" data-id="<?php echo e($cursus_academique->id); ?>" data-annee="<?php echo e($cursus_academique->annee); ?>" data-titre="<?php echo e($cursus_academique->titre); ?>">
                                                            <span>Editer</span>
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="dropdown-item deleteCursusItem" idCursusDelete="<?php echo e($cursus_academique->id); ?>">
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
<?php /**PATH /opt/lampp/htdocs/afq/resources/views/livewire/register/freelance/cursus_academique/cursus_academique.blade.php ENDPATH**/ ?>