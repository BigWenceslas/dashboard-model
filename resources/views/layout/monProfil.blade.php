<!doctype html>
<html lang="FR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="{{asset('design/assets/uploads/2019/04/favicon.png')}}"/>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('design/parfait_integration/css/header_respon.css')}}">
  <link rel="stylesheet" href="{{asset('design/parfait_integration/style_dashbord.css')}}">
  <link rel="stylesheet" href="{{asset('design/assets/style5223.css')}}">
  <link rel="stylesheet" href="{{asset('design/assets/css/fonts5223.css')}}">
  <link rel="stylesheet" href="{{asset('design/assets/css/fonts52234.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
	@livewireStyles 
  <title>@yield('title')</title>
</head>
<body>
@yield('body')
<footer>
    <div>
    <div class="container position-relative">
        <div class="footer-main bg-white2 primary-font ">
            <div class="row no-gutters">
                <div class="col">
                    <div class="footer-links d-flex justify-content-between">
                        <div class="footer-left-links">
                            <div class="linkcol">
                                <h5 class="font-weight-extraBold font-15">contact</h5>
                                <div class="menu-company-container"> Nous sommes situés à Yaoundé, entrée Face Visite Technique Nkolfoulou, Tel : , email : infos@africkup.com
                                    <div class="all-links"> <a href="#" class=""><span class="icon-facebook"></span></a> <a href="#" class=""><span class="icon-twitter"></span></a> <a href="#" class=""><span class="icon-instagram"></span></a> <a href="#" class=""><span class="icon-youtube-play"></span></a> </div>
                                </div>
                            </div>
                            <div class="linkcol">
                                <h5 class="font-weight-extraBold font-15">Menu principal</h5>
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
                                <h5 class="font-weight-extraBold font-15">A propos</h5>
                                <div class="menu-support-container">
                                    <div class="social-link mt-auto">Notre Cabinet realise vos etudes et vous met en relation avec des personnes et institutions adequates pour atteindre nos objectifs</div>
                                </div>
                            </div>
                            <div class="text-left"> <img src="{{asset('design/assets/uploads/2019/04/PCI_DSS.png')}}" alt=""> </div>
                        </div>
                        <div class="footer-right-link d-flex flex-column">
                            <div class="get-start">
                                <h5 class="font-weight-extraBold font-15">Demarrer avec africkup</h5>
                                <a href="{{route('register_type',['locale' => App::getlocale()])}}" class="sign-up">@lang('vitrine.footer_inscription')</a>
                                <a href="{{route('login_view',['locale' => App::getlocale()])}}" class="sign-in">@lang('vitrine.footer_connexion')</a> 
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
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="{{asset('design/parfait_integration/js/jquery.js')}}"></script>
    <script src="https://kit.fontawesome.com/772ee43bf0.js" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    @toastr_js
    @toastr_render
@livewireScripts
@stack('scripts')
</body>
</html>