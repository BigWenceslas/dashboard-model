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
    <link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap-select%401.13.9/dist/css/bootstrap-select.min.css">
	<title>Details {{$service->nom}}2</title>
	<link rel="canonical" href="index.html" />
	<!-- / Yoast SEO plugin. -->
	<link rel='dns-prefetch' href='index.html' />
	<link rel='stylesheet' href='{{asset('design/assets/css/fonts5223.css')}}' type='text/css' media='all' />
	<link rel='stylesheet' href='{{asset('design/assets/css/bootstrap.min5223.css')}}' type='text/css' media='all' />
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
	<script type='text/javascript' src='{{asset('design/assets/js/popper.min5223.js')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/jquery/jquery4a5f.js')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/jquery/jquery-migrate.min330a.js')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/plugins/video-popup/js/YouTubePopUp.jquery0d3f.js')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/plugins/video-popup/js/YouTubePopUp0d3f.js')}}'></script>
	<script type='text/javascript' src='{{asset('design/aassets/js/bootstrap.min5223.js')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/jquery.flexslider5223.js')}}'></script>
	<script type='text/javascript' src='{{asset('design/assets/js/custom5223.js')}}'></script>
	@livewireStyles
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
                                    <li class="active"><a href="{{route('services.index')}}#category--{{ $item->id }}">{{$item->nom}}</a></li>
                                    @else
                                        <li><a href="{{route('services.index')}}#category--{{ $item->id }}">{{$item->nom}}</a></li>
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
								@livewire('evaluation-service')
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
<script src="../cdn.jsdelivr.net/npm/bootstrap-select%401.13.9/dist/js/bootstrap-select.min.js"></script>
<script type='text/javascript' src='{{asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/js/wp-video-popup5223.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/priority-menu4963.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/plugins/sassy-social-share/public/js/sassy-social-share-publicabd4.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/wp-embed.min5223.js')}}'></script>
@livewireScripts
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
"use strict";



</script>  
</body>
</html>