<div>
	<div class="container">
		<div class="row no-gutters">
			<div class="logo">
				<a href="<?php echo e(route('home')); ?>" class="h2 text-white font-weight-normal"> <img src="<?php echo e(asset('design/assets/img/afri2.png')); ?>" /></a>
			</div>
			<nav class="navbar navbar-light">
				<div class="">
					<div class="menu-main-menu-container">
						<ul id="menu-main-menu" class="navbar-nav d-flex align-items-stretch justify-content-end">
							<li id="menu-item-774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774"><a href="<?php echo e(route('apropos.index')); ?>">Pourquoi Africkup</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('services.index')); ?>">Services</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('formations.index')); ?>">Formation</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="#">Fond D'investissement</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('contactus.index')); ?>">Contact</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('register_type')); ?>">Inscription</a></li>
							<?php if(!Auth::check()): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('login_view')); ?>" class="sign-up">Connexion</a></li>
							<?php endif; ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="" class="sign-up">Vitrine multi-langue</a></li>
							<?php if(Auth::check()): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('logout')); ?>" class="sign-up">Déconnexion</a></li>
							<?php endif; ?>
							<?php if(Auth::check() && Auth::user()->role_id == 1): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="/admin" class="sign-up">Mon profil</a></li>
							<?php elseif(Auth::check() && Auth::user()->role_id == 3): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_etudiant')); ?>" class="sign-up">Mon profil</a></li>
							<?php elseif(Auth::check() && Auth::user()->role_id == 4): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_entreprise')); ?>" class="sign-up">Mon profil</a></li>
							<?php elseif(Auth::check() && Auth::user()->role_id == 5): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_freelance')); ?>" class="sign-up">Mon profil</a></li>
							<?php elseif(Auth::check() && Auth::user()->role_id == 6): ?>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_startup')); ?>" class="sign-up">Mon profil</a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div><?php /**PATH /opt/lampp/htdocs/afq/resources/views/livewire/head.blade.php ENDPATH**/ ?>