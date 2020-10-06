<button class="btn btn-success" data-toggle="modal" data-target="#expCreateModal">Ajouter une Experience professionnelle</button>
<!-- Modal -->
<div class="modal fade" id="expCreateModal" tabindex="-1" role="dialog" aria-labelledby="expCreateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="expCreateModalLabel">Ajouter une Experience professionnelle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
        <form method="post" action="{{route('etudiant.experience_professionnelle.create')}}" enctype="multipart/form-data">
            @csrf
           <div class="modal-body">
                    <input hidden value="{{$donnees_id}}" name="donnees_id"/>
                    <div class="form-group">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control" id="cursus_titre" placeholder="Titre" name="cursus_titre" required>
                    </div>
                    <div class="form-group">
                        <label for="descriptif">Annee</label>
                        <select class="form-control" id="cursus-annee" name="cursus_annee" required>
                            @include('partials.register_annee_option')
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="titre">Document</label>
                        <input type="file" class="form-control" id="cursus_document" name="cursus_document" required>
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
