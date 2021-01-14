<?php $__env->startSection('title'); ?>
    Entreprise
<?php $__env->stopSection(); ?>

<?php $__env->startSection('left-menu'); ?>
     <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							<div class="widget courses-search-bx placeani">
							</div>
							<div class="widget widget_archive">
                                <h5 class="widget-title style-1">Entreprises</h5>
                                <ul>
                                    <li class="active"><a href="<?php echo e(route('apropos.index',['locale' => App::getlocale()])); ?>#liste-entreprises">Liste des entreprise</a></li>
                                </ul>
                            </div>
							<div class="widget">
								<a href="#"><img src="assets/images/cam.jpg" alt=""/></a>
							</div>
                        </div> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-9 col-md-8 col-sm-12">
                         
							<div class="row">
								<div class="col-md-6 col-lg-4 col-sm-6 m-b30">
									<div class="cours-bx">
										<div class="action-box">
											<div class="video-responsive"><img src="<?php echo e(asset('storage/'.$entreprise->logo)); ?>" alt="">
                                            </div>
										</div>
										<div class="info-bx text-center">
											<h5><a href="#"> <?php echo e($entreprise->nom); ?>, <?php echo e($entreprise->ville); ?>, <?php echo e($entreprise->pays); ?>, <?php echo e($entreprise->categorie); ?> </a></h5>
										</div>
									</div>
                                </div>								
								<div class="col-md-6 col-lg-6 col-sm-6 m-b30">
									<p>
                                        <?php echo $entreprise->description; ?>

                                    </p>
                                </div>
                            </div>
						</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.detailsTemplates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/afq/resources/views/apropos/show.blade.php ENDPATH**/ ?>