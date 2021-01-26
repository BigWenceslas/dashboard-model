<!doctype html>
<html lang="FR">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/stylea.css')}}">
	<!-- Start of HubSpot Embed Code -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
	<!-- End of HubSpot Embed Code -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="{{asset('design/assets/uploads/2019/04/favicon.png')}}"/>
	<title>Africkup</title>
	<link rel='stylesheet' href="{{asset('design/assets/vendors/fontawesome/css/font-awesome.min.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('design/assets/css/mdb.css')}}" type='text/css' media='all'/>


	<link rel='stylesheet' href='{{asset('design/assets/css/fonts5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/css/bootstrap.min5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/css/animate5223.css')}}' type='text/css' media='all'/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css" integrity="sha512-c7jR/kCnu09ZrAKsWXsI/x9HCO9kkpHw4Ftqhofqs+I2hNxalK5RGwo/IAhW3iqCHIw55wBSSCFlm8JP0sw2Zw==" crossorigin="anonymous" />
	<link rel='stylesheet' href='{{asset('design/assets/css/dist/block-library/style.min5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/css/dist/block-library/theme.min5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/css/wp-video-popup5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/plugins/video-popup/css/vp-close-icon/close-button-icon0d3f.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/plugins/video-popup/css/YouTubePopUp0d3f.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/style5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/print5223.css')}}' type='text/css' media='print'/>
	<link rel='stylesheet' href='{{asset('design/assets/plugins/sassy-social-share/public/css/sassy-social-share-publicabd4.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/plugins/sassy-social-share/admin/css/sassy-social-share-svgabd4.css ')}}' type='text/css' media='all'/>
	{{-- <link rel='stylesheet' id='responsive-css' href='{{asset(' design/assets/css/responsive6619.css ')}}' type='text/css' media='all'/> --}}
	<link rel="stylesheet" href="{{asset('design/parfait_integration/css/header_respon.css')}}">
	<link rel="stylesheet" href="{{asset('design/parfait_integration/css/avis.css')}}">
	<script type='text/javascript' src='{{asset('design/assets/js/popper.min5223.js')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/jquery/jquery4a5f.js')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/bootstrap.min5223.js')}}'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js" integrity="sha512-BmoWLYENsSaAfQfHszJM7cLiy9Ml4I0n1YtBQKfx8PaYpZ3SoTXfj3YiDNn0GAdveOCNbK8WqQQYaSb0CMjTHQ==" crossorigin="anonymous"></script>
	<script type='text/javascript' src='{{asset('design/assets/js/custom5223.js')}}'></script>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

	<style>
		.carousel-wrap {
		margin: 30px auto;
		margin-top: 40px;
		padding: 0 5%;
		width: 100%;
		position: relative;
		}

		/* fix blank or flashing items on carousel */
		.owl-carousel .item {
		position: relative;
		z-index: 100; 
		-webkit-backface-visibility: hidden; 
		}

		/* end fix */
		.owl-nav > div {
		margin-top: -26px;
		position: absolute;
		top: 50%;
		color: #cdcbcd;
		}

		.owl-nav i {
		font-size: 52px;
		}

		.owl-nav .owl-prev {
		left: -30px;
		}

		.owl-nav .owl-next {
		right: -30px;
		}

		.owl-carousel .owl-item img{
			width: 75px;
			height: 75px;
			display: block;
		}

		/* .owl-nav{
			display: none;
		} */
	</style>

    @toastr_css
	@livewireStyles 
	</head>

