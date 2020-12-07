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
<title>Evénement</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel='stylesheet' href='{{asset('design/assets/css/fonts5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/css/dejeuner.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/css/bootstrap.min5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/css/animate5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/css/flexslider5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet'  href='{{asset('design/assets/css/dist/block-library/style.min5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/css/dist/block-library/theme.min5223.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('design/assets/style5224.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href="{{asset('design/assets/style5223.css')}}" type='text/css' media='all'/>
<link rel='stylesheet'  href='{{asset('design/assets/print5223.css')}}' type='text/css' media='print' />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
    
<link rel="stylesheet" href="{{asset('design/parfait_integration/css/header_respon.css')}}">
<link rel="stylesheet" href="{{asset('design/parfait_integration/css/dejeuner.css')}}">

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
        @livewire('head',['viewname' => 'Evénement'])
    </header>
        <div class="container_card" style="margin-bottom: 13vh;   margin-top: 75px;">
            @foreach ($events as $event)
            <div class="card_fond">
                <div class="container_photo_fond">
                    <img src="{{asset('storage/'.$event->image)}}" alt="{{$event->titre}}">
                </div>
                <h2 class="titre_fond">{{$event->titre}}</h2>
                <p class="paragraphe_fond">{!! $event->descriptif !!}</p>
                <div class="container_bouton_learn">
                    <a href="#" class="learn_button bouton_africkup anul_lien" data-type="{{$event->type}}" data-toggle="modal"
                         data-target="#@if ($event->type == 'organisation'){{"modal-dejeuner"}}@else{{"modal-dejeuner-intermediation"}}@endif">Learn more</a>
                </div>
            </div>  
            @endforeach
    </div>

    <!-- Modal 1 -->
      <div class="modal fade modal_dejeuner" id="modal-dejeuner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="text">
                        Contactez nous</div>
                    <form action="{{route('event_request',['locale' => App::getLocale()])}}" method="POST">
                    @csrf
                        <div class="form-row">
                            <input hidden value="" id="event_type" name="event_type"/>
                            <input hidden value="{{$service->slug}}" id="slug" name="slug"/>
                            <div class="input-data">
                                <input type="text" name="nom" required>
                                <div class="underline">
                                </div>
                                <label for="">Nom</label>
                            </div>
                            <div class="input-data">
                                <input type="text" name="entreprise" required>
                                <div class="underline">
                                </div>
                                <label for="">Entreprise</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-data">
                                <input type="email" name="email" placeholder=" " required>
                                <div class="underline">
                                </div>
                                <label for="">Email Address</label>
                            </div>
                            <div class="input-data">
                                <input type="text" name="telephone" required>
                                <div class="underline">
                                </div>
                                <label for="">Telephone</label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="input-data">
								<select id="pays" name="pays">
                  <option value="">Choisir un pays</option>
									@foreach($all_countries as $country) 
										<option value="{{$country->name->common}}">{!! $country->name->common !!}</option>
									@endforeach
								</select>
                                <div class="underline">
                                </div>
                                {{-- <label for="">Pays</label> --}}
                            </div>
                            <div class="input-data">
                                <input type="text" name="ville" required>
                                <div class="underline">
                                </div>
                                <label for="">Ville</label>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="input-data">
                                <input type="text" name="vous_recherchez" required>
                                <div class="underline">
                                </div>
                                <label for="">Vous recherchez</label>
                            </div>
                            <div class="input-data">
                                <input type="text" name="ville_hote" placeholder="Ville où aura lieu l’évènement ou le déjeuner" required>
                                <div class="underline">
                                </div>
                                <label for="">Ville hote</label>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="input-data">
                                <input type="number" name="budget" required>
                                <div class="underline">
                                </div>
                                <label for="">budget</label>
                            </div>
                            <div class="input-data">
                                <input type="text" name="duree" required>
                                <div class="underline">
                                </div>
                                <label for="">duree</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-data textarea">
                                <!-- Due to more textarea tag I got an error.. SO I changed the name of texarea tag into changeit. Replace the changeit text/tag to textarea-->
                                <textarea rows="8" cols="80" name="sujet" required></textarea>
                                <br />
                                <div class="underline">
                                </div>
                                <label for="">Sujet de discussion</label>
                                <br />
                            </div>
                        </div>
                        <div class="form-row submit-btn">
                            <div class="input-data">
                                <div class="inner"></div>
                                <input type="submit" value="Valider">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>

      <!-- Modal 2 -->
      <div class="modal fade modal_dejeuner" id="modal-dejeuner-intermediation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="text">
                        Contactez nous</div>
                    <form action="{{route('event_request',['locale' => App::getLocale()])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-row">
                            <input hidden value="" id="event_type" name="event_type"/>
                            <input hidden value="{{$service->slug}}" id="slug" name="slug"/>
                            <div class="input-data">
                                <input type="text" name="nom" required>
                                <div class="underline">
                                </div>
                                <label for="">Nom</label>
                            </div>
                            <div class="input-data">
                                <input type="text" name="entreprise" required>
                                <div class="underline">
                                </div>
                                <label for="">Entreprise</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-data">
                                <input type="email" name="email" placeholder=" " required>
                                <div class="underline">
                                </div>
                                <label for="">Email Address</label>
                            </div>
                            <div class="input-data">
                                <input type="text" name="telephone" required>
                                <div class="underline">
                                </div>
                                <label for="">Telephone</label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="input-data">
								<select id="pays" name="pays">
                                    <option value="">Choisir un pays</option>
									@foreach($all_countries as $country) 
										<option value="{{$country->name->common}}">{!! $country->name->common !!}</option>
									@endforeach
								</select>
                                <div class="underline">
                                </div>
                                {{-- <label for="">Pays</label> --}}
                            </div>
                            <div class="input-data">
                                <input type="text" name="ville" required>
                                <div class="underline">
                                </div>
                                <label for="">Ville</label>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="input-data">
                                <input type="text" name="vous-recherchez" required>
                                <div class="underline">
                                </div>
                                <label for="">Vous recherchez</label>
                            </div>
                            <div class="input-data">
                                <input type="text" name="projet" placeholder="Description du projet" required>
                                <div class="underline">
                                </div>
                                <label for="">Pour le projet</label>
                            </div>
                        </div>

                        <div class="form-row">
                          <div class="input-data">
                            <input type="file" name="documents" placeholder="Desxcription du projet" required>
                          </div>
                        </div>

                        <div class="form-row">
                            <div class="input-data textarea">
                                <textarea rows="8" cols="80" name="a-voir" required></textarea>
                                <br />
                                <div class="underline">
                                </div>
                                <label for="">Sujet de discussion</label>
                                <br />
                            </div>
                        </div>
                        <div class="form-row submit-btn">
                            <div class="input-data">
                                <div class="inner"></div>
                                <input type="submit" value="Valider">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>


  <footer class="bg-white2">
    @livewire('footer')
  </footer>
  <script src="../cdn.jsdelivr.net/npm/bootstrap-select%401.13.9/dist/js/bootstrap-select.min.js"></script>
  <script type='text/javascript' src='{{asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/js/wp-video-popup5223.js')}}'></script>
  <script type='text/javascript' src='{{asset('design/assets/js/priority-menu4963.js')}}'></script>
  <script type='text/javascript' src='{{asset('design/assets/plugins/sassy-social-share/public/js/sassy-social-share-publicabd4.js')}}'></script>
  <script type='text/javascript' src='{{asset('design/assets/js/wp-embed.min5223.js')}}'></script>
  <script>
      jQuery(document).ready(function(){
          if($('.input-data select').val() != ""){
            //   $(this).css('border-bottom-color','#2d74d9');
            alert('oui');
          }
      });
  </script>
    @toastr_js
    @toastr_render
@livewireScripts
	@stack('scripts')
</body>

</html>