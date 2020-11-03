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
	<link rel='stylesheet' href='{{asset('design/assets/css/fonts5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/css/bootstrap.min5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/css/animate5223.css ')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/css/flexslider5223.css ')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/css/dist/block-library/style.min5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/css/dist/block-library/theme.min5223.css ')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/css/wp-video-popup5223.css ')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/plugins/video-popup/css/vp-close-icon/close-button-icon0d3f.css ')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/plugins/video-popup/css/YouTubePopUp0d3f.css ')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/style5223.css')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/print5223.css')}}' type='text/css' media='print'/>
	<link rel='stylesheet' href='{{asset('design/assets/plugins/sassy-social-share/public/css/sassy-social-share-publicabd4.css ')}}' type='text/css' media='all'/>
	<link rel='stylesheet' href='{{asset('design/assets/plugins/sassy-social-share/admin/css/sassy-social-share-svgabd4.css ')}}' type='text/css' media='all'/>
	<link rel='stylesheet' id='responsive-css' href='{{asset(' design/assets/css/responsive6619.css ')}}' type='text/css' media='all'/>
    <link rel="stylesheet" href="{{asset('design/parfait_integration/css/header_respon.css')}}">

	<script type='text/javascript' src='{{asset('design/assets/js/popper.min5223.js ')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/jquery/jquery4a5f.js ')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/jquery/jquery-migrate.min330a.js ')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/plugins/video-popup/js/YouTubePopUp.jquery0d3f.js ')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/plugins/video-popup/js/YouTubePopUp0d3f.js ')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/bootstrap.min5223.js ')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/jquery.flexslider5223.js ')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/custom5223.js ')}}'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
	@livewireStyles 
	</head>

