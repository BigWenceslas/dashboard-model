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
    <link rel="shortcut icon" type="image/png" href=" "/>
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('design/assets/uploads/2019/04/favicon.png')); ?>"/>
  
    <link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap-select%401.13.9/dist/css/bootstrap-select.min.css">
    <title><?php echo $__env->yieldContent('title'); ?></title>
<!-- / Yoast SEO plugin. -->
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/fonts5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/bootstrap.min5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/animate5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/flexslider5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet'  href='<?php echo e(asset('design/assets/css/dist/block-library/style.min5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/dist/block-library/theme.min5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet'  href='<?php echo e(asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/css/wp-video-popup5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet'  href='<?php echo e(asset('design/assets/plugins/video-popup/css/vp-close-icon/close-button-icon0d3f.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/plugins/video-popup/css/YouTubePopUp0d3f.css')); ?>' type='text/css' media='all' />

<link rel='stylesheet' href="<?php echo e(asset('design/assets/style5224.css')); ?>" type='text/css' media='all'/>
<link rel='stylesheet' href='<?php echo e(asset('design/assets/style5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet'  href='<?php echo e(asset('design/assets/print5223.css')); ?>' type='text/css' media='print'/>
<link rel='stylesheet'href='<?php echo e(asset('design/assets/css/fret.css')); ?>' type='text/css' media='all' />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="<?php echo e(asset('design/parfait_integration/css/header_respon.css')); ?>">
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/popper.min5223.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery/jquery4a5f.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery/jquery-migrate.min330a.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/video-popup/js/YouTubePopUp.jquery0d3f.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/video-popup/js/YouTubePopUp0d3f.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/aassets/js/bootstrap.min5223.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery.flexslider5223.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/custom5223.js')); ?>'></script>
<?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
  <?php echo $__env->make('partials.site_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
  <header class="bg-white">
      <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('head',['viewname' => 'vue'])->dom;
} elseif ($_instance->childHasBeenRendered('1IskO8N')) {
    $componentId = $_instance->getRenderedChildComponentId('1IskO8N');
    $componentTag = $_instance->getRenderedChildComponentTagName('1IskO8N');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1IskO8N');
} else {
    $response = \Livewire\Livewire::mount('head',['viewname' => 'vue']);
    $dom = $response->dom;
    $_instance->logRenderedChild('1IskO8N', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
    </header> 
    <div class="page-content bg-white">
      <div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="/">Acceuil</a></li>
					<li> <?php if(isset($formation)): ?>
              Nos formations
          <?php else: ?>
              Nos services
          <?php endif; ?> </li>
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
                        <?php echo $__env->yieldContent('left-menu'); ?>
                        <?php echo $__env->yieldContent('content'); ?>
					</div>
				</div>
            </div>
        </div>
		<!-- contact area END -->
    </div>
    </main>
  <footer class="bg-white2">
    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('footer')->dom;
} elseif ($_instance->childHasBeenRendered('ypyGnBv')) {
    $componentId = $_instance->getRenderedChildComponentId('ypyGnBv');
    $componentTag = $_instance->getRenderedChildComponentTagName('ypyGnBv');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ypyGnBv');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $dom = $response->dom;
    $_instance->logRenderedChild('ypyGnBv', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
  </footer>
<script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/js/wp-video-popup5223.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/priority-menu4963.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/sassy-social-share/public/js/sassy-social-share-publicabd4.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/wp-embed.min5223.js')); ?>'></script>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH /opt/lampp/htdocs/afq/resources/views/layout/detailsTemplates.blade.php ENDPATH**/ ?>