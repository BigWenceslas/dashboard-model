<div>
   <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{asset('design/assets/images/afri16.jpg')}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Nos Formations</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="/">Acceuil</a></li>
					<li><a href="{{route('formations.index',['locale' => App::getlocale()])}}">Nos Formations</a></li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-area section-sp1">
                <div class="container">
					 <div class="row">
						<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							<div class="widget courses-search-bx placeani">
								<div class="form-group">
									<div class="input-group">
										<label></label>
										<input wire:model="formationsByName" placeholder="Recherche ..." type="text" required class="form-control">
									</div>
								</div>
							</div>
							<div class="widget widget_archive">
                                <h5 class="widget-title style-1">Nos formations</h5>
                                <ul>
									 @foreach ($categories_formations as $item)
                                    @if ($loop->first)
                                    <li class="active"><a href="#category--{{$item->id}}">{{$item->nom}}</a></li>
                                    @else
                                        <li><a href="#category--{{$item->id}}">{{$item->nom}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
							<div class="widget">
								{{-- <a href="#"><img src="{{asset('design/assets/images/cam.jpg')}}" alt=""/></a> --}}
							</div>
                        </div>
						<div class="col-lg-9 col-md-8 col-sm-12 ">
                        @foreach ($categories_formations as $item)
                            <h2 id="category--{{$item->id}}">{{$item->nom}}</h2><br/>
							<div class="row">
                                @foreach ($formationsResult as $formation)
                                    @if ($formation->nomCategorie == $item->nom)
								<div class="col-md-6 col-lg-3 col-sm-6 m-b30">
									<div class="cours-bx">
										<div class="action-box">
											 <img src="{{asset('storage/'.$formation->image_formation)}}" alt="{{$formation->nom}}">
											<a href="@if($formation->tag == 'formation-payante'){{route('contactus.index',['locale' => App::getlocale()])}}@else{{route('formations.show',['formation' => $formation->slug, 'locale' => App::getlocale()])}}@endif" class="btn">Lire +</a>
										</div>
										<div class="info-bx text-center">
											<h5><a href="{{route('formations.show',['formation' => $formation->slug, 'locale' => App::getlocale()])}}">{{$formation->nom}}</a></h5>
											<span>{{$formation->tag}}</span>
										</div>
										<div class="cours-more-info">
											<div class="review">
												<span>3 Review</span>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
											<div class="price">
												<del></del>
												<h5>@if($formation->prix == 0)@else{{$formation->prix}} {{$devise->valeur}}@endif</h5>
											</div>
										</div>
									</div>
                                </div>
                                    @endif
                                @endforeach
							   </div>
                        @endforeach
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
