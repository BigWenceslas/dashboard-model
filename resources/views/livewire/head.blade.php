<div>
	<div class="container">
		<div class="row no-gutters">
			<div class="logo">
				<a href="{{route('home',['locale' => App::getlocale()])}}" class="h2 text-white font-weight-normal"> <img src="{{asset('design/assets/img/afri2.png')}}" /></a>
			</div>
			<nav class="navbar navbar-light">
				<div class="">
					<div class="menu-main-menu-container">
						<ul id="menu-main-menu" class="navbar-nav d-flex align-items-stretch justify-content-end">
							<li id="menu-item-774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774"><a href="{{route('apropos.index',['locale' => App::getlocale()])}}">Pourquoi Africkup</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('services.index',['locale' => App::getlocale()])}}">Services</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('formations.index',['locale' => App::getlocale()])}}">Formation</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="#">Fond D'investissement</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('contactus.index',['locale' => App::getlocale()])}}">Contact</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('register_type',['locale' => App::getlocale()])}}">Inscription</a></li>
							@if (!Auth::check())
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('login_view',['locale' => App::getlocale()])}}" class="sign-up">Connexion</a></li>
							@endif
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('vitrine_multilangue',['locale' => App::getlocale()])}}" class="sign-up">Vitrine multi-langue</a></li>
							@if (Auth::check())
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('logout',['locale' => App::getlocale()])}}" class="sign-up">Déconnexion</a></li>
							@endif
							@if (Auth::check() && Auth::user()->role_id == 1)
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="/admin" class="sign-up">Mon profil</a></li>
							@elseif(Auth::check() && Auth::user()->role_id == 3)
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_etudiant',['locale' => App::getlocale()])}}" class="sign-up">Mon profil</a></li>
							@elseif(Auth::check() && Auth::user()->role_id == 4)
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_entreprise',['locale' => App::getlocale()])}}" class="sign-up">Mon profil</a></li>
							@elseif(Auth::check() && Auth::user()->role_id == 5)
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_freelance',['locale' => App::getlocale()])}}" class="sign-up">Mon profil</a></li>
							@elseif(Auth::check() && Auth::user()->role_id == 6)
								<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_startup',['locale' => App::getlocale()])}}" class="sign-up">Mon profil</a></li>
							@endif
							@if (isset($viewname))
								@if ($viewname == "vitrine")
									@if (App::getlocale() != 'fr')
										<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('langue',['locale' => 'fr'])}}" class="sign-up"><img width="25px" height="auto" src="{{asset('images/fr.png')}}" ></a></li>
									@endif
									@if (App::getlocale() != 'en')
										<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('langue',['locale' => 'en'])}}" class="sign-up"><img width="25px" height="auto" src="{{asset('images/en.png')}}" ></a></li>
									@endif
									@if (App::getlocale() != 'sp')
										<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('langue',['locale' => 'sp'])}}" class="sign-up"><img width="25px" height="auto" src="{{asset('images/sp.jpg')}}" ></a></li>
									@endif
									@if (App::getlocale() != 'pt')
										<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('langue',['locale' => 'pt'])}}" class="sign-up"><img width="25px" height="auto" src="{{asset('images/pt.png')}}" ></a></li>
									@endif
								@endif
							@endif
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>