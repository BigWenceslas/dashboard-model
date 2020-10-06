                                    <div class="corps_documents">
                                        @if (isset($experiences_professionnelles))
                                        @foreach ($experiences_professionnelles as $experience_professionnelle)
                                        <div class="ligne_document">
                                            <div class="nom_fichier_corps">
                                                <span class="">{{$experience_professionnelle->titre}}</span>
                                            </div>
                                            <div class="envoyer_le_corps">
                                                <span class="">{{$experience_professionnelle->annee}}</span>
                                            </div>
                                            <div class="action_corps">
                                                <div class="container_boutons_tableau">
                                                    <div class="bouton_tableau">
                                                        <a data-toggle="modal" href="#cursusAcademiqueUpdateModal" class="anul_lien modalCursusUpdate" data-id="{{$experience_professionnelle->id}}" data-annee="{{$experience_professionnelle->annee}}" data-titre="{{$experience_professionnelle->titre}}">
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                            <span class="info">Editer</span>
                                                        </a>
                                                    </div>
                                                    <div class="bouton_tableau bouton_telechargement">
                                                        <a href="#" class="anul_lien deleteCursusItem" idCursusDelete="{{$experience_professionnelle->id}}">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                            <span class="info">Supprimer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle  trois_points" id="menu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                                    <div class="dropdown-menu dropdown-menu-right menu_action_responsive bloc_arrondi_blanc" aria-labelledby="menu1">
                                                        <button data-toggle="modal" data-target="cursusAcademiqueUpdateModal" class="dropdown-item modalCursusUpdate" data-id="{{$experience_professionnelle->id}}" data-annee="{{$experience_professionnelle->annee}}" data-titre="{{$experience_professionnelle->titre}}">
                                                            <span>Editer</span>
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="dropdown-item deleteCursusItem" idCursusDelete="{{$experience_professionnelle->id}}">
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
