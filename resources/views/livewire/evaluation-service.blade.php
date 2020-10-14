<div>
    <form wire:submit.prevent="submit">
    <div class="row">
      <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
      </div>
      <div class="input-group col-lg-12 mb-4">            
        <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="question_1" rows="2" placeholder="Question 1"></textarea>
      </div>
      <div class="input-group col-lg-12 mb-4">
        @error('question_1') <span class="error">{{ $message }}</span> @enderror
      </div>

      <div class="input-group col-lg-12 mb-4">            
        <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="question_2" rows="2" placeholder="Question 2"></textarea>
      </div>
      <div class="input-group col-lg-12 mb-4">
        @error('question_2') <span class="error">{{ $message }}</span> @enderror
      </div>

      <div class="input-group col-lg-12 mb-4">          
        <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="question_3" rows="2" placeholder="Question 3"></textarea>
      </div>
      <div class="input-group col-lg-12 mb-4">
        @error('question_3') <span class="error">{{ $message }}</span> @enderror
      </div>

      <div class="input-group col-lg-12 mb-4">              
        <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="question_4" rows="2" placeholder="Question 4"></textarea>
      </div>
      <div class="input-group col-lg-12 mb-4">
        @error('question_4') <span class="error">{{ $message }}</span> @enderror
      </div>

      <div class="input-group col-lg-12 mb-4">           
        <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="question_5" rows="2" placeholder="Question 5"></textarea>
      </div>
      <div class="input-group col-lg-12 mb-4">
        @error('question_5') <span class="error">{{ $message }}</span> @enderror
      </div>

      <div class="input-group col-lg-12 mb-4">             
        <textarea class="form-control" id="exampleFormControlTextarea1"  rows="2" wire:model="question_6" placeholder="Question 6"></textarea>
      </div>
      <div class="input-group col-lg-12 mb-4">
        @error('question_6') <span class="error">{{ $message }}</span> @enderror
      </div>

      <div class="input-group col-lg-12 mb-4">           
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" wire:model="question_7" placeholder="Question 7"></textarea>
      </div>
      <div class="input-group col-lg-12 mb-4">
        @error('question_7') <span class="error">{{ $message }}</span> @enderror
      </div>

      <div class="input-group col-lg-12 mb-4">          
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" wire:model="question_8" placeholder="Question 8"></textarea>
      </div>
      <div class="input-group col-lg-12 mb-4">
        @error('question_8') <span class="error">{{ $message }}</span> @enderror
      </div>

      <div class="input-group col-lg-12 mb-4">    
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" wire:model="question_9" placeholder="Question 9"></textarea>
      </div>
      <div class="input-group col-lg-12 mb-4">
        @error('question_9') <span class="error">{{ $message }}</span> @enderror
      </div>

      <div class="input-group col-lg-12 mb-4">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" wire:model="question_10" placeholder="Question 10"></textarea>
      </div>
      <div class="input-group col-lg-12 mb-4">
        @error('question_10') <span class="error">{{ $message }}</span> @enderror
      </div>
                      </div>
                            <!-- Submit Button -->
                            <div class="form-group col-lg-12 mx-auto mb-0">
                                <button type="submit" class="btn btn-primary btn-block py-2">
                                    <span class="font-weight-bold">Envoyez</span>
                                </button>
                            </div>
                        </div>
                    </form>
</div>
