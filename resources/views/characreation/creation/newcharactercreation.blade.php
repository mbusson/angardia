<?php
// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$stat = \App\Character::where('owner', $userid)->first();

if (!$stat) {
// Si aucun perso n'est créé, on crée une entrée liée au character owner:
    $id = DB::table('characters')->insertGetId(
    ['level' => 1, 'xp' => 0, 'gold' => 10, 'owner' => $userid, 'name' => NULL, 'loc_world' => 'a', 'loc_x' => '50', 'loc_y' => '50', 'loc_sub' => 'a', 'race' => NULL, 'class' => NULL, 'alignment' => NULL, 'ap' => 5, 'ap_max' => 5, 'ap_regen' => 5, 'mp' => 6, 'mp_max' => 6, 'mp_regen' => 6, 'df' => 7, 'df_max' => 7, 'df_regen' => 1, 'hp' => 200, 'hp_max' => 200, 'hp_regen' => 200, 'mana' => 200, 'mana_max' => 200, 'mana_regen' => 200, 'equipment_id' => 1337, 'trophies_id' => 1337, 'inventory_id' => 1337, 'main_trait_1' => NULL, 'main_trait_2' => NULL, 'main_trait_3' => NULL, 'main_trait_4' => NULL, 'main_trait_5' => NULL, 'main_trait_6' => NULL, 'main_trait_7' => NULL, 'main_trait_8' => NULL, 'main_trait_9' => NULL, 'main_trait_0' => NULL, 'sec_trait_1' => NULL, 'sec_trait_2' => NULL, 'sec_trait_3' => NULL, 'sec_trait_4' => NULL, 'sec_trait_5' => NULL, 'sec_trait_6' => NULL, 'sec_trait_7' => NULL, 'sec_trait_8' => NULL, 'sec_trait_9' => NULL, 'sec_trait_0' => NULL, 'forc' => 0, 'forc_bonus' => 0, 'forc_malus' => 0, 'dext' => 0, 'dext_bonus' => 0, 'dext_malus' => 0, 'endu' => 0, 'endu_bonus' => 0, 'endu_malus' => 0, 'defe' => 0, 'defe_bonus' => 0, 'defe_malus' => 0, 'inte' => 0, 'inte_bonus' => 0, 'inte_malus' => 0, 'vite' => 0, 'vite_bonus' => 0, 'vite_malus' => 0,
      'perc' => 0, 'perc_bonus' => 0, 'perc_malus' => 0, 'chan' => 0, 'chan_bonus' => 0, 'chan_malus' => 0, 'chrm' => 0, 'chrm_bonus' => 0, 'chrm_malus' => 0, 'sage' => 0, 'sage_bonus' => 0, 'sage_malus' => 0, 'volo' => 0, 'volo_bonus' => 0, 'volo_malus' => 0, 'ling' => 0, 'ling_bonus' => 0, 'ling_malus' => 0, 'forc' => 0, 'forc_bonus' => 0, 'forc_malus' => 0, 'title' => 'Nouvelle âme_5da4d3', 'rank' => 1, 'dicerolls' => 0, 'totalmainstatscapital' => 0, 'totalsecstatscapital' => 0, 'race_trait_1' => NULL, 'race_trait_2' => NULL, 'race_trait_3' => NULL, 'race_trait_4' => NULL, 'race_trait_5' => NULL, 'class_trait_1' => NULL, 'humanbonus' => 0, 'humantraitbonus' => 0, 'stats_set' => 0]
    );
    DB::table('characters')
            ->where('id', $id)
            ->update(['equipment_id' => $id, 'trophies_id' => $id, 'inventory_id' => $id]
    );
    DB::table('equipments')->insert(
      ['id' => $id, 'can_access' => 'y']
    );
    DB::table('inventories')->insert(
      ['id' => $id, 'can_access' => 'y', 'content' => '{"Items":[{"id":103,"amt":1,"sell":"y","altered":null},{"id":1,"amt":3,"sell":"y","altered":null},{"id":112,"amt":2,"sell":"y","altered": null},{"id":2,"amt":1,"sell":"y","altered":null},{"id":106,"amt":3,"sell":"y","altered":null},{"id":64,"amt":1,"sell":"y","altered":null},{"id":53,"amt":3,"sell":"y","altered":null},{"id":114,"amt":2,"sell":"y","altered": null},{"id":52,"amt":1,"sell":"y","altered":null},{"id":105,"amt":1,"sell":"y","altered":null}]}']
    );
    DB::table('parameters')->insert(
      ['id' => $id, 'lex_open' => '[1]', 'lex_history' => '{"History":[{"id":1}]}', 'lex_access' => '{"Books":[{"id":null}]}']
    );
?>
<script language="javascript" type="text/javascript">
  window.location.replace("{{ route('create') }}");
</script> 
<?php // si un personnage est bien créé dans la DB, on rafraichit
} else if ($stat->name != NULL && $stat->race != NULL && $stat->class != NULL) {
// si les trois premieres caracteristiques sont déjà remplies, on redirige directement vers la page 2
?>
<script language="javascript" type="text/javascript">
  window.location.replace("{{ route('create2') }}");
</script>
<?php
} else {
// puis si une entrée est bien créée pour ce character owner, alors on va rentrer dans l'édition de ses stats et caractéristiques. 
  if ($stat->race == NULL) {
    ?>
      @include('characreation.child.selectrace')
    <?php
  } else if ($stat->class == NULL && $stat->race != NULL) {

    ?>
      @include('characreation.child.selectclass')
    <?php
  } else if ($stat->name == NULL && $stat->race != NULL && $stat->class != NULL) {
    ?>
<div class="brickncobble maincontentview" data-simplebar>
  <div class="crowned floating"><h2>Nom de personnage</h2></div>
  <div class="textbox">
    <br /><p class="centeredtext">Choisissez votre nom et votre sexe.<br /><br />Attention, une fois votre nom et votre genre choisi, vous ne pourrez plus revenir en arrière à moins de tout recommencer!</p><br />
  </div>
  <div class="wide_messagebox">
      <form action="{{ route('sendname') }}">
        {{ csrf_field() }}
          <div class="textbox centered" style="min-width:650px;">
            <img src="./img/misc/manuscript.jpg" class="centered borderImg" />
            <br />
            <p class="centeredtext" style="font-size:1.75em;">Votre nom:</p>
            <span class="floating">
              <input type="text" name="name" class="form-control" pattern="[A-Za-zÀ-ÿ '-]{4,16}" style="font-size:1.75em;">
            </span><br />
            <p class="centeredtext" style="font-size:1.5em;">Votre sexe:</p>
            <span class="floating" style="font-size:1.5em;">
              <?php if ($stat->race == 'CHA') { ?>
                <input type="radio" name="gender" value="f" checked> Féminin (Changelin) 
                <span style="width:16px"></span>
                <input type="radio" name="gender" value="m"  disabled> <span style="color:grey;">Masculin </span>
              <?php } else { ?>
                <input type="radio" name="gender" value="f" checked> Féminin  
                <span style="width:16px"></span>
                <input type="radio" name="gender" value="m"> Masculin 
              <?php } ?>
            </span><br />
          </div><br />
        <button type="submit"class="centered greenhover">Confirmer</button>
      </form>
  </div>
  <div class="crownImg"><img src="./img/illu/banner/characlasspick.jpg" /></div>
</div>
        <?php
    }
}
?>
