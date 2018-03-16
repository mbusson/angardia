<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$charastat = \App\Character::where('owner', $userid)->first();

if (!$charastat || $charastat->name == "null" || $charastat->race == "null" || $charastat->class == "null" || $charastat->totalmainstatscapital == 0 || $charastat->totalsecstatscapital == 0) {
// Si il manque une race, classe, nom, valeurs des lancers de dés, on redirige le joueur vers la page 1:

?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>
<?php

} else {

?>

<div class='brickncobble'>
	<div id="recap">
	  <div class="crowned floating"><h2>Récapitulatif</h2></div>
	  	<p class="shadowed">Voici votre <strong>seule chance</strong> de recommencer (de zéro) la création de votre personnage. Nous allons vous résumer tous les choix que vous avez effectués jusqu'ici, puis une fois ces derniers validés vous pourrez écrire la biographie de votre personnage.</p>
		<div class='crowned'>
			<div class="flexcontainer">
				<div class="flexbox">
					<?php echo '<img src="./img/avatars/' . $charastat->avatar_url . '.jpg" class="tableframe">'; ?>
				</div>
				<div class="flexcontainervert floating">
					<div class="flexbox">
			  			<h4><?php echo $charastat->name; ?>, <?php echo className($charastat->class); ?> <?php echo raceName($charastat->race); ?> de niveau <?php echo $charastat->level; ?>.</h4>
			  		</div>
			  		<div class="flexbox">
			  			<div class="Rtable Rtable--3cols">
		  					<div class="Rtable-cell">
		  						<h6><font color="#2075a7">AP: <?php echo $charastat->ap_max; ?></font> </h6>
		  					</div>
		  					<div class="Rtable-cell">
		  						<h6><font color="#489d1b">MP: <?php echo $charastat->mp_max; ?></font> </h6>
		  					</div>
		  					<div class="Rtable-cell">
		  						<h6><font color="#b87b0a">DF: <?php echo $charastat->mp_max; ?></font> </h6>
		  					</div>
		  					<div class="Rtable-cell">
		  						<h6><font color="#ef3e3e">Vie: <?php echo $charastat->hp_max; ?></font></h6>
		  					</div>
		  					<div class="Rtable-cell">
		  						<h6><font color="#4d9ee0">Mana: <?php echo $charastat->mana_max; ?></font></h6>
		  						</div>
		  					<div class="Rtable-cell">
		  						<h6><font color="#a37ab3">Vitesse: +<?php echo $charastat->vite; ?></font></h6>
		  					</div>
			  			</div>
			  		</div>
		  		</div>
		  	</div>
		  	<div class="flexcontainer">
		  		<div class="flexcontainervert" style="width: 45%;">
			  		<div class="flexbox">
			  			<div class="Rtable Rtable--2cols">
		  					<div class="Rtable-cell"><h5>Endurance:</h5></div>
		  					<div class="Rtable-cell"><h5><?php echo $charastat->endu . ' <font color="lightblue">+ ' . $charastat->endu_bonus . '</font> <font color="lightcoral">- ' . $charastat->endu_malus . '</font> (= ' . ($charastat->endu+$charastat->endu_bonus-$charastat->endu_malus) . ')'; ?></h5></div>

		  					<div class="Rtable-cell"><h5>Défense:</h5></div>
		  					<div class="Rtable-cell"><h5><?php echo $charastat->defe . ' <font color="lightblue">+ ' . $charastat->defe_bonus . '</font> <font color="lightcoral">- ' . $charastat->defe_malus . '</font> (= ' . ($charastat->defe+$charastat->defe_bonus-$charastat->defe_malus) . ')'; ?></h5></div>

		  					<div class="Rtable-cell"><h5>Force:</h5></div>
		  					<div class="Rtable-cell"><h5><?php echo $charastat->forc . ' <font color="lightblue">+ ' . $charastat->forc_bonus . '</font> <font color="lightcoral">- ' . $charastat->forc_malus . '</font> (= ' . ($charastat->forc+$charastat->forc_bonus-$charastat->forc_malus) . ')'; ?></h5></div>

		  					<div class="Rtable-cell"><h5>Dextérité:</h5></div>
		  					<div class="Rtable-cell"><h5><?php echo $charastat->dext . ' <font color="lightblue">+ ' . $charastat->dext_bonus . '</font> <font color="lightcoral">- ' . $charastat->dext_malus . '</font> (= ' . ($charastat->dext+$charastat->dext_bonus-$charastat->dext_malus) . ')'; ?></h5></div>

		  					<div class="Rtable-cell"><h5>Intelligence:</h5></div>
		  					<div class="Rtable-cell"><h5><?php echo $charastat->inte . ' <font color="lightblue">+ ' . $charastat->inte_bonus . '</font> <font color="lightcoral">- ' . $charastat->inte_malus . '</font> (= ' . ($charastat->inte+$charastat->inte_bonus-$charastat->inte_malus) . ')'; ?></h5></div>
			  			</div>
			  		</div>
			  		<div class="flexbox">
			  			<div class="Rtable">
		  					<div class="Rtable-cell"><h5>Talents de Race: </h5></div>
				  			<div class="Rtable-cell">
				  				<?php 
				  				if ($charastat->race_trait_1) {
				  					echo '<h6>'; echo charaTrait($charastat->race_trait_1) . '</h6>';
				  				}
				  				if ($charastat->race_trait_2) {
				  					echo '<h6>'; echo charaTrait($charastat->race_trait_2) . '</h6>';
				  				} 
				  				if ($charastat->race_trait_3) {
				  					echo '<h6>'; echo charaTrait($charastat->race_trait_3) . '</h6>';
				  				} 
				  				if ($charastat->race_trait_4) {
				  					echo '<h6>'; echo charaTrait($charastat->race_trait_4) . '</h6>';
				  				} 
				  				if ($charastat->race_trait_5) {
				  					echo '<h6>'; echo charaTrait($charastat->race_trait_5) . '</h6>';
				  				} 
				  			?>
							</div>
		  				</div>
			  		</div>
			  	</div>
			  	<div class="flexcontainervert" style="width: 45%;">
			  		<div class="flexbox">
			  			<div class="Rtable Rtable--2cols">
		  					<div class="Rtable-cell"><h5>Linguistique:</h5></div>
		  					<div class="Rtable-cell"><h5><?php echo $charastat->ling . ' <font color="lightblue">+ ' . $charastat->ling_bonus . '</font> <font color="lightcoral">- ' . $charastat->ling_malus . '</font> (= ' . ($charastat->ling+$charastat->ling_bonus-$charastat->ling_malus) . ')'; ?></h5></div>

		  					<div class="Rtable-cell"><h5>Perception:</h5></div>
		  					<div class="Rtable-cell"><h5><?php echo $charastat->perc . ' <font color="lightblue">+ ' . $charastat->perc_bonus . '</font> <font color="lightcoral">- ' . $charastat->perc_malus . '</font> (= ' . ($charastat->perc+$charastat->perc_bonus-$charastat->perc_malus) . ')'; ?></h5></div>

		  					<div class="Rtable-cell"><h5>Volonté:</h5></div>
		  					<div class="Rtable-cell"><h5><?php echo $charastat->volo . ' <font color="lightblue">+ ' . $charastat->volo_bonus . '</font> <font color="lightcoral">- ' . $charastat->volo_malus . '</font> (= ' . ($charastat->volo+$charastat->volo_bonus-$charastat->volo_malus) . ')'; ?></h5></div>

		  					<div class="Rtable-cell"><h5>Charisme:</h5></div>
		  					<div class="Rtable-cell"><h5><?php echo $charastat->chrm . ' <font color="lightblue">+ ' . $charastat->chrm_bonus . '</font> <font color="lightcoral">- ' . $charastat->chrm_malus . '</font> (= ' . ($charastat->chrm+$charastat->chrm_bonus-$charastat->chrm_malus) . ')'; ?></h5></div>

		  					<div class="Rtable-cell"><h5>Sagesse:</h5></div>
		  					<div class="Rtable-cell"><h5><?php echo $charastat->sage . ' <font color="lightblue">+ ' . $charastat->sage_bonus . '</font> <font color="lightcoral">- ' . $charastat->sage_malus . '</font> (= ' . ($charastat->sage+$charastat->sage_bonus-$charastat->sage_malus) . ')'; ?></h5></div>

		  					<div class="Rtable-cell"><h5>Chance:</h5></div>
		  					<div class="Rtable-cell"><h5><?php echo $charastat->chan . ' <font color="lightblue">+ ' . $charastat->chan_bonus . '</font> <font color="lightcoral">- ' . $charastat->chan_malus . '</font> (= ' . ($charastat->chan+$charastat->chan_bonus-$charastat->chan_malus) . ')'; ?></h5></div>
			  			</div>
			  		</div>
			  		<div class="flexbox">
			  			<div class="Rtable">
		  					<div class="Rtable-cell"><h5>Autres Talents: </h5></div>
					  			<div class="Rtable-cell">
					  				<?php 
					  				if ($charastat->main_trait_1) {
					  					echo '<h6>'; echo charaTrait($charastat->main_trait_1) . '</h6>';
					  				}
					  				if ($charastat->main_trait_2) {
					  					echo '<h6>'; echo charaTrait($charastat->main_trait_2) . '</h6>';
					  				} 
					  			?>
							</div>
		  				</div>
			  		</div>
			  	</div>
		  	</div>
			<br />
			<div class="floating">
				<form action="{{ route('confirmcharacter') }}"><button type="submit"><strong>Écrire la Biographie</strong></button></form>
				<span style="width: 16px;"></span>
				<form action="{{ route('deletecharacter') }}"><button type="submit">Tout recommencer</button></form>
			</div>
		</div>
	</div>
</div>

<?php
}
?>
