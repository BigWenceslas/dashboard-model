<div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div class="sidebar-header">
                <a href="/" class="anul_lien" id="bloc_logo">
                    <img src="{{asset('design/parfait_integration/ressources/img/afri2.png')}}" id="logo_header" alt="logo">
                </a>
            </div>
            <ul class="liste_responsive nav nav-tabs" role="tablist">
				<li id="menu-item-774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774"><a href="{{route('apropos.index',['locale' => App::getlocale()])}}">Pourquoi Africkup</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('services.index',['locale' => App::getlocale()])}}">Services</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('formations.index',['locale' => App::getlocale()])}}">Formation</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="#">Fond D'investissement</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('contactus.index',['locale' => App::getlocale()])}}">Contact</a></li>
				<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="{{route('register_type',['locale' => App::getlocale()])}}">Inscription</a></li>
            </ul>
            <div class="sous_bloc_haut">
            </div>
        </nav>
        <!-- Page Content -->
        <!-- Dark Overlay element -->
        <div class="overlay_header"></div>
    </div>