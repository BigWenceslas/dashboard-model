<div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div id="container_user_pict">
                <a href="#">
                    <img src="<?php echo e(asset('design/assets/img/test.jpg')); ?>" class="user_pict" alt="">
                </a>
            </div>
            <div class="sidebar-header">
                <a href="/" class="anul_lien" id="bloc_logo">
                    <img src="<?php echo e(asset('design/parfait_integration/ressources/img/afri2.png')); ?>" id="logo_header" alt="logo">
                </a>
            </div>
            <ul class="liste_responsive nav nav-tabs" role="tablist">
				<li id="menu-item-774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774"><a href="<?php echo e(route('apropos.liste.all',['locale' => App::getlocale()])); ?>">Pourquoi Africkup</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('services.index',['locale' => App::getlocale()])); ?>">Services</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('formations.index',['locale' => App::getlocale()])); ?>">Formations</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="#">Fond D'investissement</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('contactus.index',['locale' => App::getlocale()])); ?>">Contact</a></li>
                <?php if(!Auth::check()): ?>
                    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('register_type',['locale' => App::getlocale()])); ?>">Inscription</a></li>
                <?php endif; ?>
                <?php if(Auth::check() && Auth::user()->role_id == 1): ?>
                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="/admin">Mon profil</a></li>
                <?php elseif(Auth::check() && Auth::user()->role_id == 3): ?>
                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_etudiant',['locale' => App::getlocale()])); ?>">Mon profil</a></li>
				<?php elseif(Auth::check() && Auth::user()->role_id == 4): ?>
				    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_entreprise',['locale' => App::getlocale()])); ?>">Mon profil</a></li>
                <?php elseif(Auth::check() && Auth::user()->role_id == 5): ?>
                    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_freelance',['locale' => App::getlocale()])); ?>">Mon profil</a></li>
                <?php elseif(Auth::check() && Auth::user()->role_id == 6): ?>
                    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('profile_startup',['locale' => App::getlocale()])); ?>">Mon profil</a></li>
                <?php endif; ?>
                <?php if(Auth::check()): ?>
                    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo e(route('logout',['locale' => App::getlocale()])); ?>">Déconnexion</a></li>
                <?php endif; ?>
            </ul>
            <div class="sous_bloc_haut">
            </div>
        </nav>
        <!-- Page Content -->
        <!-- Dark Overlay element -->
        <div class="overlay_header"></div>
    </div><?php /**PATH C:\wamp64\www\dashboard-model\resources\views/partials/site_menu.blade.php ENDPATH**/ ?>