<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
	<div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
    
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>
    
            <div class="sidebar-header">
                <a href="#" class="anul_lien" id="bloc_logo">
                    <img src="{{asset('design/parfait_integration/ressources/img/afri2.png')}}" id="logo_header" alt="logo">
                </a>
            </div>

            <ul class="liste_responsive nav nav-tabs" role="tablist">
				{{-- <li class="@if (!session('onglet')) active @endif">
					<a class="anul_lien nav-tabs @if (!session('onglet')) active @endif" id="nav-home-tab" data-toggle="tab" href="#vue_ensemble" role="tab" aria-controls="#vue_ensemble" aria-selected="@if (!session('onglet')) true @else false @endif">Présentation</a>
				</li>
				<li class="@if (session('onglet') == 'informations') active @endif">
					<a class="anul_lien nav-tabs @if (session('onglet') == 'informations') active @endif" data-toggle="tab" href="#information_complementaire" aria-controls="#information_complementaire" aria-selected="@if (session('onglet') == 'informations') true @else false @endif">Informations Complémentaires</a>
				</li>
				<li class="@if (session('onglet') == 'cursus_academique') active @endif">
					<a class="anul_lien nav-tabs @if (session('onglet') == 'cursus_academique') active @endif" data-toggle="tab" href="#cursus_academique" role="tab" aria-controls="#cursus_academique" aria-selected="@if (session('onglet') == 'cursus_academique') true @else false @endif">Cursus Académique</a>
				</li>
				<li class="@if (session('onglet') == 'experience_professionnelle') active @endif">
					<a class="anul_lien nav-tabs @if (session('onglet') == 'experience_professionnelle') active @endif" data-toggle="tab" href="#experience_professionnelle" aria-controls="#experience_professionnelle" aria-selected="@if (session('onglet') == 'experience_professionnelle') true @else false @endif">Expérience professionnelle</a>
				</li>
				<li class="@if (session('onglet') == 'references') active @endif">
					<a class="anul_lien nav-tabs @if (session('onglet') == 'references') active @endif" data-toggle="tab" href="#references" aria-controls="#references" aria-selected="@if (session('onglet') == 'references') true @else false @endif">Références</a>
				</li>
				<li class="@if (session('onglet') == 'competences') active @endif">
					<a class="anul_lien nav-tabs @if (session('onglet') == 'competences') active @endif" data-toggle="tab" href="#competences" aria-controls="#competences" aria-selected="@if (session('onglet') == 'competences') true @else false @endif">Compétences</a>
				</li> --}}
				<li id="menu-item-774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774"><a href="{{route('apropos.index',['locale' => App::getlocale()])}}">Pourquoi Africkup</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('services.index',['locale' => App::getlocale()])}}">Services</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('formations.index',['locale' => App::getlocale()])}}">Formation</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="#">Fond D'investissement</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('contactus.index',['locale' => App::getlocale()])}}">Contact</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('register_type',['locale' => App::getlocale()])}}">Inscription</a></li>
            </ul>
            <div class="sous_bloc_haut">

                <!-- <div class="dropdown" id="bloc_deroulant_header">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="button_langue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img data-src="../sources/images/down.svg" class="lazy" id="icone_fleche_bas" alt="icone flêche bas">
                        Fr
                    </button>
                    <div class="dropdown-menu" id="deroulant_langue" aria-labelledby="button_langue">
                      <a class="dropdown-item lien_langue" href="#">En</a>
                    </div>
                </div> -->
            </div>
        </nav>
    
        <!-- Page Content -->

        <!-- Dark Overlay element -->
        <div class="overlay_header"></div>
    </div>
	<header class="bg-white">@livewire('head',['viewname' => 'Accueil'])</header>
	<main class="mainContent position-relative home-page">
		<section class="banner-section z-1 position-relative">
			<div class="container position-relative">
				<div class="mainBanner inner-content">
					<div class="row no-gutters">
						<div class="col-md-12">
							<div class="flexslider">
								<ul class="slides"> @foreach ($bannieres as $banniere)
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
                                                                <a href="{{route('register_type',['locale' => App::getlocale()])}}"><input class="get-started primary-font btn" type="submit" value="inscris-toi gratuitement" name="submitForm"></a>
                                                            </font>
                                                        </font>
													</font>
													</font>
												</div>
											</div>
										</div>
									</li> @endforeach </ul>
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
										<h3 class="secondary-font font-30 font-weight-light">Vous <span> avez le choix</span>                                                </h3>
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
						<h2>Ils donnent leur avis</h2>
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Carousel indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item carousel-item active">
									<div class="row"> @foreach ($temoignages as $temoignage) @if ($loop->index < 2) <div class="col-sm-6">
											<div class="testimonial-wrapper">
												<div class="testimonial">{{$temoignage->texte}}</div>
												<div class="media">
													<div class="media-left d-flex mr-3"> <img src="@if ($temoignage->commentor->avatar == " ") {{asset('design/images.png')}}
                                                            @else {{asset('storage/'.$temoignage->commentor->avatar)}} @endif" alt=""> </div>
													<div class="media-body">
														<div class="overview">
															<div class="name"><b> @if ($temoignage->commentor->prenom != "" and $temoignage->commentor->nom)
                                                                    {{$temoignage->commentor->prenom}} {{$temoignage->commentor->nom}}
                                                                @else
                                                                    {{$temoignage->commentor->name}}
                                                                @endif</b></div>
															<div class="details">{{$temoignage->commentor->fonction}}</div>
															<div class="star-rating">
																<ul class="list-inline">
																	<li class="list-inline-item"><i class="fa fa-star"></i></li>
																	<li class="list-inline-item"><i class="fa fa-star"></i></li>
																	<li class="list-inline-item"><i class="fa fa-star"></i></li>
																	<li class="list-inline-item"><i class="fa fa-star"></i></li>
																	<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
									</div> @endif @endforeach </div>
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
	<div class="YouTubePopUp-Wrap videoPopup-on-pageload" style="display: none;">
		<div class="Video-PopUp-Content vp-on-pageload-wrap"></div>
	</div>
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
	@livewireScripts
	@stack('scripts')
</body>
</html>