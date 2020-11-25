<div id="modal_commentaire" >
	  <form action="<?php echo e(route('createAvis',['locale' => App::getlocale()])); ?>" method="POST" id="avis_user">
		<?php echo csrf_field(); ?>
		<div class="text-center entete_comment">
			<h4 class="" style="color: #FFF; font-family: avenir!important; margin: 0; line-height: 1; font-size: 20px;">Un avis sur notre plateforme.</h4>
			<button type="button" class="close close-comment" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="corps_comment">
			<?php if(!Auth::check()): ?>
			<div class="">
			  <input type="text" required class="form-comment" placeholder="Nom" name="nom" id="avis_nom" 
			  <?php if(Auth::check()): ?> hidden <?php endif; ?> value="<?php if(Auth::check()): ?> <?php echo e(Auth::user()->name); ?> <?php endif; ?>">
			</div>
	
			<div class="">
			  <input type="text" required class="form-comment" placeholder="Prenom" name="prenom" id="avis_prenom"
			  <?php if(Auth::check()): ?> hidden <?php endif; ?> value="<?php if(Auth::check()): ?> <?php echo e(Auth::user()->prenom); ?> <?php endif; ?>">
			</div>
	
			<div class="">
			  <input type="email" required class="form-comment" placeholder="Email" name="email" id="avis_email"
			  <?php if(Auth::check()): ?> hidden <?php endif; ?> value="<?php if(Auth::check()): ?> <?php echo e(Auth::user()->email); ?> <?php endif; ?>">
			</div>
			<?php endif; ?>

			<div class="">
			  <textarea class="form-comment textarea-comment" required rows="6" placeholder="commentaires" name="texte" id="avis_texte"></textarea>
			</div>
	
		  </div>
		  <div class="d-flex justify-content-center container-btn-comment">
			<button type="submit" class="" style="color: white">COMMENTER</button>
		  </div>
		  </div>
	  </form>
	</div><?php /**PATH /opt/lampp/htdocs/afq/resources/views/partials/commentaire.blade.php ENDPATH**/ ?>