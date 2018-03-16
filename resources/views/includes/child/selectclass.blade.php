<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$charastat = \App\Character::where('owner', $userid)->first();

if ($charastat->class != 'null') {
?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>
<?php

} else {

?>
<div id="Classe">
  <h3>Classe</h3>
  <p>Choisissez votre classe. Attention, une fois votre classe envoyée, vous ne pourrez plus revenir en arrière à moins de tout recommencer!</p>
        <form action="{{ route('sendclass') }}">
            {{ csrf_field() }}
            <?php 
            switch ($charastat->race) {
              case 'ELF':
            ?>
              <select name="class">
                <option value="ASSA">Assassin</option>
                <option value="ROUB">Roublard</option>
                <option value="RODE">Rodeur</option>
                <option value="GUER">Guerrier</option>
                <option value="CLER">Clerc</option>
                <option value="MOIN">Moine</option>
                <option value="BARD">Barde</option>
                <option value="DRUI">Druide</option>
                <option value="SHAM">Shaman</option>
                <option value="SORC">Sorceleur</option>
                <option value="MAGI">Magicien</option>
              </select>
            <?php 
                break;
              case 'DEMELF':
            ?>
              <select name="class">
                  <option value="ASSA">Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="RODE">Rodeur</option>
                  <option value="GUER">Guerrier</option>
                  <option value="MOIN">Moine</option>
                  <option value="BARD">Barde</option>
                  <option value="SORC">Sorceleur</option>
                  <option value="MAGI">Magicien</option>
                </select>
            <?php 
                break;
              case 'HUM':
            ?>
              <select name="class">
                <option value="ASSA">Assassin</option>
                <option value="ROUB">Roublard</option>
                <option value="RODE">Rodeur</option>
                <option value="GUER">Guerrier</option>
                <option value="BARB">Barbare</option>
                <option value="PALA">Paladin</option>
                <option value="CLER">Clerc</option>
                <option value="MOIN">Moine</option>
                <option value="BARD">Barde</option>
                <option value="DRUI">Druide</option>
                <option value="SHAM">Shaman</option>
                <option value="SORC">Sorceleur</option>
                <option value="MAGI">Magicien</option>
              </select>
            <?php 
                break;
              case 'HAL':
            ?>
              <select name="class">
                <option value="ASSA">Assassin</option>
                <option value="ROUB">Roublard</option>
                <option value="RODE">Rodeur</option>
                <option value="GUER">Guerrier</option>
                <option value="MOIN">Moine</option>
                <option value="BARD">Barde</option>
                <option value="SORC">Sorceleur</option>
                <option value="MAGI">Magicien</option>
              </select>
            <?php 
                break;
              case 'GNO':
            ?>
              <select name="class">
                  <option value="ASSA">Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="MOIN">Moine</option>
                  <option value="BARD">Barde</option>
                  <option value="DRUI">Druide</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC">Sorceleur</option>
                  <option value="MAGI">Magicien</option>
                </select>
            <?php 
                break;
              case 'GNOPRO':
            ?>
              <select name="class">
                  <option value="GUER">Guerrier</option>
                  <option value="PALA">Paladin</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC">Sorceleur</option>
                </select>
            <?php 
                break;
              case 'GOB':
            ?>
              <select name="class">
                  <option value="ASSA">Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="RODE">Rodeur</option>
                  <option value="GUER">Guerrier</option>
                  <option value="BARB">Barbare</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC">Sorceleur</option>
                </select>
            <?php 
                break;
              case 'HOB':
            ?>
              <select name="class">
                  <option value="RODE">Rodeur</option>
                  <option value="GUER">Guerrier</option>
                  <option value="BARB">Barbare</option>
                  <option value="MOIN">Moine</option>
                  <option value="SHAM">Shaman</option>
                </select>
            <?php 
                break;
              case 'DRO':
            ?>
              <select name="class">
                  <option value="ASSA">Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="RODE">Rodeur</option>
                  <option value="GUER">Guerrier</option>
                  <option value="CLER">Clerc</option>
                  <option value="MOIN">Moine</option>
                  <option value="BARD">Barde</option>
                  <option value="DRUI">Druide</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC">Sorceleur</option>
                  <option value="MAGI">Magicien</option>
                </select>
            <?php 
                break;
              case 'CAL':
            ?>
              <select name="class">
                  <option value="ASSA">Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="RODE">Rodeur</option>
                  <option value="CLER">Clerc</option>
                  <option value="MOIN">Moine</option>
                  <option value="BARD">Barde</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC">Sorceleur</option>
                  <option value="MAGI">Magicien</option>
                </select>
            <?php 
                break;
              case 'CHA':
            ?>
              <select name="class">
                  <option value="ASSA">Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="DRUI">Druide</option>
                  <option value="SORC">Sorceleur</option>
                  <option value="MAGI">Magicien</option>
                </select>
            <?php 
                break;
              case 'VOL':
            ?>
              <select name="class">
                  <option value="ROUB">Roublard</option>
                  <option value="RODE">Rodeur</option>
                  <option value="CLER">Clerc</option>
                  <option value="MOIN">Moine</option>
                  <option value="BARD">Barde</option>
                  <option value="DRUI">Druide</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC">Sorceleur</option>
                  <option value="MAGI">Magicien</option>
                </select>
            <?php 
                break;
            }
            ?>
          <br><br>
          <input type="submit">
        </form>
</div>
<?php
}
?>
