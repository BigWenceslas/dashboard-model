<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reinitialisez mot de passe</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('design/login/css/util.css')}}">
	<link rel="stylesheet" href="{{asset('design/login/css/main.css')}}">
	<link rel="shortcut icon" type="image/png" href="{{asset('design/assets/uploads/2019/04/favicon.png')}}"/>
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<div class="container_image text-center m-b-40f m-b-50">
					<img src="{{asset('design/parfait_integration/ressources/img/afri2.png')}}" class="img_logo" alt="logo africkup">					
				</div>
				<form class="login100-form" id="contactForm">
					@csrf
					<span class="login100-form-title p-b-33">
						Reinitialisez votre mot de passe!
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn loginSubmit">
							Soumettre
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Mot de passe
						</span>
					</div>

					<div class="text-center">
						<span class="txt1">
							Créer un compte?
						</span>

						<a href="{{route('register_type',['locale' => App::getlocale()])}}" class="txt2">
							S'inscrire
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="{{asset('design/parfait_integration/js/jquery.js')}}"></script>
	<script src="{{asset('design/login/js/main.js')}}"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
    $('.loginSubmit').on('click', function(event){
        event.preventDefault();
        
        $('.loginSubmit').html("En cours...");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('#contactForm input[name="_token"]').val()
            }
        });
        var email = $("#contactForm input[name='email']").val();
        var password = $("#contactForm input[name='password']").val();

        $.ajax({
            url: "{{ route('loginFront',['locale' => App::getlocale()]) }}",
            type: 'POST',
            data: {
                email: email,
                password: password
            },
            success: function(data) {
                console.log(data);
                if (data.success == 1 && data.role == "admin") {
                    $('.loginSubmit').html("Connexion");
                    	window.location.href = "/admin";
                }else if (data.success == 1 && data.role !== "admin") {
                    $('.loginSubmit').html("Connexion reussie");
                    if (document.referrer.includes("evaluation")) {
                    	window.location.href = "{{route('services.show',['locale' => App::getlocale(), 'service' => 'evaluation-de-votre-entreprise'])}}";
					} else {
                    	window.location.href = "/";
					}
                }else if (data.error == 0) {
                    $('.loginSubmit').html("Connexion");
                    swal(
                      'Erreur !',
                      'Identifiants invalides.',
                      'error'
                    );

                }else {
                    $('.loginSubmit').html("Log In");
                    swal(
                        'Erreur !',
                        'Identifiants invalides.',
                        'error'
                    );
                }
            }
        });

    }); 
  </script>
</body>
</html>