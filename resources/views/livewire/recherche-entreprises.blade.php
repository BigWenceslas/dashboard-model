<div>
   <div class="section-area section-sp1 ovpr-dark bg-fix online-cours" style="background-image:url(assets/images/background/bg1.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center text-white">
                                    <h2>  MADE IN CAMEROON & MADE IN AFRICA </h2>
                                    <h5>Recherchez les meilleurs MADE IN CAMEROON et MADE IN AFRICA </h5>
                                    <form class="cours-search">
                                        <div class="input-group">
                                            <div class="row">
                                                <div class="col-md-9">
                                                <input type="text" class="form-control mr-1" placeholder="Je recherche...	">
                                                </div>
                                                <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Ville">
                                                </div>
                                             </div>
                                            <div class="input-group-append">
                                                <button class="btn" type="submit">rechercher</button> 
                                            </div>
                                        </div>
                                    </form>
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
