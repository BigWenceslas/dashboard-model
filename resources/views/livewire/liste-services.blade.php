<div>
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{asset('design/assets/images/afri16.jpg')}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Nos services</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="/">Acceuil</a></li>
					<li><a href="{{route('services.index')}}">Nos Services</a></li>
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
							<div>
                                <div class="widget courses-search-bx placeani">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label></label>
                                                <input wire:model="servicesByName" placeholder="Recherche ..." type="text" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
							<div class="widget widget_archive">
                                <h5 class="widget-title style-1">Nos Services</h5>
                                <ul>
                                    @foreach ($categories_services as $item)
                                    @if ($loop->first)
                                    <li class="active"><a href="#category--{{ $item->id }}">{{$item->nom}}</a></li>
                                    @else
                                        <li><a href="#category--{{ $item->id }}">{{$item->nom}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
							<div class="widget">
								{{-- <a href="#"><img src="{{asset('design/assets/images/cam.jpg')}}" alt=""/></a> --}}
							</div>
                        </div>
                        @foreach ($categories_services as $item)
                                        @if ($item->nom == "Nos Services gratuits")
                                        <div class="col-lg-9 col-md-8 col-sm-12">
                                        <h2 id="category--{{$item->id}}">{{$item->nom}}</h2><br/>
                                        <div class="row">
                                             @foreach ($servicesResult as $service)
                                             @if ($service->nomCategorie == $item->nom)
                                            <div class="col-md-6 col-lg-6 col-sm-6 m-b30">
                                                <div class="cours-bx">
                                                    <div class="action-box">
                                                        <img src="{{asset('storage/'.$service->image_service)}}" alt="">
                                                        <a href="{{route('services.show',['service' => $service->id])}}" class="btn">Lire +</a>
                                                    </div>
                                                    <div class="info-bx text-center">
                                                        <h5><a href="{{route('services.show',['service' => $service->id])}}">{{$service->nom}}</a></h5>
                                                        <span>{{$service->tag}}</span>
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
                                                            <h5>@if ($service->prix != 0)
                                                            {{$service->prix}} {{$devise->valeur}}
                                                        @endif</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        @else
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h2 id="category--{{$item->id}}">{{$item->nom}}</h2><br/>
                                    <div class="row">
                                        @foreach ($servicesResult as $service)
                                        @if ($service->nomCategorie == $item->nom)
                                        <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                                            <div class="cours-bx">
                                                <div class="action-box">
                                                    <img src="{{asset('storage/'.$service->image_service)}}" alt="">
                                                    <a href="{{route('services.show',['service' => $service->id])}}" class="btn">Lire +</a>
                                                </div>
                                                <div class="info-bx text-center">
                                                    <h5><a href="{{route('services.show',['service' => $service->id])}}">{{$service->nom}}</a></h5>
                                                    <span>{{$service->tag}}</span>
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
                                                        <h5>@if ($service->prix != 0)
                                                            {{$service->prix}} {{$devise->valeur}}
                                                        @endif</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    </div>
                                </div>
                        @endif
                        @endforeach
					</div>
				</div>
            </div>
        </div>
		<!-- contact area END -->
		
    </div>
</div>
