<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$charastat = \App\Character::where('owner', $userid)->first();
$totalMainStatsCapital = $charastat->totalmainstatscapital;
$totalSecStatsCapital = $charastat->totalsecstatscapital;
$user_race = $charastat->race;

if (!$charastat || $charastat->name == "null" || $charastat->race == "null" || $charastat->class == "null" || $charastat->totalmainstatscapital == 0 || $charastat->totalsecstatscapital == 0) {
// Si il manque une race, classe, nom, valeurs des lancers de dés, on redirige le joueur vers la page 1:

?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>
<?php

} else if ($charastat->stats_set == 0) {

?>

<div class='brickncobble'>
	<form name="mainstats" id="form1" action="{{ route('sendstats') }}">
	        {{ csrf_field() }}
	<div class='flexcontainer'>
		<div class="flexbox">
			<h3>Force:</h3>
			<h3>Dextérité:</h3>
			<h3>Endurance:</h3>
			<h3>Défense:</h3>
			<h3>Intelligence:</h3>
		</div>
		<div class="flexbox">
			<h3>
				<input readonly class="value mainstats" value='5' size="2" name="FOR"></input> 
					<?php 
							echo '<font color="lightblue">+ ' . $charastat->forc_bonus . '</font> <font color="lightcoral">- ' . $charastat->forc_malus . '</font>';
					?> 
				<button class='statdistrib' type="button">-</button> | <button class='statdistrib' type="button">+</button>
			</h3>
			<h3>
				<input readonly class="value mainstats" value='5' size="2" name="DEX"></input> 
					<?php 
							echo '<font color="lightblue">+ ' . $charastat->dext_bonus . '</font> <font color="lightcoral">- ' . $charastat->dext_malus . '</font>';
					?> 
				<button class='statdistrib' type="button">-</button> | <button class='statdistrib' type="button">+</button></h3>
			<h3>
				<input readonly class="value mainstats" value='5' size="2" name="END"></input> 
					<?php 
							echo '<font color="lightblue">+ ' . $charastat->endu_bonus . '</font> <font color="lightcoral">- ' . $charastat->endu_malus . '</font>';
					?> 
				<button class='statdistrib' type="button">-</button> | <button class='statdistrib' type="button">+</button></h3>
			<h3>
				<input readonly class="value mainstats" value='5' size="2" name="DEF"></input> 
					<?php 
							echo '<font color="lightblue">+ ' . $charastat->defe_bonus . '</font> <font color="lightcoral">- ' . $charastat->defe_malus . '</font>';
					?> 
				<button class='statdistrib' type="button">-</button> | <button class='statdistrib' type="button">+</button>
			</h3>
			<h3>
				<input readonly class="value mainstats" value='5' size="2" name="INT"></input> 
					<?php 
							echo '<font color="lightblue">+ ' . $charastat->inte_bonus . '</font> <font color="lightcoral">- ' . $charastat->inte_malus . '</font>';
					?> 
				<button class='statdistrib' type="button">-</button> | <button class='statdistrib' type="button">+</button>
			</h3>
		<?php echo '<br /><p style="text-align:center">Total à allouer:</p><h2 id="maintotal" style="text-align:center">' .  $totalMainStatsCapital . '</h2><span id="totalpoints"></span>'; ?>
	</div>
	<div class="flexbox">
		<h3>Perception:</h3>
		<h3>Volonté:</h3>
		<h3>Charisme:</h3>
		<h3>Sagesse:</h3>
		<h3>Chance:</h3>
		<h3>Linguistique:</h3>
	</div>
	<div class="flexbox">
			<h3>
				<input readonly class="value secstats" value='5' size="2" name="PER"></input> 
					<?php 
							echo '<font color="lightblue">+ ' . $charastat->perc_bonus . '</font> <font color="lightcoral">- ' . $charastat->perc_malus . '</font>';
					?> 
				<button class='statdistrib' type="button">-</button> | <button class='statdistrib' type="button">+</button>
			</h3>
			<h3>
				<input readonly class="value secstats" value='5' size="2" name="VOL"></input> 
					<?php 
							echo '<font color="lightblue">+ ' . $charastat->volo_bonus . '</font> <font color="lightcoral">- ' . $charastat->volo_malus . '</font>';
					?> 
				<button class='statdistrib' type="button">-</button> | <button class='statdistrib' type="button">+</button>
			</h3>
			<h3>
				<input readonly class="value secstats" value='5' size="2" name="CHR"></input> 
					<?php 
							echo '<font color="lightblue">+ ' . $charastat->chrm_bonus . '</font> <font color="lightcoral">- ' . $charastat->chrm_malus . '</font>';
					?> 
				<button class='statdistrib' type="button">-</button> | <button class='statdistrib' type="button">+</button>
			</h3>
			<h3>
				<input readonly class="value secstats" value='5' size="2" name="SAG"></input> 
					<?php 
							echo '<font color="lightblue">+ ' . $charastat->sage_bonus . '</font> <font color="lightcoral">- ' . $charastat->sage_malus . '</font>';
					?> 
				<button class='statdistrib' type="button">-</button> | <button class='statdistrib' type="button">+</button>
			</h3>
			<h3>
				<input readonly class="value secstats" value='5' size="2" name="CHA"></input> 
					<?php 
							echo '<font color="lightblue">+ ' . $charastat->chan_bonus . '</font> <font color="lightcoral">- ' . $charastat->chan_malus . '</font>';
					?> 
				<button class='statdistrib' type="button">-</button> | <button class='statdistrib' type="button">+</button>
			</h3>
			<h3>
				<input readonly class="value secstats" value='5' size="2" name="LIN"></input> 
					<?php 
							echo '<font color="lightblue">+ ' . $charastat->ling_bonus . '</font> <font color="lightcoral">- ' . $charastat->ling_malus . '</font>';
					?> 
				<button class='statdistrib' type="button">-</button> | <button class='statdistrib' type="button">+</button>
			</h3>
		
			<?php echo '<p style="text-align:center">Total à allouer:</p><h2 id="sectotal" style="text-align:center">' .  $totalSecStatsCapital . '</h2><span id="sectotalpoints"></span>'; ?>
		</div>
	</div>
	<div id="submissiondiv">
		
	</div>
	</form>
</div>

<!-- stats HTML -->

<?php
} else {
?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create4') }}");
  </script>
<?php
}
?>
