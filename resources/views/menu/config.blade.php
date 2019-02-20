<div id="menuConfig" class="menuWindow">
  <div class='crowned'>
    <h2>Paramètres</h2>
  </div>
  <br />
  <div class="textbox">
    <p>
      Malheureusement, aucun paramètre n'est encore configurable. Cette option arrivera plus tard dans le développement du jeu. Merci pour votre soutien sur la version Alpha!
    </p>
    <br />
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