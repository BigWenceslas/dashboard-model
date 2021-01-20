<!doctype html>
<html lang="FR">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/assets.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/typography.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/shortcodes/shortcodes.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/css/style4.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/vendors/revolution/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/vendors/revolution/css/settings.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('design/assets/vendors/revolution/css/navigation.css')}}">
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale = 1.0" />
	<link rel="shortcut icon" type="image/png" href="{{asset('design/assets/uploads/2019/04/favicon.png')}}"/>
	<title>Inscription Startup</title>
	<!-- / Yoast SEO plugin. -->
	<link rel='stylesheet' href="{{asset('design/assets/css/fonts5223.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/css/bootstrap.min5223.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/css/animate5223.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/css/flexslider5223.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/css/dist/block-library/style.min5223.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/css/dist/block-library/theme.min5223.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/plugins/video-popup/css/vp-close-icon/close-button-icon0d3f.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/plugins/video-popup/css/YouTubePopUp0d3f.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/style5224.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/style5223.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' href="{{asset('design/assets/print5223.css')}}" type='text/css' media='print' />
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous"/>
  <link rel='stylesheet' id='responsive-css' href="{{asset('design/assets/css/responsive6619.css')}}" type='text/css' media='all' />
	@livewireStyles
</head>

<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
	<header class="bg-white">@livewire('head',['viewname' => 'creer_compte_startup'])</header>

	<main>
		<div class="container">
			<div class="row py-5 mt-0 align-items-center container-inscription">
				<!-- For Demo Purpose -->
				<div class="col-md-5 pr-lg-5 mb-4 mb-md-0"> <img src="{{asset('design/assets/images/profile/startup.jpg')}}" alt="" class="img-fluid mb-3 d-none d-md-block">
					<h2>Startup? Inscris-toi gratuitement</h2> </div>
				<!-- Registeration Form -->
				<div class="col-md-7 col-lg-7 ml-auto">
					<form id="regForm" action="{{route('createEntreprise',['locale' => App::getlocale()])}}" method="POST" class="form-wizard" enctype="multipart/form-data"> @csrf
						<fieldset class="group-1-fieldset"> 
              @error('nom')<div class="alert alert-danger">{{ $message }}</div> @enderror
              @error('date_creation')<div class="alert alert-danger">{{ $message }}</div> @enderror
              @error('email')<div class="alert alert-danger">{{ $message }}</div> @enderror
              @error('telephone')<div class="alert alert-danger">{{ $message }}</div> @enderror
              @error('domaine_activite')<div class="alert alert-danger">{{ $message }}</div> @enderror
              @error('format_juridique')<div class="alert alert-danger">{{ $message }}</div> @enderror
              @error('profil_recherches')<div class="alert alert-danger">{{ $message }}</div> @enderror
              @error('formation_recherche')<div class="alert alert-danger">{{ $message }}</div> @enderror
              <!-- Begin Form Step 1 -->
							<!-- Tab Informations -->
							<div class="row">
								<!-- First Name -->
								<div class="input-group col-lg-12 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-md border-right-0">
											<i class="fa fa-user text-muted"></i>
										</span>
									</div>
									<input id="nom" type="text" name="nom" value="{{old('nom')}}" placeholder="Nom Entreprise" class="required form-control bg-white border-left-0 border-md">
								</div>
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-md border-right-0">
											<i class="fa fa-phone-square text-muted"></i>
										</span>
									</div>
									<select id="countryCode" name="countryCode" style="max-width: 80px" class="required custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
										<option value="237" selected>+237</option>
									</select>
									<input id="telephone" type="tel" name="telephone" value="{{old('telephone')}}" placeholder="Numero de telephone" class="required form-control bg-white border-md border-left-0 pl-3">
								</div>
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-md border-right-0">
											<i class="fa fa-envelope text-muted"></i>
										</span>
									</div>
									<input id="emailUser" type="text" name="email" placeholder="Email" value="{{old('email')}}" class="required form-control bg-white border-left-0 border-md"> </div>
								
									{{-- Activite --}}
								<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
									<div class="border-bottom w-100 ml-5"></div>
									<span class="px-2 small text-muted font-weight-bold text-muted">Informations Supplementaires</span>
									<div class="border-bottom w-100 mr-5"></div>
								</div>
								<div class="input-group col-lg-6 mb-4">
								<select id="categorie" name="categorie" class="required custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
										<option value="" selected>Domaine d'activite</option>
										@foreach ($categories as $categorie)
											<option value="{{$categorie->id}}">{{$categorie->nom}}</option>
										@endforeach
									</select>	
								</div>
								<!-- Format juridique -->
								<div class="input-group col-lg-6 mb-4">
									<select id="format_juridique" name="format_juridique" class="required form-control custom-select bg-white border-left-0 border-md">
										<option value="">Format juridique/Fiscal</option>
										<option value="pas-encore-inscrit">Pas encore inscrit</option>
										<option value="etablissement">Etablissement</option>
										<option value="sarl">SARL</option>
										<option value="sa">SA</option>
									</select>
								</div>
								{{-- Profil de recrutement --}}
								<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
									<div class="border-bottom w-100 ml-5"></div>
									<span class="px-2 small text-muted font-weight-bold text-muted">Profil de recrutement</span>
									<div class="border-bottom w-100 mr-5"></div>
								</div>
								<div class="input-group col-lg-6 mb-4">
									<textarea id="profil_recherches" type="text" name="profil_recherches" placeholder="TYPE DE PROFILS RECHERCHES" rows="3" class="required form-control bg-white border-left-0 border-md">{{old('profil_recherches')}}</textarea>
								</div>
								
								<div class="input-group col-lg-6 mb-4">
                  <textarea id="formation_recherchee" type="text" name="formation_recherchee" placeholder="TYPE D’AIDE/FORMATION RECHERCHEE" class="required form-control bg-white border-left-0 border-md">{{old('formation_recherchee')}}</textarea>
                </div>
							</div>
							<!-- Submit Button -->
							<div class="form-group col-lg-12 mx-auto mb-0">
								<button class="btn btn-primary btn-block py-2 btn-next fieldset1" disabled type="button"> <span class="font-weight-bold">Suivant</span> </button>
							</div>
						</fieldset>
						<!-- END Form Step 1 -->

						<!-- Begin Form Step 4 -->
						<fieldset class="group-4-fieldset">
							<div class="row">
								<div class="input-group col-lg-6 mb-4">
									<select id="pays" name="pays" class="required custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
										<option value="" selected>Pays</option>
										@include('partials.pays')
									</select>
								</div>

								<div class="input-group col-lg-6 mb-4">
									<input id="ville" type="text" name="ville" value="{{old('ville')}}" placeholder="Ville" class="required form-control bg-white border-md border-left-0 pl-3">
								</div>

								<div class="input-group col-lg-12 mb-4">
									<textarea class="form-control" id="description" name="description" rows="6" placeholder="Description">{{old('description')}}</textarea>
								</div>
							</div>
							<!-- Submit Button -->
							<center>
								<div class="form-group col-lg-12 mx-auto mb-0">
									<button class="btn btn-primary btn-lg btn-previous">Précedent</button>
									<button class="btn btn-primary btn-lg btn-next fieldset4">Suivant</button>
								</div>
							</center>
						</fieldset>
						<!-- END Form Step 4 -->

						<!-- Begin Form Step 5 -->
						<fieldset class="group-5-fieldset">
							<div class="row">
								<!-- First Name -->
								<!-- Password -->
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend"> <span class="input-group-text bg-white px-4 border-md border-right-0">
										<i class="fa fa-lock text-muted"></i>
									</span> </div>
									<input required type="file" id="logo" name="logo" lang="fr" class="custom-file-input form-control bg-white border-left-0 border-md">
									<label class="custom-file-label" for="customFileLang">Votre Logo</label>
								</div>
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
                      <i class="fa fa-calendar text-muted"></i>
										</span>
									</div>
									<input required type="text" id="date_creation" name="date_creation" class="form-control custom-select bg-white border-left-0 border-md">
								</div>
							<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-md border-right-0">
											<i class="fa fa-user text-muted"></i>
										</span>
									</div>
                  <input id="password" type="password" required name="password" placeholder="Mot de passe" class="form-control bg-white border-left-0 border-md">
                </div>
								<!-- Last Name -->
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-md border-right-0">
											<i class="fa fa-user text-muted"></i>
										</span>
									</div>
                  <input id="confirm-password" type="password" required name="confirm-password" placeholder="Confirmer mot de passe" class="form-control bg-white border-left-0 border-md">
                </div>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="abonne_newsletter" name="abonne_newsletter" checked>
								<label class="custom-control-label" for="defaultChecked2">Cochez si vous voulez recevoir les annonces dans votre boite e-mail</label>
							</div>
							<br/>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="newsletter_whatsapp" name="newsletter_whatsapp" checked>
								<label class="custom-control-label" for="defaultChecked2">Cochez si vous voulez etre a la page par message Whatsapp (1 sms tri-hebdomadaire)</label>
							</div>
							<br/>
							<!-- Submit Button -->
							<div class="form-group col-lg-12 mx-auto mb-0">
								<button id="boutton-soumettre" type="submit" class="btn btn-primary btn-block py-2"> <span class="font-weight-bold">Creer votre compte</span> </button>
							</div>
						</fieldset>
						<!-- END Form Step 5 -->
						<!-- Tab Informations -->
						<!-- Divider Text -->
						<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
							<div class="border-bottom w-100 ml-5"></div>
								<span class="px-2 small text-muted font-weight-bold text-muted">OU</span>
							<div class="border-bottom w-100 mr-5"></div>
						</div>
						<!-- Already Registered -->
						<div class="text-center w-100">
							<p class="text-muted font-weight-bold">Déjà enregistré? <a href="#" class="text-primary ml-2">Connexion</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
    <footer class="bg-white2"> @livewire('footer') </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script type='text/javascript' src="{{asset('design/assets/js/popper.min5223.js')}}"></script>
	<script type='text/javascript' src="{{asset('design/assets/js/jquery/jquery-migrate.min330a.js')}}"></script>
	<script type='text/javascript' src="{{asset('design/assets/js/bootstrap.min5223.js')}}"></script>
	<script type='text/javascript' src="{{asset('design/assets/js/jquery.flexslider5223.js')}}"></script>
	<script type='text/javascript' src="{{asset('design/assets/js/custom5223.js')}}"></script>
	<script type='text/javascript' src="{{asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/js/wp-video-popup5223.js')}}"></script>
	<script type='text/javascript' src="{{asset('design/assets/js/priority-menu4963.js')}}"></script>
	<script type='text/javascript' src="{{asset('design/assets/plugins/sassy-social-share/public/js/sassy-social-share-publicabd4.js')}}"></script>
	<script type='text/javascript' src="{{asset('design/assets/js/wp-embed.min5223.js')}}"></script>
	
	{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> --}}
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    @livewireScripts
    <script>

	function validateEmail(email) {
		const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(String(email).toLowerCase());
	}

