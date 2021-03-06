<div class="container">
            <div class="row no-gutters">
                <div class="logo">
                    <a href="<?php echo e(route('home',['locale' => App::getlocale()])); ?>" class="h2 text-white font-weight-normal">
                        <img src="<?php echo e(asset('design/parfait_integration/ressources/img/afri2.png')); ?>">
                    </a>
                </div>
                <div class="avatar-dropdown-menu">
                    <div class="avatar-image">
                        <img src="<?php echo e(asset('design/assets/img/test.jpg')); ?>" class="user_pict" alt="">
                    </div>
                    <div class="avatar-dropdown-menu-items">
                    <ul>
                        <li>
                            <?php if(Auth::check() && Auth::user()->role_id == 1): ?><a href="/admin">Mon profil</a>
                            <?php elseif(Auth::check() && Auth::user()->role_id == 3): ?>
                                <a href="<?php echo e(route('profile_etudiant',['locale' => App::getlocale()])); ?>">Mon profil</a>
							<?php elseif(Auth::check() && Auth::user()->role_id == 4): ?>
							    <a href="<?php echo e(route('profile_entreprise',['locale' => App::getlocale()])); ?>">Mon profil</a>
                            <?php elseif(Auth::check() && Auth::user()->role_id == 5): ?>
                                <a href="<?php echo e(route('profile_freelance',['locale' => App::getlocale()])); ?>">Mon profil</a>
                            <?php elseif(Auth::check() && Auth::user()->role_id == 6): ?>
                                <a href="<?php echo e(route('profile_startup',['locale' => App::getlocale()])); ?>">Mon profil</a>
							<?php endif; ?>
                        </li>
                        <li>
                        <a href="<?php echo e(route('logout',['locale' => App::getlocale()])); ?>">Deconnexion</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>

<?php /**PATH C:\wamp64\www\dashboard-model\resources\views/partials/profile_menu.blade.php ENDPATH**/ ?>