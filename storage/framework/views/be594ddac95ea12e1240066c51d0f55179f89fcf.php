<form action="<?php echo e(route('event_request',['locale' => App::getLocale()])); ?>" method="POST"> <?php echo csrf_field(); ?>
	<div class="form-row">
		<input hidden value="" id="event_type" name="event_type" />
		<input hidden value="<?php echo e($service->slug); ?>" id="slug" name="slug" />
		<div class="input-data">
			<input type="text" name="nom" required>
			<div class="underline"> </div>
			<label for="">Nom</label>
		</div>
		<div class="input-data">
			<input type="text" name="entreprise" required>
			<div class="underline"> </div>
			<label for="">Entreprise</label>
		</div>
	</div>
	<div class="form-row">
		<div class="input-data">
			<input type="email" name="email" required>
			<div class="underline"> </div>
			<label for="">Email Address</label>
		</div>
		<div class="input-data">
			<input type="text" name="telephone" required>
			<div class="underline"> </div>
			<label for="">Telephone</label>
		</div>
	</div>
	<div class="form-row">
		<div class="input-data">
			<select id="pays" name="pays"> 
               <?php echo $__env->make('partials.pays', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </select>
			<div class="underline"> </div>
			<label for="">Pays</label>
		</div>
		<div class="input-data">
			<input type="text" name="ville" required>
			<div class="underline"> </div>
			<label for="">Ville</label>
		</div>
	</div>
	<div class="form-row">
		<div class="input-data">
			<input type="text" name="vous_recherchez" required>
			<div class="underline"> </div>
			<label for="">Vous recherchez</label>
		</div>
		<div class="input-data">
			<input type="text" name="ville_hote" placeholder="Ville où aura lieu l’évènement ou le déjeuner" required>
			<div class="underline"> </div>
			<label for="">Ville hote</label>
		</div>
	</div>
	<div class="form-row">
		<div class="input-data">
			<input type="number" name="budget" required>
			<div class="underline"> </div>
			<label for="">budget</label>
		</div>
		<div class="input-data">
			<input type="text" name="duree" required>
			<div class="underline"> </div>
			<label for="">duree</label>
		</div>
	</div>
	<div class="form-row">
		<div class="input-data textarea">
			<!-- Due to more textarea tag I got an error.. SO I changed the name of texarea tag into changeit. Replace the changeit text/tag to textarea-->
			<textarea rows="8" cols="80" name="sujet" required></textarea>
			<br />
			<div class="underline"> </div>
			<label for="">Sujet de discussion</label>
			<br /> </div>
	</div>
	<div class="form-row submit-btn">
		<div class="input-data">
			<div class="inner"></div>
			<input type="submit" value="Valider"> </div>
	</div>
</form><?php /**PATH /opt/lampp/htdocs/afq/resources/views/services/form_affaires.blade.php ENDPATH**/ ?>