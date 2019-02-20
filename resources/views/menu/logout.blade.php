<div id="menuLogout" class="menuWindow">
  <div class='crowned'>
    <h2>Déconnexion</h2>
  </div>
  <br />
  <div class="textbox">
  	<a href="{{ route('logout') }}">
	  <button class="redhover">Se déconnecter</button>
	</a><br /><br />
	<button id="closeMainMenuItem" class="greenhover button">Revenir au Jeu</button>
  </div>
	<script>
		$('#closeMainMenuItem').click(function(){
			$("#playview").css({"filter":"none"});
			$("#mainMenuDiv").animate({ opacity: 0 }, 300, function() {
				$('.menuWindow').remove();
				$("#mainMenuDiv").css({'display': 'none'});
			});
		});
	</script>
</div>