<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
	@include('partials.site_menu')
	<header class="bg-white">@livewire('head',['viewname' => 'Accueil'])</header>
	<main class="mainContent position-relative home-page">
		<section class="banner-section z-1 position-relative">
			<div class="container position-relative">
				<div class="mainBanner inner-content">
					<div class="row no-gutters">
						<div class="col-md-12">
							<div class="flexslider">
								<ul class="slides"> 
									<div class="owl-carousel-banner owl-carousel">
										@foreach ($bannieres as $banniere)
										<div class="item">
											<li style="background-image: url({{asset('storage/'.$banniere->image)}});">
												<br/>
												<br/>
												<div class="landing-content">
													<div class="banner-content-text animated fadeIn">
														<br/>
														<br/>
														<h3>{{$banniere->titre}}</h3>
														<p>{{$banniere->description}}</p>
														<div class="banner-btn-wrap"> <font style="vertical-align: inherit;">
															<font style="vertical-align: inherit;">
																<font style="vertical-align: inherit;">
																	<font style="vertical-align: inherit;">
																		<a href="{{route('register_type',['locale' => App::getlocale()])}}"><input class="get-started primary-font btn" type="submit" value="Inscrivez vous gratuitement" name="submitForm"></a>
																	</font>
																</font>
															</font>
															</font>
														</div>
													</div>
												</div>
											</li> 
										</div>
										@endforeach 
									</div>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="inner-content-wrap">
			<div class="container bg-white position-relative box-shadow-1 z-1">
				<div class="inner-content">
					<div class="inner-content-middle">
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="inner-content-short-desc">
									<h2 class=" font-weight-extraBold">Pourquoi Choisir Africkup</h2> </div>
							</div>
						</div>
						<center>
						<div class="secure-boxes" style="margin-left:initial;">
							<div class="row no-gutters no-gutters">
								<div class="col-lg-4 col-md-6 ">
									<div class="secure-boxes-inner">
										<h3 class="secondary-font font-30 font-weight-light">Quel<span> sont vos besoins</span>                                                </h3>
										<div class="font-13">
											<p>Dites nous et nous nous chargeons du reste</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 ">
									<div class="secure-boxes-inner">
										<h3 class="secondary-font font-30 font-weight-light">Nous<span> avons la ressource</span>                                                </h3>
										<div class="font-13">
											<p>Nous nous chargeons de faire toutes les recherches neccessaires pour vous.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 ">
									<div class="secure-boxes-inner">
										<h3 class="sflexsliderecondary-font font-30 font-weight-light">Vous <span> avez le choix</span>                                                </h3>
										<div class="font-13">
											<p>Nous vous ferons plusieurs propositions</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</center>
					</div>
		</section>
		<section class="featured-blogContent fg-features">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2>Ils donnent leurs avis</h2>
						<div id="myCarousel" class="carousel carousel-wrap" data-ride="carousel">
							<div class="carousel-inner carousel">
								<div class="owl-carousel-comment owl-carousel">
									@foreach ($temoignages as $temoignage) @if ($loop->index < 2)
									<div class="col-md-12 item">
										<div class="testimonial-wrapper">
											<div class="testimonial">{!! $temoignage->texte !!}</div>
											<div class="media">
												<div class="media-left d-flex mr-3"> <img src="@if ($temoignage->commentor == null) {{asset('design/images.png')}}
														@elseif($temoignage->commentor->avatar == '') {{asset('design/images.png')}} @else
														 {{asset('storage/'.$temoignage->commentor->avatar)}} @endif" alt=""> </div>
												<div class="media-body">
													<div class="overview">
														<div class="name"><b>@if ($temoignage->commentor == null) {{ $temoignage->nom }} {{ $temoignage->prenom }}
														 @else {{$temoignage->commentor->name}} @endif </b></div>
														<div class="details">@if ($temoignage->commentor != null) {{$temoignage->commentor->fonction}} @endif 
														</div>
														<div class="star-rating">
															{{-- <ul class="list-inline">
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star"></i></li>
																<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
															</ul> --}}
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									@endif
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<section class="opportunity-app">
		<div class="container">
			<div class="mobile-app-wrap">
				<div class="row no-gutters align-items-center">
					<div class="mobile-app col-lg-6"> <img src="{{asset('design/assets/img/afri.png')}}" alt=""> </div>
					<div class="app-content_wrap col-lg-6">
						<div class="app-content">
							<h2>Notre application mobile est disponible sur google play et Apple store.</h2>
							<center>
								<p>Retrouvez tous les artisans/entreprises/business camerounais et africains en un seul clic » . Il faudra integrer directement les liens vers appstore et google play.</p>
							</center>
							<center>
								<div class="app-store">
									<a href="#"> <img src="{{asset('design/assets/img/google-play.png')}}" alt=""> </a>
								</div>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@include('partials.commentaire')

	<div class="YouTubePopUp-Wrap videoPopup-on-pageload" style="display: none;">
		<div class="Video-PopUp-Content vp-on-pageload-wrap"></div>
	</div>
	<footer class="bg-white2">
		@livewire('footer')
	</footer>
	<script type='text/javascript' src="{{asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/js/wp-video-popup5223.js')}}"></script>
	<script type='text/javascript' src="{{asset('design/assets/js/priority-menu4963.js')}}"></script>
	<script type='text/javascript' src="{{asset('design/assets/plugins/sassy-social-share/public/js/sassy-social-share-publicabd4.js')}}"></script>
	<script type='text/javascript' src="{{asset('design/assets/js/wp-embed.min5223.js')}}"></script>
	<script type='text/javascript' src="{{asset('design/parfait_integration/js/commentaires.js')}}"></script>
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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
	<script src="https://use.fontawesome.com/826a7e3dce.js"></script>

	<script>
		$('.owl-carousel-comment').owlCarousel({
			// loop: true,
			margin: 10,
			autoplay: true,
			loop: true,
			autoplayTimeout: 20000,
			autoplayHoverPause: false,
			responsive: {
				0: {
				items: 1
				},
				600: {
				items: 1
				},
				1000: {
				items: 2
				}
			}
		})

		$('.owl-carousel-banner').owlCarousel({
			// loop: true,
			items: 1,
			autoplay: true,
			loop: true,
			autoplayTimeout: 10000,
			autoplayHoverPause: true,
			animateOut: 'fadeOut',
        	animateIn: 'fadeIn',

		})
	</script>

	@livewireScripts
	@stack('scripts')
</body>
</html>


