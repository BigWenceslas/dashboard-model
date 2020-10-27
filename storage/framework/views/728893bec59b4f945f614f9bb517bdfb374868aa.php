<div>
		<div class="container position-relative">
			<div class="footer-main bg-white2 primary-font ">
				<div class="row no-gutters">
					<div class="col">
						<div class="footer-links d-flex justify-content-between">
							<div class="footer-left-links">
								<div class="linkcol">
									<h5 class="font-weight-extraBold font-15"><?php echo app('translator')->get('vitrine.footer_contact'); ?></h5>
									<div class="menu-company-container"><?php echo app('translator')->get('vitrine.footer_contact_info'); ?>
										<div class="all-links"> <a href="#" class=""><span class="icon-facebook"></span></a> <a href="#" class=""><span class="icon-twitter"></span></a> <a href="#" class=""><span class="icon-instagram"></span></a> <a href="#" class=""><span class="icon-youtube-play"></span></a> </div>
									</div>
								</div>
								<div class="linkcol">
									<h5 class="font-weight-extraBold font-15"><?php echo app('translator')->get('vitrine.footer_menu_principal'); ?></h5>
									<div class="menu-company-container">
										<ul id="menu-company" class="menu">
											<li id="menu-item-1060" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1060"><a href="<?php echo e(route('home',['locale' => App::getlocale()])); ?>"><?php echo app('translator')->get('vitrine.footer_accueil'); ?></a></li>
											<li id="menu-item-1149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1149"><a href="<?php echo e(route('apropos.index',['locale' => App::getlocale()])); ?>"><?php echo app('translator')->get('vitrine.lien_pourquoi'); ?></a></li>
											<li id="menu-item-1063" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1063"><a href="<?php echo e(route('services.index',['locale' => App::getlocale()])); ?>"><?php echo app('translator')->get('vitrine.footer_service'); ?></a></li>
											<li id="menu-item-1062" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1062"><a href="<?php echo e(route('formations.index',['locale' => App::getlocale()])); ?>"><?php echo app('translator')->get('vitrine.footer_formation'); ?></a></li>
											<li id="menu-item-778" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-778"><a href="#"></a><?php echo app('translator')->get('vitrine.footer_investissement'); ?></li>
											<li id="menu-item-778" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-778"><a href="<?php echo e(route('contactus.index',['locale' => App::getlocale()])); ?>"><?php echo app('translator')->get('vitrine.footer_contact'); ?></a></li>
										</ul>
									</div>
								</div>
								<div class="linkcol">
									<h5 class="font-weight-extraBold font-15"><?php echo app('translator')->get('vitrine.footer_a_propos'); ?></h5>
									<div class="menu-support-container">
										<div class="social-link mt-auto"><?php echo app('translator')->get('vitrine.footer_a_propos_info'); ?></div>
									</div>
								</div>
								
								<div class="footer-right-link d-flex flex-column">
									<div class="get-start">
										<h5 class="font-weight-extraBold font-15"><?php echo app('translator')->get('vitrine.footer_start'); ?></h5>
										<a href="<?php echo e(route('register_type',['locale' => App::getlocale()])); ?>" class="sign-up"><?php echo app('translator')->get('vitrine.footer_inscription'); ?></a>
										<a href="<?php echo e(route('login_view',['locale' => App::getlocale()])); ?>" class="sign-in"><?php echo app('translator')->get('vitrine.footer_connexion'); ?></a> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom ">
			
		</div>
</div><?php /**PATH /opt/lampp/htdocs/afq/resources/views/livewire/footer.blade.php ENDPATH**/ ?>