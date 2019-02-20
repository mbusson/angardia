<div id="menuMap" class="menuWindow">
  <div class='crowned'>
    <h2>Carte</h2>
  </div>
  <br />
  <div class="textbox">
    <p>
      La carte du monde arrive très prochainement!
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