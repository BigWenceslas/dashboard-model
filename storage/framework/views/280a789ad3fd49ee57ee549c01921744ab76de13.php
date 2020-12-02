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
<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('design/assets/uploads/2019/04/favicon.png')); ?>"/>
<title>Evénement</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/fonts5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/bootstrap.min5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/animate5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/flexslider5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet'  href='<?php echo e(asset('design/assets/css/dist/block-library/style.min5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/css/dist/block-library/theme.min5223.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo e(asset('design/assets/style5224.css')); ?>' type='text/css' media='all' />
<link rel='stylesheet' href="<?php echo e(asset('design/assets/style5223.css')); ?>" type='text/css' media='all'/>
<link rel='stylesheet'  href='<?php echo e(asset('design/assets/print5223.css')); ?>' type='text/css' media='print' />
<link rel="stylesheet" href="<?php echo e(asset('design/parfait_integration/css/header_respon.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('design/parfait_integration/css/dejeuner.css')); ?>">

<script type='text/javascript' src='<?php echo e(asset('design/assets/js/popper.min5223.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery/jquery4a5f.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery/jquery-migrate.min330a.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/video-popup/js/YouTubePopUp.jquery0d3f.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/video-popup/js/YouTubePopUp0d3f.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/bootstrap.min5223.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/jquery.flexslider5223.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('design/assets/js/custom5223.js')); ?>'></script>
<?php echo \Livewire\Livewire::styles(); ?>

 <style>
        @import  url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.container{
  max-width: 800px;
  background: #fff;
  width: 800px;
  padding: 25px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  max-width: 95%;
  margin-left: auto;
  margin-right: auto;
}
.container .text{
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  background: #2d74d9;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.container form{
  padding: 30px 0 0 0;
}
.container form .form-row{
  display: flex;
  margin: 32px 0;
  flex-wrap: nowrap;
}
form .form-row .input-data{
  width: 100%;
  height: 40px;
  margin: 0 20px;
  position: relative;
}
form .form-row .textarea{
  height: 70px;
}
.input-data input,
.textarea textarea{
  display: block;
  width: 100%;
  height: 100%;
  border: none;
  font-size: 17px;
  border-bottom: 2px solid rgba(0,0,0, 0.12);
}

.input-data select{
  display: block;
  width: 100%;
  height: 100%;
  border: none;
  font-size: 17px;
  border-bottom: 2px solid rgba(0,0,0, 0.12);
}

.input-data input:focus ~ label, .textarea textarea:focus ~ label,
.input-data input:valid ~ label, .textarea textarea:valid ~ label{
  transform: translateY(-20px);
  font-size: 14px;
  color: #3498db;
}
.textarea textarea{
  resize: none;
  padding-top: 10px;
}
.input-data label{
  position: absolute;
  pointer-events: none;
  bottom: 10px;
  font-size: 16px;
  transition: all 0.3s ease;
}
.textarea label{
  width: 100%;
  bottom: 40px;
  background: #fff;
}
.input-data .underline{
  position: absolute;
  bottom: 0;
  height: 2px;
  width: 100%;
}
.input-data .underline:before{
  position: absolute;
  content: "";
  height: 2px;
  width: 100%;
  background: #3498db;
  transform: scaleX(0);
  transform-origin: center;
  transition: transform 0.3s ease;
}
.input-data input:focus ~ .underline:before,
.input-data input:valid ~ .underline:before,
.textarea textarea:focus ~ .underline:before,
.textarea textarea:valid ~ .underline:before{
  transform: scale(1);
}
.submit-btn .input-data{
  overflow: hidden;
  height: 45px!important;
  width: 25%!important;
}
.submit-btn .input-data .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: #2d74d9;
  transition: all 0.4s;
}
.submit-btn .input-data:hover .inner{
  left: 0;
}
.submit-btn .input-data input{
  background: none;
  border: none;
  color: #fff;
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
  position: relative;
  z-index: 2;
}

#modal-dejeuner #modal-dejeuner-intermediation .modal-dialog{
      max-width: 100%;
  }

  #modal-dejeuner #modal-dejeuner-intermediation .modal-content{
      background: transparent;
      border: none;
      width: fit-content;
      margin-left: auto;
      margin-right: auto;
      max-width: 100%;
  }

