<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$stat = \App\Character::where('owner', $userid)->first();

if ($stat->race != NULL) {

?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>
<?php

} else {

?>

<div class="brickncobble maincontentview" data-simplebar>
  <div class="crowned floating"><h2>Choisir une Race</h2></div>
  <div class="textbox">
    <p>Choisissez votre race. Attention, une fois votre race validée, vous ne pourrez plus revenir en arrière à moins de tout recommencer!<br />
    Lors des étapes suivantes, vous pourrez effectuer un lancer de dés afin de déterminer vos statistiques additionnelles.</p><br />
    <form id="raceselect" action="{{ route('sendrace') }}" class="floating">
        {{ csrf_field() }}
        <select name="race" id="raceSelection" class="bigselect">
          <option value="ELF">Elfe</option>
          <option value="DEM">Demi-Elfe</option>
          <option value="HUM" selected value>Humain</option>
          <option value="HAL">Halfelin</option>
          <option value="GNO">Gnome</option>
          <option value="DVA">Gnome des Profondeurs</option>
          <option value="GOB">Gobelin</option>
          <option value="HOB">Hobgobelin</option>
          <option value="DRO">Drow</option>
          <option value="CAL">Calandre</option>
          <option value="CHA">Changelin</option>
          <option value="VOL">Volpe</option>
          <?php if ($userinfo->gold_club == true) { ?>
          <option value="OND">Ondin</option>
          <option value="SYL">Sylphe</option>
          <option value="SAM">Samsarien</option>
          <option value="VIS">Vishkanya</option>
          <?php } else { ?>
          <option value="OND" disabled=true>Ondin - Gold Uniquement</option>
          <option value="SYL" disabled=true>Sylphe - Gold Uniquement</option>
          <option value="SAM" disabled=true>Samsarien - Gold Uniquement</option>
          <option value="VIS" disabled=true>Vishkanya - Gold Uniquement</option>
          <?php } ?>
        </select> 
    </form>
  </div>

  <div class="wide_messagebox shadowed" id="racecontainer">
    <!--this is where the race description will be displayed-->
  </div>

  <br />
  <button type="submit" form="raceselect" class="centered big greenhover">Confirmer</button>
  <br /><br />
</div>
<script>
// Race description autochanger
$(document).ready(function() {
  // default
  var selected = $("#raceSelection").val();
  var route = "{{ route('races') }} #" + selected;
  $('#racecontainer').load(route);
  // on change
  $("#raceSelection").change(function() {                
    var selectedrace = $("#raceSelection").val();
    var selectedroute = "{{ route('races') }} #" + selectedrace;
    $('#racecontainer').load(selectedroute);
  });
});
</script> 
<?php
}
?>
