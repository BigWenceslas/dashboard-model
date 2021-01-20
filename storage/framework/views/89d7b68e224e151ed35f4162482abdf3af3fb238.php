<!-- Modal -->
<div class="modal fade" id="expUpdateModal" tabindex="-1" role="dialog" aria-labelledby="expUpdateModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="expUpdateModalLabel2">Modifier un expérience professionnelle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <form method="post" action="<?php echo e(route('etudiant.experience_professionnelle.update',['locale' => App::getLocale()])); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                        <input hidden value="" name="exp_edit_id" id="exp_edit_id"/>
                        <input hidden value="<?php echo e($donnees_id); ?>" name="donnees_id"/>
                        <div class="form-group">
                            <label for="titre">Entreprise</label>
                            <input type="text" class="form-control" id="exp_edit_entreprise" placeholder="Entreprise" name="exp_entreprise" required>
                        </div>
                        <div class="form-group">
                            <label for="titre">Poste</label>
                            <input type="text" class="form-control" id="exp_edit_poste" placeholder="Poste" name="exp_poste" required>
                        </div>
                        <div class="form-group">
                            <label for="titre">Date de debut</label>
                            <input type="date" class="form-control" id="exp_edit_date_debut" name="exp_date_debut" required>
                        </div>
                        <div class="form-group">
                            <label for="titre">Date de fin</label>
                            <input type="date" class="form-control" id="exp_edit_date_fin" name="exp_date_fin" required>
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
<?php /**PATH C:\wamp64\www\afq\resources\views/livewire/register/etudiant/experience_professionnelle/update.blade.php ENDPATH**/ ?>