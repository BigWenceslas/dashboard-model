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
	<title>Inscription Etudiant</title>
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
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous"/>
  <link rel='stylesheet' id='responsive-css' href="<?php echo e(asset('design/assets/css/responsive6619.css')); ?>" type='text/css' media='all' />
	<?php echo \Livewire\Livewire::styles(); ?>

</head>

<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
	<header class="bg-white"><?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('head',['viewname' => 'creer_compte_etudiant', 'locale' => App::getlocale()])->dom;
} elseif ($_instance->childHasBeenRendered('gflbQv2')) {
    $componentId = $_instance->getRenderedChildComponentId('gflbQv2');
    $componentTag = $_instance->getRenderedChildComponentTagName('gflbQv2');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gflbQv2');
} else {
    $response = \Livewire\Livewire::mount('head',['viewname' => 'creer_compte_etudiant', 'locale' => App::getlocale()]);
    $dom = $response->dom;
    $_instance->logRenderedChild('gflbQv2', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?></header>

	<main>
		<div class="container">
			<div class="row py-5 mt-4 align-items-center">
				<!-- For Demo Purpose -->
				<div class="col-md-5 pr-lg-5 mb-4 mb-md-0"> <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
					<h2>Etudiant Inscrit toi gratuitement</h2> </div>
				<!-- Registeration Form -->
				<div class="col-md-7 col-lg-7 ml-auto">
					<form id="regForm" action="<?php echo e(route('createStudent',['locale' => App::getlocale()])); ?>" method="POST" class="form-wizard" enctype="multipart/form-data"> <?php echo csrf_field(); ?>
						<fieldset class="group-1-fieldset"> <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="alert alert-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="alert alert-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="alert alert-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="alert alert-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['diplome1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="alert alert-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['fichier_diplome1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="alert alert-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['annee_obtention1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="alert alert-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['diplome2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="alert alert-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['fichier_diplome2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="alert alert-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['annee_obtention2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="alert alert-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['diplome3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="alert alert-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['fichier_diplome3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="alert alert-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['annee_obtention1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="alert alert-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							<!-- Begin Form Step 1 -->
							<!-- Tab Informations -->
							<div class="row">
								<!-- First Name -->
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-md border-right-0">
											<i class="fa fa-user text-muted"></i>
										</span>
									</div>
									<input id="lastname" type="text" name="lastname" placeholder="Nom" class="required form-control bg-white border-left-0 border-md"> </div>
								<!-- Last Name -->
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-md border-right-0">
											<i class="fa fa-user text-muted"></i>
											</span>
										</div>
										<input id="firstname" type="text" name="firstname" placeholder="Prenom" class="required form-control bg-white border-left-0 border-md">
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
									<input id="phoneNumber" type="tel" name="phoneNumber" placeholder="Phone Number" class="required form-control bg-white border-md border-left-0 pl-3">
								</div>
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-md border-right-0">
											<i class="fa fa-envelope text-muted"></i>
										</span>
									</div>
									<input id="emailUser" type="text" name="email" placeholder="Email" class="required form-control bg-white border-left-0 border-md"> </div>
								
									
								<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
									<div class="border-bottom w-100 ml-5"></div>
									<span class="px-2 small text-muted font-weight-bold text-muted">Diplome</span>
									<div class="border-bottom w-100 mr-5"></div>
								</div>
								<div class="input-group col-lg-4 mb-4">
									<input id="diplome1" type="text" name="diplome1" placeholder="Diplome (Le plus récent)" class="required form-control bg-white border-left-0 border-md"> </div>
								<div class="input-group col-lg-4 mb-4"><div class="input-group mb-3">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="fichier_diplome1" name="fichier_diplome1">
											<label class="custom-file-label" for="inputGroupFile01">Document</label>
										</div>
									</div>
								</div>
								<!-- Last Name -->
								<div class="input-group col-lg-4 mb-4">
									<select id="annee_obtention1" name="annee_obtention1" class="required form-control custom-select bg-white border-left-0 border-md">
										<option value="">Année d'obtention</option>
										<?php echo $__env->make('partials.register_annee_option', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									</select>
								</div>
								
								
								<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
									<div class="border-bottom w-100 ml-5"></div>
									<span class="px-2 small text-muted font-weight-bold text-muted">Diplome</span>
									<div class="border-bottom w-100 mr-5"></div>
								</div>
								<div class="input-group col-lg-4 mb-4">
									<input id="diplome2" type="text" name="diplome2" placeholder="Diplome" class="required form-control bg-white border-left-0 border-md"> </div>
								<div class="input-group col-lg-4 mb-4">
									<div class="input-group mb-3">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="fichier_diplome2" name="fichier_diplome2">
											<label class="custom-file-label" for="inputGroupFile01">Document</label>
										</div>
									</div>
								</div>
								
								<div class="input-group col-lg-4 mb-4">
									<select id="annee_obtention2" name="annee_obtention2" class="required form-control custom-select bg-white border-left-0 border-md">
											<option value="">Année d'obtention</option>
											<?php echo $__env->make('partials.register_annee_option', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									</select>
								</div>
								

								
								<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
									<div class="border-bottom w-100 ml-5"></div>
									<span class="px-2 small text-muted font-weight-bold text-muted">Diplome</span>
									<div class="border-bottom w-100 mr-5"></div>
								</div>
								<div class="input-group col-lg-4 mb-4">
									<input id="diplome3" type="text" name="diplome3" placeholder="Diplome(Le plus ancien)" class="required form-control bg-white border-left-0 border-md">
								</div>
								<div class="input-group col-lg-4 mb-4">
									<div class="input-group mb-3">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="fichier_diplome3" name="fichier_diplome3">
											<label class="custom-file-label" for="inputGroupFile01">Document</label>
										</div>
									</div>
								</div>
								
								<div class="input-group col-lg-4 mb-4">
									<select id="annee_obtention3" name="annee_obtention3" class="required form-control custom-select bg-white border-left-0 border-md">
										<option value="">Année d'obtention</option>
										<?php echo $__env->make('partials.register_annee_option', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									</select>
								</div>
								
							</div>
							<!-- Submit Button -->
							<div class="form-group col-lg-12 mx-auto mb-0">
								<button class="btn btn-primary btn-block py-2 btn-next fieldset1" disabled type="button"> <span class="font-weight-bold">Suivant</span> </button>
							</div>
						</fieldset>
						<!-- END Form Step 1 -->
						<!-- Begin Form Step 2 -->
						<fieldset class="group-2-fieldset">
							<div class="row">
								<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
									<div class="border-bottom w-100 ml-5"></div> <span class="px-2 small text-muted font-weight-bold text-muted">Experience1</span>
									<div class="border-bottom w-100 mr-5"></div>
								</div>
								<div class="input-group col-lg-3 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<input id="titre_experience1" type="text" name="titre_experience1" placeholder="Poste(Le plus recent)" class="form-control bg-white border-left-0 border-md">
								</div>
								<div class="input-group col-lg-3 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<input id="entreprise_experience1" type="text" name="entreprise_experience1" placeholder="Entreprise" class="form-control bg-white border-left-0 border-md"> </div>
								<!-- Last Name -->
								<div class="input-group col-lg-3 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<input id="date_debut_experience1" name="date_debut_experience1" class="form-control custom-select bg-white border-left-0 border-md"/>
								</div>
								<div class="input-group col-lg-3 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<input id="date_fin_experience1" name="date_fin_experience1" class="form-control custom-select bg-white border-left-0 border-md"/>
								</div>
								<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
									<div class="border-bottom w-100 ml-5"></div> <span class="px-2 small text-muted font-weight-bold text-muted">Experience2</span>
									<div class="border-bottom w-100 mr-5"></div>
								</div>
								<div class="input-group col-lg-3 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<input id="titre_experience2" type="text" name="titre_experience2" placeholder="Titre" class="form-control bg-white border-left-0 border-md"> </div>
								<div class="input-group col-lg-3 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<input id="entreprise_experience2" type="text" name="entreprise_experience2" placeholder="Entreprise" class="form-control bg-white border-left-0 border-md"> </div>
								<!-- Last Name -->
								<div class="input-group col-lg-3 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<input id="date_debut_experience2" name="date_debut_experience2" class="form-control custom-select bg-white border-left-0 border-md"/>
								</div>
								<div class="input-group col-lg-3 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<input id="date_fin_experience2" name="date_fin_experience2" class="form-control custom-select bg-white border-left-0 border-md"/>
								</div>
								<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
									<div class="border-bottom w-100 ml-5"></div> <span class="px-2 small text-muted font-weight-bold text-muted">Experience3</span>
									<div class="border-bottom w-100 mr-5"></div>
								</div>
								<div class="input-group col-lg-3 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<input id="titre_experience3" type="text" name="titre_experience3" placeholder="Titre" class="form-control bg-white border-left-0 border-md"> </div>
								<div class="input-group col-lg-3 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<input id="entreprise_experience3" type="text" name="entreprise_experience3" placeholder="Entreprise" class="form-control bg-white border-left-0 border-md">
								</div>
								<!-- Last Name -->
								<div class="input-group col-lg-3 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<input id="date_debut_experience3" name="date_debut_experience3" class="form-control custom-select bg-white border-left-0 border-md"/>
								</div>
								<div class="input-group col-lg-3 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<input id="date_fin_experience3" name="date_fin_experience3" class="form-control custom-select bg-white border-left-0 border-md"/>
								</div>
								<br/>
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
										</span> </div>
									<select id="derniere_annee_etude" name="derniere_annee_etude" class="required form-control custom-select bg-white border-left-0 border-md">
										<option value="">Derniere année d'etude</option> <?php echo $__env->make('partials.register_annee_option', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </select>
								</div>
								<!-- Last Name -->
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
									</span> </div>
									<select id="dernier_diplome" name="dernier_diplome" class="required form-control custom-select bg-white border-left-0 border-md">
										<option value="">Dernier Diplome</option>
										<option value="">Bac+5</option>
										<option value="">Bac+4</option>
										<option value="">Bac+3</option>
										<option value="">Bac+2</option>
									</select>
								</div>
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<select id="type_stage_recherche" name="type_stage_recherche" class="required form-control custom-select bg-white border-left-0 border-md">
										<option value="">Type de stage</option>
										<option value="stage-academique">Stage Academique</option>
										<option value="stage-professionnel">Stage Professionnel</option>
									</select>
								</div>
								<!-- Last Name -->
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-1 border-md border-right-0">
										</span>
									</div>
									<select id="duree_stage_souhaitee" name="duree_stage_souhaitee" class="required form-control custom-select bg-white border-left-0 border-md">
										<option value="">Durée souhaité</option>
										<option value="3">3 ans</option>
										<option value="2">2 ans</option>
										<option value="1">1 ans</option>
									</select>
								</div>
							</div>
							<center>
								<div class="form-group col-lg-12 mx-auto mb-0">
									<button class="btn btn-primary btn-lg btn-previous">Précedent</button>
									<button class="btn btn-primary btn-lg btn-next fieldset2">Suivant</button>
								</div>
							</center>
						</fieldset>
						<!-- END Form Step 2 -->
						<!-- Begin Form Step 3 -->
						<fieldset class="group-3-fieldset">
							<div class="row">
								<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
									<div class="border-bottom w-100 ml-5"></div>
									<span class="px-2 small text-muted font-weight-bold text-muted">Comptences</span>
									<div class="border-bottom w-100 mr-5"></div>
								</div>
								<div class="input-group col-lg-12 mb-4">
									<textarea class="form-control" id="competence1" name="competence1" rows="1" placeholder="Competence 1"></textarea>
								</div>
								<div class="input-group col-lg-12 mb-4">
									<textarea class="form-control" id="competence2" name="competence2" rows="1" placeholder="Competence 1"></textarea>
								</div>
								<div class="input-group col-lg-12 mb-4">
									<textarea class="form-control" id="competence3" name="competence3" rows="1" placeholder="Competence 1"></textarea>
								</div>

								<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
									<div class="border-bottom w-100 ml-5"></div>
									<span class="px-2 small text-muted font-weight-bold text-muted">References</span>
									<div class="border-bottom w-100 mr-5"></div>
								</div>
								<div class="input-group col-lg-12 mb-4">
									<textarea class="form-control" id="reference1" name="reference1" rows="1" placeholder="Reference 1"></textarea>
								</div>
								<div class="input-group col-lg-12 mb-4">
									<textarea class="form-control" id="reference2" name="reference2" rows="1" placeholder="Reference 2"></textarea>
								</div>
								<div class="input-group col-lg-12 mb-4">
									<textarea class="form-control" id="reference3" name="reference3" rows="1" placeholder="Reference 3"></textarea>
								</div>
							</div>
							<!-- Submit Button -->
							<center>
								<div class="form-group col-lg-12 mx-auto mb-0">
									<button class="btn btn-primary btn-lg btn-previous">Précedent</button>
									<button class="btn btn-primary btn-lg btn-next fieldset3">Suivant</button>
								</div>
							</center>
						</fieldset>
						<!-- END Form Step 3 -->

						<!-- Begin Form Step 4 -->
						<fieldset class="group-4-fieldset">
							<div class="row">
								<div class="input-group col-lg-6 mb-4">
									<select id="pays" name="pays" class="required custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
										<option value="" selected>Pays</option>
										<?php $__currentLoopData = $all_countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
											<option value="<?php echo e($country->name->common); ?>"><?php echo $country->name->common; ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>

								<div class="input-group col-lg-6 mb-4">
									<input id="ville" type="text" name="ville" placeholder="Ville" class="required form-control bg-white border-md border-left-0 pl-3">
								</div>

								<div class="input-group col-lg-12 mb-4">
									<textarea class="form-control" id="lettre_motivation" name="lettre_motivation" rows="6" placeholder="Letrre de motivation"></textarea>
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
								<div class="input-group col-lg-12 mb-4">
									<div class="input-group-prepend"> <span class="input-group-text bg-white px-4 border-md border-right-0">
										<i class="fa fa-lock text-muted"></i>
									</span> </div>
									<input type="file" id="cv" name="cv" lang="es" class="custom-file-input form-control bg-white border-left-0 border-md">
									<label class="custom-file-label" for="customFileLang">Votre cv</label>
								</div>
								<div class="input-group col-lg-12 mb-4">
									<div class="input-group-prepend"> <span class="input-group-text bg-white px-4 border-md border-right-0">
										<i class="fa fa-lock text-muted"></i>
										</span> </div>
									<input required type="file" id="photo" lang="es" name="photo" class="custom-file-input form-control bg-white border-left-0 border-md">
									<label class="custom-file-label" for="customFileLang">Votre photo</label>
								</div>
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-md border-right-0">
											<i class="fa fa-user text-muted"></i>
										</span>
									</div>
									<input id="password" type="password" required name="password" placeholder="Mot de passe" class="form-control bg-white border-left-0 border-md"> </div>
								<!-- Last Name -->
								<div class="input-group col-lg-6 mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-md border-right-0">
											<i class="fa fa-user text-muted"></i>
										</span>
									</div>
									<input id="confirm-password" type="password" required name="confirm-password" placeholder="Confirmer mot de passe" class="form-control bg-white border-left-0 border-md"> </div>
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
    <footer class="bg-white2"> <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('footer')->dom;
} elseif ($_instance->childHasBeenRendered('64Jn6Ym')) {
    $componentId = $_instance->getRenderedChildComponentId('64Jn6Ym');
    $componentTag = $_instance->getRenderedChildComponentTagName('64Jn6Ym');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('64Jn6Ym');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $dom = $response->dom;
    $_instance->logRenderedChild('64Jn6Ym', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
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
	
	
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

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
    	if($("#firstname").val() == "" || $("#lastname").val() == "") {
			toastr.clear();
			toastr.warning('Le Prenom et le nom sont obligatoire');
    	}
		else if($("#phoneNumber").val() == "") {
			toastr.clear();
			toastr.warning('Le numero de telephone est obligatoire');
    	}
		else if(!validateEmail($("#emailUser").val())) {
			toastr.clear();
			toastr.warning('Email invalide');
    	}
		else if($("#diplome1").val() == "" || $("#annee_obtention1").val() == "" ||  !$("#fichier_diplome1").val()) {
			toastr.clear();
			toastr.warning('Le diplome le plus recent est obligatoire');
    	}
		else if(next_step){
			parent_fieldset.fadeOut(400, function() {
	    		$(this).next().fadeIn();
    			scroll_to_class( $('.form-wizard'), 20 );
	    	});
		}
		}
		//Fieldset 2
		if ($(this).parents('fieldset').hasClass("group-2-fieldset")) {
    	if( $("#titre_experience1").val() == "" || $("#entreprise_experience1").val() == "" 
		|| $("#date_debut_experience1").val() == "" || $("#date_fin_experience1").val() == "") {
			toastr.clear();
			toastr.warning('Veuillez remplir au mois une experience sont obligatoire');
    	}
		else if(next_step){
			parent_fieldset.fadeOut(400, function() {
	    		$(this).next().fadeIn();
    			scroll_to_class( $('.form-wizard'), 20 );
	    	});
		}
		}

		//Fieldset 3
		if ($(this).parents('fieldset').hasClass("group-3-fieldset")) {
    	if( $("#competence1").val() == "") {
			toastr.clear();
			toastr.warning('Veuillez remplir au mois la 1ere competence');
    	}

		else if( $("#reference1").val() == "") {
			toastr.clear();
			toastr.warning('Veuillez remplir au moins la 1ere reference');
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
    	if( $("#lettre_motivation").val() == "" || $("#ville").val() == "" || $("#pays").val() == "") {
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
		$('input[name="date_debut_experience1"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1901,
			maxYear: parseInt(moment().format('DD/MM/YYYY'),10)
		});

		$('input[name="date_fin_experience1"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1901,
			maxYear: parseInt(moment().format('DD/MM/YYYY'),10)
		});

		$('input[name="date_debut_experience2"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1901,
			maxYear: parseInt(moment().format('DD/MM/YYYY'),10)
		});

		$('input[name="date_fin_experience2"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1901,
			maxYear: parseInt(moment().format('DD/MM/YYYY'),10)
		});


		$('input[name="date_debut_experience3"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1901,
			maxYear: parseInt(moment().format('DD/MM/YYYY'),10)
		});

		$('input[name="date_fin_experience3"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1901,
			maxYear: parseInt(moment().format('DD/MM/YYYY'),10)
		});
	});

	//Validation des donnees du formulaire
	//fieldset1
	$("#firstname").on("keyup change", function(){
		if ($("#firstname").val() == "") {
			$(".fieldset1").prop("disabled", true);
		}else{
			$(".fieldset1").removeAttr('disabled');
		}
	})

	$("#lastname").on("keyup change", function(){
		if ($("#lastname").val() == "") {
			$(".fieldset1").prop("disabled", true);
		}else{
			$(".fieldset1").removeAttr('disabled');
		}
	})

	$("#phoneNumber").on("keyup change", function(){
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

	//Dernier diplome

	$("#diplome1").on("keyup", function(){
		if ($("#diplome1").val() == "") {
			$(".fieldset1").prop("disabled", true);
		}else{
			$(".fieldset1").removeAttr('disabled');
		}
	})

	$("#annee_obtention1").on("keyup", function(){
		if ($("#annee_obtention1").val() == "") {
			$(".fieldset1").prop("disabled", true);
		}else{
			$(".fieldset1").removeAttr('disabled');
		}
	})

	$("#fichier_diplome1").on("keyup", function(){
		if ($("#fichier_diplome1").val()) {
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


	<?php /**PATH /opt/lampp/htdocs/afq/resources/views/register/etudiant/register_student.blade.php ENDPATH**/ ?>