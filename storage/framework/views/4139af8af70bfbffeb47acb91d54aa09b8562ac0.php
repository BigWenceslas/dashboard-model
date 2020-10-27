<button class="btn btn-success" data-toggle="modal" data-target="#referenceModal">Ajouter une Référence</button>
<!-- Modal -->
<div class="modal fade" id="referenceModal" tabindex="-1" role="dialog" aria-labelledby="referenceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="referenceModalLabel">Ajouter une Référence</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
        <form method="post" action="<?php echo e(route('freelance.reference.create',['locale' => App::getLocale()])); ?>">
            <?php echo csrf_field(); ?>
           <div class="modal-body">
                    <input hidden value="<?php echo e($donnees_id); ?>" name="donnees_id"/>
                    <div class="form-group">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control" id="titre" placeholder="Titre" name="titre" required>
                    </div>
                    <div class="form-group">
                        <label for="descriptif">Description</label>
                        <textarea class="form-control" id="descriptif" name="descriptif"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
        </div>
    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/afq/resources/views/livewire/register/freelance/reference/create.blade.php ENDPATH**/ ?>