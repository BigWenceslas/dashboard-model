<div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div id="container_user_pict">
                <a href="#">
                    <img src="{{asset('design/assets/img/test.jpg')}}" class="user_pict" alt="">
                </a>
            </div>
            <div class="sidebar-header">
                <a href="/" class="anul_lien" id="bloc_logo">
                    <img src="{{asset('design/parfait_integration/ressources/img/afri2.png')}}" id="logo_header" alt="logo">
                </a>
            </div>
            <ul class="liste_responsive nav nav-tabs" role="tablist">
				<li id="menu-item-774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774"><a href="{{route('apropos.liste.all',['locale' => App::getlocale()])}}">Pourquoi Africkup</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('services.index',['locale' => App::getlocale()])}}">Services</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('formations.index',['locale' => App::getlocale()])}}">Formations</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="#">Fond D'investissement</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('contactus.index',['locale' => App::getlocale()])}}">Contact</a></li>
                @if (!Auth::check())
                    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('register_type',['locale' => App::getlocale()])}}">Inscription</a></li>
                @endif
                @if (Auth::check() && Auth::user()->role_id == 1)
                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="/admin">Mon profil</a></li>
                @elseif(Auth::check() && Auth::user()->role_id == 3)
                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_etudiant',['locale' => App::getlocale()])}}">Mon profil</a></li>
				@elseif(Auth::check() && Auth::user()->role_id == 4)
				    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_entreprise',['locale' => App::getlocale()])}}">Mon profil</a></li>
                @elseif(Auth::check() && Auth::user()->role_id == 5)
                    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_freelance',['locale' => App::getlocale()])}}">Mon profil</a></li>
                @elseif(Auth::check() && Auth::user()->role_id == 6)
                    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_startup',['locale' => App::getlocale()])}}">Mon profil</a></li>
                @endif
                @if (Auth::check())
                    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('logout',['locale' => App::getlocale()])}}">Déconnexion</a></li>
                @endif
            </ul>
            <div class="sous_bloc_haut">
            </div>
        </nav>
        <!-- Page Content -->
        <!-- Dark Overlay element -->
        <div class="overlay_header"></div>
    </div>