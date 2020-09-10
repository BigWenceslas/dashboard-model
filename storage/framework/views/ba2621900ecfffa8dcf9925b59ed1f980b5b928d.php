<!doctype html>
<html lang="FR">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/assets.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/typography.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/shortcodes/shortcodes.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/style.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/css/style4.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/vendors/revolution/css/layers.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/vendors/revolution/css/settings.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/assets/vendors/revolution/css/navigation.css')); ?>">
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7826796.js"></script>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale = 1.0" />
	<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('design/assets/uploads/2019/04/favicon.png')); ?>"/>
	<title>Inscription Entreprise</title>
	<!-- / Yoast SEO plugin. -->
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/fonts5223.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/bootstrap.min5223.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/animate5223.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/flexslider5223.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/dist/block-library/style.min5223.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/css/dist/block-library/theme.min5223.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/plugins/video-popup/css/vp-close-icon/close-button-icon0d3f.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/plugins/video-popup/css/YouTubePopUp0d3f.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/style5224.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo e(asset('design/assets/print5223.css')); ?>" type='text/css' media='print' />
  <link rel='stylesheet' id='responsive-css' href="<?php echo e(asset('design/assets/css/responsive6619.css')); ?>" type='text/css' media='all' />
	<?php echo \Livewire\Livewire::styles(); ?>

</head>

