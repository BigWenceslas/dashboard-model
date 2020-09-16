<div>
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(<?php echo e(asset('design/assets/images/afri16.jpg')); ?>);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Nos services</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="/">Acceuil</a></li>
					<li><a href="<?php echo e(route('services.index')); ?>">Nos Services</a></li>
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
							<div>
                                <div class="widget courses-search-bx placeani">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label></label>
                                                <input wire:model="servicesByName" placeholder="Recherche ..." type="text" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
							<div class="widget widget_archive">
                                <h5 class="widget-title style-1">Nos Services</h5>
                                <ul>
                                    <?php $__currentLoopData = $categories_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <?php $__currentLoopData = $categories_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->nom == "Services gratuits"): ?>
                                        <div class="col-lg-9 col-md-8 col-sm-12">
                                        <h2 id="category--<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></h2><br/>
                                        <div class="row">
                                             <?php $__currentLoopData = $servicesResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <?php if($service->nomCategorie == $item->nom): ?>
                                            <div class="col-md-6 col-lg-6 col-sm-6 m-b30">
                                                <div class="cours-bx">
                                                    <div class="action-box">
                                                        <img src="<?php echo e(asset('storage/'.$service->image_service)); ?>" alt="">
                                                        <a href="<?php echo e(route('services.show',['service' => $service->slug])); ?>" class="btn">Lire +</a>
                                                    </div>
                                                    <div class="info-bx text-center">
                                                        <h5><a href="<?php echo e(route('services.show',['service' => $service->slug])); ?>"><?php echo e($service->nom); ?></a></h5>
                                                        <span><?php echo e($service->tag); ?></span>
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
                                                            <h5>
                                                            <?php echo e($service->prix); ?> <?php echo e($devise->valeur); ?>

                                                        </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h2 id="category--<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></h2><br/>
                                    <div class="row">
                                        <?php $__currentLoopData = $servicesResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($service->nomCategorie == $item->nom): ?>
                                        <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                                            <div class="cours-bx">
                                                <div class="action-box">
                                                    <img src="<?php echo e(asset('storage/'.$service->image_service)); ?>" alt="">
                                                    <a href="<?php echo e(route('services.show',['service' => $service->slug])); ?>" class="btn">Lire +</a>
                                                </div>
                                                <div class="info-bx text-center">
                                                    <h5><a href="<?php echo e(route('services.show',['service' => $service->slug])); ?>"><?php echo e($service->nom); ?></a></h5>
                                                    <span><?php echo e($service->tag); ?></span>
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
                                                        <h5>
                                                            <?php if($service->prix != 0 and $service->type_facturation == "a_partir_de"): ?>
                                                           <?php echo e(str_replace('_', ' ', Str::upper($service->type_facturation))); ?> <?php echo e($service->prix); ?> <?php echo e($devise->valeur); ?>

                                                            <?php else: ?>
                                                            <?php echo e($service->prix); ?> <?php echo e($devise->valeur); ?> / <?php echo e($service->type_facturation); ?>

                                                            <?php endif; ?>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    </div>
                                </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
            </div>
        </div>
		<!-- contact area END -->
		
    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/afq/resources/views/livewire/liste-services.blade.php ENDPATH**/ ?>