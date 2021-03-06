                                    <div class="corps_documents">
                                        @if (isset($cursus_academiques))
                                        @foreach ($cursus_academiques as $cursus_academique)
                                        <div class="ligne_document">
                                            <div class="nom_fichier_corps">
                                                <span class="">{{$cursus_academique->titre}}</span>
                                            </div>
                                            <div class="envoyer_le_corps">
                                                <span class="">{{$cursus_academique->annee}}</span>
                                            </div>
                                            <div class="action_corps">
                                                <div class="container_boutons_tableau">
                                                    <div class="bouton_tableau">
                                                        <a target="_blank" download href="{{ asset('storage/etudiants/cursus_academique/'.$cursus_academique->document)}}" class="anul_lien">
                                                            <i class="fa fa-download" aria-hidden="true"></i>
                                                            <span class="info">telecharger</span>
                                                        </a>
                                                    </div>
                                                    <div class="bouton_tableau">
                                                        <a target="_blank" href="{{ asset('storage/etudiants/cursus_academique/'.$cursus_academique->document)}}" class="anul_lien">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                            <span class="info">Document</span>
                                                        </a>
                                                    </div>
                                                    <div class="bouton_tableau">
                                                        <a data-toggle="modal" href="#cursusAcademiqueUpdateModal" class="anul_lien modalCursusUpdate" data-id="{{$cursus_academique->id}}" data-annee="{{$cursus_academique->annee}}" data-titre="{{$cursus_academique->titre}}">
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                            <span class="info">Editer</span>
                                                        </a>
                                                    </div>
                                                    <div class="bouton_tableau bouton_telechargement">
                                                        <a href="#" class="anul_lien deleteCursusItem" idCursusDelete="{{$cursus_academique->id}}">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                            <span class="info">Supprimer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle  trois_points" id="menu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                                    <div class="dropdown-menu dropdown-menu-right menu_action_responsive bloc_arrondi_blanc" aria-labelledby="menu1">
                                                        <button data-toggle="modal" data-target="cursusAcademiqueUpdateModal" class="dropdown-item modalCursusUpdate" data-id="{{$cursus_academique->id}}" data-annee="{{$cursus_academique->annee}}" data-titre="{{$cursus_academique->titre}}">
                                                            <span>Editer</span>
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="dropdown-item deleteCursusItem" idCursusDelete="{{$cursus_academique->id}}">
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
