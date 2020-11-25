<!doctype html>
<html lang="FR">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/stylea.css')); ?>">
	<!-- Start of HubSpot Embed Code -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
	<!-- End of HubSpot Embed Code -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('design/assets/uploads/2019/04/favicon.png')); ?>"/>
	<title>Africkup</title>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/vendors/fontawesome/css/font-awesome.min.css')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/mdb.css')); ?>' type='text/css' media='all'/>


	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/fonts5223.css')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/bootstrap.min5223.css')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/animate5223.css ')); ?>' type='text/css' media='all'/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css" integrity="sha512-c7jR/kCnu09ZrAKsWXsI/x9HCO9kkpHw4Ftqhofqs+I2hNxalK5RGwo/IAhW3iqCHIw55wBSSCFlm8JP0sw2Zw==" crossorigin="anonymous" />
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/dist/block-library/style.min5223.css')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/dist/block-library/theme.min5223.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/css/wp-video-popup5223.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/plugins/video-popup/css/vp-close-icon/close-button-icon0d3f.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/plugins/video-popup/css/YouTubePopUp0d3f.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/style5223.css')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/print5223.css')); ?>' type='text/css' media='print'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/plugins/sassy-social-share/public/css/sassy-social-share-publicabd4.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/plugins/sassy-social-share/admin/css/sassy-social-share-svgabd4.css ')); ?>' type='text/css' media='all'/>
	
	<link rel="stylesheet" href="<?php echo e(asset('design/parfait_integration/css/header_respon.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('design/parfait_integration/css/avis.css')); ?>">
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/popper.min5223.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery/jquery4a5f.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/bootstrap.min5223.js ')); ?>'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js" integrity="sha512-BmoWLYENsSaAfQfHszJM7cLiy9Ml4I0n1YtBQKfx8PaYpZ3SoTXfj3YiDNn0GAdveOCNbK8WqQQYaSb0CMjTHQ==" crossorigin="anonymous"></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/custom5223.js ')); ?>'></script>
    <?php echo toastr_css(); ?>
	<?php echo \Livewire\Livewire::styles(); ?> 
	</head>

