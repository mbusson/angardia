<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$charastat = \App\Character::where('owner', $userid)->first();
$dicerolls = $charastat->dicerolls;
$totalMainStatsCapital = $charastat->totalmainstatscapital;
$totalSecStatsCapital = $charastat->totalsecstatscapital;
$user_race = $charastat->race;

if (!$charastat || $charastat->name == "null" || $charastat->race == "null" || $charastat->class == "null") {
// Si il manque une race, classe ou nom, on redirige le joueur vers la page 1:

?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>
<?php

} else {

// Maintenant, on récupere la race du joueur pour appliquer ses bonus de stats. On initialise aussi la variable aleatoire (lancer de dé)

switch ($user_race) {
	// forc_bonus	dext_bonus	endu_bonus	defe_bonus	inte_bonus	vite_bonus	
	// chrm_bonus	chan_bonus	perc_bonus	volo_bonus	sage_bonus	ling_bonus
	case 'ELF':
		//bonus
    	$charastat->dext_bonus = 2;
    	$charastat->inte_bonus = 2;
    	$charastat->vite_bonus = 1;
    	$charastat->perc_bonus = 2;
    	$charastat->chrm_bonus = 2;
	    //malus
    	$charastat->forc_malus = 2;
    	$charastat->endu_malus = 3;
    	$charastat->defe_malus = 1;
	    // race traits 
	    if ($charastat->race_trait_1 = 'null') {
	    	$charastat->race_trait_1 = 'vis_noct';
	    }
	    if ($charastat->race_trait_2 = 'null') {
	    	$charastat->race_trait_2 = 'res_magi';
	    }
	    if ($charastat->race_trait_3 = 'null') {
	    	$charastat->race_trait_3 = 'discret';
	    }
	    if ($charastat->race_trait_4 = 'null') {
	    	$charastat->race_trait_4 = 'equilib';
	    }
	    if ($charastat->race_trait_5 = 'null') {
	    	$charastat->race_trait_5 = 'cavalie';
	    }
	    // race stats 
	    $charastat->ap = 10;
	 	$charastat->ap_max = 10;
	 	$charastat->ap_regen = 1;
	 	$charastat->mp = 8;
	 	$charastat->mp_max = 8;
	 	$charastat->mp_regen = 1;
	 	$charastat->df = 7;
	 	$charastat->df_max = 7;
	 	$charastat->df_regen = 1;
	 	$charastat->hp = 175;
	 	$charastat->hp_max = 175;
	 	$charastat->hp_regen = 5;
	 	$charastat->mana = 225;
	 	$charastat->mana_max = 225;
	 	$charastat->mana_regen = 7;

	    $charastat->save();
	    break;
	case 'DEMELF':
	    //bonus
    	$charastat->perc_bonus = 2;
    	$charastat->chrm_bonus = 2;
    	$charastat->volo_bonus = 2;
	    //malus
    	$charastat->endu_malus = 1;
	    // race traits 
	    if ($charastat->race_trait_1 = 'null') {
	    	$charastat->race_trait_1 = 'vis_semi';
	    }
	    if ($charastat->race_trait_2 = 'null') {
	    	$charastat->race_trait_2 = 'res_magi';
	    }
	    if ($charastat->race_trait_3 = 'null') {
	    	$charastat->race_trait_3 = 'adaptab';
	    }
	    if ($charastat->race_trait_4 = 'null') {
	    	$charastat->race_trait_4 = 'equilib';
	    }
	    // race stats 
	    $charastat->ap = 10;
	 	$charastat->ap_max = 10;
	 	$charastat->ap_regen = 1;
	 	$charastat->mp = 7;
	 	$charastat->mp_max = 7;
	 	$charastat->mp_regen = 1;
	 	$charastat->df = 7;
	 	$charastat->df_max = 7;
	 	$charastat->df_regen = 1;
	 	$charastat->hp = 200;
	 	$charastat->hp_max = 200;
	 	$charastat->hp_regen = 6;
	 	$charastat->mana = 225;
	 	$charastat->mana_max = 225;
	 	$charastat->mana_regen = 6;

	    $charastat->save();
	    break;
	case 'HUM':
	    //bonus
	    $charastat->humanbonus = 7;
	    $charastat->humantraitbonus = 1;
	    // race traits 
	    if ($charastat->race_trait_1 = 'null') {
	    	$charastat->race_trait_1 = 'adaptab';
	    }
	    if ($charastat->race_trait_2 = 'null') {
	    	$charastat->race_trait_2 = 'compete';
	    }
	    if ($charastat->race_trait_3 = 'null') {
	    	$charastat->race_trait_3 = 'apprent';
	    }
	    // race stats 
	    $charastat->ap = 10;
	 	$charastat->ap_max = 10;
	 	$charastat->ap_regen = 1;
	 	$charastat->mp = 7;
	 	$charastat->mp_max = 7;
	 	$charastat->mp_regen = 1;
	 	$charastat->df = 7;
	 	$charastat->df_max = 7;
	 	$charastat->df_regen = 1;
	 	$charastat->hp = 225;
	 	$charastat->hp_max = 225;
	 	$charastat->hp_regen = 7;
	 	$charastat->mana = 200;
	 	$charastat->mana_max = 200;
	 	$charastat->mana_regen = 6;

	 	$charastat->save();
	    break;
	case 'HAL':
    	$charastat->dext_bonus = 2;
    	$charastat->vite_bonus = 2;
    	$charastat->chan_bonus = 5;
    	$charastat->perc_bonus = 2;
    	$charastat->chrm_bonus = 2;
    	$charastat->volo_bonus = 2;
	    //malus
    	$charastat->forc_malus = 4;
    	$charastat->endu_malus = 3;
    	$charastat->defe_malus = 4;
    	$charastat->sage_malus = 2;
	    // race traits 
	    if ($charastat->race_trait_1 = 'null') {
	    	$charastat->race_trait_1 = 'discret';
	    }
	    if ($charastat->race_trait_2 = 'null') {
	    	$charastat->race_trait_2 = 'intrepi';
	    }
	    if ($charastat->race_trait_3 = 'null') {
	    	$charastat->race_trait_3 = 'equilib';
	    }
	    if ($charastat->race_trait_4 = 'null') {
	    	$charastat->race_trait_4 = 'apprent';
	    }
	    // race stats 
	    $charastat->ap = 11;
	 	$charastat->ap_max = 11;
	 	$charastat->ap_regen = 1;
	 	$charastat->mp = 9;
	 	$charastat->mp_max = 9;
	 	$charastat->mp_regen = 1;
	 	$charastat->df = 13;
	 	$charastat->df_max = 13;
	 	$charastat->df_regen = 2;
	 	$charastat->hp = 200;
	 	$charastat->hp_max = 200;
	 	$charastat->hp_regen = 6;
	 	$charastat->mana = 100;
	 	$charastat->mana_max = 100;
	 	$charastat->mana_regen = 3;

	    $charastat->save();
	    break;
	case 'GNO':
	    //bonus
    	$charastat->endu_bonus = 2;
    	$charastat->inte_bonus = 2;
    	$charastat->volo_bonus = 2;
    	$charastat->chrm_bonus = 1;
    	$charastat->perc_bonus = 2;
	    //malus
    	$charastat->forc_malus = 3;
	    // race traits 
	    if ($charastat->race_trait_1 = 'null') {
	    	$charastat->race_trait_1 = 'vis_semi';
	    }
	    if ($charastat->race_trait_2 = 'null') {
	    	$charastat->race_trait_2 = 'hai_verd';
	    }
	    if ($charastat->race_trait_3 = 'null') {
	    	$charastat->race_trait_3 = 'res_illu';
	    }
	    if ($charastat->race_trait_4 = 'null') {
	    	$charastat->race_trait_4 = 'obsession';
	    }
	    if ($charastat->race_trait_5 = 'null') {
	    	$charastat->race_trait_5 = 'apprent';
	    }
	    // race stats 
	    $charastat->ap = 11;
	 	$charastat->ap_max = 11;
	 	$charastat->ap_regen = 1;
	 	$charastat->mp = 7;
	 	$charastat->mp_max = 7;
	 	$charastat->mp_regen = 1;
	 	$charastat->df = 15;
	 	$charastat->df_max = 15;
	 	$charastat->df_regen = 1;
	 	$charastat->hp = 175;
	 	$charastat->hp_max = 175;
	 	$charastat->hp_regen = 6;
	 	$charastat->mana = 250;
	 	$charastat->mana_max = 250;
	 	$charastat->mana_regen = 9;
	    $charastat->save();
	    break;
	case 'GNOPRO':
    	$charastat->forc_bonus = 2;
    	$charastat->endu_bonus = 4;
    	$charastat->defe_bonus = 4;
	    //malus
    	$charastat->dext_malus = 4;
    	$charastat->chrm_malus = 4;
	    // race traits 
	    if ($charastat->race_trait_1 = 'null') {
	    	$charastat->race_trait_1 = 'vis_noct';
	    }
	    if ($charastat->race_trait_2 = 'null') {
	    	$charastat->race_trait_2 = 'hai_verd';
	    }
	    if ($charastat->race_trait_3 = 'null') {
	    	$charastat->race_trait_3 = 'res_illu';
	    }
	    if ($charastat->race_trait_4 = 'null') {
	    	$charastat->race_trait_4 = 'ebloui';
	    }
	    if ($charastat->race_trait_5 = 'null') {
	    	$charastat->race_trait_5 = 'ais_roch';
	    }
	    // race stats 
	    $charastat->ap = 11;
	 	$charastat->ap_max = 11;
	 	$charastat->ap_regen = 1;
	 	$charastat->mp = 7;
	 	$charastat->mp_max = 7;
	 	$charastat->mp_regen = 1;
	 	$charastat->df = 15;
	 	$charastat->df_max = 15;
	 	$charastat->df_regen = 1;
	 	$charastat->hp = 175;
	 	$charastat->hp_max = 175;
	 	$charastat->hp_regen = 6;
	 	$charastat->mana = 250;
	 	$charastat->mana_max = 250;
	 	$charastat->mana_regen = 8;

	    $charastat->save();
	    break;
	case 'GOB':
    	$charastat->dext_bonus = 4;
    	$charastat->vite_bonus = 2;
    	$charastat->perc_bonus = 3;
	    //malus
    	$charastat->forc_malus = 3;
    	$charastat->inte_malus = 2;
    	$charastat->chrm_malus = 4;
	    // race traits 
	    if ($charastat->race_trait_1 = 'null') {
	    	$charastat->race_trait_1 = 'gobelin';
	    }
	    if ($charastat->race_trait_2 = 'null') {
	    	$charastat->race_trait_2 = 'discret';
	    }
	    if ($charastat->race_trait_3 = 'null') {
	    	$charastat->race_trait_3 = 'artille';
	    }
	    if ($charastat->race_trait_4 = 'null') {
	    	$charastat->race_trait_4 = 'cavalie';
	    }
	    // race stats 
	    $charastat->ap = 13;
	 	$charastat->ap_max = 13;
	 	$charastat->ap_regen = 2;
	 	$charastat->mp = 10;
	 	$charastat->mp_max = 10;
	 	$charastat->mp_regen = 1;
	 	$charastat->df = 8;
	 	$charastat->df_max = 8;
	 	$charastat->df_regen = 1;
	 	$charastat->hp = 200;
	 	$charastat->hp_max = 200;
	 	$charastat->hp_regen = 10;
	 	$charastat->mana = 100;
	 	$charastat->mana_max = 100;
	 	$charastat->mana_regen = 5;

	    $charastat->save();
	    break;
	case 'HOB':
    	$charastat->dext_bonus = 2;
    	$charastat->forc_bonus = 4;
    	$charastat->endu_bonus = 4;
    	$charastat->defe_bonus = 2;
	    //malus
    	$charastat->sage_malus = 2;
    	$charastat->inte_malus = 1;
    	$charastat->chrm_malus = 2;
	    // race traits 
	    if ($charastat->race_trait_1 = 'null') {
	    	$charastat->race_trait_1 = 'gobelin';
	    }
	    if ($charastat->race_trait_2 = 'null') {
	    	$charastat->race_trait_2 = 'discret';
	    }
	    // race stats 
	    $charastat->ap = 10;
	 	$charastat->ap_max = 10;
	 	$charastat->ap_regen = 1;
	 	$charastat->mp = 7;
	 	$charastat->mp_max = 7;
	 	$charastat->mp_regen = 1;
	 	$charastat->df = 6;
	 	$charastat->df_max = 6;
	 	$charastat->df_regen = 1;
	 	$charastat->hp = 250;
	 	$charastat->hp_max = 250;
	 	$charastat->hp_regen = 9;
	 	$charastat->mana = 125;
	 	$charastat->mana_max = 125;
	 	$charastat->mana_regen = 5;

	    $charastat->save();
	    break;
	case 'DRO':
    	$charastat->dext_bonus = 2;
    	$charastat->inte_bonus = 2;
    	$charastat->vite_bonus = 1;
    	$charastat->perc_bonus = 1;
    	$charastat->chrm_bonus = 2;
	    //malus
    	$charastat->forc_malus = 2;
    	$charastat->endu_malus = 3;
	    // race traits 
	    if ($charastat->race_trait_1 = 'null') {
	    	$charastat->race_trait_1 = 'vis_noct';
	    }
	    if ($charastat->race_trait_2 = 'null') {
	    	$charastat->race_trait_2 = 'res_magi';
	    }
	    if ($charastat->race_trait_3 = 'null') {
	    	$charastat->race_trait_3 = 'empoiso';
	    }
	    if ($charastat->race_trait_4 = 'null') {
	    	$charastat->race_trait_4 = 'discret';
	    }
	    if ($charastat->race_trait_5 = 'null') {
	    	$charastat->race_trait_5 = 'ebloui';
	    }
	    // race stats 
	    $charastat->ap = 10;
	 	$charastat->ap_max = 10;
	 	$charastat->ap_regen = 1;
	 	$charastat->mp = 8;
	 	$charastat->mp_max = 8;
	 	$charastat->mp_regen = 1;
	 	$charastat->df = 7;
	 	$charastat->df_max = 7;
	 	$charastat->df_regen = 1;
	 	$charastat->hp = 175;
	 	$charastat->hp_max = 175;
	 	$charastat->hp_regen = 6;
	 	$charastat->mana = 225;
	 	$charastat->mana_max = 225;
	 	$charastat->mana_regen = 7;

	    $charastat->save();
	    break;
	case 'CAL':
    	$charastat->dext_bonus = 2;
    	$charastat->inte_bonus = 3;
    	$charastat->ling_bonus = 3;
    	$charastat->perc_bonus = 2;
	    //malus
    	$charastat->forc_malus = 2;
    	$charastat->endu_malus = 2;
    	$charastat->defe_malus = 1;
	    // race traits 
	    if ($charastat->race_trait_1 = 'null') {
	    	$charastat->race_trait_1 = 'obsessi';
	    }
	    if ($charastat->race_trait_2 = 'null') {
	    	$charastat->race_trait_2 = 'discret';
	    }
	    if ($charastat->race_trait_3 = 'null') {
	    	$charastat->race_trait_3 = 'res_magi';
	    }
	    if ($charastat->race_trait_4 = 'null') {
	    	$charastat->race_trait_4 = 'intrepi';
	    }
	    // race stats 
	    $charastat->ap = 10;
	 	$charastat->ap_max = 10;
	 	$charastat->ap_regen = 1;
	 	$charastat->mp = 7;
	 	$charastat->mp_max = 7;
	 	$charastat->mp_regen = 1;
	 	$charastat->df = 11;
	 	$charastat->df_max = 11;
	 	$charastat->df_regen = 1;
	 	$charastat->hp = 175;
	 	$charastat->hp_max = 175;
	 	$charastat->hp_regen = 6;
	 	$charastat->mana = 250;
	 	$charastat->mana_max = 250;
	 	$charastat->mana_regen = 10;

	    $charastat->save();
	    break;
	case 'CHA':
    	$charastat->chrm_bonus = 3;
    	$charastat->inte_bonus = 3;
    	$charastat->sage_bonus = 2;
    	$charastat->perc_bonus = 2;
	    //malus
    	$charastat->forc_malus = 2;
    	$charastat->endu_malus = 2;
    	$charastat->chan_malus = 1;
	    // race traits 
	    if ($charastat->race_trait_1 = 'null') {
	    	$charastat->race_trait_1 = 'res_magi';
	    }
	    if ($charastat->race_trait_2 = 'null') {
	    	$charastat->race_trait_2 = 'discret';
	    }
	    if ($charastat->race_trait_3 = 'null') {
	    	$charastat->race_trait_3 = 'res_illu';
	    }
	    if ($charastat->race_trait_4 = 'null') {
	    	$charastat->race_trait_4 = 'metamor';
	    }
	    if ($charastat->race_trait_5 = 'null') {
	    	$charastat->race_trait_5 = 'empoiso';
	    }
	    // race stats 
	    $charastat->ap = 10;
	 	$charastat->ap_max = 10;
	 	$charastat->ap_regen = 1;
	 	$charastat->mp = 7;
	 	$charastat->mp_max = 7;
	 	$charastat->mp_regen = 1;
	 	$charastat->df = 11;
	 	$charastat->df_max = 11;
	 	$charastat->df_regen = 1;
	 	$charastat->hp = 150;
	 	$charastat->hp_max = 150;
	 	$charastat->hp_regen = 7;
	 	$charastat->mana = 275;
	 	$charastat->mana_max = 275;
	 	$charastat->mana_regen = 8;

	    $charastat->save();
	    break;
	case 'VOL':
    	$charastat->dext_bonus = 2;
    	$charastat->inte_bonus = 2;
    	$charastat->chan_bonus = 3;
    	$charastat->perc_bonus = 1;
	    //malus
    	$charastat->forc_malus = 3;
    	$charastat->endu_malus = 2;
	    // race traits 
	    if ($charastat->race_trait_1 = 'null') {
	    	$charastat->race_trait_1 = 'res_illu';
	    }
	    if ($charastat->race_trait_2 = 'null') {
	    	$charastat->race_trait_2 = 'discret';
	    }
	    if ($charastat->race_trait_3 = 'null') {
	    	$charastat->race_trait_3 = 'metamor';
	    }
	    if ($charastat->race_trait_4 = 'null') {
	    	$charastat->race_trait_4 = 'anthrop';
	    }
	    if ($charastat->race_trait_5 = 'null') {
	    	$charastat->race_trait_5 = 'equilib';
	    }
	    $charastat->ap = 10;
	 	$charastat->ap_max = 10;
	 	$charastat->ap_regen = 1;
	 	$charastat->mp = 9;
	 	$charastat->mp_max = 9;
	 	$charastat->mp_regen = 1;
	 	$charastat->df = 11;
	 	$charastat->df_max = 11;
	 	$charastat->df_regen = 1;
	 	$charastat->hp = 175;
	 	$charastat->hp_max = 175;
	 	$charastat->hp_regen = 8;
	 	$charastat->mana = 200;
	 	$charastat->mana_max = 200;
	 	$charastat->mana_regen = 9;

	    $charastat->save();
	    break;
	case 'OND':
	    echo "Ondin";
	    break;
	case 'SYL':
	    echo "Sylphe";
	    break;
	case 'SAM':
	    echo "Samsarien";
	    break;
	case 'VIS':
	    echo "Vishkanya";
	break;
}
?>

<div class='brickncobble'>
	<p> Vous avez choisi la race <?php echo raceName($charastat->race); ?>. Vos bonus de race sont désormais appliqués sur votre personnage. Lancement du dé aléatoire...</p>

	<?php 
	if ($charastat->dicerolls <=3 || $charastat->dicerolls ==0) {
		$totalMainStatsCapital = random_int(42 , 52); $dicerolls++; 
		echo 'Points principaux:<h1>' . $totalMainStatsCapital . '</h1>.<br /><br />';

		$totalSecStatsCapital = random_int(40, 60); 
		echo 'Points secondaires:<h1>' . $totalSecStatsCapital . '</h1>.<br /><br />';

		$charastat->dicerolls = $dicerolls;
		$charastat->totalmainstatscapital = ($totalMainStatsCapital + $charastat->humanbonus);
		$charastat->totalsecstatscapital = $totalSecStatsCapital;
		$charastat->save();

		echo '<p> Un résultat de 40 est considéré comme mauvais, 45 bon, 50 excellent.<br ?><br />Ce résultat ne vous plait pas et vous souhaitez relancer les dés? vous pouvez le faire en rafraichissant la page. <br /> ATTENTION: <font color="red"><strong>' . (4 - $charastat->dicerolls) . '</strong></font> lancers restants.</p>';
	} else {
		echo 'Points principaux:<h1>' . $totalMainStatsCapital . '</h1>.<br /><br />';
		echo 'Points principaux:<h1>' . $totalSecStatsCapital . '</h1>.<br /><br />';

		echo 'Désolé, vous ne pouvez plus relancer les dés.';
	}
	?>

	<a href="{{ route('create3') }}" class="button">Continuer</a>

</div>

<!-- stats HTML -->

<?php
}
?>
