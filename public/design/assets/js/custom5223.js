jQuery(document).ready(function($){$(".linkcol h5").click(function(){if($(this).parents(".linkcol").hasClass("show")){$(this).parents(".linkcol").removeClass("show")}
else{$(".linkcol").removeClass("show");$(this).parents(".linkcol").addClass("show");}});jQuery(".navbar-toggler").click(function(){jQuery(this).toggleClass("is-active");});jQuery(".mouse-icon").click(function(e){e.preventDefault();var position=jQuery(jQuery(this).attr("href")).offset().top;jQuery("body, html").animate({scrollTop:position},700);});});

// jQuery(this).parents("body").toggleClass("menu-open");

<script>
jQuery(document).ready(function($){
    
});
</script>