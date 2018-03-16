<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$charastat = \App\Character::where('owner', $userid)->first();

if ($charastat->race != 'null') {

?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>
<?php

} else {

?>

<div class="brickncobble">
  <div class="crowned floating"><h2>Choisir une Race</h2></div>
  <p>Choisissez votre race. Attention, une fois votre race envoyée, vous ne pourrez plus revenir en arrière à moins de tout recommencer!</p>
  <div class="wide_messagebox shadowed" id="racecontainer">
    
  </div>
  <form action="{{ route('sendrace') }}" class="floating">
      {{ csrf_field() }}
    <select name="race" id="raceSelection">
      <option value="ELF">Elfe</option>
      <option value="DEMELF">Demi-Elfe</option>
      <option value="HUM">Humain</option>
      <option value="HAL">Halfelin</option>
      <option value="GNO">Gnome</option>
      <option value="GNOPRO">Gnome des Profondeurs</option>
      <option value="GOB">Gobelin</option>
      <option value="HOB">Hobgobelin</option>
      <option value="DRO">Drow</option>
      <option value="CAL">Calandre</option>
      <option value="CHA">Changelin</option>
      <option value="VOL">Volpes</option>
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
    <br><br>
    <button type="submit">Confirmer</button>
  </form>
</div>
<script>
$(document).ready(function() {
  $("#raceSelection").change(function() {                
    var selectedRace = $("#raceSelection").val();
    if (selectedRace == "HUM") {
      $('#racecontainer').load("{{ route('races') }} #HUM");
    } else if (selectedRace == "ELF") {
      $('#racecontainer').load("{{ route('races') }} #ELF");
    }
  });
});
</script> 
<?php
}
?>
