<div>
	<div class="container">
		<div class="row no-gutters">
			<div class="logo">
				<a href="<?php echo e(route('home',['locale' => App::getlocale()])); ?>" class="h2 text-white font-weight-normal"> <img src="<?php echo e(asset('design/assets/img/afri2.png')); ?>" /></a>
			</div>
			<nav class="navbar navbar-light">
				<div class="">
					<div class="menu-main-menu-container">
						<ul id="menu-main-menu" class="navbar-nav d-flex align-items-stretch justify-content-end">
							<li id="menu-item-774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774"><a href="<?php echo e(route('apropos.index',['locale' => App::getlocale()])); ?>">Pourquoi Africkup</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('services.index',['locale' => App::getlocale()])); ?>">Services</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('formations.index',['locale' => App::getlocale()])); ?>">Formation</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="#">Fond D'investissement</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('contactus.index',['locale' => App::getlocale()])); ?>">Contact</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('register_type',['locale' => App::getlocale()])); ?>">Inscription</a></li>
							<?php if(!Auth::check()): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('login_view',['locale' => App::getlocale()])); ?>" class="sign-up">Connexion</a></li>
							<?php endif; ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('vitrine_multilangue',['locale' => App::getlocale()])); ?>" class="sign-up">Vitrine multi-langue</a></li>
							<?php if(Auth::check()): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('logout',['locale' => App::getlocale()])); ?>" class="sign-up">Déconnexion</a></li>
							<?php endif; ?>
							<?php if(Auth::check() && Auth::user()->role_id == 1): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="/admin" class="sign-up">Mon profil</a></li>
							<?php elseif(Auth::check() && Auth::user()->role_id == 3): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_etudiant',['locale' => App::getlocale()])); ?>" class="sign-up">Mon profil</a></li>
							<?php elseif(Auth::check() && Auth::user()->role_id == 4): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_entreprise',['locale' => App::getlocale()])); ?>" class="sign-up">Mon profil</a></li>
							<?php elseif(Auth::check() && Auth::user()->role_id == 5): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_freelance',['locale' => App::getlocale()])); ?>" class="sign-up">Mon profil</a></li>
							<?php elseif(Auth::check() && Auth::user()->role_id == 6): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_startup',['locale' => App::getlocale()])); ?>" class="sign-up">Mon profil</a></li>
							<?php endif; ?>
							<?php if(isset($viewname)): ?>
								<?php if($viewname == "vitrine"): ?>
									<?php if(App::getlocale() != 'fr'): ?>
										<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('langue',['locale' => 'fr'])); ?>" class="sign-up"><img width="25px" height="auto" src="<?php echo e(asset('images/fr.png')); ?>" ></a></li>
									<?php endif; ?>
									<?php if(App::getlocale() != 'en'): ?>
										<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('langue',['locale' => 'en'])); ?>" class="sign-up"><img width="25px" height="auto" src="<?php echo e(asset('images/en.png')); ?>" ></a></li>
									<?php endif; ?>
									<?php if(App::getlocale() != 'sp'): ?>
										<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('langue',['locale' => 'sp'])); ?>" class="sign-up"><img width="25px" height="auto" src="<?php echo e(asset('images/sp.jpg')); ?>" ></a></li>
									<?php endif; ?>
									<?php if(App::getlocale() != 'pt'): ?>
										<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('langue',['locale' => 'pt'])); ?>" class="sign-up"><img width="25px" height="auto" src="<?php echo e(asset('images/pt.png')); ?>" ></a></li>
									<?php endif; ?>
								<?php endif; ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div><?php /**PATH C:\wamp64\www\dashboard-model\resources\views/livewire/head.blade.php ENDPATH**/ ?>