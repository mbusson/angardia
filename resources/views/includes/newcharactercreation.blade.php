<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userinfo = DB::select('select * from users where name = :username', ['username' => Auth::user()->name]);
$stat = DB::select('select * from characters where owner = :userid', ['userid' => Auth::user()->id]);

if (!$stat) {
// Si aucun perso n'est créé, on crée une entrée liée au character owner:
    $id = DB::table('characters')->insertGetId(
    ['level' => 1, 'xp' => 0, 'gold' => 10, 'owner' => $userresult->id, 'name' => 'null', 'loc_world' => 'a', 'loc_x' => '50', 'loc_y' => '50', 'loc_sub' => 'a', 'race' => 'null', 'class' => 'null', 'alignment' => 'null', 'ap' => 5, 'ap_max' => 5, 'ap_regen' => 5, 'mp' => 6, 'mp_max' => 6, 'mp_regen' => 6, 'df' => 7, 'df_max' => 7, 'df_regen' => 1, 'hp' => 200, 'hp_max' => 200, 'hp_regen' => 200, 'mana' => 200, 'mana_max' => 200, 'mana_regen' => 200, 'equipment_id' => 1337, 'trophies_id' => 1337, 'inventory_id' => 1337, 'main_trait_1' => 'null', 'main_trait_2' => 'null', 'main_trait_3' => 'null', 'main_trait_4' => 'null', 'main_trait_5' => 'null', 'main_trait_6' => 'null', 'main_trait_7' => 'null', 'main_trait_8' => 'null', 'main_trait_9' => 'null', 'main_trait_0' => 'null', 'sec_trait_1' => 'null', 'sec_trait_2' => 'null', 'sec_trait_3' => 'null', 'sec_trait_4' => 'null', 'sec_trait_5' => 'null', 'sec_trait_6' => 'null', 'sec_trait_7' => 'null', 'sec_trait_8' => 'null', 'sec_trait_9' => 'null', 'sec_trait_0' => 'null']
    );
    DB::table('characters')
            ->where('id', $id)
            ->update(['equipment_id' => $id, 'trophies_id' => $id, 'inventory_id' => $id]);

    echo 'Bienvenue. Texte lambda. <a href="create" class="button">Continuer</a>';

} else if ($characterresult->name != 'null' && $characterresult->race != 'null' && $characterresult->class != 'null') {
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
  <?php if ($characterresult->race == 'null') { ?>
  <button class="tablinks" onclick="openTab(event, 'Race')">Race</button>
  <?php } if ($characterresult->class == 'null') { ?>
  <button class="tablinks" onclick="openTab(event, 'Classe')">Classe</button>
  <?php } if ($characterresult->name == 'null') { ?>
  <button class="tablinks" onclick="openTab(event, 'Nom')">Nom</button>
  <?php } ?>
</div>
<?php

// et maintenant pour les choses sérieuses...

    if ($characterresult->race == 'null') {

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
            <?php if ($userresult->gold_club == true) { ?>
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
    if ($characterresult->class == 'null') {

        // **************** //
        // IF CLASS IS NULL //
        // **************** //

        ?>
<div id="Classe" class="tabcontent">
  <h3>Classe</h3>
  <p>Choisissez votre classe. Attention, une fois votre classe envoyée, vous ne pourrez plus revenir en arrière à moins de tout recommencer!</p>
        <form action="{{ route('sendclass') }}">
            {{ csrf_field() }}
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
          <br><br>
          <input type="submit">
        </form>
</div>
        <?php
    }
    if ($characterresult->name == 'null') {

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
