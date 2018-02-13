<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$charastat = \App\Character::where('owner', $userid)->first();

if (!$charastat) {
// Si aucun perso n'est créé, on crée une entrée liée au character owner:
    $id = DB::table('characters')->insertGetId(
    ['level' => 1, 'xp' => 0, 'gold' => 10, 'owner' => $userid, 'name' => 'null', 'loc_world' => 'a', 'loc_x' => '50', 'loc_y' => '50', 'loc_sub' => 'a', 'race' => 'null', 'class' => 'null', 'alignment' => 'null', 'ap' => 5, 'ap_max' => 5, 'ap_regen' => 5, 'mp' => 6, 'mp_max' => 6, 'mp_regen' => 6, 'df' => 7, 'df_max' => 7, 'df_regen' => 1, 'hp' => 200, 'hp_max' => 200, 'hp_regen' => 200, 'mana' => 200, 'mana_max' => 200, 'mana_regen' => 200, 'equipment_id' => 1337, 'trophies_id' => 1337, 'inventory_id' => 1337, 'main_trait_1' => 'null', 'main_trait_2' => 'null', 'main_trait_3' => 'null', 'main_trait_4' => 'null', 'main_trait_5' => 'null', 'main_trait_6' => 'null', 'main_trait_7' => 'null', 'main_trait_8' => 'null', 'main_trait_9' => 'null', 'main_trait_0' => 'null', 'sec_trait_1' => 'null', 'sec_trait_2' => 'null', 'sec_trait_3' => 'null', 'sec_trait_4' => 'null', 'sec_trait_5' => 'null', 'sec_trait_6' => 'null', 'sec_trait_7' => 'null', 'sec_trait_8' => 'null', 'sec_trait_9' => 'null', 'sec_trait_0' => 'null', 'forc' => 0, 'forc_bonus' => 0, 'forc_malus' => 0, 'dext' => 0, 'dext_bonus' => 0, 'dext_malus' => 0, 'endu' => 0, 'endu_bonus' => 0, 'endu_malus' => 0, 'defe' => 0, 'defe_bonus' => 0, 'defe_malus' => 0, 'inte' => 0, 'inte_bonus' => 0, 'inte_malus' => 0, 'vite' => 0, 'vite_bonus' => 0, 'vite_malus' => 0,
      'perc' => 0, 'perc_bonus' => 0, 'perc_malus' => 0, 'chan' => 0, 'chan_bonus' => 0, 'chan_malus' => 0, 'chrm' => 0, 'chrm_bonus' => 0, 'chrm_malus' => 0, 'sage' => 0, 'sage_bonus' => 0, 'sage_malus' => 0, 'volo' => 0, 'volo_bonus' => 0, 'volo_malus' => 0, 'ling' => 0, 'ling_bonus' => 0, 'ling_malus' => 0, 'forc' => 0, 'forc_bonus' => 0, 'forc_malus' => 0, 'title' => 'Nouvelle âme', 'rank' => 1, 'dicerolls' => 0, 'totalmainstatscapital' => 0, 'totalsecstatscapital' => 0, 'race_trait_1' => 'null', 'race_trait_2' => 'null', 'race_trait_3' => 'null', 'race_trait_4' => 'null', 'race_trait_5' => 'null', 'humanbonus' => 0, 'humantraitbonus' => 0]
    );
    DB::table('characters')
            ->where('id', $id)
            ->update(['equipment_id' => $id, 'trophies_id' => $id, 'inventory_id' => $id]);

    echo 'Bienvenue. Texte lambda. <a href="create" class="button">Continuer</a>';

} else if ($charastat->name != 'null' && $charastat->race != 'null' && $charastat->class != 'null') {
// si les trois premieres caracteristiques sont déjà remplies, on redirige directement vers la page 2
?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create2') }}");
  </script>
<?php

} else {

// puis si une entrée est bien créée pour ce character owner, alors on va rentrer dans l'édition de ses stats et caractéristiques. C'est parti pour un menu d'onglets sur les 3 premieres entrées que sont la classe, la race et le nom:

?>
<div class="tab">
  <?php if ($charastat->race == 'null') { ?>
  <button class="tablinks" onclick="openTab(event, 'Race')">Race</button>
  <?php } if ($charastat->class == 'null') { ?>
  <button class="tablinks" onclick="openTab(event, 'Classe')">Classe</button>
  <?php } if ($charastat->name == 'null') { ?>
  <button class="tablinks" onclick="openTab(event, 'Nom')">Nom</button>
  <?php } ?>
</div>
<?php

// et maintenant pour les choses sérieuses...

    if ($charastat->race == 'null') {

        // *************** //
        // IF RACE IS NULL //
        // *************** //

        ?>

<!-- Tab content -->
<div id="Race" class="tabcontent">
  <h3>Race</h3>
  <p>Choisissez votre race. Attention, une fois votre race envoyée, vous ne pourrez plus revenir en arrière à moins de tout recommencer!</p>
        <form action="{{ route('sendrace') }}">
            {{ csrf_field() }}
          <select name="race">
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
          <input type="submit">
        </form>
</div>
        <?php
    }
    if ($charastat->class == 'null' && $charastat->race != 'null') {

        // **************** //
        // IF CLASS IS NULL //
        // **************** //

        ?>
<div id="Classe" class="tabcontent">
  <h3>Classe</h3>
  <p>Choisissez votre classe. Attention, une fois votre classe envoyée, vous ne pourrez plus revenir en arrière à moins de tout recommencer!</p>
        <form action="{{ route('sendclass') }}">
            {{ csrf_field() }}
          @switch($charastat->race)
            @case('ELF')
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
            @case('DEMELF')
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
            @case('HUM')
              <select name="class">
                <option value="ASSA">Assassin</option>
                <option value="ROUB">Roublard</option>
                <option value="RODE">Rodeur</option>
                <option value="GUER">Guerrier</option>
                <option value="BARB">Barbare</option>
                <option value="PALA">Paladins</option>
                <option value="CLER">Clerc</option>
                <option value="MOIN">Moine</option>
                <option value="BARD">Barde</option>
                <option value="DRUI">Druide</option>
                <option value="SHAM">Shaman</option>
                <option value="SORC">Sorceleur</option>
                <option value="MAGI">Magicien</option>
              </select>
            @case('HAL')
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
            @case('GNO')
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
            @case('GNOPRO')
            <select name="class">
                  <option value="GUER">Guerrier</option>
                  <option value="PALA">Paladins</option>
                  <option value="CLER">Clerc</option>
                  <option value="MOIN">Moine</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC">Sorceleur</option>
                </select>
            @case('GOB')
            <select name="class">
                  <option value="ASSA">Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="RODE">Rodeur</option>
                  <option value="GUER">Guerrier</option>
                  <option value="BARB">Barbare</option>
                  <option value="SHAM">Shaman</option>
                  <option value="SORC">Sorceleur</option>
                </select>
            @case('HOB')
            <select name="class">
                  <option value="RODE">Rodeur</option>
                  <option value="GUER">Guerrier</option>
                  <option value="BARB">Barbare</option>
                  <option value="MOIN">Moine</option>
                  <option value="SHAM">Shaman</option>
                </select>
            @case('DRO')
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
            @case('CAL')
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
            @case('CHA')
            <select name="class">
                  <option value="ASSA">Assassin</option>
                  <option value="ROUB">Roublard</option>
                  <option value="DRUI">Druide</option>
                  <option value="SORC">Sorceleur</option>
                  <option value="MAGI">Magicien</option>
                </select>
            @case('VOL')
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
          @endswitch
          <br><br>
          <input type="submit">
        </form>
</div>
        <?php
    } if ($charastat->class == 'null' && $charastat->race == 'null') {

        ?>
<div id="Classe" class="tabcontent">
  <h3>Classe</h3>
  <p>Vous devez choisir une race avant d'accéder au menu de classe.</p>
</div>
        <?php
    }
    if ($charastat->name == 'null') {

        // **************** //
        // IF NAME IS NULL //
        // **************** //

        ?>
<div id="Nom" class="tabcontent">
  <h3>Nom de personnage</h3>
  <p>Choisissez votre nom. Attention, une fois votre nom envoyé, vous ne pourrez plus revenir en arrière à moins de tout recommencer!</p>
        <form action="{{ route('sendname') }}">
            {{ csrf_field() }}
            Nom du personnage: <input type="text" name="name" class="form-control"><br>
          <br><br>
          <input type="submit">
        </form>
</div>
        <?php
    }
}
?>
