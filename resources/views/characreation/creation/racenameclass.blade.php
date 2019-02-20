<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$stat = \App\Character::where('owner', $userid)->first();
$charaequi = \App\Equipment::where('id', $stat->id)->first();
$charainv = \App\Inventory::where('id', $stat->id)->first();
$dicerolls = $stat->dicerolls;
$totalMainStatsCapital = $stat->totalmainstatscapital;
$totalSecStatsCapital = $stat->totalsecstatscapital;
$user_race = $stat->race;
$user_class = $stat->class;

if (!$stat || $stat->name == NULL || $stat->race == NULL || $stat->class == NULL) {
// Si il manque une race, classe ou nom, on redirige le joueur vers la page 1:
?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>
<?php
} else if ($stat->avatar_url != NULL) {
?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create6') }}");
  </script>
<?php
} else if ($stat->main_trait_1 != NULL && $stat->sec_trait_1 != NULL) {
?>
	<script language="javascript" type="text/javascript">
	  window.location.replace("{{ route('create5') }}");
	</script>
<?php
} else if ($stat->stats_set == 1) {
?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create4') }}");
  </script>
<?php
} else  if ($dicerolls == 0) {
// Maintenant, on récupere la race du joueur pour appliquer ses bonus de stats. On initialise aussi la variable aleatoire (lancer de dé)
	if ($stat->racebonus_defined == 'n') {
		switch ($user_race) {
		// forc_bonus	dext_bonus	endu_bonus	defe_bonus	inte_bonus	vite_bonus	
		// chrm_bonus	chan_bonus	perc_bonus	volo_bonus	sage_bonus	ling_bonus
		case 'ELF':
			//bonus
	    	$stat->dext_bonus = 2;
	    	$stat->inte_bonus = 2;
	    	$stat->vite_bonus = 1;
	    	$stat->perc_bonus = 2;
	    	$stat->chrm_bonus = 2;
		    //malus
	    	$stat->forc_malus = 2;
	    	$stat->endu_malus = 3;
	    	$stat->defe_malus = 1;
		    // race traits 
		    if ($stat->race_trait_1 == NULL) {
		    	$stat->race_trait_1 = 'vis_noct';
		    }
		    if ($stat->race_trait_2 == NULL) {
		    	$stat->race_trait_2 = 'res_magi';
		    }
		    if ($stat->race_trait_3 == NULL) {
		    	$stat->race_trait_3 = 'discr';
		    }
		    if ($stat->race_trait_4 == NULL) {
		    	$stat->race_trait_4 = 'equil';
		    }
		    if ($stat->race_trait_5 == NULL) {
		    	$stat->race_trait_5 = 'caval';
		    }
		    // race stats 
		    $stat->ap = 10;
		 	$stat->ap_max = 10;
		 	$stat->ap_regen = 1;
		 	$stat->mp = 8;
		 	$stat->mp_max = 8;
		 	$stat->mp_regen = 1;
		 	$stat->df = 7;
		 	$stat->df_max = 7;
		 	$stat->df_regen = 1;
		 	$stat->hp = 175;
		 	$stat->hp_max = 175;
		 	$stat->hp_regen = 5;
		 	$stat->mana = 225;
		 	$stat->mana_max = 225;
		 	$stat->mana_regen = 7;
		 	// lock increment
		    $stat->racebonus_defined = 'y';

		    $stat->save();
		    break;
		case 'DEM':
		    //bonus
	    	$stat->perc_bonus = 2;
	    	$stat->chrm_bonus = 2;
	    	$stat->volo_bonus = 2;
		    //malus
	    	$stat->endu_malus = 1;
		    // race traits 
		    if ($stat->race_trait_1 == NULL) {
		    	$stat->race_trait_1 = 'vis_semi';
		    }
		    if ($stat->race_trait_2 == NULL) {
		    	$stat->race_trait_2 = 'res_magi';
		    }
		    if ($stat->race_trait_3 == NULL) {
		    	$stat->race_trait_3 = 'adapt';
		    }
		    if ($stat->race_trait_4 == NULL) {
		    	$stat->race_trait_4 = 'equil';
		    }
		    // race stats 
		    $stat->ap = 10;
		 	$stat->ap_max = 10;
		 	$stat->ap_regen = 1;
		 	$stat->mp = 7;
		 	$stat->mp_max = 7;
		 	$stat->mp_regen = 1;
		 	$stat->df = 7;
		 	$stat->df_max = 7;
		 	$stat->df_regen = 1;
		 	$stat->hp = 200;
		 	$stat->hp_max = 200;
		 	$stat->hp_regen = 6;
		 	$stat->mana = 225;
		 	$stat->mana_max = 225;
		 	$stat->mana_regen = 6;
		 	// lock increment
		    $stat->racebonus_defined = 'y';

		    $stat->save();
		    break;
		case 'HUM':
		    // race traits 
		    if ($stat->race_trait_1 == NULL) {
		    	$stat->race_trait_1 = 'adapt';
		    }
		    if ($stat->race_trait_2 == NULL) {
		    	$stat->race_trait_2 = 'compe';
		    }
		    if ($stat->race_trait_3 == NULL) {
		    	$stat->race_trait_3 = 'appre';
		    }
		    // race stats 
		    $stat->ap = 10;
		 	$stat->ap_max = 10;
		 	$stat->ap_regen = 1;
		 	$stat->mp = 7;
		 	$stat->mp_max = 7;
		 	$stat->mp_regen = 1;
		 	$stat->df = 7;
		 	$stat->df_max = 7;
		 	$stat->df_regen = 1;
		 	$stat->hp = 225;
		 	$stat->hp_max = 225;
		 	$stat->hp_regen = 7;
		 	$stat->mana = 200;
		 	$stat->mana_max = 200;
		 	$stat->mana_regen = 6;
		 	//bonus
		    $stat->humanbonus = 7;
		    $stat->humantraitbonus = 1;
		    // lock increment
		    $stat->racebonus_defined = 'y';

		 	$stat->save();
		    break;
		case 'HAL':
	    	$stat->dext_bonus = 2;
	    	$stat->vite_bonus = 2;
	    	$stat->chan_bonus = 5;
	    	$stat->perc_bonus = 2;
	    	$stat->chrm_bonus = 2;
	    	$stat->volo_bonus = 2;
		    //malus
	    	$stat->forc_malus = 5;
	    	$stat->endu_malus = 3;
	    	$stat->defe_malus = 5;
	    	$stat->sage_malus = 2;
		    // race traits 
		    if ($stat->race_trait_1 == NULL) {
		    	$stat->race_trait_1 = 'discr';
		    }
		    if ($stat->race_trait_2 == NULL) {
		    	$stat->race_trait_2 = 'intre';
		    }
		    if ($stat->race_trait_3 == NULL) {
		    	$stat->race_trait_3 = 'equil';
		    }
		    if ($stat->race_trait_4 == NULL) {
		    	$stat->race_trait_4 = 'appre';
		    }
		    // race stats 
		    $stat->ap = 11;
		 	$stat->ap_max = 11;
		 	$stat->ap_regen = 1;
		 	$stat->mp = 9;
		 	$stat->mp_max = 9;
		 	$stat->mp_regen = 1;
		 	$stat->df = 13;
		 	$stat->df_max = 13;
		 	$stat->df_regen = 2;
		 	$stat->hp = 175;
		 	$stat->hp_max = 175;
		 	$stat->hp_regen = 6;
		 	$stat->mana = 100;
		 	$stat->mana_max = 100;
		 	$stat->mana_regen = 3;
		 	// lock increment
		    $stat->racebonus_defined = 'y';

		    $stat->save();
		    break;
		case 'GNO':
		    //bonus
	    	$stat->endu_bonus = 2;
	    	$stat->inte_bonus = 2;
	    	$stat->volo_bonus = 2;
	    	$stat->chrm_bonus = 1;
	    	$stat->perc_bonus = 1;
		    //malus
	    	$stat->forc_malus = 3;
		    // race traits 
		    if ($stat->race_trait_1 == NULL) {
		    	$stat->race_trait_1 = 'vis_semi';
		    }
		    if ($stat->race_trait_2 == NULL) {
		    	$stat->race_trait_2 = 'hai_verd';
		    }
		    if ($stat->race_trait_3 == NULL) {
		    	$stat->race_trait_3 = 'res_illu';
		    }
		    if ($stat->race_trait_4 == NULL) {
		    	$stat->race_trait_4 = 'obses';
		    }
		    if ($stat->race_trait_5 == NULL) {
		    	$stat->race_trait_5 = 'appre';
		    }
		    // race stats 
		    $stat->ap = 10;
		 	$stat->ap_max = 10;
		 	$stat->ap_regen = 1;
		 	$stat->mp = 7;
		 	$stat->mp_max = 7;
		 	$stat->mp_regen = 1;
		 	$stat->df = 15;
		 	$stat->df_max = 15;
		 	$stat->df_regen = 1;
		 	$stat->hp = 150;
		 	$stat->hp_max = 150;
		 	$stat->hp_regen = 6;
		 	$stat->mana = 250;
		 	$stat->mana_max = 250;
		 	$stat->mana_regen = 9;
		 	// lock increment
		    $stat->racebonus_defined = 'y';

		    $stat->save();
		    break;
		case 'DVA':
	    	$stat->forc_bonus = 2;
	    	$stat->endu_bonus = 4;
	    	$stat->defe_bonus = 4;
		    //malus
	    	$stat->dext_malus = 3;
	    	$stat->chrm_malus = 4;
		    // race traits 
		    if ($stat->race_trait_1 == NULL) {
		    	$stat->race_trait_1 = 'vis_noct';
		    }
		    if ($stat->race_trait_2 == NULL) {
		    	$stat->race_trait_2 = 'hai_verd';
		    }
		    if ($stat->race_trait_3 == NULL) {
		    	$stat->race_trait_3 = 'res_illu';
		    }
		    if ($stat->race_trait_4 == NULL) {
		    	$stat->race_trait_4 = 'eblou';
		    }
		    if ($stat->race_trait_5 == NULL) {
		    	$stat->race_trait_5 = 'ais_roch';
		    }
		    // race stats 
		    $stat->ap = 10;
		 	$stat->ap_max = 10;
		 	$stat->ap_regen = 1;
		 	$stat->mp = 7;
		 	$stat->mp_max = 7;
		 	$stat->mp_regen = 1;
		 	$stat->df = 7;
		 	$stat->df_max = 7;
		 	$stat->df_regen = 1;
		 	$stat->hp = 275;
		 	$stat->hp_max = 275;
		 	$stat->hp_regen = 6;
		 	$stat->mana = 150;
		 	$stat->mana_max = 150;
		 	$stat->mana_regen = 6;
		 	// lock increment
		    $stat->racebonus_defined = 'y';

		    $stat->save();
		    break;
		case 'GOB':
	    	$stat->dext_bonus = 4;
	    	$stat->vite_bonus = 2;
	    	$stat->perc_bonus = 3;
		    //malus
	    	$stat->forc_malus = 3;
	    	$stat->inte_malus = 2;
	    	$stat->chrm_malus = 4;
		    // race traits 
		    if ($stat->race_trait_1 == NULL) {
		    	$stat->race_trait_1 = 'gobel';
		    }
		    if ($stat->race_trait_2 == NULL) {
		    	$stat->race_trait_2 = 'discr';
		    }
		    if ($stat->race_trait_3 == NULL) {
		    	$stat->race_trait_3 = 'artil';
		    }
		    if ($stat->race_trait_4 == NULL) {
		    	$stat->race_trait_4 = 'caval';
		    }
		    // race stats 
		    $stat->ap = 13;
		 	$stat->ap_max = 13;
		 	$stat->ap_regen = 2;
		 	$stat->mp = 10;
		 	$stat->mp_max = 10;
		 	$stat->mp_regen = 1;
		 	$stat->df = 8;
		 	$stat->df_max = 8;
		 	$stat->df_regen = 1;
		 	$stat->hp = 175;
		 	$stat->hp_max = 175;
		 	$stat->hp_regen = 10;
		 	$stat->mana = 100;
		 	$stat->mana_max = 100;
		 	$stat->mana_regen = 5;
		 	// lock increment
		    $stat->racebonus_defined = 'y';

		    $stat->save();
		    break;
		case 'HOB':
	    	$stat->dext_bonus = 2;
	    	$stat->forc_bonus = 4;
	    	$stat->endu_bonus = 4;
	    	$stat->defe_bonus = 2;
		    //malus
	    	$stat->sage_malus = 2;
	    	$stat->inte_malus = 1;
	    	$stat->chrm_malus = 3;
		    // race traits 
		    if ($stat->race_trait_1 == NULL) {
		    	$stat->race_trait_1 = 'gobel';
		    }
		    if ($stat->race_trait_2 == NULL) {
		    	$stat->race_trait_2 = 'intre';
		    }
		    if ($stat->race_trait_3 == NULL) {
		    	$stat->race_trait_3 = 'intim';
		    }
		    // race stats 
		    $stat->ap = 10;
		 	$stat->ap_max = 10;
		 	$stat->ap_regen = 1;
		 	$stat->mp = 7;
		 	$stat->mp_max = 7;
		 	$stat->mp_regen = 1;
		 	$stat->df = 6;
		 	$stat->df_max = 6;
		 	$stat->df_regen = 1;
		 	$stat->hp = 250;
		 	$stat->hp_max = 250;
		 	$stat->hp_regen = 9;
		 	$stat->mana = 125;
		 	$stat->mana_max = 125;
		 	$stat->mana_regen = 5;
		 	// lock increment
		    $stat->racebonus_defined = 'y';

		    $stat->save();
		    break;
		case 'DRO':
	    	$stat->dext_bonus = 2;
	    	$stat->inte_bonus = 2;
	    	$stat->vite_bonus = 1;
	    	$stat->perc_bonus = 1;
	    	$stat->chrm_bonus = 2;
		    //malus
	    	$stat->forc_malus = 2;
	    	$stat->endu_malus = 3;
		    // race traits 
		    if ($stat->race_trait_1 == NULL) {
		    	$stat->race_trait_1 = 'vis_noct';
		    }
		    if ($stat->race_trait_2 == NULL) {
		    	$stat->race_trait_2 = 'res_magi';
		    }
		    if ($stat->race_trait_3 == NULL) {
		    	$stat->race_trait_3 = 'empoi';
		    }
		    if ($stat->race_trait_4 == NULL) {
		    	$stat->race_trait_4 = 'discr';
		    }
		    if ($stat->race_trait_5 == NULL) {
		    	$stat->race_trait_5 = 'eblou';
		    }
		    // race stats 
		    $stat->ap = 10;
		 	$stat->ap_max = 10;
		 	$stat->ap_regen = 1;
		 	$stat->mp = 8;
		 	$stat->mp_max = 8;
		 	$stat->mp_regen = 1;
		 	$stat->df = 7;
		 	$stat->df_max = 7;
		 	$stat->df_regen = 1;
		 	$stat->hp = 175;
		 	$stat->hp_max = 175;
		 	$stat->hp_regen = 6;
		 	$stat->mana = 225;
		 	$stat->mana_max = 225;
		 	$stat->mana_regen = 7;
		 	// lock increment
		    $stat->racebonus_defined = 'y';

		    $stat->save();
		    break;
		case 'CAL':
	    	$stat->dext_bonus = 2;
	    	$stat->inte_bonus = 3;
	    	$stat->ling_bonus = 3;
	    	$stat->perc_bonus = 2;
		    //malus
	    	$stat->forc_malus = 2;
	    	$stat->endu_malus = 2;
	    	$stat->defe_malus = 1;
		    // race traits 
		    if ($stat->race_trait_1 == NULL) {
		    	$stat->race_trait_1 = 'obses';
		    }
		    if ($stat->race_trait_2 == NULL) {
		    	$stat->race_trait_2 = 'discr';
		    }
		    if ($stat->race_trait_3 == NULL) {
		    	$stat->race_trait_3 = 'res_magi';
		    }
		    if ($stat->race_trait_4 == NULL) {
		    	$stat->race_trait_4 = 'intre';
		    }
		    // race stats 
		    $stat->ap = 10;
		 	$stat->ap_max = 10;
		 	$stat->ap_regen = 1;
		 	$stat->mp = 7;
		 	$stat->mp_max = 7;
		 	$stat->mp_regen = 1;
		 	$stat->df = 11;
		 	$stat->df_max = 11;
		 	$stat->df_regen = 1;
		 	$stat->hp = 175;
		 	$stat->hp_max = 175;
		 	$stat->hp_regen = 6;
		 	$stat->mana = 250;
		 	$stat->mana_max = 250;
		 	$stat->mana_regen = 10;
		 	// lock increment
		    $stat->racebonus_defined = 'y';

		    $stat->save();
		    break;
		case 'CHA':
	    	$stat->chrm_bonus = 3;
	    	$stat->inte_bonus = 3;
	    	$stat->perc_bonus = 2;
	    	$stat->volo_bonus = 2;
		    //malus
	    	$stat->forc_malus = 2;
	    	$stat->endu_malus = 2;
	    	$stat->chan_malus = 1;
		    // race traits 
		    if ($stat->race_trait_1 == NULL) {
		    	$stat->race_trait_1 = 'res_magi';
		    }
		    if ($stat->race_trait_2 == NULL) {
		    	$stat->race_trait_2 = 'discr';
		    }
		    if ($stat->race_trait_3 == NULL) {
		    	$stat->race_trait_3 = 'res_illu';
		    }
		    if ($stat->race_trait_4 == NULL) {
		    	$stat->race_trait_4 = 'metam';
		    }
		    if ($stat->race_trait_5 == NULL) {
		    	$stat->race_trait_5 = 'empoi';
		    }
		    // race stats 
		    $stat->ap = 10;
		 	$stat->ap_max = 10;
		 	$stat->ap_regen = 1;
		 	$stat->mp = 7;
		 	$stat->mp_max = 7;
		 	$stat->mp_regen = 1;
		 	$stat->df = 11;
		 	$stat->df_max = 11;
		 	$stat->df_regen = 1;
		 	$stat->hp = 150;
		 	$stat->hp_max = 150;
		 	$stat->hp_regen = 7;
		 	$stat->mana = 275;
		 	$stat->mana_max = 275;
		 	$stat->mana_regen = 8;
		 	// lock increment
		    $stat->racebonus_defined = 'y';

		    $stat->save();
		    break;
		case 'VOL':
	    	$stat->dext_bonus = 2;
	    	$stat->inte_bonus = 2;
	    	$stat->vite_bonus = 1;
	    	$stat->chrm_bonus = 3;
	    	$stat->perc_bonus = 1;
		    //malus
	    	$stat->forc_malus = 4;
	    	$stat->endu_malus = 2;
		    // race traits 
		    if ($stat->race_trait_1 == NULL) {
		    	$stat->race_trait_1 = 'res_illu';
		    }
		    if ($stat->race_trait_2 == NULL) {
		    	$stat->race_trait_2 = 'discr';
		    }
		    if ($stat->race_trait_3 == NULL) {
		    	$stat->race_trait_3 = 'metam';
		    }
		    if ($stat->race_trait_4 == NULL) {
		    	$stat->race_trait_4 = 'anthr';
		    }
		    if ($stat->race_trait_5 == NULL) {
		    	$stat->race_trait_5 = 'equil';
		    }
		    $stat->ap = 10;
		 	$stat->ap_max = 10;
		 	$stat->ap_regen = 1;
		 	$stat->mp = 8;
		 	$stat->mp_max = 8;
		 	$stat->mp_regen = 1;
		 	$stat->df = 10;
		 	$stat->df_max = 10;
		 	$stat->df_regen = 1;
		 	$stat->hp = 175;
		 	$stat->hp_max = 175;
		 	$stat->hp_regen = 8;
		 	$stat->mana = 175;
		 	$stat->mana_max = 175;
		 	$stat->mana_regen = 8;
		 	// lock increment
		    $stat->racebonus_defined = 'y';

		    $stat->save();
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

	// Maintenant, on récupere la race du joueur pour appliquer ses bonus de stats et son équipement de départ. On initialise aussi la variable aleatoire (lancer de dé)
	if ($stat->classbonus_defined == 'n') {
		switch ($user_class) {
			// forc_bonus	dext_bonus	endu_bonus	defe_bonus	inte_bonus	vite_bonus	
			// chrm_bonus	chan_bonus	perc_bonus	volo_bonus	sage_bonus	ling_bonus
			case 'GUER':
				//bonus
		    	$stat->forc_bonus += 2;
		    	$stat->defe_bonus += 2;
		    	$stat->endu_bonus += 2;
			    //malus
		    	$stat->inte_malus += 2;
			    // class traits 
			    if ($stat->class_trait_1 == NULL) {
			    	$stat->class_trait_1 = 'art_guer';
			    }
			    // lock increment
			    $stat->classbonus_defined = 'y';

			    $stat->save();

			    $charaequi->head = 93;
			    $charaequi->rhand = 84;
			    $charaequi->chest = 68;
			    $charaequi->legs = 108;
			    $charaequi->waist = 95;
			    $charaequi->hands = 99;
			    $charaequi->ring1 = 57;
			    $charaequi->neck = 91;
			    $charaequi->wrist = 92;
			    $charaequi->trink1 = 60;

			    $charaequi->save();

			    break;
			case 'BARB':
				//bonus
		    	$stat->forc_bonus += 4;
		    	$stat->endu_bonus += 3;
			    //malus
		    	$stat->inte_malus += 3;
			    // class traits 
			    if ($stat->class_trait_1 == NULL) {
			    	$stat->class_trait_1 = 'insen';
			    }
			    // lock increment
			    $stat->classbonus_defined = 'y';

			    $stat->save();

			    $charaequi->head = 93;
			    $charaequi->rhand = 73;
			    $charaequi->chest = 68;
			    $charaequi->legs = 109;
			    $charaequi->waist = 95;
			    $charaequi->hands = 99;
			    $charaequi->ring1 = 57;
			    $charaequi->neck = 91;
			    $charaequi->wrist = 92;
			    $charaequi->trink1 = 60;

			    $charaequi->save();

			    break;
			case 'SORC':
				//bonus
		    	$stat->inte_bonus += 2;
		    	$stat->volo_bonus += 1;
		    	$stat->sage_bonus += 1;
		    	// lock increment
			    $stat->classbonus_defined = 'y';

			    $stat->save();

			    $charaequi->head = 107;
			    $charaequi->rhand = 90;
			    $charaequi->lhand = 100;
			    $charaequi->chest = 69;
			    $charaequi->legs = 109;
			    $charaequi->waist = 95;
			    $charaequi->ring1 = 58;
			    $charaequi->neck = 91;
			    $charaequi->trink1 = 59;

			    $charaequi->save();
			    
			    break;
			case 'MAGI':
				//bonus
		    	$stat->inte_bonus += 3;
		    	$stat->sage_bonus += 1;
		    	$stat->volo_bonus += 2;
		    	$stat->ling_bonus += 1;
			    //malus
		    	$stat->forc_malus += 2;
		    	// lock increment
			    $stat->classbonus_defined = 'y';

			    $stat->save();

			    $charaequi->head = 107;
			    $charaequi->rhand = 88;
			    $charaequi->chest = 70;
			    $charaequi->legs = 110;
			    $charaequi->waist = 95;
			    $charaequi->ring1 = 58;
			    $charaequi->neck = 91;
			    $charaequi->trink1 = 59;

			    $charaequi->save();
			    
			    break;
			case 'ASSA':
				//bonus
		    	$stat->dext_bonus += 2;
		    	$stat->perc_bonus += 2;
		    	// lock increment
			    $stat->classbonus_defined = 'y';

			    $stat->save();

			    $charaequi->head = 94;
			    $charaequi->rhand = 80;
			    $charaequi->lhand = 81;
			    $charaequi->chest = 69;
			    $charaequi->legs = 110;
			    $charaequi->waist = 116;
			    $charaequi->ring1 = 57;
			    $charaequi->neck = 91;
			    $charaequi->trink1 = 60;

			    $charaequi->save();
			    
			    break;
			case 'ROUB':
				//bonus
		    	$stat->chrm_bonus += 2;
		    	$stat->chan_bonus += 2;
		    	// lock increment
			    $stat->classbonus_defined = 'y';

		    	// class traits 
			    if ($stat->class_trait_1 == NULL) {
			    	$stat->class_trait_1 = 'vigil';
			    }

			    $stat->save();

			    $charaequi->head = 96;
			    $charaequi->rhand = 78;
			    $charaequi->chest = 70;
			    $charaequi->legs = 110;
			    $charaequi->waist = 116;
			    $charaequi->ring1 = 57;
			    $charaequi->neck = 91;
			    $charaequi->trink1 = 60;

			    $charaequi->save();
			    
			    break;
			case 'VAGA':
				//bonus
		    	$stat->endu_bonus += 1;
		    	$stat->perc_bonus += 3;

		    	// class traits 
			    if ($stat->class_trait_1 == NULL) {
			    	$stat->class_trait_1 = 'vigil';
			    }
			    // lock increment
			    $stat->classbonus_defined = 'y';

			    $stat->save();

			    $charaequi->head = 94;
			    $charaequi->rhand = 76;
			    $charaequi->lhand = 85;
			    $charaequi->chest = 69;
			    $charaequi->legs = 109;
			    $charaequi->waist = 116;
			    $charaequi->hands = 99;
			    $charaequi->ring1 = 57;
			    $charaequi->neck = 91;
			    $charaequi->wrist = 92;
			    $charaequi->trink1 = 60;

			    $charaequi->save();
			    
			    break;
			case 'PALA':
				//bonus
		    	$stat->defe_bonus += 4;
		    	// lock increment
			    $stat->classbonus_defined = 'y';

			    $stat->save();

			    $charaequi->head = 93;
			    $charaequi->rhand = 82;
			    $charaequi->chest = 68;
			    $charaequi->legs = 108;
			    $charaequi->waist = 95;
			    $charaequi->hands = 98;
			    $charaequi->ring1 = 57;
			    $charaequi->neck = 91;
			    $charaequi->wrist = 92;
			    $charaequi->trink1 = 60;

			    $charaequi->save();
			    
			    break;
			case 'CLER':
				//bonus
		    	$stat->sage_bonus += 1;
		    	$stat->volo_bonus += 4;
		    	$stat->df += 5;
			 	$stat->df_max += 5;
			 	// lock increment
			    $stat->classbonus_defined = 'y';

			    $stat->save();

			    $charaequi->head = 107;
			    $charaequi->rhand = 79;
			    $charaequi->lhand = 86;
			    $charaequi->chest = 71;
			    $charaequi->legs = 110;
			    $charaequi->waist = 95;
			    $charaequi->ring1 = 58;
			    $charaequi->neck = 91;
			    $charaequi->trink1 = 59;

			    $charaequi->save();
			    
			    break;
			case 'MOIN':
				//bonus
		    	$stat->endu_bonus += 4;
		    	// lock increment
			    $stat->classbonus_defined = 'y';

			    $stat->save();

			    $charaequi->head = 107;
			    $charaequi->rhand = 81;
			    $charaequi->lhand = 81;
			    $charaequi->chest = 71;
			    $charaequi->legs = 110;
			    $charaequi->waist = 95;
			    $charaequi->ring1 = 57;
			    $charaequi->neck = 91;
			    $charaequi->wrist = 92;
			    $charaequi->trink1 = 60;

			    $charaequi->save();
			    
			    break;
			case 'BARD':
				//bonus
		    	$stat->chrm_bonus += 4;
		    	// lock increment
			    $stat->classbonus_defined = 'y';

			    $stat->save();

			    $charaequi->head = 97;
			    $charaequi->rhand = 83;
			    $charaequi->chest = 70;
			    $charaequi->legs = 110;
			    $charaequi->waist = 116;
			    $charaequi->hands = 105;
			    $charaequi->ring1 = 58;
			    $charaequi->neck = 91;
			    $charaequi->trink1 = 59;

			    $charaequi->save();
			    
			    break;
			case 'DRUI':
				//bonus
		    	$stat->inte_bonus += 1;
		    	$stat->sage_bonus += 4;

		    	// class traits 
			    if ($stat->class_trait_1 == NULL) {
			    	$stat->class_trait_1 = 'ins_natu';
			    }
			    // lock increment
			    $stat->classbonus_defined = 'y';

			    $stat->save();

			    $charaequi->head = 94;
			    $charaequi->rhand = 85;
			    $charaequi->lhand = 90;
			    $charaequi->chest = 69;
			    $charaequi->legs = 109;
			    $charaequi->waist = 95;
			    $charaequi->ring1 = 58;
			    $charaequi->neck = 91;
			    $charaequi->trink1 = 59;

			    $charaequi->save();
			    
			    break;
			case 'SHAM':
				//bonus
		    	$stat->perc_bonus += 2;
		    	$stat->sage_bonus += 3;

		    	// class traits 
			    if ($stat->class_trait_1 == NULL) {
			    	$stat->class_trait_1 = 'vigil';
			    }
			    // lock increment
			    $stat->classbonus_defined = 'y';

			    $stat->save();

			    $charaequi->head = 107;
			    $charaequi->rhand = 90;
			    $charaequi->lhand = 86;
			    $charaequi->chest = 69;
			    $charaequi->legs = 110;
			    $charaequi->waist = 95;
			    $charaequi->ring1 = 58;
			    $charaequi->neck = 91;
			    $charaequi->trink1 = 59;

			    $charaequi->save();
			    
			    break;
		}
	}
}
?>
<div class='brickncobble maincontentview' data-simplebar>
	<div class="crowned floating">
		<h2><?php echo $stat->name; ?></h2>
	</div>
	<div class="flexcontainer end">
    	<div class="flexbox" style="max-width: 275px;">
    		<div class="textbox">
    			<h2 style="margin-top: -16px;" class="floating"><?php echo raceName($stat->race, $stat->gender); ?></h2>
    			<div class="floating">
    				<?php 
    				$imgUrl = illuRaceClass($stat->race);
    				echo '<img src="./img/illu/' . $imgUrl . '.png" class="borderImg" /><img src="./img/icons/races/' . strtolower($stat->race) . '.png" class="floatright borderImg">';
    				?>
    			</div>
    		</div>
    	</div>
    	<div class="flexbox">
    		<div class="textbox">
				<p>Vos bonus de race et de classe sont désormais appliqués sur votre personnage.<br /><br />Nous allons maintenant définir la distribution de vos points de statistiques supplémentaires.<br /><br />Lancement du dé aléatoire...</p>
	   		</div>
    	</div>
    	<div class="flexbox" style="max-width: 275px;">
    		<div class="textbox">
    			<h2 style="margin-top: -16px;" class="floating"><?php echo className($stat->class, $stat->gender); ?></h2>
    			<div class="floating">
    				<?php 
    				$imgUrl = illuRaceClass($stat->class);
    				echo '<img src="./img/illu/' . $imgUrl . '.png" class="borderImg" /><img src="./img/icons/classes/' . strtolower($stat->class) . '.png" class="floatright borderImg">';
    				?>
    			</div>
    		</div>
    	</div>
    </div>
<div class="flexcontainer woodenFrame">
	<div class="flexbox textbox centeredtext">
		<p class="verticalcentering"><font color="red">
			<strong>
				<?php 
					if ($stat->dicerolls <= 4) {
						$displayDiceRolls = 4 - $stat->dicerolls;
					} else {
						$displayDiceRolls = 0;
					}
					echo $displayDiceRolls; 
				?> 
			</strong></font> lancers restants.</p>
	</div>
	<?php 
	if ($stat->dicerolls <5) {
		$mainStatsCapital = random_int(40 , 50); $dicerolls++; 
		echo '<div class="flexbox textbox centeredtext" style="height:100%;"><p class="verticalcentering">Points principaux:<h1 class="big">' . $mainStatsCapital . '</h1></p></div>';

		$totalSecStatsCapital = random_int(45, 65); 
		echo '<div class="flexbox textbox centeredtext" style="height:100%;"><p class="verticalcentering">Points secondaires:<h1 class="big">' . $totalSecStatsCapital . '</h1></p></div>';

		$stat->dicerolls = $dicerolls;
		$totalMainStatsCapital = $mainStatsCapital + $stat->humanbonus;
		$stat->totalmainstatscapital = $totalMainStatsCapital;
		$stat->totalsecstatscapital = $totalSecStatsCapital;
		$stat->save();

		echo '<div class="flexbox textbox centeredtext" style="height:100%;">Un résultat de 40<br />est considéré comme mauvais,<br /> 45 bon, 50 excellent.</div>';
	} else {
		echo '<div class="flexbox textbox centeredtext" style="height:100%;">Points principaux:<h1 class="big">' . $totalMainStatsCapital . '</h1></div>';
		echo '<div class="flexbox textbox centeredtext" style="height:100%;">Points secondaires:<h1 class="big">' . $totalSecStatsCapital . '</h1></div>';

		echo '<div class="flexbox textbox centeredtext" style="height:100%;">Désolés, vous ne pouvez plus relancer les dés.</div>';
	}
	?>
</div>

	<div class="crownImg"><img src="./img/illu/banner/dice.jpg" /></div>
	<br /><div style="width:100%;"><input type="button" value="Relancer les dés" onClick="window.location.reload()" class="button centered"><br /><br /><a href="{{ route('create3') }}"><input type="button" value="Continuer" class="button centered greenhover" style="font-size:1.1em;"></a></div><br />

<?php
} else {
?>

<div class='brickncobble maincontentview' data-simplebar>
	<div class="crowned floating">
		<h2><?php echo $stat->name; ?></h2>
	</div>
	<div class="flexcontainer end">
    	<div class="flexbox" style="max-width: 275px;">
    		<div class="textbox">
    			<h2 style="margin-top: -16px;" class="floating"><?php echo raceName($stat->race, $stat->gender); ?></h2>
    			<div class="floating">
    				<?php 
    				$imgUrl = illuRaceClass($stat->race);
    				echo '<img src="./img/illu/' . $imgUrl . '.png" class="borderImg" /><img src="./img/icons/races/' . strtolower($stat->race) . '.png" class="floatright borderImg">';
    				?>
    			</div>
    		</div>
    	</div>
    	<div class="flexbox">
    		<div class="textbox">
				<p>Vos bonus de race et de classe sont désormais appliqués sur votre personnage.<br /><br />Nous allons maintenant définir la distribution de vos points de statistiques supplémentaires.<br /><br />Lancement du dé aléatoire...</p>
	   		</div>
    	</div>
    	<div class="flexbox" style="max-width: 275px;">
    		<div class="textbox">
    			<h2 style="margin-top: -16px;" class="floating"><?php echo className($stat->class, $stat->gender); ?></h2>
    			<div class="floating">
    				<?php 
    				$imgUrl = illuRaceClass($stat->class);
    				echo '<img src="./img/illu/' . $imgUrl . '.png" class="borderImg" /><img src="./img/icons/classes/' . strtolower($stat->class) . '.png" class="floatright borderImg">';
    				?>
    			</div>
    		</div>
    	</div>
    </div>
<div class="flexcontainer woodenFrame">
	<div class="flexbox textbox centeredtext">
		<p class="verticalcentering"><font color="red">
			<strong>
				<?php 
					if ($stat->dicerolls <= 4) {
							$displayDiceRolls = 4 - $stat->dicerolls;
						} else {
							$displayDiceRolls = 0;
						}
					echo $displayDiceRolls; 
				?> 
			</strong></font> lancers restants.</p>
	</div>
	<?php 
	if ($stat->dicerolls < 5) {
		$mainStatsCapital = random_int(40 , 50); $dicerolls++; 
		echo '<div class="flexbox textbox centeredtext" style="height:100%;"><p class="verticalcentering">Points principaux:<h1 class="big">' . $mainStatsCapital . '</h1></p></div>';

		$totalSecStatsCapital = random_int(50, 65); 
		echo '<div class="flexbox textbox centeredtext" style="height:100%;"><p class="verticalcentering">Points secondaires:<h1 class="big">' . $totalSecStatsCapital . '</h1></p></div>';

		$stat->dicerolls = $dicerolls;
		$totalMainStatsCapital = $mainStatsCapital + $stat->humanbonus;
		$stat->totalmainstatscapital = $totalMainStatsCapital;
		$stat->totalsecstatscapital = $totalSecStatsCapital;
		$stat->save();

		echo '<div class="flexbox textbox centeredtext" style="height:100%;">Un résultat de 40<br />est considéré comme mauvais,<br /> 45 bon, 50 excellent.</div>';
	} else {
		echo '<div class="flexbox textbox centeredtext" style="height:100%;">Points principaux:<h1 class="big">' . $totalMainStatsCapital . '</h1></div>';
		echo '<div class="flexbox textbox centeredtext" style="height:100%;">Points secondaires:<h1 class="big">' . $totalSecStatsCapital . '</h1></div>';

		echo '<div class="flexbox textbox centeredtext"><p class="verticalcentering">Désolé, vous ne pouvez plus relancer les dés.</p></div>';
	}
	?>
</div>

	<div class="crownImg"><img src="./img/illu/banner/dice.jpg" /></div>
	<br /><div style="width:100%;"><input type="button" value="Relancer les dés" onClick="window.location.reload()" class="button centered"><br /><br /><a href="{{ route('create3') }}"><input type="button" value="Continuer" class="button centered greenhover" style="font-size:1.1em;"></a></div><br />

<?php
}
?>
