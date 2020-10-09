<div>
	<div class="container">
		<div class="row no-gutters">
			<div class="logo">
				<a href="{{route('home')}}" class="h2 text-white font-weight-normal"> <img src="{{asset('design/assets/img/afri2.png')}}" /></a>
			</div>
			<nav class="navbar navbar-light">
				<div class="">
					<div class="menu-main-menu-container">
						<ul id="menu-main-menu" class="navbar-nav d-flex align-items-stretch justify-content-end">
							<li id="menu-item-774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774"><a href="{{route('apropos.index')}}">Pourquoi Africkup</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('services.index')}}">Services</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('formations.index')}}">Formation</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="#">Fond D'investissement</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('contactus.index')}}">Contact</a></li>
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('register_type')}}">Inscription</a></li>
							@if (!Auth::check())
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('login_view')}}" class="sign-up">Connexion</a></li>
							@endif
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('vitrine_multilangue')}}" class="sign-up">Vitrine multi-langue</a></li>
							@if (Auth::check())
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('logout')}}" class="sign-up">Déconnexion</a></li>
							@endif
							@if (Auth::check() && Auth::user()->role_id == 1)
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="/admin" class="sign-up">Mon profil</a></li>
							@elseif(Auth::check() && Auth::user()->role_id == 3)
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_etudiant')}}" class="sign-up">Mon profil</a></li>
							@elseif(Auth::check() && Auth::user()->role_id == 4)
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_entreprise')}}" class="sign-up">Mon profil</a></li>
							@elseif(Auth::check() && Auth::user()->role_id == 5)
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_freelance')}}" class="sign-up">Mon profil</a></li>
							@elseif(Auth::check() && Auth::user()->role_id == 6)
							<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_startup')}}" class="sign-up">Mon profil</a></li>
							@endif
							@if (isset($viewname))
								@if ($viewname == "vitrine")
									@if (session()->get('locale') != 'fr')
										<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="locale/fr" class="sign-up"><img width="25px" height="auto" src="{{asset('images/fr.png')}}" ></a></li>
									@endif
									@if (session()->get('locale') != 'en')
										<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="locale/en" class="sign-up"><img width="25px" height="auto" src="{{asset('images/en.png')}}" ></a></li>
									@endif
									@if (session()->get('locale') != 'sp')
										<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="locale/sp" class="sign-up"><img width="25px" height="auto" src="{{asset('images/sp.jpg')}}" ></a></li>
									@endif
									@if (session()->get('locale') != 'pt')
										<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="locale/pt" class="sign-up"><img width="25px" height="auto" src="{{asset('images/pt.png')}}" ></a></li>
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