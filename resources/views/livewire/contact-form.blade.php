<div>
	<form wire:submit.prevent="submit">
		<div class="row">
            <div wire:loading wire:target="submit" class="alert alert-warning input-group col-lg-12 mb-4">
               Envoie en cours...
            </div>
            @if (session()->has('message'))
            <div class="alert alert-success input-group col-lg-12 mb-4">
              {{ session('message') }}
            </div>
            @endif
            @error('nom')<div class="alert alert-danger input-group" role="alert">
            {{ $message }}
            </div>
            @enderror
            @error('prenom')<div class="alert alert-danger input-group" role="alert">
            {{ $message }}
            </div>
            @enderror
            @error('telephone')<div class="alert alert-danger input-group" role="alert">
            {{ $message }}
            </div>
            @enderror
            @error('email')<div class="alert alert-danger input-group" role="alert">
            {{ $message }}
            </div>
            @enderror
            @error('message')<div class="alert alert-danger input-group" role="alert">
            {{ $message }}
            </div>
            @enderror
            <!-- First Name -->
			<div class="input-group col-lg-6 mb-4">
				<div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-user text-muted"></i>
                    </span>
                </div>
                <input required autocomplete="off" type="text" wire:model="nom" placeholder="Nom" class="form-control bg-white border-left-0 border-md">
            </div>
			<!-- Last Name -->
                <div class="input-group col-lg-6 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-user text-muted"></i>
                        </span>
                    </div>
                    <input required type="text" wire:model="prenom" placeholder="Prenom" class="form-control bg-white border-left-0 border-md">
                </div>
                <div class="input-group col-lg-6 mb-4">
				<div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-phone-square text-muted"></i>
                    </span>
                </div>
				<select wire:model="countryCode" style="max-width:80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
					<option value="">+237</option>
				</select>
                <input required type="tel" wire:model="telephone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
                </div>
                <div class="input-group col-lg-6 mb-4">
				<div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-envelope text-muted"></i>
                    </span>
                </div>
                <input required type="text" wire:model="email" placeholder="Email" class="form-control bg-white border-left-0 border-md">
            </div>
            <div class="input-group col-lg-6 mb-4">
                <input type="file" multiple="multiple" wire:model="pieces_jointes" placeholder="Pieces Jointes" class="form-control bg-white border-0 border-md">
           </div>
            <div class="input-group col-lg-6 mb-4">
                <select wire:model="sujet" class="form-control bg-white border-md">
                    <option value="" selected>Sujet</option>
                    <option value="document">Documents</option>
                    <option value="image">Images</option>
                </select>
            </div>
           {{--  <div class="input-group col-lg-12 mb-4">
				<div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-user text-muted"></i></span>
                </div>
                <input type="text" wire:model="sujet" placeholder="Sujet" class="form-control bg-white border-left-0 border-md">
            </div> --}}
			<div class="input-group col-lg-12 mb-4">
				<textarea class="form-control" required wire:model="message" rows="5" placeholder="Laissez nous un message"></textarea>
            </div>
		</div>
		<div class="form-group col-lg-12 mx-auto mb-0">
			<button type="submit" class="btn btn-primary btn-block py-2" style="color: white"> <span class="font-weight-bold">Envoyez</span> </button>
		</div>
    </form>
</div>