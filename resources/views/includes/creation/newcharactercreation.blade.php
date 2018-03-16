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
      'perc' => 0, 'perc_bonus' => 0, 'perc_malus' => 0, 'chan' => 0, 'chan_bonus' => 0, 'chan_malus' => 0, 'chrm' => 0, 'chrm_bonus' => 0, 'chrm_malus' => 0, 'sage' => 0, 'sage_bonus' => 0, 'sage_malus' => 0, 'volo' => 0, 'volo_bonus' => 0, 'volo_malus' => 0, 'ling' => 0, 'ling_bonus' => 0, 'ling_malus' => 0, 'forc' => 0, 'forc_bonus' => 0, 'forc_malus' => 0, 'title' => 'Nouvelle âme', 'rank' => 1, 'dicerolls' => 0, 'totalmainstatscapital' => 0, 'totalsecstatscapital' => 0, 'race_trait_1' => 'null', 'race_trait_2' => 'null', 'race_trait_3' => 'null', 'race_trait_4' => 'null', 'race_trait_5' => 'null', 'humanbonus' => 0, 'humantraitbonus' => 0, 'stats_set' => 0, 'avatar_url' => 'null']
    );
    DB::table('characters')
            ->where('id', $id)
            ->update(['equipment_id' => $id, 'trophies_id' => $id, 'inventory_id' => $id]);

?>
<script language="javascript" type="text/javascript">
  window.location.replace("{{ route('create') }}");
</script> 
<?php // si un personnage est bien créé dans la DB, on rafraichit

} else if ($charastat->name != 'null' && $charastat->race != 'null' && $charastat->class != 'null') {
// si les trois premieres caracteristiques sont déjà remplies, on redirige directement vers la page 2
?>
<script language="javascript" type="text/javascript">
  window.location.replace("{{ route('create2') }}");
</script>
<?php

} else {

// puis si une entrée est bien créée pour ce character owner, alors on va rentrer dans l'édition de ses stats et caractéristiques. 

  if ($charastat->race == 'null') {

    ?>

      @include('includes.child.selectrace')

    <?php
  } else if ($charastat->class == 'null' && $charastat->race != 'null') {

    ?>

      @include('includes.child.selectclass')

    <?php
  } else if ($charastat->name == 'null' && $charastat->race != 'null' && $charastat->class != 'null') {

    ?>
<div id="Nom">
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
