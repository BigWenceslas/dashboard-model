<div id="modal_commentaire" >
	  <form action="{{route('createAvis',['locale' => App::getlocale()])}}" method="POST" id="avis_user">
		<input type="text" class="form-comment" id="user_id" value="@if(Auth::check()) 1 @else 0 @endif" hidden>
		@csrf
		<div class="text-center entete_comment">
			<h4 class="" style="color: #FFF; font-family: avenir!important; margin: 0; line-height: 1; font-size: 20px;">Un avis sur notre plateforme.</h4>
			<button type="button" class="close close-comment" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="corps_comment">
			@if (!Auth::check())
			<div class="">
			  <input type="text" required class="form-comment" placeholder="Nom" name="nom" id="avis_nom" 
			  @if (Auth::check()) hidden @endif value="@if (Auth::check()) {{Auth::user()->name}} @endif">
			</div>
	
			<div class="">
			  <input type="text" required class="form-comment" placeholder="Prenom" name="prenom" id="avis_prenom"
			  @if (Auth::check()) hidden @endif value="@if (Auth::check()) {{Auth::user()->prenom}} @endif">
			</div>
	
			<div class="">
			  <input type="email" required class="form-comment" placeholder="Email" name="email" id="avis_email"
			  @if (Auth::check()) hidden @endif value="@if (Auth::check()) {{Auth::user()->email}} @endif">
			</div>
			@endif

			<div class="">
			  <textarea class="form-comment textarea-comment" required rows="6" placeholder="commentaires" name="texte" id="avis_texte"></textarea>
			</div>
	
		  </div>
		  <div class="d-flex justify-content-center container-btn-comment">
			<button type="submit" class="" style="color: white">COMMENTER</button>
		  </div>
		  </div>
	  </form>
	</div>