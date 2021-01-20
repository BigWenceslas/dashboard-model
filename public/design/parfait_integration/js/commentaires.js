jQuery(document).ready(function($) {

		toastr.options = {
         "closeButton": true,
         "debug": false,
         "newestOnTop": false,
         "progressBar": true,
         "positionClass": "toast-top-center",
         "preventDuplicates": false,
         "onclick": null,
         "showDuration": "700",
         "hideDuration": "800",
         "timeOut": "2000",
         "extendedTimeOut": "4000",
         "showEasing": "swing",
         "hideEasing": "linear",
         "showMethod": "fadeIn",
         "hideMethod": "fadeOut"
         };

		 $('.bloc_img_comment').click(function(){
			$("#modal_commentaire").fadeToggle(200);
		 });

		 $('.close-comment').click(function(){
			$("#modal_commentaire").fadeToggle(200);
		 });

		 $("#avis_user").on('submit',function(e){
                e.preventDefault();
				var form = $("#avis_user");

                console.log(form.attr( 'action' ));      
                        $.ajax({
                            url: form.attr('action'),
                            type: form.attr('method'),
                            data: {
                                "_token": document.getElementsByName("_token")[0].value,
								'texte': $('#avis_texte').val(),
								'nom': $('#avis_nom').val(),
								'prenom': $('#avis_prenom').val(),
								'email': $('#avis_email').val(),
                            },
                            success: function(response) {
                                toastr.clear();
								toastr.success('Votre avis a été enregistré avec succès');
                            }
                        });
            });
	 });