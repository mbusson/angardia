<?php
// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$stat = \App\Character::where('owner', $userid)->first();
// check if user has already been approved
try {
  $profile = \App\Message::where([['posterID', $userid],['characterID', $stat->id],['type', 'profile']])->firstOrFail();
} catch (Exception $e) {
  // do nothing
}

if ( $stat->stats_set != 1  ) {
// Si il manque une race, classe, nom, valeurs des lancers de dés, on redirige le joueur vers la page 1:
?>

  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>

<?php
// check if profile hasn't been approved already
} else if (empty($profile) || $profile->approved == 'n') {
?>

<div class='brickncobble maincontentview' data-simplebar>
  <div class="crowned floating"><h2>Biographie</h2></div>
  <div class="textbox">
    <p>Vous pouvez à présent écrire votre biographie. Gardez à l'esprit la nécessité de correspondre au lore d'Angardia, tant en terme de géographie (vous pouvez consulter la carte du monde dans le menu à gauche) que de caractéristiques de race et de classe.<br />Votre historique de personnage devra également refléter un alignement (bon, mauvais, loyal, chaotique,...).<br />L'administration vérifiera votre biographie par la suite, et prendra contact avec vous pour en discuter.<br /><br />Afin d'éviter de vous renvoyer votre profil pour réécriture, voici un rappel des statistiques ayant le plus d'impact sur votre roleplay:</p>

    <?php echo "<div class='flexcontainer'><strong>Statistiques</strong></div><div class='flexcontainer wrap around' id='statsRecap' style='padding:4px;background-color:#ceb186;border:1px solid #9f8662;border-radius:0.25em;'>";
      $statistics = array();
      $statisticsDisplay = '';
      $statistics['forc'] = $stat->forc;
      $statistics['dext'] = $stat->dext;
      $statistics['inte'] = $stat->inte;
      $statistics['endu'] = $stat->endu;
      $statistics['defe'] = $stat->defe;
      $statistics['perc'] = $stat->perc;
      $statistics['chan'] = $stat->chan;
      $statistics['chrm'] = $stat->chrm;
      $statistics['sage'] = $stat->sage;
      $statistics['volo'] = $stat->volo;
      $statistics['ling'] = $stat->ling;
      foreach ($statistics as $key => $one_stat) {
        if ($key == "forc") {
          $statisticsDisplay = $statisticsDisplay . '<span class="nowrap">';
        } else if ($key == "endu" || $key == "sage") {
          $statisticsDisplay = $statisticsDisplay . '</span> <span class="nowrap">';
        } else if ($key == "perc") {
          $statisticsDisplay = $statisticsDisplay . '</span><br /><span class="nowrap">';
        }
        $statisticsDisplay = $statisticsDisplay . '<div><span class="tt" id="' . $key . '"></span><h5 style="display:inline;padding:0 0 0 8px;margin: 4px;display: inline-block;min-height:24px;line-height:24px;">' . statTranslation($key, $one_stat, $stat->gender) . '</h5></div>';
        if ($key == "ling") {
          $statisticsDisplay = $statisticsDisplay . '</span>';
        }
      }
      echo $statisticsDisplay . "</div>";
    ?>
    <?php echo "<div class='flexcontainer'><strong>Talents</strong></div><div class='flexcontainer wrap around' style='transform:scale(0.85);padding:4px;background-color:#ceb186;border:1px solid #9f8662;border-radius:0.25em;'>";
      if ($stat->race_trait_1 != NULL) {
        echo '<h6 class="darkmessagebox"><span class="tt" id="' . $stat->race_trait_1 . '"></span></h6>';
      }
      if ($stat->race_trait_2 != NULL) {
        echo '<h6 class="darkmessagebox"><span class="tt" id="' . $stat->race_trait_2 . '"></span></h6>';
      } 
      if ($stat->race_trait_3 != NULL) {
        echo '<h6 class="darkmessagebox"><span class="tt" id="' . $stat->race_trait_3 . '"></span></h6>';
      } 
      if ($stat->race_trait_4 != NULL) {
        echo '<h6 class="darkmessagebox"><span class="tt" id="' . $stat->race_trait_4 . '"></span></h6>';
      } 
      if ($stat->race_trait_5 != NULL) {
        echo '<h6 class="darkmessagebox"><span class="tt" id="' . $stat->race_trait_5 . '"></span></h6>';
      } 
      if ($stat->main_trait_1 != NULL) {
        echo '<h6 class="darkmessagebox"><span class="tt" id="' . $stat->main_trait_1 . '"></span></h6>';
      }
      if ($stat->sec_trait_1 != NULL) {
        echo '<h6 class="darkmessagebox"><span class="tt" id="' . $stat->sec_trait_1 . '"></span></h6>';
      }
      if ($stat->race_trait_5 == NULL && $stat->race_trait_4 == NULL && $stat->race_trait_3 == NULL && $stat->race_trait_2 == NULL && $stat->race_trait_1 == NULL) {
        echo '<h6 class="darkmessagebox">Aucun trait racial.</h6>';
      }
      echo"</div>"; 
    ?>
    <p> Ces statistiques vous semblent bien faibles? Pas de panique! Rappelez-vous: vous êtes au tout début de votre plus grand voyage initiatique...</p>
    <form action="javascript:void(0);">
      <div id="bioEditor"></div><br />
      <div class="infotextbox itbcenter" style="font-size:1em;">
        <p>Le processus de validation est actuellement <font color="#922b21"><strong>strict</strong></font>. L'administration vérifiera les détails suivants:<br />
          <ul style="text-align:left;">
            <li>Une orthographe correcte.</li>
            <li>Un background respectueux du lore (cf. Lexicon).</li>
            <li>Votre imagination et l'effort fourni dans l'écriture de votre profil.</li>
          </ul>
        Quelques détails à garder à l'esprit:</br>
          <ul style="text-align:left;">
            <li>Vous ne pourrez plus modifier votre biographie une fois cette dernière validée.</li>
            <li>Vous débuterez dans le petit village forestier de Berghärd. Votre biographie doit justifier cela.</li>
            <li>Bien entendu, votre personnage commence son voyage relativement inexpérimenté.</li>
            <li>Les références au lore sont plus que bienvenues, et joueront en votre faveur.</li>
          </ul>
        Bonne écriture!
        </p><br />
      </div><br />
      <button type="submit" id="confirmBio" class="centered button greenhover"><strong>Prévisualiser votre Biographie</strong></button>
    </form>
  </div>
  <script>
    $(document).ready(function(){
      if($(window).width() < 1440) {
            $('#statsRecap>span.nowrap').css('max-width', '175px');
      }
    });
  </script>
</div>
<script>
$(document).ready(function() {
  let textContent,
  	changesCounter = 0;
  /* WYSIWYG */
  //retrieve old entry
	$.get( '{{ route("getProfile") }}', function( data ) {
	  $('#bioEditor').trumbowyg('html', data);
	});
  $('#bioEditor').trumbowyg({
  	tagsToRemove: ['script', 'link', 'img'],
  	autogrow: true,
  	urlProtocol: true,
  	minimalLinks: true,
  	btns: [
      ['removeformat'],
      ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
      ['formatting'],
      ['strong', 'em', 'del'],
      ['unorderedList', 'orderedList'],
      ['foreColor', 'backColor'],
      ['specialChars'],
      ['horizontalRule'],
      ['historyUndo', 'historyRedo'],
      ['fullscreen']
    ],
    lang: 'fr'
  }).on('tbwchange', function(){
  	//autosave
  	changesCounter++;
  	textContent = $('#bioEditor').trumbowyg('html');
    console.log(changesCounter+' : '+textContent);
    if ((changesCounter%15) == 0) {
    	$.ajax({
			method: 'POST',
			url: '{{ route("pushProfile") }}',
			global: false,
			data: {content: textContent},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(JSON.stringify(jqXHR));
				console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
			},
			success: function (data) { 
				$("<div id='savingmessage'><p>Message sauvegardé!</p></div>").insertAfter('#bioEditor');
				function destroyMessage() {
				  $('#savingmessage').remove();
				}
				function fadeOut() {
				  TweenMax.fromTo($('#savingmessage'), 1,{autoAlpha: 1},{autoAlpha: 0, ease:Power0.easeOut, onComplete: destroyMessage});
				}
				TweenMax.fromTo($('#savingmessage'), 1,{autoAlpha: 0},{autoAlpha: 1, ease:Power0.easeIn, onComplete: fadeOut});
			}
		});
    }
  });
  // final send
  $('button[type="submit"]').click(function() {
      textContent = $('#bioEditor').trumbowyg('html');
      $.ajax({
        method: 'POST',
        url: '{{ route("pushProfile") }}',
        global: false,
        data: {content: textContent},
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(JSON.stringify(jqXHR));
          console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        },
        success: function() {
          window.location.href = '{{ route("previewProfile") }}';
        }
      });
  });
  // Check for unsaved data
  window.onbeforeunload = function() {
    if (textContent !== $('#bioEditor').trumbowyg('html')) {
      return 'Certains changements n\'ont pas été enregistrés. Voulez-vous vraiment quitter cette page?';
    }
  }
});
</script>

<?php
} else {
?>

  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('waitingProfile') }}");
  </script>

<?php
}
?>
