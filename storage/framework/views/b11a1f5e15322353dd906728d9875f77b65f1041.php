<div>
     <form role="form" action="" method="post" id="storeFret">
                      <?php echo csrf_field(); ?>
                      <h3>Remplissez le formulaire pour commencer le transport</h3>
            
            <!-- Form progress -->
                      <div class="form-wizard-steps form-wizard-tolal-steps-4">
                        <div class="form-wizard-progress">
                            <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
                        </div>
              <!-- Step 1 -->
                        <div class="form-wizard-step active">
                          <div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                          <p>Expediteur</p>
                        </div>
              <!-- Step 1 -->
              
              <!-- Step 2 -->
                        <div class="form-wizard-step">
                          <div class="form-wizard-step-icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                          <p>Destinataire</p>
                        </div>
              <!-- Step 2 -->

              <!-- Step 4 -->
                      </div>
            <!-- Form progress -->
                      
            
            <!-- Form Step 1 -->
                      <fieldset>
                          <h4 style="margin-top: 1rem;">Informations sur l'expéditeur: <span>Etape 1 - 3</span></h4>
                          <div class="row" style="width: 102.6%;">
                            <div class="form-group col-md-6">
                              <label>Nom: <span>*</span></label>
                              <input type="text" name="nom_expediteur" id="nom_expediteur" class="form-control required">
                            </div>
                            <div class="form-group col-md-6">
                              <label>Prénom: <span>*</span></label>
                              <input type="text" name="prenom_expediteur" id="prenom_expediteur" class="form-control required">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label>Email: <span>*</span></label>
                              <input type="email" name="mail_expediteur" class="form-control required mail_expediteur">
                            </div>
                            <div class="form-group col-md-6">
                              <label>Téléphone: <span>*</span></label>
                              <input type="tel" name="telephone_expediteur" class="form-control required telephone_expediteur">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-12">
                              <label>Ville: <span>*</span></label>
                              <input type="text" name="ville_expediteur" class="form-control required">
                            </div>
                          </div>
                              
                              <div class="form-wizard-buttons">
                                  <button type="button" class="btn btn-next">Suivant</button>
                              </div>
                          </fieldset>
            <!-- Form Step 1 -->

            <!-- Form Step 2 -->
                          <fieldset>

                              <h4 style="margin-top: 1rem;">Informations sur le destinataire : <span>Etape 2 - 3</span></h4>
                              <div class="row" style="width: 102.6%;">
                                <div class="form-group col-md-6">
                                  <label>Nom: <span>*</span></label>
                                  <input type="text" name="nom_destinataire" id="nom_destinataire" class="form-control required">
                                </div>
                                <div class="form-group col-md-6">
                                  <label>Prénom: <span>*</span></label>
                                  <input type="text" name="prenom_destinataire" id="prenom_destinataire" class="form-control required">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col-md-6">
                                  <label>Email: <span>*</span></label>
                                  <input type="email" name="mail_destinataire" class="form-control required mail_destinataire"><span class="error_email" style="color:red;font-size: 12px;display:none;">L'email de l'expéditeur doit etre différent de celui du destinataire</span>
                                </div>
                                <div class="form-group col-md-6">
                                  <label>Téléphone: <span>*</span></label>
                                  <input type="tel" name="telephone_destinataire" class="form-control required telephone_destinataire"><span class="error_tel" style="color:red;font-size: 12px;display:none;">Le téléphone de l'expéditeur doit etre différent de celui du destinataire</span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col-md-12">
                                  <label>Ville: <span>*</span></label>
                                  <input type="text" name="ville_destinataire" class="form-control required">
                                </div>
                              </div>
                              <div class="form-wizard-buttons">
                                  <button type="button" class="btn btn-previous">Précédent</button>
                                  <button type="button" class="btn btn-next btn-next-verif">Suivant</button>
                              </div>
                          </fieldset>
            <!-- Form Step 2 -->
  </form>
</div>
<?php /**PATH /opt/lampp/htdocs/afq/resources/views/livewire/evaluation-service.blade.php ENDPATH**/ ?>