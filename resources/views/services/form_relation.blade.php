<form action="{{route('event_request',['locale' => App::getLocale()])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-row">
                            <input hidden value="" id="event_type" name="event_type"/>
                            <input hidden value="{{$service->slug}}" id="slug" name="slug"/>
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
                                <input type="email" name="email" placeholder=" " required>
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
                                   @include('partials.pays')    
								</select>
                                <div class="underline">
                                </div>
                                {{-- <label for="">Pays</label> --}}
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
                                <input type="text" name="vous_recherchez" required>
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
                          <div class="input-data">
                            <input type="file" name="documents" placeholder="Description du projet" required>
                          </div>
                        </div>

                        <div class="form-row">
                            <div class="input-data textarea">
                                <textarea rows="8" cols="80" name="projet" required></textarea>
                                <br />
                                <div class="underline">
                                </div>
                                <label for="">Description du projet</label>
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