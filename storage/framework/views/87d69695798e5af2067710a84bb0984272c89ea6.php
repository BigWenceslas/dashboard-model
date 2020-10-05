<!-- Modal -->
<div class="modal fade" id="cursusAcademiqueUpdateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cursusAcademiqueUpdateModalLabel2">Modifier un expérience académique</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <form method="post" action="<?php echo e(route('etudiant.cursus_academique.update')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
            <div class="modal-body">
                        <input hidden value="" name="cursus_academique_edit_id" id="cursus_academique_edit_id"/>
                        <input hidden value="<?php echo e($donnees_id); ?>" name="donnees_id"/>
                       <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" class="form-control" id="cursus_academique_edit_titre" placeholder="Titre" name="cursus_titre" required>
                        </div>
                        <div class="form-group">
                            <label for="descriptif">Annee</label>
                            <select class="form-control" id="cursus_academique_edit_annee" name="cursus_annee" required>
                                <?php echo $__env->make('partials.register_annee_option', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="titre">Document</label>
                            <input type="file" class="form-control" id="cursus_academique_edit_document" name="cursus_document">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/afq/resources/views/livewire/register/etudiant/cursus_academique/update.blade.php ENDPATH**/ ?>