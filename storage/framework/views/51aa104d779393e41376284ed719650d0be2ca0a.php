<!doctype html>
<html lang="FR">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/assets.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/typography.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/shortcodes/shortcodes.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/style.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/style4.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/vendors/revolution/css/layers.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/vendors/revolution/css/settings.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/vendors/revolution/css/navigation.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('design/parfait_integration/css/avis.css')); ?>">
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale = 1.0" />
	<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('design/assets/uploads/2019/04/favicon.png')); ?>"/>
	<title>Inscription</title>
	<!-- / Yoast SEO plugin. -->
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/fonts5223.css')); ?>" type='text/css' media='all'/>
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/bootstrap.min5223.css')); ?>" type='text/css' media='all'/>
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/animate5223.css')); ?>" type='text/css' media='all'/>
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/flexslider5223.css')); ?>" type='text/css' media='all'/>
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/dist/block-library/style.min5223.css')); ?>" type='text/css' media='all'/>
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/dist/block-library/theme.min5223.css')); ?>" type='text/css' media='all'/>
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/plugins/video-popup/css/vp-close-icon/close-button-icon0d3f.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/plugins/video-popup/css/YouTubePopUp0d3f.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/style5224.css')); ?>" type='text/css' media='all'/>
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/style5223.css')); ?>" type='text/css' media='all'/>
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/print5223.css')); ?>" type='text/css' media='print'/>
	<link rel='stylesheet' id='responsive-css' href="<?php echo e(asset('design/assets/css/responsive6619.css')); ?>" type='text/css' media='all'/>
	
	<?php echo toastr_css(); ?>
	<?php echo \Livewire\Livewire::styles(); ?>

</head>

<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
	<header class="bg-white"><?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('head',['viewname' => 'creer_compte', 'locale' => App::getlocale()])->dom;
} elseif ($_instance->childHasBeenRendered('uStDlBm')) {
    $componentId = $_instance->getRenderedChildComponentId('uStDlBm');
    $componentTag = $_instance->getRenderedChildComponentTagName('uStDlBm');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uStDlBm');
} else {
    $response = \Livewire\Livewire::mount('head',['viewname' => 'creer_compte', 'locale' => App::getlocale()]);
    $dom = $response->dom;
    $_instance->logRenderedChild('uStDlBm', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?></header>
<main>
	<div class="container-fluid px-1 py-5 mx-auto">
		<div class="row d-flex justify-content-center">
			<div class="col-xl-5 col-lg-6 col-md-7">
				<div class="card b-0">
					<fieldset class="show">
						<div class="form-card">
							<h5 class="sub-heading">Je suis</h5>
							<div class="row px-1 radio-group">
								<div class="card-block text-center radio bloc_type_compte selected" id="bloc_etudiant">
									<div class="image-icon"> <img class="icon icon1" src="<?php echo e(asset('design/assets/img/etudiant.png')); ?>" /></a>
									</div>
									<p class="sub-desc">Etudiant</p>
								</div>
								<div class="card-block text-center radio bloc_type_compte" id="bloc_freelance">
									<div class="image-icon"> <img class="icon icon1" src="<?php echo e(asset('design/assets/img/freelance.png')); ?>" /></a>
									</div>
									<p class="sub-desc">Freelance</p>
								</div>
								<div class="card-block text-center radio bloc_type_compte" id="bloc_startup">
									<div class="image-icon"> <img class="icon icon1" src="<?php echo e(asset('design/assets/img/startup.png')); ?>" /></a>
									</div>
									<p class="sub-desc">Startup</p>
								</div>
								<div class="card-block text-center radio bloc_type_compte" id="bloc_entreprise">
									<<div class="image-icon"> <img class="icon icon1" src="<?php echo e(asset('design/assets/img/entreprise.png')); ?>" /></a>
								</div>
								<p class="sub-desc">Entreprise</p>
							</div>
						</div>
						<button id="next1" class="btn-block btn-primary mt-3 mb-1 next">SUIVANT<span class="fa fa-long-arrow-right"></span></button>
				</div>
				</fieldset>
			</div>
		</div>
	</div>
	</div>
	</main>
	<?php echo $__env->make('partials.commentaire', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <footer class="bg-white2"> <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('footer')->dom;
} elseif ($_instance->childHasBeenRendered('2Z5GMRa')) {
    $componentId = $_instance->getRenderedChildComponentId('2Z5GMRa');
    $componentTag = $_instance->getRenderedChildComponentTagName('2Z5GMRa');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2Z5GMRa');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $dom = $response->dom;
    $_instance->logRenderedChild('2Z5GMRa', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?> </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/js/popper.min5223.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/js/jquery/jquery-migrate.min330a.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/js/bootstrap.min5223.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/js/jquery.flexslider5223.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/js/custom5223.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/js/wp-video-popup5223.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/js/priority-menu4963.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/plugins/sassy-social-share/public/js/sassy-social-share-publicabd4.js')); ?>"></script>
    <script type='text/javascript' src="<?php echo e(asset('design/assets/js/wp-embed.min5223.js')); ?>"></script>
    <?php echo toastr_js(); ?>
    <?php echo app('toastr')->render(); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script>
    $('document').ready(function () {
        $('.bloc_type_compte').on('click', function() {
            $('#bloc_etudiant').removeClass("selected");
            $('#bloc_freelance').removeClass("selected");
            $('#bloc_startup').removeClass("selected");
            $('#bloc_entreprise').removeClass("selected");

            $(this).addClass("selected");
        });

        $('#next1').on('click', function() {
            if ($('#bloc_etudiant').hasClass("selected")) {
                window.location = "<?php echo e(route('register_student',['locale' => App::getlocale()])); ?>";
            }
            if ($('#bloc_startup').hasClass("selected")) {
                window.location = "<?php echo e(route('register_startup',['locale' => App::getlocale()])); ?>";
            }
            if ($('#bloc_entreprise').hasClass("selected")) {
                window.location = "<?php echo e(route('register_entreprise',['locale' => App::getlocale()])); ?>";
            }
            if ($('#bloc_freelance').hasClass("selected")) {
                window.location = "<?php echo e(route('register_freelance',['locale' => App::getlocale()])); ?>";
            }
        });
    })
    </script>
	<script type='text/javascript' src='<?php echo e(asset('design/parfait_integration/js/commentaires.js ')); ?>'></script>
</body>

</html>


	<?php /**PATH /opt/lampp/htdocs/afq/resources/views/register/register_type.blade.php ENDPATH**/ ?>