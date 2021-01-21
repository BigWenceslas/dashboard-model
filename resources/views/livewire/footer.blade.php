<div>
		<div class="container position-relative">
			<div class="footer-main bg-white2 primary-font ">
				<div class="row no-gutters">
					<div class="col">
						<div class="footer-links d-flex justify-content-between">
							<div class="footer-left-links">
								<div class="linkcol">
									<h5 class="font-weight-extraBold font-15">@lang('vitrine.footer_contact')</h5>
									<div class="menu-company-container">@lang('vitrine.footer_contact_info')
										<div class="all-links pt-3">
											<a href="#" class="p-3"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
											<a href="#" class="p-3"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
											<a href="#" class="p-3"><i class="fa fa-instagram" aria-hidden="true"></i></a>
											<a href="#" class="p-3"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
								<div class="linkcol">
									<h5 class="font-weight-extraBold font-15">@lang('vitrine.footer_menu_principal')</h5>
									<div class="menu-company-container">
										<ul id="menu-company" class="menu">
											<li id="menu-item-1060" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1060"><a href="{{route('home',['locale' => App::getlocale()])}}">@lang('vitrine.footer_accueil')</a></li>
											<li id="menu-item-1149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1149"><a href="{{route('apropos.index',['locale' => App::getlocale()])}}">@lang('vitrine.lien_pourquoi')</a></li>
											<li id="menu-item-1063" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1063"><a href="{{route('services.index',['locale' => App::getlocale()])}}">@lang('vitrine.footer_service')</a></li>
											<li id="menu-item-1062" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1062"><a href="{{route('formations.index',['locale' => App::getlocale()])}}">@lang('vitrine.footer_formation')</a></li>
											<li id="menu-item-778" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-778"><a href="#"></a>@lang('vitrine.footer_investissement')</li>
											<li id="menu-item-778" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-778"><a href="{{route('contactus.index',['locale' => App::getlocale()])}}">@lang('vitrine.footer_contact')</a></li>
										</ul>
									</div>
								</div>
								<div class="linkcol">
									<h5 class="font-weight-extraBold font-15">@lang('vitrine.footer_a_propos')</h5>
									<div class="menu-support-container">
										<div class="social-link mt-auto">@lang('vitrine.footer_a_propos_info')</div>
									</div>
								</div>
								{{-- <div class="text-left"> <img src="{{asset('design/assets/uploads/2019/04/PCI_DSS.png')}}" alt=""> </div> --}}
								<div class="footer-right-link d-flex flex-column">
									<div class="get-start">
										<h5 class="font-weight-extraBold font-15">@lang('vitrine.footer_start')</h5>
										<a href="{{route('register_type',['locale' => App::getlocale()])}}" class="sign-up">@lang('vitrine.footer_inscription')</a>
										<a href="{{route('login_view',['locale' => App::getlocale()])}}" class="sign-in">@lang('vitrine.footer_connexion')</a> 
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
</div>