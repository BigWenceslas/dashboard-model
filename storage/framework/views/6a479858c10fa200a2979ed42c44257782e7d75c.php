<div>
    <div class="page-content bg-white">
            <div>
                 <div class="section-area section-sp1 ovpr-dark bg-fix online-cours" style="background-image:url(assets/images/background/bg1.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center text-white">
                                    <h5>  AFRICKUP EST PROMOTEUR MADE IN CAMEROON et MADE IN AFRICA </h5>
                                    <p>Recherchez les meilleurs business et opportunités sur tout le continent.<br/>
(Seules les entreprises portant la mention VERIFIE, ont été tester par Africkup et sont 100% africaines)</p><br/>
                                     <div class="cours-search">
                                         <form>
                                        <div class="input-group">
                                            <input type="text" wire:model="recherche" class="form-control" placeholder="Je recherche...	">
                                            <div class="input-group-append">
                                            <select wire:model="nom_ville" id="job" class="form-control custom-select bg-white border-left-0 border-md">
                                                <option value="">Ville</option>
                                                <?php $__currentLoopData = $ville_stockes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($ville->ville != "" or $ville->ville != null): ?>
                                                <option value="<?php echo e($ville->ville); ?>"><?php echo e($ville->ville); ?></option>
                                                <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                            <div class="input-group-append">
                                                <a class="btn" href="#resultat-recherche">rechercher</a> 
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>  
            </div>
            </div>
   <div class="content-block">
                    <div class="section-area section-sp1">
                        <div class="container">
                    <section class="gray">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 hide-91">
                                    <div class="inner_sidebar">
                                        <a href="javascript:void(0)" class="btn "> Liste des entreprises</a>
                                        <div class="sidebar_wrap">
                                            <!-- Single Sidebar -->
                                            <div class="single_sidebar">
                                                <h4>Recherche par ville</h4>
                                                <ul class="no-ul-list">
                                                    <?php $__currentLoopData = $ville_stockes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <?php if($item->ville != ""): ?>
                                                        <input value="<?php echo e($item->ville); ?>" class="checkbox-custom" type="checkbox">
                                                        <label for="filtre_ville" class="checkbox-custom-label"><?php echo e($item->ville); ?> - <?php echo e($item->nbre); ?></label>
                                                        <?php endif; ?>
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>

                                                <div class="single_sidebar">
                                                    <h4>Recherche par  Categorie</h4>
                                                    <ul class="no-ul-list">
                                                        <?php $__currentLoopData = $categories_stockes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <input value="<?php echo e($item->categorie); ?>" class="checkbox-custom" type="checkbox">
                                                            <label for="filtre_categorie" class="checkbox-custom-label"><?php echo e($item->categorie); ?> - <?php echo e($item->nbre); ?></label>
                                                        </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12" id="liste-entreprises">
                                
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="filter_box">
                                                <div class="filter_box_first">
                                                    <h4>Affiche <?php echo e($page); ?>/<?php echo e($nombre_pages); ?> page des résultats</h4>
                                                </div>
                                                <div class="filter_box_right">
                                                    <div class="single_single_list">
                                                        <a href="#" class="btn btn_filter"><i class="lni lni-grid-alt"></i></a>	
                                                    </div>
                                                    <div class="single_single_list">
                                                        <a href="#" class="btn btn_filter"><i class="lni lni-list"></i></a>
                                                    </div>
                                                    <div class="single_single_list show-91 hide-92">
                                                        <a href="javascript:void(0)" onclick="openNav()" id="open2" class="btn btn_filter lg"><i class="ti-search mr-1"></i>Search Job</a>	
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row" id="resultat-recherche">
                                        <!-- Single Job Grid -->
                                    <?php $__currentLoopData = $entreprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="single_job_box style_1">
                                                <div class=" "><h5><a href="<?php echo e(route('apropos.show',['apropo' => $item->id])); ?>">
                                                <img src="<?php echo e(asset('storage/'.$item->logo)); ?>" alt="" class="circle pull-left" style=" width: 80px; height : 80px;margin: 5px; " > <?php echo e($item->nom); ?> </a></h5>
                                                <?php if($item->site_web): ?>
                                                <span class="pull-left"><?php echo e($item->site_web); ?></span><br/>
                                                <?php endif; ?>
                                                <?php if($item->adresse): ?>
                                                <span class="pull-left"> <?php echo e($item->adresse); ?></span><br/>
                                                <?php endif; ?>
                                                <?php if($item->services_produits): ?>
                                                <span class="pull-left"> <?php echo e($item->services_produits); ?>, etc…! </span>
                                                <?php endif; ?>
                                                </div>
                                                <?php if($item->statut == "verifie"): ?>
                                                <span class="job_type full_time  pull-right">Statut Verifié</span>
                                                <?php endif; ?>	
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                             <div class="row">
                                        <div class="col-lg-12">
                                            <?php echo e($entreprises->links()); ?>

                                        </div>
                                    </div>
                            </div>
                        </div>
                    </section>
                        </div>
                    </div>
                    
                    <!-- Testimonials -->
                 
                    <!-- Testimonials END ==== -->
                </div>
</div>
<?php /**PATH C:\wamp64\www\dashboard-model\resources\views/livewire/liste-entreprises.blade.php ENDPATH**/ ?>