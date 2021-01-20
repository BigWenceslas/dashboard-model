                                    <div class="corps_documents">
                                        <?php if(isset($competences)): ?>
                                        <?php $__currentLoopData = $competences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $competence): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="ligne_document">
                                            <div class="nom_fichier_corps">
                                                <span class=""><?php echo e($competence->titre); ?></span>
                                            </div>
                                            <div class="envoyer_le_corps">
                                                <span class=""><?php echo e($competence->descriptif); ?></span>
                                            </div>
                                            <div class="action_corps">
                                                <div class="container_boutons_tableau">
                                                    <div class="bouton_tableau">
                                                        <a data-toggle="modal" href="#competenceUpdateModal" class="anul_lien modalUpdate" data-id="<?php echo e($competence->id); ?>" data-titre="<?php echo e($competence->titre); ?>" data-description="<?php echo e($competence->descriptif); ?>">
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                            <span class="info">Editer</span>
                                                        </a>
                                                    </div>
                                                    <div class="bouton_tableau bouton_telechargement">
                                                        <a href="#" class="anul_lien deleteItem" idDelete="<?php echo e($competence->id); ?>">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                            <span class="info">Supprimer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle  trois_points" id="menu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                                    <div class="dropdown-menu dropdown-menu-right menu_action_responsive bloc_arrondi_blanc" aria-labelledby="menu1">
                                                        <button data-toggle="modal" data-target="competenceUpdateModal" class="dropdown-item modalUpdate" data-id="<?php echo e($competence->id); ?>" data-titre="<?php echo e($competence->id); ?>" data-description="<?php echo e($competence->id); ?>">
                                                            <span>Editer</span>
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="dropdown-item deleteItem" idDelete="<?php echo e($competence->id); ?>">
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
<?php /**PATH C:\wamp64\www\afq\resources\views/livewire/register/freelance/competence/competence.blade.php ENDPATH**/ ?>