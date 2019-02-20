<?php
// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$stat = \App\Character::where('owner', $userid)->first();

if ($stat->class != NULL) {

?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>
<?php

} else {

?>

<div class="brickncobble maincontentview" data-simplebar>
  <div class="crowned floating"><h2>Choisir une Classe</h2></div>
  <div class="textbox">
    <p>Choisissez votre classe. Attention, une fois votre classe validée, vous ne pourrez plus revenir en arrière à moins de tout recommencer!</p><br />
    <form id="classselect" action="{{ route('sendclass') }}" class="floating">
            {{ csrf_field() }}
            <?php 
            switch ($stat->race) {
              case 'ELF':
            ?>
              <select name="class" id="classSelection" style="min-width: 13em;min-height:2.5em;">
                <option value="ASSA">Assassin</option>
                <option value="ROUB">Roublard</option>
                <option value="VAGA">Vagabond</option>
                <option value="GUER" selected value>Guerrier</option>
                <option value="CLER">Clerc</option>
                <option value="MOIN">Moine</option>
                <option value="BARD">Barde</option>
                <option value="DRUI">Druide</option>
                <option value="SHAM">Shaman</option>
                <option value="SORC">Ensorceleur</option>
                <option value="MAGI">Magicien</option>
              </select>
            <?php 
                break;
              case 'DEMELF':
            ?>
              <select name="class" id="classSelection" style="min-width: 13em;min-height:2.5em;">
                  <option value="ASSA">Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="VAGA" selected value>Vagabond</option>
                  <option value="GUER">Guerrier</option>
                  <option value="MOIN">Moine</option>
                  <option value="BARD">Barde</option>
                  <option value="SORC">Ensorceleur</option>
                  <option value="MAGI">Magicien</option>
                </select>
            <?php 
                break;
              case 'HUM':
            ?>
              <select name="class" id="classSelection" style="min-width: 13em;min-height:2.5em;">
                <option value="ASSA">Assassin</option>
                <option value="ROUB">Roublard</option>
                <option value="VAGA">Vagabond</option>
                <option value="GUER" selected value>Guerrier</option>
                <option value="BARB">Barbare</option>
                <option value="PALA">Paladin</option>
                <option value="CLER">Clerc</option>
                <option value="MOIN">Moine</option>
                <option value="BARD">Barde</option>
                <option value="DRUI">Druide</option>
                <option value="SHAM">Shaman</option>
                <option value="SORC">Ensorceleur</option>
                <option value="MAGI">Magicien</option>
              </select>
            <?php 
                break;
              case 'HAL':
            ?>
              <select name="class" id="classSelection" style="min-width: 13em;min-height:2.5em;">
                <option value="ASSA">Assassin</option>
                <option value="ROUB" selected value>Roublard</option>
                <option value="VAGA">Vagabond</option>
                <option value="BARD">Barde</option>
              </select>
            <?php 
                break;
              case 'GNO':
            ?>
              <select name="class" id="classSelection" style="min-width: 13em;min-height:2.5em;">
                  <option value="ASSA">Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="BARD">Barde</option>
                  <option value="DRUI">Druide</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC" selected value>Ensorceleur</option>
                  <option value="MAGI">Magicien</option>
                </select>
            <?php 
                break;
              case 'DVA':
            ?>
              <select name="class" id="classSelection" style="min-width: 13em;min-height:2.5em;">
                  <option value="GUER">Guerrier</option>
                  <option value="PALA" selected value>Paladin</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC">Ensorceleur</option>
                </select>
            <?php 
                break;
              case 'GOB':
            ?>
              <select name="class" id="classSelection" style="min-width: 13em;min-height:2.5em;">
                  <option value="ASSA">Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="VAGA" selected value>Vagabond</option>
                  <option value="GUER">Guerrier</option>
                  <option value="BARB">Barbare</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC">Ensorceleur</option>
                </select>
            <?php 
                break;
              case 'HOB':
            ?>
              <select name="class" id="classSelection" style="min-width: 13em;min-height:2.5em;">
                  <option value="VAGA">Vagabond</option>
                  <option value="GUER">Guerrier</option>
                  <option value="BARB" selected value>Barbare</option>
                  <option value="MOIN">Moine</option>
                  <option value="SHAM">Shaman</option>
                </select>
            <?php 
                break;
              case 'DRO':
            ?>
              <select name="class" id="classSelection" style="min-width: 13em;min-height:2.5em;">
                  <option value="ASSA" selected value>Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="VAGA">Vagabond</option>
                  <option value="GUER">Guerrier</option>
                  <option value="CLER">Clerc</option>
                  <option value="MOIN">Moine</option>
                  <option value="BARD">Barde</option>
                  <option value="DRUI">Druide</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC">Ensorceleur</option>
                  <option value="MAGI">Magicien</option>
                </select>
            <?php 
                break;
              case 'CAL':
            ?>
              <select name="class" id="classSelection" style="min-width: 13em;min-height:2.5em;">
                  <option value="ASSA">Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="VAGA">Vagabond</option>
                  <option value="CLER">Clerc</option>
                  <option value="MOIN">Moine</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC">Ensorceleur</option>
                  <option value="MAGI" selected value>Magicien</option>
                </select>
            <?php 
                break;
              case 'CHA':
            ?>
              <select name="class" id="classSelection" style="min-width: 13em;min-height:2.5em;">
                  <option value="ASSA">Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="DRUI">Druide</option>
                  <option value="SORC" selected value>Ensorceleur</option>
                  <option value="MAGI">Magicien</option>
                </select>
            <?php 
                break;
              case 'VOL':
            ?>
              <select name="class" id="classSelection" style="min-width: 13em;min-height:2.5em;">
                  <option value="ROUB">Roublard</option>
                  <option value="VAGA">Vagabond</option>
                  <option value="CLER">Clerc</option>
                  <option value="MOIN">Moine</option>
                  <option value="BARD" selected value>Barde</option>
                  <option value="DRUI">Druide</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC">Ensorceleur</option>
                  <option value="MAGI">Magicien</option>
                </select>
            <?php 
                break;
            }
            ?>
  </div>

  <div class="wide_messagebox" id="classcontainer">
    <!--this is where the class description will be displayed-->
  </div>

  <br />
  <button type="submit" form="classselect" class="centered big greenhover">Confirmer</button>
  <br /><br />
</div>
<script>
// class description autochanger
$(document).ready(function() {
  // default
  var selected = $("#classSelection").val();
  var route = "{{ route('classes') }} #" + selected;
  $('#classcontainer').load(route);
  // on change
  $("#classSelection").change(function() {                
    var selectedclass = $("#classSelection").val();
    var selectedroute = "{{ route('classes') }} #" + selectedclass;
    $('#classcontainer').load(selectedroute);
  });
});
</script> 
<?php
}
?>