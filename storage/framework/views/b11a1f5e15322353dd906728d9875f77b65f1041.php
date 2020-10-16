<section class="form-box" >
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-12 col-sm-offset-1 col-md-12 col-md-offset-2 col-lg-12 col-lg-offset-3 form-wizard">
					
						<!-- Form Wizard -->
                    	<form role="form" action="" method="post">

                    		<h3>Evaluation de l'entreprise</h3>
                    		<p>Formulaire d'évaluation de l'entreprise</p>
							
							<!-- Form progress -->
                    		<div class="form-wizard-steps form-wizard-tolal-steps-4">
                    			<div class="form-wizard-progress">
                    			    <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
                    			</div>
								<!-- Step 1 -->
                    			<div class="form-wizard-step active">
                    				<div class="form-wizard-step-icon"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></div>
                    				<p>Problème</p>
                    			</div>
								<!-- Step 1 -->
								
								<!-- Step 2 -->
                    			<div class="form-wizard-step">
                    				<div class="form-wizard-step-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                    				<p>Client</p>
                    			</div>
								<!-- Step 2 -->
								
								<!-- Step 3 -->
								<div class="form-wizard-step">
                    				<div class="form-wizard-step-icon"><i class="fa fa-product-hunt" aria-hidden="true"></i></div>
                    				<p>Produit</p>
                    			</div>
								<!-- Step 3 -->
								
								<!-- Step 4 -->
								<div class="form-wizard-step">
                    				<div class="form-wizard-step-icon"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>
                    				<p>Performances</p>
                    			</div>
								<!-- Step 4 -->

								<!-- Step 5 -->
								<div class="form-wizard-step">
                    				<div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                    				<p>Développement</p>
                    			</div>
								<!-- Step 5 -->
                    		</div>
							<!-- Form progress -->
                    		
							
							<!-- Form Step 1 -->
                    		<fieldset>

								<h4>Données liées aux problèmes rencontrés: <span>Etape 1 - 5</span></h4>
								<?php $__currentLoopData = $problemes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $probleme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="form-group">
                    			    <label><?php echo $probleme->question; ?> <span>*</span></label>
                                    <textarea type="text" name="question_probleme_<?php echo e($probleme->id); ?>" placeholder="Repondez a la question ici !" class="form-control required"></textarea>
                                </div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn-perso btn-next">Suivant</button>
                                </div>
                            </fieldset>
							<!-- Form Step 1 -->

							<!-- Form Step 2 -->
                            <fieldset>

                                <h4>Etude du marché : <span>Etape 2 - 5</span></h4>
								<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="form-group">
                    			    <label><?php echo e($client->question); ?> <span>*</span></label>
                                    <textarea type="text" name="question_client_<?php echo e($client->id); ?>" placeholder="Repondez a la question ici !" class="form-control required"></textarea>
                                </div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn-perso btn-previous">Précédent</button>
                                    <button type="button" class="btn-perso btn-next">Suivant</button>
                                </div>
                            </fieldset>
							<!-- Form Step 2 -->

							<!-- Form Step 3 -->
                            <fieldset>

                                <h4>Informations des produits: <span>Etape 3 - 5</span></h4>
								<?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="form-group">
                    			    <label><?php echo e($produit->question); ?> <span>*</span></label>
                                    <textarea type="text" name="question_produit_<?php echo e($produit->id); ?>" placeholder="Repondez a la question ici !" class="form-control required"></textarea>
                                </div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn-perso btn-previous">Précédent</button>
                                    <button type="button" class="btn-perso btn-next">Suivant</button>
                                </div>
                            </fieldset>
							<!-- Form Step 3 -->
							
							<!-- Form Step 4 -->
							<fieldset>

                                <h4>Performances: <span>Etape 4 - 5</span></h4>
								<div style="clear:both;"></div>
								<?php $__currentLoopData = $performances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $performance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="form-group">
                    			    <label><?php echo e($performance->question); ?> <span>*</span></label>
                                    <textarea type="text" name="question_performance_<?php echo e($performance->id); ?>" placeholder="Repondez a la question ici !" class="form-control required"></textarea>
                                </div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
								<br/>
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn-perso btn-previous">Précédent</button>
                                    <button type="button" class="btn-perso btn-next">Suivant</button>
                                </div>
                            </fieldset>
							<!-- Form Step 4 -->

							<!-- Form Step 5 -->
							<fieldset>

                                <h4>Développement: <span>Etape 5 - 5</span></h4>
								<div style="clear:both;"></div>
								<?php $__currentLoopData = $developpements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $developpement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="form-group">
                    			    <label><?php echo $developpement->question; ?> <span>*</span></label>
                                    <textarea type="text" name="question_developpement_<?php echo e($developpement->id); ?>" placeholder="Repondez a la question ici !" class="form-control required"></textarea>
                                </div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    			<br/>
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous">Précédent</button>
                                    <button type="submit" class="btn-perso btn-submit">Enregistrer</button>
                                </div>
                            </fieldset>
							<!-- Form Step 5 -->
                    	
                    	</form>
						<!-- Form Wizard -->
                    </div>
                </div>
                    
            </div>
</section><?php /**PATH /opt/lampp/htdocs/afq/resources/views/livewire/evaluation-service.blade.php ENDPATH**/ ?>