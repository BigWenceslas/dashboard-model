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
	<title>Details {{$service->nom}}2</title>
	<link rel="canonical" href="index.html" />
	<!-- / Yoast SEO plugin. -->
	<link rel='dns-prefetch' href='index.html' />
	<link rel='stylesheet' href='{{asset('design/assets/css/fonts5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet' href='{{asset('design/assets/css/animate5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet' href='{{asset('design/assets/css/flexslider5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet'  href='{{asset('design/assets/css/dist/block-library/style.min5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet' href='{{asset('design/assets/css/dist/block-library/theme.min5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet'  href='{{asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/css/wp-video-popup5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet'  href='{{asset('design/assets/plugins/video-popup/css/vp-close-icon/close-button-icon0d3f.css')}}' type='text/css' media='all' />
	<link rel='stylesheet' href='{{asset('design/assets/plugins/video-popup/css/YouTubePopUp0d3f.css')}}' type='text/css' media='all' />
	<link rel='stylesheet' href='{{asset('design/assets/style5224.css')}}' type='text/css' media='all' />
	<link rel='stylesheet'  href='{{asset('design/assets/print5223.css')}}' type='text/css' media='print' />
	<link rel='stylesheet' href='{{asset('design/assets/plugins/sassy-social-share/public/css/sassy-social-share-publicabd4.css')}}' type='text/css' media='all' />
	<link rel='stylesheet'  href='{{asset('design/assets/plugins/sassy-social-share/admin/css/sassy-social-share-svgabd4.css')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='responsive-css'  href='{{asset('design/assets/css/responsive6619.css')}}' type='text/css' media='all' />
	<link rel='stylesheet'href='{{asset('design/assets/css/fret.css')}}' type='text/css' media='all' />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	@livewireStyles
	<style>
			.form-box {
				padding-top: 40px;
				padding-bottom: 40px;
				
				background: #007bff; /* Old browsers */
				background: -moz-linear-gradient(top,  #fff 0%, #007bff 51%, #fff 100%); /* FF3.6-15 */
				background: -webkit-linear-gradient(top,  #fff 0%,#007bff 51%,#fff 100%); /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to bottom,  #fff 0%,#007bff 51%,#fff 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ea5804', endColorstr='#ea5804',GradientType=0 ); /* IE6-9 */
			}

			.form-wizard {
				padding: 25px; 
				background: #fff;
				-moz-border-radius: 4px; 
				-webkit-border-radius: 4px; 
				border-radius: 4px; 
				box-shadow: 0px 0px 6px 3px #777;
				font-family: 'Roboto', sans-serif;
				font-size: 16px;
				font-weight: 300;
				color: #888;
				line-height: 30px;
				text-align: center;
			}
				
			.form-wizard strong { font-weight: 500; }

			.form-wizard a, .form-wizard a:hover, .form-wizard a:focus {
				color: #007bff;
				text-decoration: none;
				-o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
			}

			.form-wizard h1, .form-wizard h2 {
				margin-top: 10px;
				font-size: 38px;
				font-weight: 100;
				color: #555;
				line-height: 50px;
			}

			.form-wizard h3 {
				font-size: 25px;
				font-weight: 300;
				color: #007bff;
				line-height: 30px;
				margin-top: 0; 
				margin-bottom: 5px; 
				text-transform: uppercase; 
			}

			.form-wizard h4 {
				float:left;
				font-size: 20px;
				font-weight: 300;
				color: #007bff;
				line-height: 26px;
				width:100%;
			}
			.form-wizard h4  span{
				float:right;
				font-size: 18px;
				font-weight: 300;
				color: #555;
				line-height: 26px;
			}

			.form-wizard table tr th{font-weight:normal;}

			.form-wizard img { max-width: 100%; }

			.form-wizard ::-moz-selection { background: #007bff; color: #fff; text-shadow: none; }
			.form-wizard ::selection { background: #007bff; color: #fff; text-shadow: none; }


			.form-control {
				height: 44px;
				width:100%;
				margin: 0;
				padding: 0 20px;
				vertical-align: middle;
				background: #fff;
				border: 1px solid #ddd;
				font-family: 'Roboto', sans-serif;
				font-size: 16px;
				font-weight: 300;
				line-height: 44px;
				color: #888;
				-moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
				-moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
				-o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
			}
			.checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"], .radio input[type="radio"], .radio-inline input[type="radio"] {
				position: absolute;
				margin-top: 9px;
				margin-left: -20px;
			}

			.form-control option:hover, .form-control option:checked  {
				box-shadow: 0 0 10px 100px #007bff inset;
			}

			.form-control:focus {
				outline: 0;
				background: #fff;
				border: 1px solid #ccc;
				-moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
			}

			.form-control:-moz-placeholder { color: #888; }
			.form-control:-ms-input-placeholder { color: #888; }
			.form-control::-webkit-input-placeholder { color: #888; }

			.form-wizard label { font-weight: 300; }
			.form-wizard label span { color:#007bff; }


			.form-wizard .btn {
				min-width: 105px;
				height: 40px;
				margin: 0;
				padding: 0 20px;
				vertical-align: middle;
				border: 0;
				font-family: 'Roboto', sans-serif;
				font-size: 16px;
				font-weight: 300;
				line-height: 40px;
				color: #fff;
				-moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
				text-shadow: none;
				-moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
				-o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
			}

			.form-wizard .btn:hover {
				background:#f34727; 
				color: #fff; 
				}
			.form-wizard .btn:active { 
				outline: 0; 
				background:#f34727; 
				color: #fff; 
				-moz-box-shadow: none; 
				-webkit-box-shadow: none; 
				box-shadow: none; 
				}
			.form-wizard .btn:focus,
			.form-wizard .btn:active:focus,
			.form-wizard .btn.active:focus { 
				outline: 0; 
				background:#f34727; 
				color: #fff; 
			}

			.form-wizard .btn.btn-next,
			.form-wizard .btn.btn-next:focus,
			.form-wizard .btn.btn-next:active:focus, 
			.form-wizard .btn.btn-next.active:focus { 
			background: #007bff; 
			}

			.form-wizard .btn.btn-submit,
			.form-wizard .btn.btn-submit:focus,
			.form-wizard .btn.btn-submit:active:focus, 
			.form-wizard .btn.btn-submit.active:focus { 
			background: #007bff; 
			}

			.form-wizard .btn.btn-previous,
			.form-wizard .btn.btn-previous:focus,
			.form-wizard .btn.btn-previous:active:focus, 
			.form-wizard .btn.btn-previous.active:focus { 
			background: #bbb;
			}

			.form-wizard .success h3{
				color: #4F8A10;
				text-align: center;
				margin: 20px auto !important;
			}
			.form-wizard .success .success-icon {
				color: #4F8A10;
				font-size: 100px;
				border: 5px solid #4F8A10;
				border-radius: 100px;
				text-align: center !important;
				width: 110px;
				margin: 25px auto;
			}
			.form-wizard .progress-bar {
				background-color: #007bff;
			}

			.form-wizard-steps{ 
				margin:auto; 
				overflow: hidden; 
				position: relative; 
				margin-top: 20px;
			}
			.form-wizard-step{
				padding-top:10px !important;
				border:2px solid #fff;
				background:#ccc;
				-ms-transform: skewX(-30deg); /* IE 9 */
				-webkit-transform: skewX(-30deg); /* Safari */
				transform: skewX(-30deg); /* Standard syntax */
			}
			.form-wizard-step.active{
				background:#007bff;
			}
			.form-wizard-step.activated{
				background:#007bff;
			}
			.form-wizard-progress { 
				position: absolute; 
				top: 36px;
				left: 0; 
				width: 100%; 
				height: 0px; 
				background: #007bff;
			}
			.form-wizard-progress-line { 
				position: absolute; 
				top: 0; 
				left: 0; 
				height: 0px; 
				background: #007bff; 
			}

			.form-wizard-tolal-steps-3 .form-wizard-step { 
				position: relative;
				float: left; 
				width: 33.33%; 
				padding: 0 5px; 
			}
			.form-wizard-tolal-steps-4 .form-wizard-step { 
				position: relative; 
				float: left; 
				width: 25%; 
				padding: 0 5px; 
			}
			.form-wizard-tolal-steps-5 .form-wizard-step { 
				position: relative;
				float: left;
				width: 20%;
				padding: 0 5px;
			}

			.form-wizard-step-icon {
				display: inline-block;
				width: 40px; 
				height: 40px; 
				margin-top: 4px; 
				background: #ddd;
				font-size: 16px; 
				color: #777; 
				line-height: 40px;
				-moz-border-radius: 50%; 
				-webkit-border-radius: 50%; 
				border-radius: 50%;
				-ms-transform: skewX(30deg); /* IE 9 */
				-webkit-transform: skewX(30deg); /* Safari */
				transform: skewX(30deg); /* Standard syntax */
			}
			.form-wizard-step.activated .form-wizard-step-icon {
				background: #007bff; 
				border: 1px solid #fff; 
				color: #fff; 
				line-height: 38px;
			}
			.form-wizard-step.active .form-wizard-step-icon {
				background: #fff; 
				border: 1px solid #fff; 
				color: #007bff; 
				line-height: 38px;
			}

			.form-wizard-step p { 
				color: #fff;
				-ms-transform: skewX(30deg); /* IE 9 */
				-webkit-transform: skewX(30deg); /* Safari */
				transform: skewX(30deg); /* Standard syntax */
			}
			.form-wizard-step.activated p { color: #fff; }
			.form-wizard-step.active p { color: #fff; }

			.form-wizard fieldset { 
				display: none; 
				text-align: left; 
				border:0px !important
			}

			.form-wizard-buttons { text-align: right; }

			.form-wizard .input-error { border-color: #007bff;}

			/** image uploader **/
			.image-upload a[data-action] {
			cursor: pointer;
			color: #555;
			font-size: 18px;
			line-height: 24px;
			transition: color 0.2s;
			}
			.image-upload a[data-action] i {
			width: 1.25em;
			text-align: center;
			}
			.image-upload a[data-action]:hover {
			color: #007bff;
			}
			.image-upload a[data-action].disabled {
			opacity: 0.35;
			cursor: default;
			}
			.image-upload a[data-action].disabled:hover {
			color: #555;
			}
			.settings_wrap{
				margin-top:20px;
			}
			.image_picker .settings_wrap {
			overflow: hidden;
			position: relative;
			}
			.image_picker .settings_wrap .drop_target,
			.image_picker .settings_wrap .settings_actions {
			float: left;
			}
			.image_picker .settings_wrap .drop_target {
			margin-right: 18px;
			}
			.image_picker .settings_wrap .settings_actions {
				float: left;
				margin-top: 100px;
				margin-left: 20px;
			}
			.settings_actions.vertical a {
			display: block;
			}
			.drop_target {
				position: relative;
				cursor: pointer;
				transition: all 0.2s;
				width: 250px;
				height: 250px;
				background: #f2f2f2;
				border-radius: 100%;
				margin: 0 auto 25px auto;
				overflow: hidden;
				border: 8px solid #E0E0E0;
			}
			.drop_target input[type="file"] {
			visibility: hidden;
			}
			.drop_target::before {
				content: 'Drop Hear';
				font-family: FontAwesome;
				position: absolute;
				display: block;
				width: 100%;
				line-height: 220px;
				text-align: center;
				font-size: 40px;
				color: rgba(0, 0, 0, 0.3);
				transition: color 0.2s;
			}
			.drop_target:hover,
			.drop_target.dropping {
			background: #f80;
			border-top-color: #cc6d00;
			}
			.drop_target:hover:before,
			.drop_target.dropping:before {
			color: rgba(0, 0, 0, 0.6);
			}
			.drop_target .image_preview {
			width: 100%;
			height: 100%;
			background: no-repeat center;
			background-size: contain;
			position: relative;
			z-index: 2;
			}
	</style>
</head>
<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
    <header class="bg-white">
      @livewire('head',['viewname' => 'vue'])
    </header> 
    <div class="page-content bg-white">
      <div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="/">Acceuil</a></li>
					<li> @if (isset($formation))
              Nos formations
          @else
              Nos services
          @endif </li>
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
                        
						<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							{{-- <div class="widget courses-search-bx placeani">
								<div class="form-group">
									<div class="input-group">
										<label>Recherche... </label>
										<input name="name" type="text" required class="form-control">
									</div>
								</div>
							</div> --}}
							<div class="widget widget_archive">
                                <h5 class="widget-title style-1">Nos Services</h5>
                                <ul>
                                    @foreach ($categories_services as $item)
                                    @if ($loop->first)
                                    <li class="active"><a href="{{route('services.index',['locale' => App::getlocale()])}}#category--{{ $item->id }}">{{$item->nom}}</a></li>
                                    @else
                                        <li><a href="{{route('services.index',['locale' => App::getlocale()])}}#category--{{ $item->id }}">{{$item->nom}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
							{{-- <div class="widget">
								<a href="#"><img src="assets/images/cam.jpg" alt=""/></a>
							</div> --}}
						</div>
                        <div class="col-lg-9 col-md-8 col-sm-12">
                         
							<div class="row">
								<div class="col-md-6 col-lg-6 col-sm-6 m-b30">
									<div class="cours-bx">
										<div class="action-box">
											<div class="video-responsive"><img src="{{asset('storage/'.$service->image_service)}}" alt=""></div>
										</div>
										<div class="info-bx text-center">
											<h5><a href="#">{{$service->nom}}</a></h5>
											<span>{{$service->tag}}</span>
										</div>
										<div class="cours-more-info">
											<div class="review">
												<span>3 Review</span>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
											<div class="price">
												<br/>
												<h5> @if ($service->prix == 0)
                                                Gratuit
                                                @else
                                                {{$service->prix}} {{$devise->valeur}}
                                                @endif</h5>
											</div>
										</div>
									</div>
                                </div>
								
								<div class="col-md-6 col-lg-6 col-sm-6 m-b30">
									<p>

                     Estimez la valeur de votre entreprise et managez vos risques grace a quelques questions simples . vous recevez ensuite(48h) votre rapport d'evaluation complet.<br/>
                     
                     Utilisez ce rapport pour indiquer la valeur de votre entreprise pour augmenter vos actions, faire des ameliorations, informer vos potentiels investisseurs.<br/>
                    </p>
								</div>
							</div>
							
								@include('livewire.evaluation-service')
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
"use strict";
	function scroll_to_class(element_class, removed_height) {
		var scroll_to = $(element_class).offset().top - removed_height;
		if($(window).scrollTop() != scroll_to) {
			$('.form-wizard').stop().animate({scrollTop: scroll_to}, 0);
		}
	}

	function bar_progress(progress_line_object, direction) {
		var number_of_steps = progress_line_object.data('number-of-steps');
		var now_value = progress_line_object.data('now-value');
		var new_value = 0;
		if(direction == 'right') {
			new_value = now_value + ( 100 / number_of_steps );
		}
		else if(direction == 'left') {
			new_value = now_value - ( 100 / number_of_steps );
		}
		progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
	}

	$(document).ready(function() {
		$('.form-wizard fieldset:first').fadeIn('slow');
		
		$('.form-wizard .required').on('focus', function() {
			$(this).removeClass('input-error');
		});
		
		// next step
		$('.form-wizard .btn-next').on('click', function() {
			var parent_fieldset = $(this).parents('fieldset');
			var next_step = true;
			// navigation steps / progress steps
			var current_active_step = $(this).parents('.form-wizard').find('.form-wizard-step.active');
			var progress_line = $(this).parents('.form-wizard').find('.form-wizard-progress-line');
			
			// fields validation
			parent_fieldset.find('.required').each(function() {
				if( $(this).val() == "" ) {
					$(this).addClass('input-error');
					next_step = false;
				}
				else {
					$(this).removeClass('input-error');
				}
			});
			// fields validation
			
			if( next_step ) {
				parent_fieldset.fadeOut(400, function() {
					// change icons
					current_active_step.removeClass('active').addClass('activated').next().addClass('active');
					// progress bar
					bar_progress(progress_line, 'right');
					// show next step
					$(this).next().fadeIn();
					// scroll window to beginning of the form
					scroll_to_class( $('.form-wizard'), 20 );
				});
			}
			
		});
		
		// previous step
		$('.form-wizard .btn-previous').on('click', function() {
			// navigation steps / progress steps
			var current_active_step = $(this).parents('.form-wizard').find('.form-wizard-step.active');
			var progress_line = $(this).parents('.form-wizard').find('.form-wizard-progress-line');
			
			$(this).parents('fieldset').fadeOut(400, function() {
				// change icons
				current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
				// progress bar
				bar_progress(progress_line, 'left');
				// show previous step
				$(this).prev().fadeIn();
				// scroll window to beginning of the form
				scroll_to_class( $('.form-wizard'), 20 );
			});
		});
		
		// submit
		$('.form-wizard').on('submit', function(e) {
			// fields validation
			$(this).find('.required').each(function() {
				if( $(this).val() == "" ) {
					e.preventDefault();
					$(this).addClass('input-error');
				}
				else {
					$(this).removeClass('input-error');
				}
			});
			// fields validation
			
		});
	});

	$remover.on('click', function() {
		$dropimg.css('background-image', '');
		$droptarget.removeClass('dropped');
		$remover.addClass('disabled');
		$('.image_title input').val('');
	});

	$('.image_title input').blur(function() {
		if ($(this).val() != '') {
			$droptarget.removeClass('dropped');
		}
	});

</script>  
</body>
</html>