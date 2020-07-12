<div>
   <form  wire:submit.prevent="submit">
                    <div class="row">
                        <!-- First Name -->
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input type="text" wire:model="nom" placeholder="Nom" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Last Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input type="text" wire:model="prenom" placeholder="Prenom" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <div class="input-group col-lg-6 mb-4">
                          <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-phone-square text-muted"></i>
                              </span>
                          </div>
                          <select id="countryCode" name="countryCode" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                            <option value="">+237</option>
                        </select>
                        <input type="tel" wire:model="telephone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
                      </div>
                      <div class="input-group col-lg-6 mb-4">
                          <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                  <i class="fa fa-envelope text-muted"></i>
                              </span>
                          </div>
                          <input type="text" wire:model="email" placeholder="Email" class="form-control bg-white border-left-0 border-md">
                      </div>
                    <div class="input-group col-lg-12 mb-4">
                        <textarea class="form-control" wire:model="message" rows="3" placeholder="Laisse nous un message"></textarea>
                      </div>
                    </div>
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <button type="submit" class="btn btn-primary btn-block py-2">
                                <span class="font-weight-bold">Envoyez</span>
                            </button>
                        </div>
                    </div>
    </form>
</div>
