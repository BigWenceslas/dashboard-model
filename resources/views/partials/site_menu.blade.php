<div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>
            @if (Auth::check())
            <div id="container_user_pict">
                <img src="{{asset('storage/'.Auth::user()->avatar)}}" class="user_pict" alt="">
            </div>
            @endif
            <div class="sidebar-header">
                <a href="/" class="anul_lien" id="bloc_logo">
                    <img src="{{asset('design/parfait_integration/ressources/img/afri2.png')}}" id="logo_header" alt="logo">
                </a>
            </div>
            <ul class="liste_responsive nav nav-tabs" role="tablist">
				<li id="menu-item-774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774"><a href="{{route('apropos.liste.all',['locale' => App::getlocale()])}}">@lang('vitrine.pourquoi')</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('services.index',['locale' => App::getlocale()])}}">@lang('vitrine.footer_service')</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('formations.index',['locale' => App::getlocale()])}}">@lang('vitrine.footer_formation')</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('fond_investissement',['locale' => App::getlocale()])}}">@lang('vitrine.footer_investissement')</a></li>
                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('contactus.index',['locale' => App::getlocale()])}}">@lang('vitrine.footer_contact')</a></li>
                @if (!Auth::check())
					<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('login_view',['locale' => App::getlocale()])}}">@lang('vitrine.footer_connexion')</a></li>
				@endif
                @if (!Auth::check())
                    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('register_type',['locale' => App::getlocale()])}}">@lang('vitrine.footer_inscription')</a></li>
                @endif
                @if (Auth::check() && Auth::user()->role_id == 1)
                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="/admin">@lang('vitrine.footer_profil')</a></li>
                @elseif(Auth::check() && Auth::user()->role_id == 3)
                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_etudiant',['locale' => App::getlocale()])}}">@lang('vitrine.footer_profil')</a></li>
				@elseif(Auth::check() && Auth::user()->role_id == 4)
				    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_entreprise',['locale' => App::getlocale()])}}">@lang('vitrine.footer_profil')</a></li>
                @elseif(Auth::check() && Auth::user()->role_id == 5)
                    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_freelance',['locale' => App::getlocale()])}}">@lang('vitrine.footer_profil')</a></li>
                @elseif(Auth::check() && Auth::user()->role_id == 6)
                    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('profile_startup',['locale' => App::getlocale()])}}">@lang('vitrine.footer_profil')</a></li>
                @endif
                @if (Auth::check())
                    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('logout',['locale' => App::getlocale()])}}">@lang('vitrine.footer_deconnexion')</a></li>
                @endif
            </ul>
            <div class="sous_bloc_haut">
            </div>
        </nav>
        <!-- Page Content -->
        <!-- Dark Overlay element -->
        <div class="overlay_header"></div>
    </div>