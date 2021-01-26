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
    <link rel="shortcut icon" type="image/png" href=" "/>
    <link rel="shortcut icon" type="image/png" href="{{asset('design/assets/uploads/2019/04/favicon.png')}}"/>
	<title>Details {{$fond->titre}}</title>
	<!-- / Yoast SEO plugin. -->
	<link rel='dns-prefetch' href='index.html' />
	<link rel='stylesheet' href='{{asset('design/assets/css/fonts5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet' href='{{asset('design/assets/css/animate5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet' href='{{asset('design/assets/css/flexslider5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet'  href='{{asset('design/assets/css/dist/block-library/style.min5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet' href='{{asset('design/assets/css/dist/block-library/theme.min5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet'  href='{{asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/css/wp-video-popup5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet'  href='{{asset('design/assets/plugins/video-popup/css/vp-close-icon/close-button-icon0d3f.css')}}' type='text/css' media='all' />
	
	<link rel='stylesheet' href="{{asset('design/assets/style5224.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/plugins/video-popup/css/YouTubePopUp0d3f.css')}}' type='text/css' media='all' />
	<link rel='stylesheet' href='{{asset('design/assets/style5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet'  href='{{asset('design/assets/print5223.css')}}' type='text/css' media='print' />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('design/parfait_integration/css/header_respon.css')}}">
	@livewireStyles
	<link rel='stylesheet'href='{{asset('design/assets/css/evaluation.css')}}' type='text/css' media='all' />
</head>
<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
	@include('partials.site_menu')
	<header class="bg-white">
      @livewire('head',['viewname' => 'vue'])
    </header> 
    <div class="page-content bg-white">
      <div class="breadcrumb-row mb-5">
			<div class="container">
				<ul class="list-inline">
					<li><a href="/">Acceuil</a></li>
					<li>Fond d'investissement</li>
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
                        <div class="col-lg-12 col-md-12 col-sm-12">
                         
							<div class="row">
								<div class="col-md-6 col-lg-6 col-sm-6 m-b30">
									<div class="cours-bx">
										<div class="action-box">
											<div class="video-responsive"><img src="{{asset('storage/'.$fond->image)}}" alt=""></div>
										</div>
										<div class="info-bx text-center">
											<h5><a href="#">{{$fond->titre}}</a></h5>
											<span>{{$fond->descriptif}}</span>
										</div>
									</div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-sm-6 m-b30">
									<p>{!! $fond->contenu !!}</p>
                                </div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		<!-- contact area END -->
    </div>
    </main>
  <footer class="bg-white2">
    @livewire('footer')
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script type='text/javascript' src='{{asset('design/assets/js/popper.min5223.js')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/custom5223.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/priority-menu4963.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/wp-embed.min5223.js')}}'></script>
@livewireScripts
@stack('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
"use strict";
	$(document).ready(function() {
	});
</script>
</body>
</html>