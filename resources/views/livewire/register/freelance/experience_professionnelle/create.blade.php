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
        <form method="post" action="{{route('freelance.experience_professionnelle.create',['locale' => App::getLocale()])}}" enctype="multipart/form-data">
            @csrf
           <div class="modal-body">
                    <input hidden value="{{$donnees_id}}" name="donnees_id"/>
                    <div class="form-group">
                        <label for="titre">Entreprise</label>
                        <input type="text" class="form-control" id="exp_entreprise" placeholder="Entreprise" name="exp_entreprise" required>
                    </div>
                    <div class="form-group">
                        <label for="titre">Poste</label>
                        <input type="text" class="form-control" id="exp_poste" placeholder="Poste" name="exp_poste" required>
                    </div>
                    <div class="form-group">
                        <label for="titre">Date de debut</label>
                        <input type="date" class="form-control" id="exp_date_debut" name="exp_date_debut" required>
                    </div>
                    <div class="form-group">
                        <label for="titre">Date de fin</label>
                        <input type="date" class="form-control" id="exp_date_fin" name="exp_date_fin" required>
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
