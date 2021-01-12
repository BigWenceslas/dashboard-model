                    <div class="avatar-dropdown-menu">
                        <div class="avatar-image"></div>
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
                                <a href="<?php echo e(route('logout',['locale' => App::getlocale()])); ?>">Déconnexion</a>
                            </li>
                        </ul>
                        </div>
                    </div><?php /**PATH /opt/lampp/htdocs/afq/resources/views/partials/profile_menu_mob.blade.php ENDPATH**/ ?>