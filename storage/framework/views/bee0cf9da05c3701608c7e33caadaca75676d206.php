<!doctype html>
<html lang="FR">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<!-- REVOLUTION SLIDER END -->	
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/assets.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/typography.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/shortcodes/shortcodes.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/style.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/style2.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/vendors/revolution/css/layers.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/vendors/revolution/css/settings.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/vendors/revolution/css/navigation.css')); ?>">

    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
    <meta charset="UTF-8" />
    <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale = 1.0"/> 
    <link rel="shortcut icon" type="image/png" href=" "/>
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('design/assets/uploads/2019/04/favicon.png')); ?>"/> 
    <title>Service</title>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/fonts5223.css')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/bootstrap.min5223.css')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/animate5223.css ')); ?>' type='text/css' media='all'/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css" integrity="sha512-c7jR/kCnu09ZrAKsWXsI/x9HCO9kkpHw4Ftqhofqs+I2hNxalK5RGwo/IAhW3iqCHIw55wBSSCFlm8JP0sw2Zw==" crossorigin="anonymous" />
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/dist/block-library/style.min5223.css')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/dist/block-library/theme.min5223.css ')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/style5223.css')); ?>' type='text/css' media='all'/>
	<link rel='stylesheet' href='<?php echo e(asset('design/assets/print5223.css')); ?>' type='text/css' media='print'/>
	<link rel="stylesheet" href="<?php echo e(asset('design/parfait_integration/css/header_respon.css')); ?>">

    <script type='text/javascript' src='<?php echo e(asset('design/assets/js/popper.min5223.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery/jquery4a5f.js ')); ?>'></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/bootstrap.min5223.js ')); ?>'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js" integrity="sha512-BmoWLYENsSaAfQfHszJM7cLiy9Ml4I0n1YtBQKfx8PaYpZ3SoTXfj3YiDNn0GAdveOCNbK8WqQQYaSb0CMjTHQ==" crossorigin="anonymous"></script>
	<script type='text/javascript' src='<?php echo e(asset('design/assets/js/custom5223.js ')); ?>'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
	<?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
    <?php echo $__env->make('partials.site_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <header class="bg-white">
        <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('head',['viewname' => 'services'])->dom;
} elseif ($_instance->childHasBeenRendered('dApzrji')) {
    $componentId = $_instance->getRenderedChildComponentId('dApzrji');
    $componentTag = $_instance->getRenderedChildComponentTagName('dApzrji');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('dApzrji');
} else {
    $response = \Livewire\Livewire::mount('head',['viewname' => 'services']);
    $dom = $response->dom;
    $_instance->logRenderedChild('dApzrji', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
        </header> 
        <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('liste-services')->dom;
} elseif ($_instance->childHasBeenRendered('6RdVpNu')) {
    $componentId = $_instance->getRenderedChildComponentId('6RdVpNu');
    $componentTag = $_instance->getRenderedChildComponentTagName('6RdVpNu');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6RdVpNu');
} else {
    $response = \Livewire\Livewire::mount('liste-services');
    $dom = $response->dom;
    $_instance->logRenderedChild('6RdVpNu', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
        </main>
        <footer class="bg-white2">
        <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('footer')->dom;
} elseif ($_instance->childHasBeenRendered('yO5Z9KI')) {
    $componentId = $_instance->getRenderedChildComponentId('yO5Z9KI');
    $componentTag = $_instance->getRenderedChildComponentTagName('yO5Z9KI');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yO5Z9KI');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $dom = $response->dom;
    $_instance->logRenderedChild('yO5Z9KI', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
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
	
	<?php echo \Livewire\Livewire::scripts(); ?>

	<?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
    </html><?php /**PATH /opt/lampp/htdocs/afq/resources/views/services/index.blade.php ENDPATH**/ ?>