<!doctype html>
<html lang="FR">

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/assets.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/typography.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/shortcodes/shortcodes.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/style.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/style2.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/vendors/revolution/css/layers.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/vendors/revolution/css/settings.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/vendors/revolution/css/navigation.css')); ?>">
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script><meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale = 1.0" />
	<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('design/assets/uploads/2019/04/favicon.png')); ?>" />
    
	<title>Pourquoi Africkup</title>
	<!-- / Yoast SEO plugin. -->
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/fonts5223.css')); ?>" type='text/css' media='all' />
	
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/bootstrap.min5223.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/animate5223.css')); ?>" type='text/css' media='all'/>
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/flexslider5223.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/dist/block-library/style.min5223.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/dist/block-library/theme.min5223.css')); ?>" type='text/css' media='all' />

	<link rel='stylesheet' href="<?php echo e(asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/css/wp-video-popup5223.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/plugins/video-popup/css/vp-close-icon/close-button-icon0d3f.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/plugins/video-popup/css/YouTubePopUp0d3f.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/style5224.css')); ?>" type='text/css' media='all'/>
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/print5223.css')); ?>" type='text/css' media='print' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/plugins/sassy-social-share/public/css/sassy-social-share-publicabd4.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/plugins/sassy-social-share/admin/css/sassy-social-share-svgabd4.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' id='responsive-css' href="<?php echo e(asset('design/assets/css/responsive6619.css')); ?>" type='text/css' media='all' />
	 <?php echo \Livewire\Livewire::styles(); ?>

	</head>

	<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
		<header class="bg-white"> <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('head',['viewname' => 'a-propos'])->dom;
} elseif ($_instance->childHasBeenRendered('RsASv66')) {
    $componentId = $_instance->getRenderedChildComponentId('RsASv66');
    $componentTag = $_instance->getRenderedChildComponentTagName('RsASv66');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('RsASv66');
} else {
    $response = \Livewire\Livewire::mount('head',['viewname' => 'a-propos']);
    $dom = $response->dom;
    $_instance->logRenderedChild('RsASv66', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?> </header>
		<section class=" blog fg-features"> <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('liste-entreprises')->dom;
} elseif ($_instance->childHasBeenRendered('gh9XlTj')) {
    $componentId = $_instance->getRenderedChildComponentId('gh9XlTj');
    $componentTag = $_instance->getRenderedChildComponentTagName('gh9XlTj');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gh9XlTj');
} else {
    $response = \Livewire\Livewire::mount('liste-entreprises');
    $dom = $response->dom;
    $_instance->logRenderedChild('gh9XlTj', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?> </section>

		<footer class="bg-white2">
			<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('footer')->dom;
} elseif ($_instance->childHasBeenRendered('yayDTG1')) {
    $componentId = $_instance->getRenderedChildComponentId('yayDTG1');
    $componentTag = $_instance->getRenderedChildComponentTagName('yayDTG1');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yayDTG1');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $dom = $response->dom;
    $_instance->logRenderedChild('yayDTG1', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
		</footer>
		<script type='text/javascript' src='<?php echo e(asset('design/assets/js/priority-menu4963.js')); ?>'></script>
		<script type='text/javascript' src="<?php echo e(asset('design/assets/js/popper.min5223.js')); ?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
		<script type='text/javascript' src="<?php echo e(asset('design/assets/plugins/video-popup/js/YouTubePopUp.jquery0d3f.js')); ?>"></script>
		<script type='text/javascript' src="<?php echo e(asset('design/assets/plugins/video-popup/js/YouTubePopUp0d3f.js')); ?>"></script>
		<script type='text/javascript' src="<?php echo e(asset('design/assets/js/bootstrap.min5223.js')); ?>"></script>
		<script type='text/javascript' src="<?php echo e(asset('design/assets/js/jquery.flexslider5223.js')); ?>"></script>
		<script type='text/javascript' src="<?php echo e(asset('design/assets/js/custom5223.js')); ?>"> </script>
		<?php echo \Livewire\Livewire::scripts(); ?>

    	<?php echo $__env->yieldPushContent('scripts'); ?>
	</body>
</html><?php /**PATH /opt/lampp/htdocs/afq/resources/views/apropos/index.blade.php ENDPATH**/ ?>