<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
	<header class="bg-white"><?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('head')->dom;
} elseif ($_instance->childHasBeenRendered('C6e61oh')) {
    $componentId = $_instance->getRenderedChildComponentId('C6e61oh');
    $componentTag = $_instance->getRenderedChildComponentTagName('C6e61oh');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('C6e61oh');
} else {
    $response = \Livewire\Livewire::mount('head');
    $dom = $response->dom;
    $_instance->logRenderedChild('C6e61oh', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?></header>

  <main>
  <div class="container">
      <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-4 mb-md-0"> <img src="<?php echo e(asset('design/assets/images/profile/entreprise.svg')); ?>" alt="" class="img-fluid mb-3 d-none d-md-block">
          <h2>Entreprises? Creez votre compte gratuitement</h2> </div>
        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-7 ml-auto">
        <form id="regForm" action="" class="form-wizard">
          <fieldset>
            <!-- Begin Form Step 1 -->
              <!-- Tab Informations -->
              <div class="row">
                <!-- First Name -->
                <div class="input-group col-lg-6 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                      <i class="fa fa-building-o text-muted"></i>
                    </span>
                  </div>
                  <input id="firstName" type="text" name="firstname" placeholder="Nom" class="required form-control bg-white border-left-0 border-md">
                </div>
                <!-- Last Name -->
                <div class="input-group col-lg-6 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                      <i class="fa fa-user text-muted"></i>
                    </span>
                  </div>
				  <input id="lastName" type="date" name="date_creation" placeholder="Dates de création" class="required form-control bg-white border-left-0 border-md">
				</div>
                <div class="input-group col-lg-6 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                      <i class="fa fa-phone-square text-muted"></i>
                    </span>
                  </div>
                  <select id="countryCode" name="countryCode" style="max-width: 80px" class="required custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                    <option value="">+237</option>
                  </select>
                  <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="required form-control bg-white border-md border-left-0 pl-3"> </div>
                <div class="input-group col-lg-6 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                      <i class="fa fa-envelope text-muted"></i>
                    </span>
                  </div>
				  <input id="email" type="text" name="email" placeholder="Email" class="required form-control bg-white border-left-0 border-md">
				</div>
                <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                  <div class="border-bottom w-100 ml-5"></div>
                  	<span class="px-2 small text-muted font-weight-bold text-muted">Localisation</span>
                  <div class="border-bottom w-100 mr-5"></div>
                </div>
                <!-- Pays -->
                <div class="input-group col-lg-6 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                      <i class="fa fa-building-o text-muted"></i>
                    </span>
                  </div>
                  <input id="firstName" type="text" name="firstname" placeholder="Nom" class="required form-control bg-white border-left-0 border-md">
				</div>
				
				
                <!-- Domaine D'activite -->
                <div class="input-group col-lg-6 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                      <i class="fa fa-user text-muted"></i>
                    </span>
                  </div>
				  <input id="lastName" type="text" name="date_creation" placeholder="Domaine D'activite" class="required form-control bg-white border-left-0 border-md">
				</div>


                <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                  <div class="border-bottom w-100 ml-5"></div>
                  	<span class="px-2 small text-muted font-weight-bold text-muted">Statuts</span>
                  <div class="border-bottom w-100 mr-5"></div>
				</div>
				
				<!-- Domaine D'activite -->
			    <div class="input-group col-lg-6 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                      <i class="fa fa-building-o text-muted"></i>
                    </span>
                  </div>
                  <input id="firstName" type="text" name="firstname" placeholder="Nom" class="required form-control bg-white border-left-0 border-md">
                </div>
                <!-- Format juridique -->
                <div class="input-group col-lg-6 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                      <i class="fa fa-user text-muted"></i>
                    </span>
                  </div>
                  <input id="lastName" type="date" name="date_creation" placeholder="Dates de création" class="required form-control bg-white border-left-0 border-md"> </div>
               </div>
              <!-- Submit Button -->
              <div class="form-group col-lg-12 mx-auto mb-0">
                <button class="btn btn-primary btn-block py-2 btn-next" type="button"> <span class="font-weight-bold">Suivant</span> </button>
              </div>
          </fieldset>
          <!-- END Form Step 1 -->

          <!-- Begin Form Step 4 -->
          <fieldset>
            <div class="row">
							<!-- First Name -->
							<div class="input-group col-lg-6 mb-4">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-md border-right-0">
                                    	<i class="fa fa-id-badge text-muted"></i>
									</span>
								</div>
								<select required id="profils_recherches" name="profils_recherches" class="form-control bg-white border-left-0 border-md">
									<option value="" selected> TYPE DE PROFILS RECHERCHES </option>
								</select>
							</div>
							<div class="input-group col-lg-6 mb-4">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-md border-right-0">
										<i class="far fa-handshake-alt"></i>
									</span>
								</div>
								<select required id="help" name="help" class="form-control bg-white border-left-0 border-md">
									<option value="" selected> TYPE D’AIDE RECHERCHE</option>
								</select>
							</div>
							<div class="input-group col-lg-12 mb-4">
								<textarea class="form-control bg-white border-left-0 border-md" id="description_entreprise" placeholder="Description Entreprise" name="description_entreprise"></textarea>
							</div>
							<div class="input-group col-lg-6 mb-4">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-md border-right-0">
                              			<i class="fa fa-user text-muted"></i>
									  </span>
								</div>
								<input id="password" type="password" name="password" placeholder="Mot de passe" class="form-control bg-white border-left-0 border-md">
							</div>
							<!-- Last Name -->
							<div class="input-group col-lg-6 mb-4">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-md border-right-0">
                              			<i class="fa fa-user text-muted"></i>
                          			</span></div>
									<input id="comfirm_password" type="password" name="comfirm_password" placeholder="Confirmer mot de passe" class="form-control bg-white border-left-0 border-md">
								</div>
							</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
							<label class="custom-control-label" for="defaultChecked2">Cochez si vous voulez recevoir les annonces dans votre boite e-mail</label>
						</div>
						<br/>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
							<label class="custom-control-label" for="defaultChecked2">Cochez si vous voulez etre a la page par sms (1 sms tri-hebdomadaire)</label>
						</div>
						<br/>
						<!-- Submit Button -->
						<div class="form-group col-lg-12 mx-auto mb-0">
							<button type="submit" class="btn btn-primary btn-block py-2">
                <span class="font-weight-bold">Creer votre compte</span>
              </button>
						</div>
          </fieldset>
          <!-- END Form Step 4 -->
          
            <!-- Tab Informations -->
            <!-- Divider Text -->
            <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
              <div class="border-bottom w-100 ml-5"></div>
                <span class="px-2 small text-muted font-weight-bold text-muted">OU</span>
              <div class="border-bottom w-100 mr-5"></div>
            </div>
            <!-- Already Registered -->
            <div class="text-center w-100">
              <p class="text-muted font-weight-bold">Déjà enregistré? <a href="<?php echo e(route('home')); ?>" class="text-primary ml-2">Connexion</a></p>
            </div>
        </form>
      </div>
    </div>
  </div>
  </main>
    <footer class="bg-white2"> <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('footer')->dom;
} elseif ($_instance->childHasBeenRendered('klI4fZV')) {
    $componentId = $_instance->getRenderedChildComponentId('klI4fZV');
    $componentTag = $_instance->getRenderedChildComponentTagName('klI4fZV');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('klI4fZV');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $dom = $response->dom;
    $_instance->logRenderedChild('klI4fZV', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?> </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/js/popper.min5223.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/js/jquery/jquery-migrate.min330a.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/js/bootstrap.min5223.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/js/jquery.flexslider5223.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/js/custom5223.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/js/wp-video-popup5223.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/js/priority-menu4963.js')); ?>"></script>
	<script type='text/javascript' src="<?php echo e(asset('design/assets/plugins/sassy-social-share/public/js/sassy-social-share-publicabd4.js')); ?>"></script>
    <script type='text/javascript' src="<?php echo e(asset('design/assets/js/wp-embed.min5223.js')); ?>"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script>
 $('.form-wizard fieldset:first').fadeIn('slow');
    $('.form-wizard .required').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    // next step
    $('.form-wizard .btn-next').on('click', function(e) {
      e.preventDefault();
    	var parent_fieldset = $(this).parents('fieldset');
    	var next_step = true;
    	
    	 if( next_step ) {
    		parent_fieldset.fadeOut(400, function() {
	    		$(this).next().fadeIn();
    			scroll_to_class( $('.form-wizard'), 20 );
	    	});
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
    </script>
</body>

</html>


	<?php /**PATH /opt/lampp/htdocs/afq/resources/views/register/entreprise/register_entreprise.blade.php ENDPATH**/ ?>