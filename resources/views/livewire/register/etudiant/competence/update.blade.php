<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Modifier une Compétence</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <form method="post" action="{{route('etudiant.competences.update')}}">
                @csrf
            <div class="modal-body">
                        <input hidden value="" name="competence_edit_id" id="competence_edit_id"/>
                        <input hidden value="{{$donnees_id}}" name="donnees_id"/>
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" class="form-control" id="competence_edit_titre" placeholder="Titre" name="titre" required>
                        </div>
                        <div class="form-group">
                            <label for="descriptif">Description</label>
                            <textarea class="form-control" id="competence_edit_description" name="descriptif"></textarea>
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
