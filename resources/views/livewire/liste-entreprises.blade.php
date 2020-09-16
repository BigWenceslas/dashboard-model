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
                                                @foreach($ville_stockes as $ville)
                                                @if ($ville->ville != "" or $ville->ville != null)
                                                <option value="{{$ville->ville}}">{{$ville->ville}}</option>
                                                @endif
                                                @endforeach
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
                                                    @foreach ($ville_stockes as $item)
                                                    <li>
                                                        @if ($item->ville != "")
                                                        <input value="{{$item->ville}}" class="checkbox-custom" type="checkbox">
                                                        <label for="filtre_ville" class="checkbox-custom-label">{{$item->ville}} - {{$item->nbre}}</label>
                                                        @endif
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                                <div class="single_sidebar">
                                                    <h4>Recherche par  Categorie</h4>
                                                    <ul class="no-ul-list">
                                                        @foreach ($categories_stockes as $item)
                                                        <li>
                                                            <input value="{{$item->categorie}}" class="checkbox-custom" type="checkbox">
                                                            <label for="filtre_categorie" class="checkbox-custom-label">{{$item->categorie}} - {{$item->nbre}}</label>
                                                        </li>
                                                        @endforeach
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
                                                    <h4>Affiche {{$page}}/{{$nombre_pages}} page des résultats</h4>
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
                                    @foreach ($entreprises as $item)
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="single_job_box style_1">
                                                <div class=" "><h5><a href="{{route('apropos.show',['apropo' => $item->id])}}">
                                                <img src="{{asset('storage/'.$item->logo)}}" alt="" class="circle pull-left" style=" width: 80px; height : 80px;margin: 5px; " > {{$item->nom}} </a></h5>
                                                @if ($item->site_web)
                                                <span class="pull-left">{{$item->site_web}}</span><br/>
                                                @endif
                                                @if ($item->adresse)
                                                <span class="pull-left"> {{$item->adresse}}</span><br/>
                                                @endif
                                                @if ($item->services_produits)
                                                <span class="pull-left"> {{$item->services_produits}}, etc…! </span>
                                                @endif
                                                </div>
                                                @if ($item->statut == "VERIFIE")
                                                <span class="job_type full_time  pull-right">Statut Verifié</span>
                                                @endif	
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                             <div class="row">
                                        <div class="col-lg-12">
                                            {{ $entreprises->links() }}
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