<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
	<?php echo $__env->make('partials.site_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<header class="bg-white"><?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('head',['viewname' => 'Accueil'])->dom;
} elseif ($_instance->childHasBeenRendered('a5ZynVi')) {
    $componentId = $_instance->getRenderedChildComponentId('a5ZynVi');
    $componentTag = $_instance->getRenderedChildComponentTagName('a5ZynVi');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('a5ZynVi');
} else {
    $response = \Livewire\Livewire::mount('head',['viewname' => 'Accueil']);
    $dom = $response->dom;
    $_instance->logRenderedChild('a5ZynVi', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?></header>
	<main class="mainContent position-relative home-page">
		<section class="banner-section z-1 position-relative">
			<div class="container position-relative">
				<div class="mainBanner inner-content">
					<div class="row no-gutters">
						<div class="col-md-12">
							<div class="flexslider">
								<ul class="slides"> <?php $__currentLoopData = $bannieres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banniere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li style="background-image: url(<?php echo e(asset('storage/'.$banniere->image)); ?>);">
										<br/>
										<br/>
										<div class="landing-content">
											<div class="banner-content-text animated fadeIn">
												<br/>
												<br/>
												<h3><?php echo e($banniere->titre); ?></h3>
												<p><?php echo e($banniere->description); ?></p>
                                                <div class="banner-btn-wrap"> <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                <a href="<?php echo e(route('register_type',['locale' => App::getlocale()])); ?>"><input class="get-started primary-font btn" type="submit" value="inscris-toi gratuitement" name="submitForm"></a>
                                                            </font>
                                                        </font>
													</font>
													</font>
												</div>
											</div>
										</div>
									</li> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="inner-content-wrap">
			<div class="container bg-white position-relative box-shadow-1 z-1">
				<div class="inner-content">
					<div class="inner-content-middle">
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="inner-content-short-desc">
									<h2 class=" font-weight-extraBold">Pourquoi Choisir Africkup</h2> </div>
							</div>
						</div>
						<center>
						<div class="secure-boxes" style="margin-left:initial;">
							<div class="row no-gutters no-gutters">
								<div class="col-lg-4 col-md-6 ">
									<div class="secure-boxes-inner">
										<h3 class="secondary-font font-30 font-weight-light">Quel<span> sont vos besoins</span>                                                </h3>
										<div class="font-13">
											<p>Dites nous et nous nous chargeons du reste</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 ">
									<div class="secure-boxes-inner">
										<h3 class="secondary-font font-30 font-weight-light">Nous<span> avons la ressource</span>                                                </h3>
										<div class="font-13">
											<p>Nous nous chargeons de faire toutes les recherches neccessaires pour vous.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 ">
									<div class="secure-boxes-inner">
										<h3 class="sflexsliderecondary-font font-30 font-weight-light">Vous <span> avez le choix</span>                                                </h3>
										<div class="font-13">
											<p>Nous vous ferons plusieurs propositions</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</center>
					</div>
		</section>
		<section class="featured-blogContent fg-features">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2>Ils donnent leur avis</h2>
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Carousel indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item carousel-item active">
									<div class="row"> <?php $__currentLoopData = $temoignages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temoignage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($loop->index < 2): ?> <div class="col-sm-6">
											<div class="testimonial-wrapper">
												<div class="testimonial"><?php echo e($temoignage->texte); ?></div>
												<div class="media">
													<div class="media-left d-flex mr-3"> <img src="<?php if($temoignage->commentor->avatar == " "): ?> <?php echo e(asset('design/images.png')); ?>

                                                            <?php else: ?> <?php echo e(asset('storage/'.$temoignage->commentor->avatar)); ?> <?php endif; ?>" alt=""> </div>
													<div class="media-body">
														<div class="overview">
															<div class="name"><b> <?php if($temoignage->commentor->prenom != "" and $temoignage->commentor->nom): ?>
                                                                    <?php echo e($temoignage->commentor->prenom); ?> <?php echo e($temoignage->commentor->nom); ?>

                                                                <?php else: ?>
                                                                    <?php echo e($temoignage->commentor->name); ?>

                                                                <?php endif; ?></b></div>
															<div class="details"><?php echo e($temoignage->commentor->fonction); ?></div>
															<div class="star-rating">
																<ul class="list-inline">
																	<li class="list-inline-item"><i class="fa fa-star"></i></li>
																	<li class="list-inline-item"><i class="fa fa-star"></i></li>
																	<li class="list-inline-item"><i class="fa fa-star"></i></li>
																	<li class="list-inline-item"><i class="fa fa-star"></i></li>
																	<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
									</div> <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>
	</main>
	<section class="opportunity-app">
		<div class="container">
			<div class="mobile-app-wrap">
				<div class="row no-gutters align-items-center">
					<div class="mobile-app col-lg-6"> <img src="<?php echo e(asset('design/assets/img/afri.png')); ?>" alt=""> </div>
					<div class="app-content_wrap col-lg-6">
						<div class="app-content">
							<h2>Notre application mobile est disponible sur google play et Apple store.</h2>
							<center>
								<p>Retrouvez tous les artisans/entreprises/business camerounais et africains en un seul clic » . Il faudra integrer directement les liens vers appstore et google play.</p>
							</center>
							<center>
								<div class="app-store">
									<a href="#"> <img src="<?php echo e(asset('design/assets/img/google-play.png')); ?>" alt=""> </a>
								</div>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php echo $__env->make('partials.commentaire', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<div class="text-center bloc_img_comment">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
  			<path d="M8.73480344,20.6206296 C8.36019969,21.0264503 7.72754063,21.0517567 7.3217199,20.6771529 C7.11663769,20.4878463 7,20.2214475 7,19.9423495 L7,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15 C21,16.1045695 20.1045695,17 19,17 L12.0769231,17 L8.73480344,20.6206296 Z"/>
		</svg>
	</div>

	<div class="YouTubePopUp-Wrap videoPopup-on-pageload" style="display: none;">
		<div class="Video-PopUp-Content vp-on-pageload-wrap"></div>
	</div>
	<footer class="bg-white2">
		<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('footer')->dom;
} elseif ($_instance->childHasBeenRendered('23jvU6F')) {
    $componentId = $_instance->getRenderedChildComponentId('23jvU6F');
    $componentTag = $_instance->getRenderedChildComponentTagName('23jvU6F');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('23jvU6F');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $dom = $response->dom;
    $_instance->logRenderedChild('23jvU6F', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
	</footer>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/js/wp-video-popup5223.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/priority-menu4963.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/sassy-social-share/public/js/sassy-social-share-publicabd4.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/wp-embed.min5223.js ')); ?>'></script>
    <?php echo toastr_js(); ?>
    <?php echo app('toastr')->render(); ?>
	<script type="text/javascript">
	 jQuery(document).ready(function($) {
		 
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "fade",
				pauseOnHover: true,
				slideshow: true
			});
		});
	});
	</script>
	<script type='text/javascript' src='<?php echo e(asset('design/parfait_integration/js/commentaires.js ')); ?>'></script>
	<?php echo \Livewire\Livewire::scripts(); ?>

	<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>


<?php /**PATH /opt/lampp/htdocs/afq/resources/views/welcome.blade.php ENDPATH**/ ?>