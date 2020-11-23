<!doctype html>
<html lang="FR">
<head>
<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/style4.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/navigation.css">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale = 1.0"/>
<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('design/assets/uploads/2019/04/favicon.png')); ?>"/>
<title>Fond d'investissement</title>

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
<link rel="stylesheet" href="<?php echo e(asset('design/parfait_integration/css/fond_investissement.css')); ?>">

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
<body>
<?php echo $__env->make('partials.site_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <header class="bg-white">
        <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('head',['viewname' => 'fond-investissement'])->dom;
} elseif ($_instance->childHasBeenRendered('ZvTCYEf')) {
    $componentId = $_instance->getRenderedChildComponentId('ZvTCYEf');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZvTCYEf');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZvTCYEf');
} else {
    $response = \Livewire\Livewire::mount('head',['viewname' => 'fond-investissement']);
    $dom = $response->dom;
    $_instance->logRenderedChild('ZvTCYEf', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
    </header> 
     <div class="container_card">
        <div class="card_fond">
            <div class="container_photo_fond">
                <img src="../../public/images/Guy_computer.png" alt="">
            </div>
            <h2 class="titre_fond">Start a Company</h2>
            <p class="paragraphe_fond">Prepare for investment and growth with easy incorporate and legal tools</p>
            <div class="container_bouton_learn">
                <a href="#" class="learn_button bouton_africkup anul_lien">Learn more</a>
            </div>
        </div>
        <div class="card_fond">
            <div class="container_photo_fond">
                <img src="../../public/images/Guy_computer.png" alt="">
            </div>
            <h2 class="titre_fond">Start a Company</h2>
            <p class="paragraphe_fond">Prepare for investment and growth with easy incorporate and legal tools</p>
            <div class="container_bouton_learn">
                <a href="#" class="learn_button bouton_africkup anul_lien">Learn more</a>
            </div>
        </div>
        <div class="card_fond">
            <div class="container_photo_fond">
                <img src="../../public/images/Guy_computer.png" alt="">
            </div>
            <h2 class="titre_fond">Start a Company</h2>
            <p class="paragraphe_fond">Prepare for investment and growth with easy incorporate and legal tools</p>
            <div class="container_bouton_learn">
                <a href="#" class="learn_button bouton_africkup anul_lien">Learn more</a>
            </div>
        </div>
    </div>
  <footer class="bg-white2">
    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('footer')->dom;
} elseif ($_instance->childHasBeenRendered('UiVCYuf')) {
    $componentId = $_instance->getRenderedChildComponentId('UiVCYuf');
    $componentTag = $_instance->getRenderedChildComponentTagName('UiVCYuf');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UiVCYuf');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $dom = $response->dom;
    $_instance->logRenderedChild('UiVCYuf', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
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

</html><?php /**PATH /opt/lampp/htdocs/afq/resources/views/fond/index.blade.php ENDPATH**/ ?>