@media (max-width: 700px) {
  .container .text{
    font-size: 30px;
  }
  .container form{
    padding: 10px 0 0 0;
  }
  .container form .form-row{
    display: block;
  }
  form .form-row .input-data{
    margin: 15px 0!important;
  }
  .submit-btn .input-data{
    width: 40%!important;
  }
  
  .submit-btn{
      text-align: center;
      justify-content: center;
      display: flex !important;
  }
  


}
</style>
</head>
<body>
<?php echo $__env->make('partials.site_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <header class="bg-white">
        <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('head',['viewname' => 'Evénement'])->dom;
} elseif ($_instance->childHasBeenRendered('W2GNWKs')) {
    $componentId = $_instance->getRenderedChildComponentId('W2GNWKs');
    $componentTag = $_instance->getRenderedChildComponentTagName('W2GNWKs');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('W2GNWKs');
} else {
    $response = \Livewire\Livewire::mount('head',['viewname' => 'Evénement']);
    $dom = $response->dom;
    $_instance->logRenderedChild('W2GNWKs', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
    </header>
        <div class="container_card">
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card_fond">
                <div class="container_photo_fond">
                    <img src="<?php echo e(asset('storage/'.$event->image)); ?>" alt="<?php echo e($event->titre); ?>">
                </div>
                <h2 class="titre_fond"><?php echo e($event->titre); ?></h2>
                <p class="paragraphe_fond"><?php echo $event->descriptif; ?></p>
                <div class="container_bouton_learn">
                    <a href="#" class="learn_button bouton_africkup anul_lien" data-type="<?php echo e($event->type); ?>" data-toggle="modal"
                         data-target="#<?php if($event->type == 'organisation'): ?><?php echo e("modal-dejeuner"); ?><?php else: ?><?php echo e("modal-dejeuner-intermediation"); ?><?php endif; ?>">Learn more</a>
                </div>
            </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Modal 1 -->
      <div class="modal fade" id="modal-dejeuner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="text">
                        Contactez nous</div>
                    <form action="<?php echo e(route('event_request',['locale' => App::getLocale()])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                        <div class="form-row">
                            <input hidden value="" id="event_type" name="event_type"/>
                            <input hidden value="<?php echo e($service->slug); ?>" id="slug" name="slug"/>
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
                                <input type="email" name="email" required>
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
									<?php $__currentLoopData = $all_countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
										<option value="<?php echo e($country->name->common); ?>"><?php echo $country->name->common; ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
                                <div class="underline">
                                </div>
                                <label for="">Pays</label>
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
      <div class="modal fade" id="modal-dejeuner-intermediation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="text">
                        Contactez nous</div>
                    <form action="<?php echo e(route('event_request',['locale' => App::getLocale()])); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                        <div class="form-row">
                            <input hidden value="" id="event_type" name="event_type"/>
                            <input hidden value="<?php echo e($service->slug); ?>" id="slug" name="slug"/>
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
                                <input type="email" name="email" required>
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
									<?php $__currentLoopData = $all_countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
										<option value="<?php echo e($country->name->common); ?>"><?php echo $country->name->common; ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
                                <div class="underline">
                                </div>
                                <label for="">Pays</label>
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
                            <div class="input-data textarea">
                                <input type="file" name="documents" placeholder="Desxcription du projet" required>
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
    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('footer')->dom;
} elseif ($_instance->childHasBeenRendered('yqTraud')) {
    $componentId = $_instance->getRenderedChildComponentId('yqTraud');
    $componentTag = $_instance->getRenderedChildComponentTagName('yqTraud');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yqTraud');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $dom = $response->dom;
    $_instance->logRenderedChild('yqTraud', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
  </footer>
  <script src="../cdn.jsdelivr.net/npm/bootstrap-select%401.13.9/dist/js/bootstrap-select.min.js"></script>
  <script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/responsive-youtube-vimeo-popup/assets/js/wp-video-popup5223.js')); ?>'></script>
  <script type='text/javascript' src='<?php echo e(asset('design/assets/js/priority-menu4963.js')); ?>'></script>
  <script type='text/javascript' src='<?php echo e(asset('design/assets/plugins/sassy-social-share/public/js/sassy-social-share-publicabd4.js')); ?>'></script>
  <script type='text/javascript' src='<?php echo e(asset('design/assets/js/wp-embed.min5223.js')); ?>'></script>
<?php echo \Livewire\Livewire::scripts(); ?>

	<?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH /opt/lampp/htdocs/afq/resources/views/services/evenement.blade.php ENDPATH**/ ?>