$(document).ready(function () {
 $('.form-wizard fieldset:first').fadeIn('slow');
    $('.form-wizard .required').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    // next step
    $('.form-wizard .btn-next').on('click', function(e) {
      e.preventDefault();
    	var parent_fieldset = $(this).parents('fieldset');
    	var next_step = true;
    	if ($(this).parents('fieldset').hasClass("group-1-fieldset")) {
    	if($("#nom").val() == "") {
			toastr.clear();
			toastr.warning("Le nom de l'entreprise est obligatoire");
    	}
		else if($("#telephone").val() == "") {
			toastr.clear();
			toastr.warning('Le numero de telephone est obligatoire');
    	}
		else if(!validateEmail($("#emailUser").val())) {
			toastr.clear();
			toastr.warning('Email invalide');
    	}
		else if($("#domaine_activite").val() == "" || $("#format_juridique").val() == "") {
			toastr.clear();
			toastr.warning('Les Informations supplementaires sont obligatoires');
    	}
		else if($("#formation_recherche").val() == "" || $("#profil_recherches").val() == "") {
			toastr.clear();
			toastr.warning('Veuillez remplir le profil de recrutement');
    	}
		else if(next_step){
			parent_fieldset.fadeOut(400, function() {
	    		$(this).next().fadeIn();
    			scroll_to_class( $('.form-wizard'), 20 );
	    	});
		}
		}

		//Fieldset 4
		if ($(this).parents('fieldset').hasClass("group-4-fieldset")) {
    	if( $("#ville").val() == "" || $("#pays").val() == "" || $("#description").val() == "") {
			toastr.clear();
			toastr.warning('Veuillez remplir toutes les données');
    	}
		else if(next_step){
			parent_fieldset.fadeOut(400, function() {
	    		$(this).next().fadeIn();
    			scroll_to_class( $('.form-wizard'), 20 );
	    	});
		}
		}
    });
    
    // previous step
    $('.form-wizard .btn-previous').on('click', function(e) {
      e.preventDefault();
    	$(this).parents('fieldset').fadeOut(400, function() {
    		$(this).prev().fadeIn();
    		// scroll window to beginning of the form
			//scroll_to_class( $('.form-wizard'), 20 );
    	});
    });

    function scroll_to_class(element_class, removed_height) {
      var scroll_to = $(element_class).offset().top - removed_height;
      if($(window).scrollTop() != scroll_to) {
        $('.form-wizard').stop().animate({scrollTop: scroll_to}, 0);
      }
    }

	toastr.options = {
         "closeButton": true,
         "debug": false,
         "newestOnTop": false,
         "progressBar": true,
         "positionClass": "toast-top-center",
         "preventDuplicates": false,
         "onclick": null,
         "showDuration": "500",
         "hideDuration": "800",
         "timeOut": "2000",
         "extendedTimeOut": "4000",
         "showEasing": "swing",
         "hideEasing": "linear",
         "showMethod": "fadeIn",
         "hideMethod": "fadeOut"
         };
		 
	$(function() {
		$('input[name="date_creation"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1901,
			maxYear: parseInt(moment().format('DD/MM/YYYY'),10)
		});
  })

	//Validation des donnees du formulaire
	//fieldset1
	$("#nom").on("keyup change", function(){
		if ($("#nom").val() == "") {
			$(".fieldset1").prop("disabled", true);
		}else{
			$(".fieldset1").removeAttr('disabled');
		}
	})

	$("#telephone").on("keyup change", function(){
		if ($("#phoneNumber").val() == "") {
			$(".fieldset1").prop("disabled", true);
		}else{
			$(".fieldset1").removeAttr('disabled');
		}
	})

	$("#emailUser").on("keyup change", function(){
		if (!validateEmail($("#emailUser").val())) {
			$(".fieldset1").prop("disabled", true);
		}else{
			$(".fieldset1").removeAttr('disabled');
		}
	})

	
	$("#password").on("keyup change", function(){
		if ($("#password").val() !== $("#confirm-password").val()) {
			$("#boutton-soumettre").prop("disabled", true);
		}else{
			$("#boutton-soumettre").removeAttr('disabled');
		}
	})

	$("#confirm-password").on("keyup change", function(){
		if ($("#password").val() !== $("#confirm-password").val()) {
			$("#boutton-soumettre").prop("disabled", true);
		}else{
			$("#boutton-soumettre").removeAttr('disabled');
		}
	})
	//fin fieldset1
	//Fieldset 4
	$("#pays").on("keyup change", function(){
		if ($("#pays").val() == "") {
			$(".fieldset4").prop("disabled", true);
		}else{
			$(".fieldset4").removeAttr('disabled');
		}
	})

	$("#ville").on("keyup change", function(){
		if ($("#ville").val() == "") {
			$(".fieldset4").prop("disabled", true);
		}else{
			$(".fieldset4").removeAttr('disabled');
		}
	})

	//fin fieldset4
})

</script>
</body>

</html>


	