<!doctype html>
<html lang="FR">
<head>
<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/style4.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/navigation.css">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale = 1.0"/>
<link rel="shortcut icon" type="image/png" href="{{asset('design/assets/uploads/2019/04/favicon.png')}}"/>
<title>Fond d'investissement</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel='stylesheet' href='{{asset('design/assets/css/fonts5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/css/bootstrap.min5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/css/animate5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/css/flexslider5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet'  href='{{asset('design/assets/css/dist/block-library/style.min5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/css/dist/block-library/theme.min5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/style5224.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('design/assets/style5223.css')}}" type='text/css' media='all'/>
<link rel='stylesheet'  href='{{asset('design/assets/print5223.css')}}' type='text/css' media='print' />
<link rel="stylesheet" href="{{asset('design/parfait_integration/css/header_respon.css')}}">
<link rel="stylesheet" href="{{asset('design/parfait_integration/css/fond_investissement.css')}}">

<script type='text/javascript' src='{{asset('design/assets/js/popper.min5223.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/jquery/jquery4a5f.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/jquery/jquery-migrate.min330a.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/plugins/video-popup/js/YouTubePopUp.jquery0d3f.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/plugins/video-popup/js/YouTubePopUp0d3f.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/bootstrap.min5223.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/jquery.flexslider5223.js')}}'></script>
<script type='text/javascript' src='{{asset('design/assets/js/custom5223.js')}}'></script>
@livewireStyles

</head>
<body>
@include('partials.site_menu')
    <header class="bg-white">
        @livewire('head',['viewname' => 'fond-investissement'])
    </header>
        <div class="container_card">
            @foreach ($fonds as $fond)
           <div class="card_fond">
               <div class="container_photo_fond">
                   <img src="{{asset('storage/'.$fond->image)}}" alt="{{$fond->titre}}">
               </div>
               <h2 class="titre_fond">{{$fond->titre}}</h2>
               <p class="paragraphe_fond">{{$fond->descriptif}}</p>
               <div class="container_bouton_learn">
                   <a href="{{route('fond_investissement_details',['slug' => $fond->slug,'locale' => App::getlocale()])}}" class="learn_button bouton_africkup anul_lien">Learn more</a>
               </div>
           </div>
            @endforeach
       </div>
  <footer class="bg-white2">
    @livewire('footer')
  </footer>
  <script src="../cdn.jsdelivr.net/npm/bootstrap-select%401.13.9/dist/js/bootstrap-select.min.js"></script>
  <script type='text/javascript' src='{{asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/js/wp-video-popup5223.js')}}'></script>
  <script type='text/javascript' src='{{asset('design/assets/js/priority-menu4963.js')}}'></script>
  <script type='text/javascript' src='{{asset('design/assets/plugins/sassy-social-share/public/js/sassy-social-share-publicabd4.js')}}'></script>
  <script type='text/javascript' src='{{asset('design/assets/js/wp-embed.min5223.js')}}'></script>
@livewireScripts
	@stack('scripts')
</body>

</html>