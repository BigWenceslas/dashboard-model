<?php $__env->startSection('title'); ?>
    Formation
<?php $__env->stopSection(); ?>

<?php $__env->startSection('left-menu'); ?>
						<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							
							<div class="widget widget_archive">
                                <h5 class="widget-title style-1">Nos Formations</h5>
                                <ul>
                                    <?php $__currentLoopData = $categories_formations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->first): ?>
                                    <li class="active"><a href="<?php echo e(route('formations.index',['locale' => App::getlocale()])); ?>#category--<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></a></li>
                                    <?php else: ?>
                                        <li><a href="<?php echo e(route('formations.index',['locale' => App::getlocale()])); ?>#category--<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></a></li>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
							
						</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-9 col-md-8 col-sm-12">
							<div class="row">
								<div class="col-md-6 col-lg-6 col-sm-6 m-b30">
									<div class="cours-bx">
										<?php if($formation->lien_video1 != "" and $formation->lien_video2 != "" and $formation->lien_video3 != ""): ?>
										<div class="action-box">
											<div class="video-responsive">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo e($formation->lien_video1); ?>"
                                                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            </div>
										</div>
										<div class="action-box">
											<div class="video-responsive">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo e($formation->lien_video2); ?>"
                                                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            </div>
										</div>
										<div class="action-box">
											<div class="video-responsive">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo e($formation->lien_video3); ?>"
                                                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            </div>
										</div>
										<?php elseif($formation->lien_video1 == ""): ?>
										<div class="action-box">
											<div class="video-responsive"><img src="<?php echo e(asset('storage/'.$formation->image_formation)); ?>" alt=""></div>
										</div>
                                        <?php else: ?>
                                        <div class="action-box">
											<div class="video-responsive">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo e($formation->lien_video1); ?>"
                                                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            </div>
										</div> 
                                        <?php endif; ?>
										<div class="info-bx text-center">
											<h5><a href="#"><?php echo e($formation->nom); ?></a></h5>
											<span><?php echo e($formation->tag); ?></span>
										</div>
										<div class="cours-more-info">
											<div class="review">
												<span>3 Review</span>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
											<div class="price">
												<br/>
												<h5> <?php if($formation->prix == 0): ?>
                                                Gratuit
                                                <?php else: ?>
                                                <?php echo e($formation->prix); ?> <?php echo e($devise->valeur); ?>

                                                <?php endif; ?></h5>
											</div>
										</div>
									</div>
                                </div>
								
								<div class="col-md-6 col-lg-6 col-sm-6 m-b30">
									<p><?php echo $formation->description; ?><br/><br/>								
									<center><a href="<?php echo e(route('contactus.index',['locale' => App::getlocale()])); ?>" class="btn btn-primary btn-lg">
												<span class="font-weight-bold">Contactez Nous</span>
											</a>
									</center>
									</p>
                                </div>
                            </div>
						</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.detailsTemplates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/afq/resources/views/formations/show.blade.php ENDPATH**/ ?>