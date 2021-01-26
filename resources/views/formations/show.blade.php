@extends('layout.detailsTemplates')

@section('title')
    Formation
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
                                <h5 class="widget-title style-1">Nos Formations</h5>
                                <ul>
                                    @foreach ($categories_formations as $item)
                                    @if ($loop->first)
                                    <li class="active"><a href="{{route('formations.index',['locale' => App::getlocale()])}}#category--{{ $item->id }}">{{$item->nom}}</a></li>
                                    @else
                                        <li><a href="{{route('formations.index',['locale' => App::getlocale()])}}#category--{{ $item->id }}">{{$item->nom}}</a></li>
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
										@if ($formation->lien_video1 != "" and $formation->lien_video2 != "" and $formation->lien_video3 != "")
										<div class="action-box">
											<div class="video-responsive">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$formation->lien_video1}}"
                                                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            </div>
										</div>
										<div class="action-box">
											<div class="video-responsive">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$formation->lien_video2}}"
                                                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            </div>
										</div>
										<div class="action-box">
											<div class="video-responsive">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$formation->lien_video3}}"
                                                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            </div>
										</div>
										@elseif ($formation->lien_video1 == "")
										<div class="action-box">
											<div class="video-responsive"><img src="{{asset('storage/'.$formation->image_formation)}}" alt=""></div>
										</div>
                                        @else
                                        <div class="action-box">
											<div class="video-responsive">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$formation->lien_video1}}"
                                                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            </div>
										</div> 
                                        @endif
										<div class="info-bx text-center">
											<h5><a href="#">{{$formation->nom}}</a></h5>
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
												<br/>
												<h5> @if ($formation->prix == 0)
                                                Gratuit
                                                @else
                                                {{$formation->prix}} {{$devise->valeur}}
                                                @endif</h5>
											</div>
										</div>
									</div>
                                </div>
								
								<div class="col-md-6 col-lg-6 col-sm-6 m-b30">
									<p>{!!$formation->description!!}<br/><br/>								
									<center><a href="{{route('contactus.index',['locale' => App::getlocale()])}}" class="btn btn-primary btn-lg">
												<span class="font-weight-bold">Contactez Nous</span>
											</a>
									</center>
									</p>
                                </div>
                            </div>
						</div>
@endsection