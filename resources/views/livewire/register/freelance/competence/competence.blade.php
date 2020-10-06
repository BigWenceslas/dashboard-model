                                    <div class="corps_documents">
                                        @if (isset($competences))
                                        @foreach ($competences as $competence)
                                        <div class="ligne_document">
                                            <div class="nom_fichier_corps">
                                                <span class="">{{$competence->titre}}</span>
                                            </div>
                                            <div class="envoyer_le_corps">
                                                <span class="">{{$competence->descriptif}}</span>
                                            </div>
                                            <div class="action_corps">
                                                <div class="container_boutons_tableau">
                                                    <div class="bouton_tableau">
                                                        <a data-toggle="modal" href="#competenceUpdateModal" class="anul_lien modalUpdate" data-id="{{$competence->id}}" data-titre="{{$competence->titre}}" data-description="{{$competence->descriptif}}">
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                            <span class="info">Editer</span>
                                                        </a>
                                                    </div>
                                                    <div class="bouton_tableau bouton_telechargement">
                                                        <a href="#" class="anul_lien deleteItem" idDelete="{{$competence->id}}">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                            <span class="info">Supprimer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle  trois_points" id="menu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                                    <div class="dropdown-menu dropdown-menu-right menu_action_responsive bloc_arrondi_blanc" aria-labelledby="menu1">
                                                        <button data-toggle="modal" data-target="competenceUpdateModal" class="dropdown-item modalUpdate" data-id="{{$competence->id}}" data-titre="{{$competence->id}}" data-description="{{$competence->id}}">
                                                            <span>Editer</span>
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="dropdown-item deleteItem" idDelete="{{$competence->id}}">
                                                            <span>Supprimer</span>
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
