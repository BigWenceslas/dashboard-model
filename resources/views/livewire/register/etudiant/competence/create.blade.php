<button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Ajouter une Competence</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une Compétence</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
        <form method="post" action="{{route('etudiant.competences.create',['locale' => App::getLocale()])}}">
            @csrf
           <div class="modal-body">
                    <input hidden value="{{$donnees_id}}" name="donnees_id"/>
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
