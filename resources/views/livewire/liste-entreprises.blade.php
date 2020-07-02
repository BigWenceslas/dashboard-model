<div>
    <div class="page-content bg-white">
            <div>
                 <div class="section-area section-sp1 ovpr-dark bg-fix online-cours" style="background-image:url(assets/images/background/bg1.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center text-white">
                                    <h2>  MADE IN CAMEROON & MADE IN AFRICA </h2>
                                    <h5>Recherchez les meilleurs MADE IN CAMEROON et MADE IN AFRICA </h5>
                                     <div class="cours-search">
                                        <div class="input-group">
                                            <input type="text" wire:model.debounce.300ms="name" class="form-control" placeholder="Je recherche...	">
                                            <div class="input-group-append">
                                            <select wire:model.debounce.300ms="ville_recherche" id="job" class="form-control custom-select bg-white border-left-0 border-md">
                                                <option value="">Ville</option>]
                                                @foreach ($ville_stockes as $item)
                                                <option value="{{$item->ville}}">{{$item->ville}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                            <div class="input-group-append">
                                                <a class="btn" href="#liste-entreprises">rechercher</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mw800 m-auto">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="cours-search-bx m-b30">
                                            <div class="icon-box">
                                                <h3><i class="ti-user"></i><span class="counter">5</span>M</h3>
                                            </div>
                                            <span class="cours-search-text">Plus de 5 million d'oeuvres</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="cours-search-bx m-b30">
                                            <div class="icon-box">
                                                <h3><i class="ti-book"></i><span class="counter">{{$nbre_entreprises}}</span>@if ($nbre_entreprises < 1000)                                                    
                                                @else
                                                K
                                                @endif</h3>
                                            </div>
                                            <span class="cours-search-text">{{$nbre_entreprises}} Entreprises.</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="cours-search-bx m-b30">
                                            <div class="icon-box">
                                                <h3><i class="ti-layout-list-post"></i><span class="counter">{{$nbre_formations_gratuites}}</span>@if ($nbre_formations_gratuites < 1000)                                                    
                                                @else
                                                K
                                                @endif</h3>
                                            </div>
                                            <span class="cours-search-text">Formation gratuites.</span>
                                        </div>
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
                                        <a href="javascript:void(0)" class="btn  "> Liste des entreprises</a>
                                        <div class="sidebar_wrap">
                                            <!-- Single Sidebar -->
                                            <div class="single_sidebar">
                                                <h4>Recherche par ville</h4>
                                                <ul class="no-ul-list">
                                                    @foreach ($ville_stockes as $item)
                                                    <li>
                                                        <input wire:model="filtre_ville" value="{{$item->ville}}" class="checkbox-custom" type="checkbox">
                                                        <label for="filtre_ville" class="checkbox-custom-label">{{$item->ville}} - {{$item->nbre}}</label>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                                <div class="single_sidebar">
                                                    <h4>Recherche par  Categorie</h4>
                                                    <ul class="no-ul-list">
                                                        @foreach ($categories_stockes as $item)
                                                        <li>
                                                            <input wire:model="filtre_categorie" value="{{$item->categorie}}" class="checkbox-custom" type="checkbox">
                                                            <label for="filtre_categorie" class="checkbox-custom-label">{{$item->categorie}} - {{$item->nbre}}</label>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12"  id="liste-entreprises">
                                
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="filter_box">
                                                <div class="filter_box_first">
                                                    <h4>Showing 1-8 of Results</h4>
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
                                    
                                    <div class="row">
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
                                            <nav aria-label="Page navigation example">
                                              <ul class="pagination">
                                                <li class="page-item">
                                                  <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                  </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                  <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                  </a>
                                                </li>
                                              </ul>
                                            </nav>
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
