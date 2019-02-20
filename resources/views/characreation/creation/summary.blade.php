<?php
// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('id', $userid)->first();
$stat = \App\Character::where('owner', $userid)->first();
try {
  $avatar = \App\Avatar::where('url', $stat->avatar_url)->firstOrFail();
} catch (Exception $e) {
  $avatar = \App\Avatar::where('url', '0')->first();
}


if (!$stat || $stat->name == NULL || $stat->race == NULL || $stat->class == NULL || $stat->totalmainstatscapital == 0 || $stat->totalsecstatscapital == 0) {
// Si il manque une race, classe, nom, valeurs des lancers de dés, on redirige le joueur vers la page 1:
?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>
<?php
} else if ($avatar->taken == 1 || $avatar->url == "0") {
?>
	<script language="javascript" type="text/javascript">
	  window.location.replace("{{ route('create7') }}");
	</script>
<?php
} else {
?>

<div class='brickncobble maincontentview' data-simplebar>
	<div id="recap">
	    <div class="crowned floating"><h2>Récapitulatif</h2></div>
	    <br />
	  	<div class="textbox">
	  		<p>Voici votre <strong>seule chance</strong> de recommencer (de zéro) la création de votre personnage. Nous allons vous résumer tous les choix que vous avez effectués jusqu'ici, puis une fois ces derniers validés vous pourrez écrire la biographie de votre personnage.</p>
	  	</div>
	  	<div class="crownImg"><img src="./img/illu/banner/charasummary.jpg" /></div>
	  	<br />
	  	<div id="pagewrapper">
	  		<div class="darkmessagebox">
				<div class="flexcontainer center">
					<div class="flexbox darkmessagebox">
						<div class="flexcontainer vert center">
							<div class="crowned floating flexbox">
				  				<h1>
				  					<?php echo $stat->name; ?>
				  				</h1>
				  			</div>
				  			<div class="flexbox">
								<?php echo '<img src="./img/avatars/' . $stat->avatar_url . '.jpg" class="tableframe borderImg">'; ?>
							</div>
							<div class="wide_messagebox flexbox">
				  				<h6>
				  					<?php echo className($stat->class, $stat->gender); ?> <?php echo raceName($stat->race, $stat->gender); ?>.
				  				</h6>
					  		</div>
					  	</div>
					</div>
					<div class="flexbox darkmessagebox"">
						<table class="layout display responsive-table" style="font-size: 1em;margin-left:0px;">
							<thead>
							  <tr class="label">
							      <th> Talents de Race </th>
							  </tr>
							</thead>
							<tbody>
								<?php 
						  				if ($stat->race_trait_1 != NULL) {
						  					echo '<tr><td> <span class="tt" id="' . $stat->race_trait_1 . '"></span> </td></tr>';
						  				}
						  				if ($stat->race_trait_2 != NULL) {
						  					echo '<tr><td> <span class="tt" id="' . $stat->race_trait_2 . '"></span> </td></tr>';
						  				} 
						  				if ($stat->race_trait_3 != NULL) {
						  					echo '<tr><td> <span class="tt" id="' . $stat->race_trait_3 . '"></span> </td></tr>';
						  				} 
						  				if ($stat->race_trait_4 != NULL) {
						  					echo '<tr><td> <span class="tt" id="' . $stat->race_trait_4 . '"></span> </td></tr>';
						  				} 
						  				if ($stat->race_trait_5 != NULL) {
						  					echo '<tr><td> <span class="tt" id="' . $stat->race_trait_5 . '"></span> </td></tr>';
						  				} 
						  				if ($stat->race_trait_5 == NULL && $stat->race_trait_4 == NULL && $stat->race_trait_3 == NULL && $stat->race_trait_2 == NULL && $stat->race_trait_1 == NULL) {
						  					echo '<tr><td> Aucun trait racial. </td></tr>';
						  				} 
						  		?>
							</tbody>
						</table>
					<br />
						<table class="layout display responsive-table" style="font-size: 1em;margin-left:0px;">
							<thead>
							  <tr class="label">
							      <th> Autres Talents </th>
							  </tr>
							</thead>
							<tbody>
								<?php 
						  				if ($stat->main_trait_1 != NULL) {
						  					echo '<tr><td> <span class="tt" id="' . $stat->main_trait_1 . '"></span> </td></tr>';
						  				}
						  				if ($stat->sec_trait_1 != NULL) {
						  					echo '<tr><td> <span class="tt" id="' . $stat->sec_trait_1 . '"></span> </td></tr>';
						  				}
						  		?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="flexcontainer center">
					<div class="flexbox darkmessagebox"">
						<table class="layout display responsive-table" style="font-size: 1em;">
							<thead>
							  <tr class="label">
							      <th style="min-width: 5em;"> <span class="tt" id="ap"></span> </th>
							      <th style="min-width: 5em;"> <span class="tt" id="mp"></span> </th>
							      <th style="min-width: 5em;"> <span class="tt" id="df"></span> </th>
							      <th style="min-width: 5em;"> <span class="tt" id="hp"></span> </th>
							      <th style="min-width: 5em;"> <span class="tt" id="mana"></span> </th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
							      <td><?php echo $stat->ap_max; ?></td>
							      <td><?php echo $stat->mp_max; ?></td>
							      <td><?php echo $stat->df_max; ?></td>
							      <td><?php echo $stat->hp_max; ?></td>
							      <td><?php echo $stat->mana_max; ?></td>
							  </tr>
							</tbody>
						</table>
					<br />
						<table class="layout display responsive-table" style="font-size: 1em;">
							<thead>
							  <tr class="label">
							      <th> <span class="tt" id="endu"></span> </th>
							      <th> <span class="tt" id="defe"></span> </th>
							      <th> <span class="tt" id="forc"></span> </th>
							      <th> <span class="tt" id="dext"></span> </th>
							      <th> <span class="tt" id="inte"></span> </th>
							  </tr>
							</thead>
							<tbody>
							  <tr style="font-size: .6em;">
							      <td><?php echo $stat->endu . ' <font color="lightblue">+ ' . $stat->endu_bonus . '</font> <font color="lightcoral">- ' . $stat->endu_malus . '</font>'; ?></td>
							      <td><?php echo $stat->defe . ' <font color="lightblue">+ ' . $stat->defe_bonus . '</font> <font color="lightcoral">- ' . $stat->defe_malus . '</font>'; ?></td>
							      <td><?php echo $stat->forc . ' <font color="lightblue">+ ' . $stat->forc_bonus . '</font> <font color="lightcoral">- ' . $stat->forc_malus . '</font>'; ?></td>
							      <td><?php echo $stat->dext . ' <font color="lightblue">+ ' . $stat->dext_bonus . '</font> <font color="lightcoral">- ' . $stat->dext_malus . '</font>'; ?></td>
							      <td><?php echo $stat->inte . ' <font color="lightblue">+ ' . $stat->inte_bonus . '</font> <font color="lightcoral">- ' . $stat->inte_malus . '</font>'; ?></td>
							  </tr>
							  <tr style="font-size: 1em;">
							      <td><?php echo ($stat->endu+$stat->endu_bonus-$stat->endu_malus); ?></td>
							      <td><?php echo ($stat->defe+$stat->defe_bonus-$stat->defe_malus); ?></td>
							      <td><?php echo ($stat->forc+$stat->forc_bonus-$stat->forc_malus); ?></td>
							      <td><?php echo ($stat->dext+$stat->dext_bonus-$stat->dext_malus); ?></td>
							      <td><?php echo ($stat->inte+$stat->inte_bonus-$stat->inte_malus); ?></td>
							  </tr>
							</tbody>
						</table>
					<br />
						<table class="layout display responsive-table" style="font-size: 1em;">
							<thead>
							  <tr class="label">
							      <th style="min-width: 4em;"> <span class="tt" id="ling"></span> </th>
							      <th style="min-width: 4em;"> <span class="tt" id="perc"></span> </th>
							      <th style="min-width: 4em;"> <span class="tt" id="volo"></span> </th>
							      <th style="min-width: 4em;"> <span class="tt" id="chrm"></span> </th>
							      <th style="min-width: 4em;"> <span class="tt" id="sage"></span> </th>
							      <th style="min-width: 4em;"> <span class="tt" id="chan"></span> </th>
							  </tr>
							</thead>
							<tbody>
							  <tr style="font-size: .6em;">
							      <td><?php echo $stat->ling . ' <font color="lightblue">+ ' . $stat->ling_bonus . '</font> <font color="lightcoral">- ' . $stat->ling_malus . '</font>'; ?></td>
							      <td><?php echo $stat->perc . ' <font color="lightblue">+ ' . $stat->perc_bonus . '</font> <font color="lightcoral">- ' . $stat->perc_malus . '</font>'; ?></td>
							      <td><?php echo $stat->volo . ' <font color="lightblue">+ ' . $stat->volo_bonus . '</font> <font color="lightcoral">- ' . $stat->volo_malus . '</font>'; ?></td>
							      <td><?php echo $stat->chrm . ' <font color="lightblue">+ ' . $stat->chrm_bonus . '</font> <font color="lightcoral">- ' . $stat->chrm_malus . '</font>'; ?></td>
							      <td><?php echo $stat->sage . ' <font color="lightblue">+ ' . $stat->sage_bonus . '</font> <font color="lightcoral">- ' . $stat->sage_malus . '</font>'; ?></td>
							      <td><?php echo $stat->chan . ' <font color="lightblue">+ ' . $stat->chan_bonus . '</font> <font color="lightcoral">- ' . $stat->chan_malus . '</font>'; ?></td>
							  </tr>
							  <tr style="font-size: 1em;">
							      <td><?php echo ($stat->ling+$stat->ling_bonus-$stat->ling_malus); ?></td>
							      <td><?php echo ($stat->perc+$stat->perc_bonus-$stat->perc_malus); ?></td>
							      <td><?php echo ($stat->volo+$stat->volo_bonus-$stat->volo_malus); ?></td>
							      <td><?php echo ($stat->chrm+$stat->chrm_bonus-$stat->chrm_malus); ?></td>
							      <td><?php echo ($stat->sage+$stat->sage_bonus-$stat->sage_malus); ?></td>
							      <td><?php echo ($stat->chan+$stat->chan_bonus-$stat->chan_malus); ?></td>
							  </tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="flexcontainer">
			<div class="floating">
				<form action="{{ route('confirmcharacter') }}"><button type="submit" class="greenhover"><strong>Écrire la Biographie</strong></button></form>
				<span style="width: 16px;"></span>
				<form action="{{ route('deletecharacter') }}"><button type="submit" class="redhover">Tout recommencer</button></form>
			</div>
		</div>
	</div>
</div>

<?php
}
?>
