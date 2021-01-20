<!doctype html>
<html lang="FR">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- REVOLUTION SLIDER END -->	
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
    <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale = 1.0"/> 
    <link rel="shortcut icon" type="image/png" href=" "/>
    <link rel="shortcut icon" type="image/png" href="{{asset('design/assets/uploads/2019/04/favicon.png')}}"/> 
    <title>Service</title>
	<link rel='stylesheet' href='{{asset('design/assets/css/fonts5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/css/bootstrap.min5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/css/animate5223.css ')}}' type='text/css' media='all'/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css" integrity="sha512-c7jR/kCnu09ZrAKsWXsI/x9HCO9kkpHw4Ftqhofqs+I2hNxalK5RGwo/IAhW3iqCHIw55wBSSCFlm8JP0sw2Zw==" crossorigin="anonymous" />
	<link rel='stylesheet' href='{{asset('design/assets/css/dist/block-library/style.min5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/css/dist/block-library/theme.min5223.css ')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/style5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/print5223.css')}}' type='text/css' media='print'/>
	<link rel="stylesheet" href="{{asset('design/parfait_integration/css/header_respon.css')}}">

    <script type='text/javascript' src='{{asset('design/assets/js/popper.min5223.js ')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/jquery/jquery4a5f.js ')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/bootstrap.min5223.js ')}}'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js" integrity="sha512-BmoWLYENsSaAfQfHszJM7cLiy9Ml4I0n1YtBQKfx8PaYpZ3SoTXfj3YiDNn0GAdveOCNbK8WqQQYaSb0CMjTHQ==" crossorigin="anonymous"></script>
	<script type='text/javascript' src='{{asset('design/assets/js/custom5223.js ')}}'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
	@livewireStyles
    </head>
    <body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
    @include('partials.site_menu')
    <header class="bg-white">
        @livewire('head',['viewname' => 'services'])
        </header> 
        @livewire('liste-services')
        </main>
        <footer class="bg-white2">
        @livewire('footer')
        </footer>
	<script type='text/javascript' src='{{asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/js/wp-video-popup5223.js ')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/priority-menu4963.js ')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/plugins/sassy-social-share/public/js/sassy-social-share-publicabd4.js ')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/wp-embed.min5223.js ')}}'></script>
    @toastr_js
    @toastr_render
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
	<script type='text/javascript' src='{{asset('design/parfait_integration/js/commentaires.js ')}}'></script>
	@livewireScripts
	@stack('scripts')
    </body>
    </html>