<!doctype html>
<html lang="FR">
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
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale = 1.0"/>
<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('design/assets/uploads/2019/04/favicon.png')); ?>"/>
<link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap-select%401.13.9/dist/css/bootstrap-select.min.css">
<title>Formation</title>

<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/fonts5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/bootstrap.min5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/animate5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/flexslider5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet'  href='<?php echo e(asset('design/assets/css/dist/block-library/style.min5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/dist/block-library/theme.min5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet'  href='<?php echo e(asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/css/wp-video-popup5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/style5224.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href="<?php echo e(asset('design/assets/style5223.css')); ?>" type='text/css' media='all'/>
<link rel='stylesheet'  href='<?php echo e(asset('design/assets/print5223.css')); ?>' type='text/css' media='print' />
<link rel="stylesheet" href="<?php echo e(asset('design/parfait_integration/css/header_respon.css')); ?>">

<script type='text/javascript' src='<?php echo e(asset('design/assets/js/popper.min5223.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery/jquery4a5f.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery/jquery-migrate.min330a.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/video-popup/js/YouTubePopUp.jquery0d3f.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/video-popup/js/YouTubePopUp0d3f.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/bootstrap.min5223.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery.flexslider5223.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/custom5223.js')); ?>'></script>
<?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
<?php echo $__env->make('partials.site_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <header class="bg-white">
    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('head',['viewname' => 'formations'])->dom;
} elseif ($_instance->childHasBeenRendered('njMJN1O')) {
    $componentId = $_instance->getRenderedChildComponentId('njMJN1O');
    $componentTag = $_instance->getRenderedChildComponentTagName('njMJN1O');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('njMJN1O');
} else {
    $response = \Livewire\Livewire::mount('head',['viewname' => 'formations']);
    $dom = $response->dom;
    $_instance->logRenderedChild('njMJN1O', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
    </header> 
    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('liste-formations')->dom;
} elseif ($_instance->childHasBeenRendered('ZX8TTi9')) {
    $componentId = $_instance->getRenderedChildComponentId('ZX8TTi9');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZX8TTi9');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZX8TTi9');
} else {
    $response = \Livewire\Livewire::mount('liste-formations');
    $dom = $response->dom;
    $_instance->logRenderedChild('ZX8TTi9', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
    </main>
  <footer class="bg-white2">
    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('footer')->dom;
} elseif ($_instance->childHasBeenRendered('FDAIWTw')) {
    $componentId = $_instance->getRenderedChildComponentId('FDAIWTw');
    $componentTag = $_instance->getRenderedChildComponentTagName('FDAIWTw');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FDAIWTw');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $dom = $response->dom;
    $_instance->logRenderedChild('FDAIWTw', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
  </footer>
  <script src="../cdn.jsdelivr.net/npm/bootstrap-select%401.13.9/dist/js/bootstrap-select.min.js"></script>
  <script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/js/wp-video-popup5223.js')); ?>'></script>
  <script type='text/javascript' src='<?php echo e(asset('design/assets/js/priority-menu4963.js')); ?>'></script>
  <script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/sassy-social-share/public/js/sassy-social-share-publicabd4.js')); ?>'></script>
  <script type='text/javascript' src='<?php echo e(asset('design/assets/js/wp-embed.min5223.js')); ?>'></script>
<?php echo \Livewire\Livewire::scripts(); ?>

	<?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH /opt/lampp/htdocs/afq/resources/views/formations/index.blade.php ENDPATH**/ ?>