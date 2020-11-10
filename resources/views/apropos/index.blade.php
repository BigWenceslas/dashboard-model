<!doctype html>
<html lang="FR">

<head>
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/assets.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/typography.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/shortcodes/shortcodes.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/style2.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/vendors/revolution/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/vendors/revolution/css/settings.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/vendors/revolution/css/navigation.css')}}">
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script><meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale = 1.0" />
	<link rel="shortcut icon" type="image/png" href="{{asset('design/assets/uploads/2019/04/favicon.png')}}" />
    {{-- <link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap-select%401.13.9/dist/css/bootstrap-select.min.css"> --}}{{-- 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous"></script> --}}
	<title>Pourquoi Africkup</title>
	<!-- / Yoast SEO plugin. -->
	<link rel='stylesheet' href="{{asset('design/assets/css/fonts5223.css')}}" type='text/css' media='all' />
	
	<link rel='stylesheet' href="{{asset('design/assets/css/bootstrap.min5223.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/css/animate5223.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('design/assets/css/flexslider5223.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/css/dist/block-library/style.min5223.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/css/dist/block-library/theme.min5223.css')}}" type='text/css' media='all' />

	<link rel='stylesheet' href="{{asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/css/wp-video-popup5223.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/plugins/video-popup/css/vp-close-icon/close-button-icon0d3f.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/plugins/video-popup/css/YouTubePopUp0d3f.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/style5224.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('design/assets/print5223.css')}}" type='text/css' media='print' />
	
	<link rel='stylesheet' href='{{asset('design/assets/style5223.css')}}' type='text/css' media='all'/>

	<link rel='stylesheet' href="{{asset('design/assets/plugins/sassy-social-share/public/css/sassy-social-share-publicabd4.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/plugins/sassy-social-share/admin/css/sassy-social-share-svgabd4.css')}}" type='text/css' media='all' />
	 @livewireStyles
	 <style>
		 .filterDiv {
				display: none;
			}
			.show {
				display: block;
			}
	 </style>
	</head>

	<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
		<header class="bg-white"> @livewire('head',['viewname' => 'a-propos']) </header>
		<section class=" blog fg-features"> @livewire('liste-entreprises') </section>

		<footer class="bg-white2">
			@livewire('footer')
		</footer>
		<script type='text/javascript' src='{{asset('design/assets/js/priority-menu4963.js')}}'></script>
		<script type='text/javascript' src="{{asset('design/assets/js/popper.min5223.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
		<script type='text/javascript' src="{{asset('design/assets/plugins/video-popup/js/YouTubePopUp.jquery0d3f.js')}}"></script>
		<script type='text/javascript' src="{{asset('design/assets/plugins/video-popup/js/YouTubePopUp0d3f.js')}}"></script>
		<script type='text/javascript' src="{{asset('design/assets/js/bootstrap.min5223.js')}}"></script>
		<script type='text/javascript' src="{{asset('design/assets/js/jquery.flexslider5223.js')}}"></script>
		<script type='text/javascript' src="{{asset('design/assets/js/custom5223.js')}}"> </script>
		@livewireScripts
    	@stack('scripts')
	</body>
</html>