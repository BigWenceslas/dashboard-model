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
        <form wire:submit.prevent="store">
            @csrf
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
           <div class="modal-body">
                    <input hidden value="{{$donnees_id}}" wire:model="donnees_id"/>
                    <div class="form-group">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control" id="titre" placeholder="Titre" wire:model="titre">
                        @error('titre') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="descriptif">Description</label>
                        <textarea class="form-control" id="descriptif" wire:model="descriptif"></textarea>
                        @error('descriptif') <span class="text-danger error">{{ $message }}</span>@enderror
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
