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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	@livewireStyles
	<link rel='stylesheet'href='{{asset('design/assets/css/evaluation.css')}}' type='text/css' media='all' />
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
							@guest
							<center>
								<button style="background-color: #007bff" class="btn btn-primary mt-5"><a href="{{route('service_login',['locale' => App::getlocale(),'name' => $service->slug])}}">Evaluer votre Entreprise</a></button>
							</center>
							@endguest
								</div>
							</div>
							@auth
								@include('livewire.evaluation-service')
							@endauth
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

	$('.loginSubmit').on('click', function(event){
        event.preventDefault();
        
        $('.loginSubmit').html("En cours...");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('#contactForm input[name="_token"]').val()
            }
        });
        var email = $("#contactForm input[name='email']").val();
        var password = $("#contactForm input[name='password']").val();

        $.ajax({
            url: "{{ route('loginFront',['locale' => App::getlocale()]) }}",
            type: 'POST',
            data: {
                email: email,
                password: password
            },
            success: function(data) {
                console.log(data);
                if (data.success == 1) {
                }else{                    
                }
            }
        });

    }); 

</script>
</body>
</html>