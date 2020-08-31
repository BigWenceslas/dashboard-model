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
	<title>Inscription</title>
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
	<link rel='stylesheet' href="{{asset('design/assets/print5223.css')}}" type='text/css' media='print' />
  <link rel='stylesheet' id='responsive-css' href="{{asset('design/assets/css/responsive6619.css')}}" type='text/css' media='all' />
	@livewireStyles
</head>

<body class="home page-template page-template-template-hompage page-template-template-hompage-php page page-id-253 wp-embed-responsive singular image-filters-enabled responsive-menu-slide-left">
	<header class="bg-white">@livewire('head')</header>

  <main>
  <div class="container">
    <div class="container">
      <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-4 mb-md-0"> <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
          <h2>Etudiant Inscrit toi gratuitement</h2> </div>
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
                      <i class="fa fa-user text-muted"></i>
                    </span>
                  </div>
                  <input id="firstName" type="text" name="firstname" placeholder="Nom" class="required form-control bg-white border-left-0 border-md">
                </div>
                <!-- Last Name -->
                <div class="input-group col-lg-6 mb-4">
                  <div class="input-group-prepend"> <span class="input-group-text bg-white px-4 border-md border-right-0">
                                      <i class="fa fa-user text-muted"></i>
                                  </span> </div>
                  <input id="lastName" type="text" name="lastname" placeholder="Prenom" class="required form-control bg-white border-left-0 border-md"> </div>
                <div class="input-group col-lg-6 mb-4">
                  <div class="input-group-prepend"> <span class="input-group-text bg-white px-4 border-md border-right-0">
                                  <i class="fa fa-phone-square text-muted"></i>
                                </span> </div>
                  <select id="countryCode" name="countryCode" style="max-width: 80px" class="required custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                    <option value="">+237</option>
                  </select>
                  <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="required form-control bg-white border-md border-left-0 pl-3"> </div>
                <div class="input-group col-lg-6 mb-4">
                  <div class="input-group-prepend"> <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span> </div>
                  <input id="email" type="text" name="email" placeholder="Email" class="required form-control bg-white border-left-0 border-md"> </div>
                <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                  <div class="border-bottom w-100 ml-5"></div> <span class="px-2 small text-muted font-weight-bold text-muted">Diplome1</span>
                  <div class="border-bottom w-100 mr-5"></div>
                </div>
                <div class="input-group col-lg-4 mb-4">
                  <div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
                                
                            </span> </div>
                  <input id="titre" type="text" name="titre" placeholder="Titre" class="required form-control bg-white border-left-0 border-md"> </div>
                <div class="input-group col-lg-4 mb-4">
                  <div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
                          
                            </span> </div>
                  <input id="organisation" type="text" name="organisation" placeholder="Organisation" class="required form-control bg-white border-left-0 border-md"> </div>
                <!-- Last Name -->
                <div class="input-group col-lg-4 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-1 border-md border-right-0">
                  </span>
                </div>
                  <select id="jobtitle" name="jobtitle" class="required form-control custom-select bg-white border-left-0 border-md">
                    <option value="">Année d'obtention</option>
                    @include('partials.register_annee_option')
                  </select>
                </div>
                <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                  <div class="border-bottom w-100 ml-5"></div>
                  <span class="px-2 small text-muted font-weight-bold text-muted">Diplome2</span>
                  <div class="border-bottom w-100 mr-5"></div>
                </div>
                <div class="input-group col-lg-4 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-1 border-md border-right-0">
                    </span>
                  </div>
                  <input id="titre2" type="text" name="titre2" placeholder="Titre" class="required form-control bg-white border-left-0 border-md"> </div>
                <div class="input-group col-lg-4 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-1 border-md border-right-0">
                  </span>
                </div>
                  <input id="organisation2" type="text" name="organisation2" placeholder="Organisation" class="form-control bg-white border-left-0 border-md"> </div>
                <!-- Last Name -->
                <div class="input-group col-lg-4 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-1 border-md border-right-0">
                   </span>
                  </div>
                  <select id="jobtitle2" name="jobtitle2" class="form-control custom-select bg-white border-left-0 border-md">
                    <option value="">Année d'obtention</option>
                    @include('partials.register_annee_option')
                  </select>
                </div>
                <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                  <div class="border-bottom w-100 ml-5"></div>
                  <span class="px-2 small text-muted font-weight-bold text-muted">Diplome3</span>
                  <div class="border-bottom w-100 mr-5"></div>
                </div>
                <div class="input-group col-lg-4 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-1 border-md border-right-0">
                    </span>
                  </div>
                  <input id="titre3" type="text" name="titre3" placeholder="Titre" class="form-control bg-white border-left-0 border-md"> </div>
                <div class="input-group col-lg-4 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-1 border-md border-right-0">
                    </span>
                  </div>
                  <input id="organisation3" type="text" name="organisation3" placeholder="Oraganisation" class="form-control bg-white border-left-0 border-md"> </div>
                <!-- Last Name -->
                <div class="input-group col-lg-4 mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-1 border-md border-right-0">
                    </span>
                  </div>
                  <select id="jobtitle3" name="jobtitle3" class="form-control custom-select bg-white border-left-0 border-md">
                    <option value="">Année d'obtention</option>
                    @include('partials.register_annee_option')
                  </select>
                </div>
              </div>
              <!-- Submit Button -->
              <div class="form-group col-lg-12 mx-auto mb-0">
                <button class="btn btn-primary btn-block py-2 btn-next" type="button"> <span class="font-weight-bold">Suivant</span> </button>
              </div>
          </fieldset>
          <!-- END Form Step 1 -->


          <!-- Begin Form Step 2 -->
          <fieldset>
            <div class="row">
							<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
								<div class="border-bottom w-100 ml-5"></div> <span class="px-2 small text-muted font-weight-bold text-muted">Experience1</span>
								<div class="border-bottom w-100 mr-5"></div>
							</div>
							<div class="input-group col-lg-3 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
                          
                      </span> </div>
								<input id="firstName" type="text" name="firstname" placeholder="Titre" class="form-control bg-white border-left-0 border-md"> </div>
							<div class="input-group col-lg-3 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
                     
                      </span> </div>
								<input id="firstName" type="text" name="firstname" placeholder="Entreprise" class="form-control bg-white border-left-0 border-md"> </div>
							<!-- Last Name -->
							<div class="input-group col-lg-3 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
                            
                        </span> </div>
								<select id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md">
									<option value="">Debut</option>
									<option value="">2010</option>
									<option value="">2012</option>
									<option value="">2015</option>
									<option value="">2021</option>
								</select>
							</div>
							<div class="input-group col-lg-3 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
                          
                      </span> </div>
								<select id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md">
									<option value="">Debut</option>
									<option value="">2010</option>
									<option value="">2012</option>
									<option value="">2015</option>
									<option value="">2021</option>
								</select>
							</div>
							<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
								<div class="border-bottom w-100 ml-5"></div> <span class="px-2 small text-muted font-weight-bold text-muted">Experience2</span>
								<div class="border-bottom w-100 mr-5"></div>
							</div>
							<div class="input-group col-lg-3 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
                      
                  </span> </div>
								<input id="firstName" type="text" name="firstname" placeholder="Titre" class="form-control bg-white border-left-0 border-md"> </div>
							<div class="input-group col-lg-3 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
                 
                  </span> </div>
								<input id="firstName" type="text" name="firstname" placeholder="Entreprise" class="form-control bg-white border-left-0 border-md"> </div>
							<!-- Last Name -->
							<div class="input-group col-lg-3 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
                        
                    </span> </div>
								<select id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md">
									<option value="">Debut</option>
									<option value="">2010</option>
									<option value="">2012</option>
									<option value="">2015</option>
									<option value="">2021</option>
								</select>
							</div>
							<div class="input-group col-lg-3 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
                      
                  </span> </div>
								<select id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md">
									<option value="">Debut</option>
									<option value="">2010</option>
									<option value="">2012</option>
									<option value="">2015</option>
									<option value="">2021</option>
								</select>
							</div>
							<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
								<div class="border-bottom w-100 ml-5"></div> <span class="px-2 small text-muted font-weight-bold text-muted">Experience3</span>
								<div class="border-bottom w-100 mr-5"></div>
							</div>
							<div class="input-group col-lg-3 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
                  
              </span>
            </div>
                <input id="firstName" type="text" name="firstname" placeholder="Titre" class="form-control bg-white border-left-0 border-md">
              </div>
							  <div class="input-group col-lg-3 mb-4">
								<div class="input-group-prepend">
                  <span class="input-group-text bg-white px-1 border-md border-right-0">
                  </span>
                </div>
								<input id="firstName" type="text" name="firstname" placeholder="Entreprise" class="form-control bg-white border-left-0 border-md"> </div>
							<!-- Last Name -->
							<div class="input-group col-lg-3 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
                    
                </span> </div>
								<select id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md">
									<option value="">Debut</option>
									<option value="">2010</option>
									<option value="">2012</option>
									<option value="">2015</option>
									<option value="">2021</option>
								</select>
							</div>
							<div class="input-group col-lg-3 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
                  
              </span> </div>
								<select id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md">
									<option value="">Debut</option>
									<option value="">2010</option>
									<option value="">2012</option>
									<option value="">2015</option>
									<option value="">2021</option>
								</select>
							</div>
							<br/>
							<div class="input-group col-lg-6 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-1 border-md border-right-0">
               
            </span>
            </div>
								<select id="annee_etude" name="annee_etude" class="form-control custom-select bg-white border-left-0 border-md">
									<option value="">Derniere année d'etude</option>
                    @include('partials.register_annee_option')
								</select>
							</div>
							<!-- Last Name -->
							<div class="input-group col-lg-6 mb-4">
								<div class="input-group-prepend">
                  <span class="input-group-text bg-white px-1 border-md border-right-0">
                  </span>
                </div>
								<select id="annee_etude2" name="annee_etude2" class="form-control custom-select bg-white border-left-0 border-md">
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
								<select id="type_contrat" name="type_contrat" class="form-control custom-select bg-white border-left-0 border-md">
									<option value="">Type de contrat</option>
									<option value="">CDD</option>
									<option value="">CDI</option>
									<option value="">STAGE</option>
								</select>
							</div>
							<!-- Last Name -->
							<div class="input-group col-lg-6 mb-4">
								<div class="input-group-prepend">
                  <span class="input-group-text bg-white px-1 border-md border-right-0">
                  </span>
                </div>
								<select id="duree_souhaite" name="duree_souhaite" class="form-control custom-select bg-white border-left-0 border-md">
									<option value="">Durée souhaité</option>
									<option value="">3 an</option>
									<option value="">2 an</option>
									<option value="">1 an</option>
								</select>
							</div>
						</div>
						<center>
							<div class="form-group col-lg-12 mx-auto mb-0">
                <button class="btn btn-primary btn-lg btn-previous">Précedent</button> 
                <button class="btn btn-primary btn-lg btn-next">Suivant</button>
              </div>
						</center>
          </fieldset>
          <!-- END Form Step 2 -->

          <!-- Begin Form Step 3 -->
          <fieldset>
            <div class="row">
							<!-- First Name -->
							<div class="input-group col-lg-6 mb-4">
								<div class="input-group-prepend">
                  <span class="input-group-text bg-white px-1 border-md border-right-0">
                  </span>
                </div>
								<select id="job" name="Derniere année d'etude" class="form-control custom-select bg-white border-left-0 border-md">
									<option value="">Derniere année d'etude</option>
                    @include('partials.register_annee_option')
								</select>
							</div>
							<!-- Last Name -->
							<div class="input-group col-lg-6 mb-4">
								<div class="input-group-prepend">
                  <span class="input-group-text bg-white px-1 border-md border-right-0">
                  </span>
                </div>
								<select id="job" name="Derniere année d'etude" class="form-control custom-select bg-white border-left-0 border-md">
									<option value="">Derniere Diplome</option>
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
								<select id="job" name="Type de contrat" class="form-control custom-select bg-white border-left-0 border-md">
									<option value="">Type de contrat</option>
									<option value="">CDD</option>
									<option value="">CDI</option>
									<option value="">STAGE</option>
								</select>
							</div>
							<!-- Last Name -->
							<div class="input-group col-lg-6 mb-4">
								<div class="input-group-prepend">
                  <span class="input-group-text bg-white px-1 border-md border-right-0">
                  </span>
                </div>
								<select id="job" name="" class="form-control custom-select bg-white border-left-0 border-md">
									<option value="">Durée souhaité</option>
									<option value="">3 an</option>
									<option value="">2 an</option>
									<option value="">1 an</option>
								</select>
							</div>
							<div class="input-group col-lg-12 mb-4">
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="References"></textarea>
							</div>
							<div class="input-group col-lg-12 mb-4">
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Competences"></textarea>
							</div>
							<div class="input-group col-lg-12 mb-4">
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Letrre de motivation"></textarea>
							</div>
						</div>
						<!-- Submit Button -->
						<div class="form-group col-lg-12 mx-auto mb-0">
						    <button class="btn btn-primary btn-lg btn-previous">Précedent</button> 
                <button class="btn btn-primary btn-lg btn-next">Suivant</button>
						</div>

          </fieldset>
          <!-- END Form Step 3 -->

          <!-- Begin Form Step 4 -->
          <fieldset>
            <div class="row">
							<!-- First Name -->
							<!-- Password -->
							<div class="input-group col-lg-12 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span> </div>
								<input type="file" id="customFileLang" lang="es" class="custom-file-input form-control bg-white border-left-0 border-md">
								<label class="custom-file-label" for="customFileLang">Votre cv</label>
							</div>
							<div class="input-group col-lg-12 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span> </div>
								<input type="file" id="customFileLang" lang="es" class="custom-file-input form-control bg-white border-left-0 border-md">
								<label class="custom-file-label" for="customFileLang">Votre photo</label>
							</div>
							<div class="input-group col-lg-6 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-4 border-md border-right-0">
                              <i class="fa fa-user text-muted"></i>
                          </span> </div>
								<input id="firstName" type="password" name="Motdepass" placeholder="Mot de pass" class="form-control bg-white border-left-0 border-md"> </div>
							<!-- Last Name -->
							<div class="input-group col-lg-6 mb-4">
								<div class="input-group-prepend"> <span class="input-group-text bg-white px-4 border-md border-right-0">
                              <i class="fa fa-user text-muted"></i>
                          </span> </div>
								<input id="lastName" type="password" name="lastname" placeholder="Reppeter mot de pass" class="form-control bg-white border-left-0 border-md"> </div>
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
              <p class="text-muted font-weight-bold">Déjà enregistré? <a href="#" class="text-primary ml-2">Connexion</a></p>
            </div>
        </form>
      </div>
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
    @livewireScripts
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
    	// navigation steps / progress steps
    	//var current_active_step = $(this).parents('.form-wizard').find('.form-wizard-step.active');
    	//var progress_line = $(this).parents('.form-wizard').find('.form-wizard-progress-line');
    	
    	// fields validation
    	/* parent_fieldset.find('.required').each(function() {
    		if( $(this).val() == "" ) {
    			$(this).addClass('input-error');
    			next_step = false;
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	}); */
    	// fields validation
    	
    	if( next_step ) {
    		parent_fieldset.fadeOut(400, function() {
    			// change icons
    			//current_active_step.removeClass('active').addClass('activated').next().addClass('active');
    			// progress bar
    		  //	bar_progress(progress_line, 'right');
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
    	//var current_active_step = $(this).parents('.form-wizard').find('.form-wizard-step.active');
    	//var progress_line = $(this).parents('.form-wizard').find('.form-wizard-progress-line');
    	
    	$(this).parents('fieldset').fadeOut(400, function() {
    		// change icons
    		//current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
    		// progress bar
    		//bar_progress(progress_line, 'left');
    		// show previous step
    		$(this).prev().fadeIn();
    		// scroll window to beginning of the form
			scroll_to_class( $('.form-wizard'), 20 );
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


	