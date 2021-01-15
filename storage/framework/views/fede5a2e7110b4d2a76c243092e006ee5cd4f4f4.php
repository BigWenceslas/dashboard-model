

<div class="header-line">
	<div class="container">
		<div class="row no-gutters">
			<div class="logo">
				<a href="<?php echo e(route('home',['locale' => App::getlocale()])); ?>" class="h2 text-white font-weight-normal"> <img src="<?php echo e(asset('design/assets/img/afri2.png')); ?>" /></a>
			</div>
			<nav class="navbar navbar-light">
				<div class="">
					<div class="menu-main-menu-container">
						<?php if(Auth::check()): ?>
						<button class="navbar-toggler" id="bouton_derouleur" onclick="" type="button" data-toggle="collapse" data-target="#bloc_menu_header" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<img src="<?php echo e(asset('storage/'.Auth::user()->avatar)); ?>" alt="icone_menu">
						</button>
						<?php endif; ?>
						<ul id="menu-main-menu" class="navbar-nav d-flex align-items-stretch justify-content-end">
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('apropos.liste.all',['locale' => App::getlocale()])); ?>"><?php echo app('translator')->get('vitrine.pourquoi'); ?></a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('services.index',['locale' => App::getlocale()])); ?>"><?php echo app('translator')->get('vitrine.footer_service'); ?></a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('formations.index',['locale' => App::getlocale()])); ?>"><?php echo app('translator')->get('vitrine.footer_formation'); ?></a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('fond_investissement',['locale' => App::getlocale()])); ?>"><?php echo app('translator')->get('vitrine.footer_investissement'); ?></a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('contactus.index',['locale' => App::getlocale()])); ?>"><?php echo app('translator')->get('vitrine.footer_contact'); ?></a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('register_type',['locale' => App::getlocale()])); ?>"><?php echo app('translator')->get('vitrine.footer_inscription'); ?></a></li>
							<?php if(!Auth::check()): ?>
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('login_view',['locale' => App::getlocale()])); ?>"><?php echo app('translator')->get('vitrine.footer_connexion'); ?></a></li>
							<?php endif; ?>
							<?php if(Auth::check()): ?>
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('logout',['locale' => App::getlocale()])); ?>"><?php echo app('translator')->get('vitrine.footer_deconnexion'); ?></a></li>
							<?php endif; ?>
							<?php if(Auth::check() && Auth::user()->role_id == 1): ?>
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="/admin" class="sign-up"><?php echo app('translator')->get('vitrine.footer_profil'); ?></a></li>
							<?php elseif(Auth::check() && Auth::user()->role_id == 3): ?>
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_etudiant',['locale' => App::getlocale()])); ?>" class="sign-up"><?php echo app('translator')->get('vitrine.footer_profil'); ?></a></li>
							<?php elseif(Auth::check() && Auth::user()->role_id == 4): ?>
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_entreprise',['locale' => App::getlocale()])); ?>" class="sign-up"><?php echo app('translator')->get('vitrine.footer_profil'); ?></a></li>
							<?php elseif(Auth::check() && Auth::user()->role_id == 5): ?>
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_freelance',['locale' => App::getlocale()])); ?>" class="sign-up"><?php echo app('translator')->get('vitrine.footer_profil'); ?></a></li>
							<?php elseif(Auth::check() && Auth::user()->role_id == 6): ?>
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_startup',['locale' => App::getlocale()])); ?>" class="sign-up"><?php echo app('translator')->get('vitrine.footer_profil'); ?></a></li>
							<?php endif; ?>
							<?php if(isset($viewname)): ?>
								<?php if($viewname == "Accueil"): ?>
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
</div>
<?php $__env->startPush('scripts'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('design/parfait_integration/js/jquery.js')); ?>"></script>
<script type="text/javascript">
	$(document).ready(function () {
		// $("#sidebar").mCustomScrollbar({
		//     theme: "minimal"
		// });
		$('#dismiss, .overlay_header').on('click', function () {
			// hide sidebar
			$('#sidebar').removeClass('active');
			// hide overlay_header
			$('.overlay_header').removeClass('active');
		});

		$('#sidebar .nav-tabs').on('click', function () {
			// hide sidebar
			$('#sidebar').removeClass('active');
			// hide overlay_header
			$('.overlay_header').removeClass('active');
		});

		$('#bouton_derouleur').on('click', function () {
			// open sidebar
			$('#sidebar').addClass('active');
			// fade in the overlay_header
			$('.overlay_header').addClass('active');
			$('.collapse.in').toggleClass('in');
			$('a[aria-expanded=true]').attr('aria-expanded', 'false');
		});

	});
</script>

<?php $__env->stopPush(); ?><?php /**PATH /opt/lampp/htdocs/afq/resources/views/livewire/head.blade.php ENDPATH**/ ?>