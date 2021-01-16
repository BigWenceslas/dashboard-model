<div class="container">
            <div class="row no-gutters">
                <div class="logo">
                    <a href="{{route('home',['locale' => App::getlocale()])}}" class="h2 text-white font-weight-normal">
                        <img src="{{asset('design/parfait_integration/ressources/img/afri2.png')}}">
                    </a>
                </div>
                <div class="avatar-dropdown-menu">
                    <div class="avatar-image">
                        <img src="{{asset('design/assets/img/test.jpg')}}" class="user_pict" alt="">

                    </div>
                    <div class="avatar-dropdown-menu-items">
                    <ul>
                        <li>
                            @if (Auth::check() && Auth::user()->role_id == 1)<a href="/admin">Mon profil</a>
                            @elseif(Auth::check() && Auth::user()->role_id == 3)
                                <a href="{{route('profile_etudiant',['locale' => App::getlocale()])}}">Mon profil</a>
							@elseif(Auth::check() && Auth::user()->role_id == 4)
							    <a href="{{route('profile_entreprise',['locale' => App::getlocale()])}}">Mon profil</a>
                            @elseif(Auth::check() && Auth::user()->role_id == 5)
                                <a href="{{route('profile_freelance',['locale' => App::getlocale()])}}">Mon profil</a>
                            @elseif(Auth::check() && Auth::user()->role_id == 6)
                                <a href="{{route('profile_startup',['locale' => App::getlocale()])}}">Mon profil</a>
							@endif
                        </li>
                        <li>
                        <a href="{{route('logout',['locale' => App::getlocale()])}}">Deconnexion</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>

