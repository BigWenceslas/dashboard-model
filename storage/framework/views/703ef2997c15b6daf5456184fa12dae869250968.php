<!doctype html>
<html lang="FR">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/style4.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/navigation.css">
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale = 1.0" /> 
    <link rel="shortcut icon" type="image/png" href=" "/>
    <link rel="shortcut icon" type="image/png" href="assets/2019/04/favicon.png"/>
 <title>Contact</title>
<!-- / Yoast SEO plugin. -->
<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('design/assets/uploads/2019/04/favicon.png')); ?>" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/fonts5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/bootstrap.min5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/animate5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/flexslider5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet'  href='<?php echo e(asset('design/assets/css/dist/block-library/style.min5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/dist/block-library/theme.min5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/style5224.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href="<?php echo e(asset('design/assets/style5223.css')); ?>" type='text/css' media='all'/>
<link rel='stylesheet'  href='<?php echo e(asset('design/assets/print5223.css')); ?>' type='text/css' media='print' />
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
    $dom = \Livewire\Livewire::mount('head',['viewname' => 'contact-us'])->dom;
} elseif ($_instance->childHasBeenRendered('LGMqhuQ')) {
    $componentId = $_instance->getRenderedChildComponentId('LGMqhuQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('LGMqhuQ');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LGMqhuQ');
} else {
    $response = \Livewire\Livewire::mount('head',['viewname' => 'contact-us']);
    $dom = $response->dom;
    $_instance->logRenderedChild('LGMqhuQ', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
</header>
    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-4 mb-md-0">
                <h2>Laisse nous un message et nous allons te recontacter</h2>
            </div>
            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-7 ml-auto">
                <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('contact-form')->dom;
} elseif ($_instance->childHasBeenRendered('Sn8ThWJ')) {
    $componentId = $_instance->getRenderedChildComponentId('Sn8ThWJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('Sn8ThWJ');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Sn8ThWJ');
} else {
    $response = \Livewire\Livewire::mount('contact-form');
    $dom = $response->dom;
    $_instance->logRenderedChild('Sn8ThWJ', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
            </div>
        </div>
    </div>
    <footer class="bg-white2">
        <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('footer')->dom;
} elseif ($_instance->childHasBeenRendered('Zl1df2O')) {
    $componentId = $_instance->getRenderedChildComponentId('Zl1df2O');
    $componentTag = $_instance->getRenderedChildComponentTagName('Zl1df2O');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Zl1df2O');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $dom = $response->dom;
    $_instance->logRenderedChild('Zl1df2O', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
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

</html><?php /**PATH C:\wamp64\www\dashboard-model\resources\views/contactus/index.blade.php ENDPATH**/ ?>