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
	</div>


	<div class="text-center bloc_img_comment">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
  			<path d="M8.73480344,20.6206296 C8.36019969,21.0264503 7.72754063,21.0517567 7.3217199,20.6771529 C7.11663769,20.4878463 7,20.2214475 7,19.9423495 L7,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15 C21,16.1045695 20.1045695,17 19,17 L12.0769231,17 L8.73480344,20.6206296 Z"/>
		</svg>
	</div><?php /**PATH /opt/lampp/htdocs/afq/resources/views/partials/commentaire.blade.php ENDPATH**/ ?>