<!doctype html>
<html lang="FR">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/assets.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/typography.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/shortcodes/shortcodes.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/style2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('design/assets/vendors/revolution/css/layers.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('design/assets/vendors/revolution/css/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('design/assets/vendors/revolution/css/navigation.css')}}">
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale = 1.0"/>
<link rel="shortcut icon" type="image/png" href="{{asset('design/assets/uploads/2019/04/favicon.png')}}"/>
<link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap-select%401.13.9/dist/css/bootstrap-select.min.css">
<title>Formation</title>

<link rel='stylesheet' href='{{asset('design/assets/css/fonts5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/css/bootstrap.min5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/css/animate5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/css/flexslider5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet'  href='{{asset('design/assets/css/dist/block-library/style.min5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/css/dist/block-library/theme.min5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet'  href='{{asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/css/wp-video-popup5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/style5224.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('design/assets/style5223.css')}}" type='text/css' media='all'/>
<link rel='stylesheet'  href='{{asset('design/assets/print5223.css')}}' type='text/css' media='print' />
<link rel="stylesheet" href="{{asset('design/parfait_integration/css/header_respon.css')}}">

<script type='text/javascript' src='{{asset('design/assets/js/popper.min5223.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/jquery/jquery4a5f.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/jquery/jquery-migrate.min330a.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/plugins/video-popup/js/YouTubePopUp.jquery0d3f.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/plugins/video-popup/js/YouTubePopUp0d3f.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/bootstrap.min5223.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/jquery.flexslider5223.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/custom5223.js')}}'></script>
@livewireStyles
</head>
<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
@include('partials.site_menu')
 <header class="bg-white">
    @livewire('head',['viewname' => 'formations'])
    </header> 
    @livewire('liste-formations')
    </main>
  <footer class="bg-white2">
    @livewire('footer')
  </footer>
  <script src="../cdn.jsdelivr.net/npm/bootstrap-select%401.13.9/dist/js/bootstrap-select.min.js"></script>
  <script type='text/javascript' src='{{asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/js/wp-video-popup5223.js')}}'></script>
  <script type='text/javascript' src='{{asset('design/assets/js/priority-menu4963.js')}}'></script>
  <script type='text/javascript' src='{{asset('design/assets/plugins/sassy-social-share/public/js/sassy-social-share-publicabd4.js')}}'></script>
  <script type='text/javascript' src='{{asset('design/assets/js/wp-embed.min5223.js')}}'></script>
@livewireScripts
	@stack('scripts')
</body>

</html>