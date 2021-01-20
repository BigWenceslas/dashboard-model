                                    <div class="corps_documents">
                                        @if (isset($references))
                                        @foreach ($references as $reference)
                                        <div class="ligne_document">
                                            <div class="nom_fichier_corps">
                                                <span class="">{{$reference->titre}}</span>
                                            </div>
                                            <div class="envoyer_le_corps">
                                                <span class="">{{$reference->descriptif}}</span>
                                            </div>
                                            <div class="action_corps">
                                                <div class="container_boutons_tableau">
                                                    <div class="bouton_tableau">
                                                        <a data-toggle="modal" href="#referenceUpdateModal" class="anul_lien modalReferenceUpdate" data-id="{{$reference->id}}" data-titre="{{$reference->titre}}" data-description="{{$reference->descriptif}}">
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                            <span class="info">Editer</span>
                                                        </a>
                                                    </div>
                                                    <div class="bouton_tableau bouton_telechargement">
                                                        <a href="#" class="anul_lien deleteReferenceItem" idReferenceDelete="{{$reference->id}}">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                            <span class="info">Supprimer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle  trois_points" id="menu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                                    <div class="dropdown-menu dropdown-menu-right menu_action_responsive bloc_arrondi_blanc" aria-labelledby="menu1">
                                                        <button data-toggle="modal" data-target="referenceUpdateModal" class="dropdown-item modalReferenceUpdate" data-id="{{$reference->id}}" data-titre="{{$reference->id}}" data-description="{{$reference->id}}">
                                                            <span>Editer</span>
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="dropdown-item deleteReferenceItem" idReferenceDelete="{{$reference->id}}">
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
