@extends('layout.detailsTemplates')

@section('title')
    Details {{$service->nom}}2
@endsection

@section('left-menu')
						<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							{{-- <div class="widget courses-search-bx placeani">
								<div class="form-group">
									<div class="input-group">
										<label>Recherche... </label>
										<input name="name" type="text" required class="form-control">
									</div>
								</div>
							</div> --}}
							<div class="widget widget_archive">
                                <h5 class="widget-title style-1">Nos Services</h5>
                                <ul>
                                    @foreach ($categories_services as $item)
                                    @if ($loop->first)
                                    <li class="active"><a href="{{route('services.index')}}#category--{{ $item->id }}">{{$item->nom}}</a></li>
                                    @else
                                        <li><a href="{{route('services.index')}}#category--{{ $item->id }}">{{$item->nom}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
							{{-- <div class="widget">
								<a href="#"><img src="assets/images/cam.jpg" alt=""/></a>
							</div> --}}
						</div>
@endsection

@section('content')
    <div class="col-lg-9 col-md-8 col-sm-12">
                         
							<div class="row">
								<div class="col-md-6 col-lg-6 col-sm-6 m-b30">
									<div class="cours-bx">
										<div class="action-box">
											<div class="video-responsive"><img src="{{asset('public/storage/'.$service->image_service)}}" alt=""></div>
										</div>
										<div class="info-bx text-center">
											<h5><a href="#">{{$service->nom}}</a></h5>
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
												<br/>
												<h5> @if ($service->prix == 0)
                                                Gratuit
                                                @else
                                                {{$service->prix}} {{$devise->valeur}}
                                                @endif</h5>
											</div>
										</div>
									</div>
                                </div>
								
								<div class="col-md-6 col-lg-6 col-sm-6 m-b30">
									<p>

                     Estimez la valeur de votre entreprise et managez vos risques grace a quelques questions simples . vous recevez ensuite(48h) votre rapport d'evaluation complet.<br/>
                     
                     Utilisez ce rapport pour indiquer la valeur de votre entreprise pour augmenter vos actions, faire des ameliorations, informer vos potentiels investisseurs.<br/>
                     @livewire('evaluation-service')
                    </p>
                                </div>
                            </div>
						</div>
@endsection