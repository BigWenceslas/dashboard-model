<div>
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
                                                    <li>
                                                        <input id="ct-1" class="checkbox-custom" name="ct-1" type="checkbox">
                                                        <label for="ct-1" class="checkbox-custom-label">Douala - 10</label>
                                                    </li>
                                                    <li>
                                                        <input id="ct-2" class="checkbox-custom" name="ct-2" type="checkbox">
                                                        <label for="ct-2" class="checkbox-custom-label">Yaounde - 12</label>
                                                    </li>
                                                    <li>
                                                        <input id="ct-3" class="checkbox-custom" name="ct-3" type="checkbox">
                                                        <label for="ct-3" class="checkbox-custom-label">Buea - 08</label>
                                                    </li>
                                                    <li>
                                                        <input id="ct-4" class="checkbox-custom" name="ct-4" type="checkbox">
                                                        <label for="ct-4" class="checkbox-custom-label">Bafoussam - 10</label>
                                                    </li>
                                                    <li>
                                                        <input id="ct-5" class="checkbox-custom" name="ct-5" type="checkbox">
                                                        <label for="ct-5" class="checkbox-custom-label">Limbe   - 04</label>
                                                    </li>
                                                     
                                                </ul>
                                            </div>

                                                <div class="single_sidebar">
                                                    <h4>Recherche par  Categorie</h4>
                                                    <ul class="no-ul-list">
                                                        <li>
                                                            <input id="ctg-11" class="checkbox-custom" name="ctg-11" type="checkbox">
                                                            <label for="ctg-11" class="checkbox-custom-label">Telecommunications - 09</label>
                                                        </li>
                                                        
                                                        <li>
                                                            <input id="ctg-21" class="checkbox-custom" name="ctg-21" type="checkbox">
                                                            <label for="ctg-21" class="checkbox-custom-label">Business - 20</label>
                                                        </li>
                                                        
                                                        <li>
                                                            <input id="ctg-31" class="checkbox-custom" name="ctg-31" type="checkbox">
                                                            <label for="ctg-31" class="checkbox-custom-label">Agriculture - 10</label>
                                                        </li>
                                                        
                                                        <li>
                                                            <input id="ctg-41" class="checkbox-custom" name="ctg-41" type="checkbox">
                                                            <label for="ctg-41" class="checkbox-custom-label">Electricité - 08</label>
                                                        </li>
                                                        <li>
                                                            <input id="ctg-51" class="checkbox-custom" name="ctg-51" type="checkbox">
                                                            <label for="ctg-51" class="checkbox-custom-label">Autres - 04</label>
                                                        </li>
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
                                                <span class="pull-left">{{$item->site_web}}</span><br/>
                                                <span class="pull-left"> {{$item->adresse}}</span><br/>
                                                <span class="pull-left"> {{$item->services_produits}}, etc…! </span>
                                                </div>
                                                @if ($item->statut == "VERIFIE")
                                                <span class="job_type full_time  pull-right">Statut Verifié</span>
                                                @endif	
                                            </div>
                                        </div>
                                        </div>
                                        
                                        @endforeach
                                        </div>
                                 
                                         
                                        </div>
                                        <!-- Single Job Grid -->
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
