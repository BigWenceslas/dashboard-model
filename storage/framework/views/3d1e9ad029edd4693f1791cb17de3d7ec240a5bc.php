<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/stylea.css')); ?>">
	<!-- Start of HubSpot Embed Code -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
	<!-- End of HubSpot Embed Code -->
	<meta charset="UTF-8" />
	<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('design/assets/uploads/2019/04/favicon.png')); ?>"/>
	<title>Africkup Vitrine Multilingue</title>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/fonts5223.css')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/bootstrap.min5223.css')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/animate5223.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/flexslider5223.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/dist/block-library/style.min5223.css')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/dist/block-library/theme.min5223.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/css/wp-video-popup5223.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/plugins/video-popup/css/vp-close-icon/close-button-icon0d3f.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/plugins/video-popup/css/YouTubePopUp0d3f.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/style5223.css')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/print5223.css')); ?>' type='text/css' media='print'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/plugins/sassy-social-share/public/css/sassy-social-share-publicabd4.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/plugins/sassy-social-share/admin/css/sassy-social-share-svgabd4.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' id='responsive-css' href='<?php echo e(asset(' design/assets/css/responsive6619.css ')); ?>' type='text/css' media='all'/>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/popper.min5223.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery/jquery4a5f.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery/jquery-migrate.min330a.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/video-popup/js/YouTubePopUp.jquery0d3f.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/video-popup/js/YouTubePopUp0d3f.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/bootstrap.min5223.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery.flexslider5223.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/custom5223.js ')); ?>'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
	<?php echo \Livewire\Livewire::styles(); ?> 
	</head>

<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
	<header class="bg-white"><?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('head',['viewname' => 'vitrine'])->dom;
} elseif ($_instance->childHasBeenRendered('8K5edYX')) {
    $componentId = $_instance->getRenderedChildComponentId('8K5edYX');
    $componentTag = $_instance->getRenderedChildComponentTagName('8K5edYX');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8K5edYX');
} else {
    $response = \Livewire\Livewire::mount('head',['viewname' => 'vitrine']);
    $dom = $response->dom;
    $_instance->logRenderedChild('8K5edYX', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
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
												<h3><?php echo e($banniere->getTranslatedAttribute('titre', App::getLocale(), 'fr')); ?></h3>
												<p><?php echo e($banniere->getTranslatedAttribute('description', App::getLocale(), 'fr')); ?></p>
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
									<h2 class=" font-weight-extraBold"><?php echo app('translator')->get('vitrine.lien_pourquoi'); ?></h2> </div>
							</div>
						</div>
						<center>
						<div class="secure-boxes" style="margin-left:initial;">
							<div class="row no-gutters no-gutters">
								<div class="col-lg-4 col-md-6 ">
									<div class="secure-boxes-inner">
										<h3 class="secondary-font font-30 font-weight-light"><?php echo app('translator')->get('vitrine.besoin'); ?>                                                </h3>
										<div class="font-13">
											<p><?php echo app('translator')->get('vitrine.besoin_description'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 ">
									<div class="secure-boxes-inner">
										<h3 class="secondary-font font-30 font-weight-light"><?php echo app('translator')->get('vitrine.titre_ressource'); ?></span>                                                </h3>
										<div class="font-13">
											<p><?php echo app('translator')->get('vitrine.description_ressource'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 ">
									<div class="secure-boxes-inner">
										<h3 class="secondary-font font-30 font-weight-light"><?php echo app('translator')->get('vitrine.titre_choix'); ?></span>                                                </h3>
										<div class="font-13">
											<p><?php echo app('translator')->get('vitrine.description_choix'); ?></p>
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
						<h2><?php echo app('translator')->get('vitrine.titre_avis'); ?></h2>
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Carousel indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item carousel-item active">
									<div class="row">
										<?php $__currentLoopData = $temoignages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temoignage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if($loop->index < 2): ?> <div class="col-sm-6">
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
									</div>
									<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
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
							<h2><?php echo app('translator')->get('vitrine.titre_application'); ?></h2>
							<center>
								<p><?php echo app('translator')->get('vitrine.description_application'); ?></p>
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
	<div class="YouTubePopUp-Wrap videoPopup-on-pageload" style="display: none;">
		<div class="Video-PopUp-Content vp-on-pageload-wrap"></div>
	</div>
	<footer class="bg-white2">
		<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('footer')->dom;
} elseif ($_instance->childHasBeenRendered('TGXE84L')) {
    $componentId = $_instance->getRenderedChildComponentId('TGXE84L');
    $componentTag = $_instance->getRenderedChildComponentTagName('TGXE84L');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TGXE84L');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $dom = $response->dom;
    $_instance->logRenderedChild('TGXE84L', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
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
	<?php echo \Livewire\Livewire::scripts(); ?> </body>

</html><?php /**PATH /opt/lampp/htdocs/afq/resources/views/vitrine.blade.php ENDPATH**/ ?>