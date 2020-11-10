<div>
   <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(<?php echo e(asset('design/assets/images/afri16.jpg')); ?>);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Nos Formations</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="/">Acceuil</a></li>
					<li><a href="<?php echo e(route('formations.index',['locale' => App::getlocale()])); ?>">Nos Formations</a></li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-area section-sp1">
                <div class="container">
					 <div class="row">
						<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							<div class="widget courses-search-bx placeani">
								<div class="form-group">
									<div class="input-group">
										<label></label>
										<input wire:model="formationsByName" placeholder="Recherche ..." type="text" required class="form-control">
									</div>
								</div>
							</div>
							<div class="widget widget_archive">
                                <h5 class="widget-title style-1">Nos formations</h5>
                                <ul>
									 <?php $__currentLoopData = $categories_formations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->first): ?>
                                    <li class="active"><a href="#category--<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></a></li>
                                    <?php else: ?>
                                        <li><a href="#category--<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></a></li>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
							<div class="widget">
								
							</div>
                        </div>
						<div class="col-lg-9 col-md-8 col-sm-12 ">
                        <?php $__currentLoopData = $categories_formations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h2 id="category--<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></h2><br/>
							<div class="row">
                                <?php $__currentLoopData = $formationsResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $formation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($formation->nomCategorie == $item->nom): ?>
								<div class="col-md-6 col-lg-3 col-sm-6 m-b30">
									<div class="cours-bx">
										<div class="action-box">
											 <img src="<?php echo e(asset('storage/'.$formation->image_formation)); ?>" alt="<?php echo e($formation->nom); ?>">
											<a href="<?php if($formation->tag == 'formation-payante'): ?><?php echo e(route('contactus.index',['locale' => App::getlocale()])); ?><?php else: ?><?php echo e(route('formations.show',['formation' => $formation->slug, 'locale' => App::getlocale()])); ?><?php endif; ?>" class="btn">Lire +</a>
										</div>
										<div class="info-bx text-center">
											<h5><a href="<?php echo e(route('formations.show',['formation' => $formation->slug, 'locale' => App::getlocale()])); ?>"><?php echo e($formation->nom); ?></a></h5>
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
												<del></del>
												<h5><?php if($formation->prix == 0): ?><?php else: ?><?php echo e($formation->prix); ?> <?php echo e($devise->valeur); ?><?php endif; ?></h5>
											</div>
										</div>
									</div>
                                </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							   </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/afq/resources/views/livewire/liste-formations.blade.php ENDPATH**/ ?>