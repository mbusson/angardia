<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$stat = \App\Character::where('owner', $userid)->first();
$totalMainStatsCapital = $stat->totalmainstatscapital;
$totalSecStatsCapital = $stat->totalsecstatscapital;
$user_race = $stat->race;

if (!$stat || $stat->name == NULL || $stat->race == NULL || $stat->class == NULL || $stat->totalmainstatscapital == 0 || $stat->totalsecstatscapital == 0) {
// Si il manque une race, classe, nom, valeurs des lancers de dés, on redirige le joueur vers la page 1:

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
} else if ($stat->stats_set == 0) {
?>

<div class='brickncobble maincontentview' data-simplebar>
	<div class="crowned floating"><h2>Répartir vos Statistiques</h2></div>
	<div class="textbox">
		<div class="flexcontainer vert">
			<div class="flexbox">
				<div class="flexcontainer center">
					<div class="crowned floating flexbox shadowed">
		  				<h1>
		  					<?php echo $stat->name; ?>
		  				</h1>
		  			</div>
					<div class="wide_messagebox flexbox shadowed" style="font-size:150%;">
		  				<h6>
		  					<?php echo className($stat->class, $stat->gender); ?> <?php echo raceName($stat->race, $stat->gender); ?>.
		  				</h6>
			  		</div>
			  	</div>
			</div>
			<div class="flexbox">
			  	<div class="flexcontainer center">
		  			<table class="layout display responsive-table shadowed" style="font-size: 1em;width:40em;">
						<thead>
						  <tr class="label">
						      <th style="min-width: 8em;"> <span class="tt" id="ap"></span> </th>
						      <th style="min-width: 8em;"> <span class="tt" id="mp"></span> </th>
						      <th style="min-width: 8em;"> <span class="tt" id="df"></span> </th>
						      <th style="min-width: 8em;"> <span class="tt" id="hp"></span> </th>
						      <th style="min-width: 8em;"> <span class="tt" id="mana"></span> </th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
						      <td><h6><?php echo $stat->ap_max; ?></h6></td>
						      <td><h6><?php echo $stat->mp_max; ?></h6></td>
						      <td><h6><?php echo $stat->df_max; ?></h6></td>
						      <td><h6><?php echo $stat->hp_max; ?></h6></td>
						      <td><h6><?php echo $stat->mana_max; ?></h6></td>
						  </tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="flexcontainer center wrap">
			<div class="flexbox darkmessagebox shadowed" id="mainstatsdiv" style="margin-bottom:8px;"">
				<form name="mainstats" id="formsetstats" action="{{ route('sendstats') }}">
				{{ csrf_field() }}
				<div class='flexcontainer vert'>
					<div class="flexbox">
						<table class="layout display shadowed responsive-table" style="margin-left: 0.5px;">
							<thead>
							  <tr class="label">
							      <th width="56px"><img src='./img/icons/stats/stats.png' /></th>
							      <th style="min-width:13em;">Niveau</th>
							      <th colspan="1" style="min-width:13em;">Équiv.</th>
							      <th colspan="2" style="min-width:13em;">Modif.</th>
							      <th colspan="2"style="min-width:8em;">Éditer</th>
							  </tr>
							</thead>
							<tbody>
							  <tr class="line" style="text-align:center;">
							    <td class="label">
							    	<span class="tt" id="forc"></span>
							    </td>
							    <td>
							    	<input readonly class="value standard mainstats" value='7' size="3" style="font-size:150%;margin:5px;" name="FOR"></input>
							    </td>
							    <td class="literalValue" id="forc" style="font-size:200%;">
							    	<?php echo '<font color="#cc9966" size="3em">' . statTranslation("forc", 7, $stat->gender) . '</font>'; ?>
							    </td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightblue">+ ' . $stat->forc_bonus . '</font>'; ?>
								</td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightcoral">- ' . $stat->forc_malus . '</font>'; ?>
							    </td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">-</button></td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">+</button></td>
							  </tr>
							  <tr class="line">
							    <td class="label">
							    	<span class="tt" id="dext"></span>
							    </td>
							    <td>
							    	<input readonly class="value standard mainstats" value='7' size="3" style="font-size:150%;margin:5px;" name="DEX"></input>
							    </td>
							    <td class="literalValue" id="dext" style="font-size:200%;">
							    	<?php echo '<font color="#cc9966" size="3em">' . statTranslation("dext", 7, $stat->gender) . '</font>'; ?>
							    </td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightblue">+ ' . $stat->dext_bonus . '</font>'; ?>
								</td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightcoral">- ' . $stat->dext_malus . '</font>'; ?>
							    </td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">-</button></td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">+</button></td>
							  </tr>
							  <tr class="line">
							    <td class="label">
							    	<span class="tt" id="endu"></span>
							    </td>
							    <td>
							    	<input readonly class="value standard mainstats" value='7' size="3" style="font-size:150%;margin:5px;" name="END"></input>
							    </td>
							    <td class="literalValue" id="endu" style="font-size:200%;">
							    	<?php echo '<font color="#cc9966" size="3em">' . statTranslation("endu", 7, $stat->gender) . '</font>'; ?>
							    </td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightblue">+ ' . $stat->endu_bonus . '</font>'; ?>
								</td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightcoral">- ' . $stat->endu_malus . '</font>'; ?>
							    </td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">-</button></td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">+</button></td>
							  </tr>
							  <tr class="line">
							    <td class="label">
							    	<span class="tt" id="defe"></span>
							    </td>
							    <td>
							    	<input readonly class="value standard mainstats" value='7' size="3" style="font-size:150%;margin:5px;" name="DEF"></input>
							    </td>
							    <td class="literalValue" id="defe" style="font-size:200%;">
							    	<?php echo '<font color="#cc9966" size="3em">' . statTranslation("defe", 7, $stat->gender) . '</font>'; ?>
							    </td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightblue">+ ' . $stat->defe_bonus . '</font>'; ?>
								</td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightcoral">- ' . $stat->defe_malus . '</font>'; ?>
							    </td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">-</button></td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">+</button></td>
							  </tr>
							  <tr class="line">
							    <td class="label">
							    	<span class="tt" id="inte"></span>
							    </td>
							    <td>
							    	<input readonly class="value standard mainstats" value='7' size="3" style="font-size:150%;margin:5px;" name="INT"></input>
							    </td>
							    <td class="literalValue" id="inte" style="font-size:200%;">
							    	<?php echo '<font color="#cc9966" size="3em">' . statTranslation("inte", 7, $stat->gender) . '</font>'; ?>
							    </td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightblue">+ ' . $stat->inte_bonus . '</font>'; ?>
								</td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightcoral">- ' . $stat->inte_malus . '</font>'; ?>
							    </td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">-</button></td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">+</button></td>
							  </tr>
							  <tr class="label">
							      <th colspan="7" height="30"></th>
							  </tr>
							</tbody>
						</table>
					</div>
					<br />
					<div class="flexbox centeredtext strokeFair wide_messagebox">
						<?php echo '<span style="text-align:center;font-size:125%;">Total à allouer:</span><br /><span id="totalpoints"></span><span class="inlineh2" id="maintotal" style="text-align:center;font-size:200%;">' .  $totalMainStatsCapital . '</span >'; ?>
					</div>
				</div>
			</div>
			<div class="flexbox darkmessagebox shadowed" id="secstatsdiv">
				<div class="flexcontainer vert">
					<div class="flexbox">
						<table class="layout display shadowed responsive-table" style="margin-left: 0.5px;">
							<thead>
							  <tr class="label">
							      <th width="56px"><img src='./img/icons/stats/stats.png' /></th>
							      <th colspan="1" style="min-width:13em;">Équiv.</th>
							      <th style="min-width:13em;">Niveau</th>
							      <th colspan="2" style="min-width:13em;">Modif.</th>
							      <th colspan="2"style="min-width:8em;">Éditer</th>
							  </tr>
							</thead>
							<tbody>
							  <tr class="line">
							    <td class="label">
							    	<span class="tt" id="perc"></span>
							    </td>
							    <td>
							    	<input readonly class="value standard secstats" value='7' size="3" style="font-size:150%;margin:3px;" name="PER"></input>
							    </td>
							    <td class="literalValue" id="perc" style="font-size:200%;">
							    	<?php echo '<font color="#cc9966" size="3em">' . statTranslation("perc", 7, $stat->gender) . '</font>'; ?>
							    </td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightblue">+ ' . $stat->perc_bonus . '</font>'; ?>
								</td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightcoral">- ' . $stat->perc_malus . '</font>'; ?>
							    </td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">-</button></td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">+</button></td>
							  </tr>
							  <tr class="line">
							    <td class="label">
							    	<span class="tt" id="volo"></span>
							    </td>
							    <td>
							    	<input readonly class="value standard secstats" value='7' size="3" style="font-size:150%;margin:3px;" name="VOL"></input>
							    </td>
							    <td class="volo" id="ling" style="font-size:200%;">
							    	<?php echo '<font color="#cc9966" size="3em">' . statTranslation("volo", 7, $stat->gender) . '</font>'; ?>
							    </td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightblue">+ ' . $stat->volo_bonus . '</font>'; ?>
								</td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightcoral">- ' . $stat->volo_malus . '</font>'; ?>
							    </td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">-</button></td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">+</button></td>
							  </tr>
							  <tr class="line">
							    <td class="label">
							    	<span class="tt" id="chrm"></span>
							    </td>
							    <td>
							    	<input readonly class="value standard secstats" value='7' size="3" style="font-size:150%;margin:3px;" name="CHM"></input>
							    </td>
							    <td class="literalValue" id="chrm" style="font-size:200%;">
							    	<?php echo '<font color="#cc9966" size="3em">' . statTranslation("chrm", 7, $stat->gender) . '</font>'; ?>
							    </td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightblue">+ ' . $stat->chrm_bonus . '</font>'; ?>
								</td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightcoral">- ' . $stat->chrm_malus . '</font>'; ?>
							    </td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">-</button></td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">+</button></td>
							  </tr>
							  <tr class="line">
							    <td class="label">
							    	<span class="tt" id="sage"></span>
							    </td>
							    <td>
							    	<input readonly class="value standard secstats" value='7' size="3" style="font-size:150%;margin:3px;" name="SAG"></input>
							    </td>
							    <td class="literalValue" id="sage" style="font-size:200%;">
							    	<?php echo '<font color="#cc9966" size="3em">' . statTranslation("sage", 7, $stat->gender) . '</font>'; ?>
							    </td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightblue">+ ' . $stat->sage_bonus . '</font>'; ?>
								</td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightcoral">- ' . $stat->sage_malus . '</font>'; ?>
							    </td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">-</button></td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">+</button></td>
							  </tr>
							  <tr class="line">
							    <td class="label">
							    	<span class="tt" id="chan"></span>
							    </td>
							    <td>
							    	<input readonly class="value standard secstats" value='7' size="3" style="font-size:150%;margin:3px;" name="CHA"></input>
							    </td>
							    <td class="literalValue" id="chan" style="font-size:200%;">
							    	<?php echo '<font color="#cc9966" size="3em">' . statTranslation("chan", 7, $stat->gender) . '</font>'; ?>
							    </td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightblue">+ ' . $stat->chan_bonus . '</font>'; ?>
								</td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightcoral">- ' . $stat->chan_malus . '</font>'; ?>
							    </td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">-</button></td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">+</button></td>
							  </tr>
							  <tr class="line">
							    <td class="label">
							    	<span class="tt" id="ling"></span>
							    </td>
							    <td>
							    	<input readonly class="value standard secstats" value='7' size="3" style="font-size:150%;margin:3px;" name="LIN"></input>
							    </td>
							    <td class="literalValue" id="ling" style="font-size:200%;">
							    	<?php echo '<font color="#cc9966" size="3em">' . statTranslation("ling", 7, $stat->gender) . '</font>'; ?>
							    </td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightblue">+ ' . $stat->ling_bonus . '</font>'; ?>
								</td>
							    <td style="font-size:200%;">
							    	<?php echo '<font color="lightcoral">- ' . $stat->ling_malus . '</font>'; ?>
							    </td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">-</button></td>
							    <td><button class='statdistrib button' type="button" style="font-size:150%;font-weight:bold;padding: 0 16px">+</button></td>
							  </tr>
							</tbody>
						</table>
					</div>
					<br />
					<div class="flexbox centeredtext strokeFair wide_messagebox">
						<?php echo '<span style="text-align:center;font-size:125%;">Total à allouer:</span><br /><span id="sectotalpoints"></span><span class="inlineh2" id="sectotal" style="text-align:center;font-size:200%;">' .  $totalSecStatsCapital . '</span>'; ?>
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>
	<div id="submissiondiv">
	</div>
	<br /><div class="crownImg"><img src="./img/illu/banner/charasetstats.jpg" /></div>
</div>
	<script language="javascript" type="text/javascript">
		$(document).ready(function() {
			$("#mainstatsdiv").css("height", $("#secstatsdiv").height());
		});
		/* Character Creation Stats Distributer */
	    function updateLiteralStats(domelem, newVal) {
	      var stat = domelem.closest('tr.line').find('td.literalValue').attr('id');
	      console.log(stat);
	      let translateUpdate = {'stat': stat, 'val': newVal};
	        $.get( '{{ route("translateStat") }}', translateUpdate)
	          .done(function(data){
	            $('td.literalValue#'+stat).html('<font color="#cc9966" size="3em">'+data+'</font');
	        });
	    }
	    $(".statdistrib").on("click", function() {
	      var $button = $(this);
	      var oldValue = $button.parents(".line").find(".value").val();
	      var sum = 0;
	      if ($button.text() == "+" && oldValue<13 ) {
	          var newVal = parseFloat(oldValue) + 1;
	          updateLiteralStats($(this), newVal)
	      } else if ($button.text() == "-") {
	       // Don't allow decrementing below zero
	        if (oldValue > 5) {
	          var newVal = parseFloat(oldValue) - 1;
	          updateLiteralStats($(this), newVal)
	        } else {
	          var valField = $button.parents(".line").find("input.value");
	          TweenMax.fromTo(valField, 2,{css: {color: "red"}},{css:{color:"#e6d7a3"}});
	          newVal = oldValue;
	        }
	      } else if ($button.text() == "+" && oldValue>=13 ){
	        var valField = $button.parents(".line").find("input.value");
	        TweenMax.fromTo(valField, 2,{css: {color: "red"}},{css:{color:"#e6d7a3"}});
	        newVal = oldValue;
	      }
	      $button.parents(".line").find(".value").val(newVal);
	    });
		/* Character Creation Stats Comparator */
	    // Display sum of inputs every time a button is clicked
	    $(".statdistrib").on("click", function() {
	        var mainsum = 0;
	        var totalmainvalue = $("#maintotal").html();
	        var totalsecvalue = $("#sectotal").html();
	        $(".mainstats").each(function(){
	            mainsum += +$(this).val();
	        });
	        if (mainsum == totalmainvalue) {
	          var mainsumdisplay = '<span class="inlineh2" style="color:#3f701c !important;">' + mainsum + ' / </span>';
	        } else {
	          var mainsumdisplay = '<span class="inlineh2" style="color:#913a2b !important;">' + mainsum + ' / </span>';
	        }
	        $("#totalpoints").html(mainsumdisplay);
	        var secsum = 0;
	        $(".secstats").each(function(){
	            secsum += +$(this).val();
	        });
	        if (secsum == totalsecvalue) {
	          var secsumdisplay = '<span class="inlineh2" style="color:#3f701c !important;">' + secsum + ' / </span>';
	        } else {
	          var secsumdisplay = '<span class="inlineh2" style="color:#913a2b !important;">' + secsum + ' / </span>';
	        }
	        $("#sectotalpoints").html(secsumdisplay);
	        // Check if sum == total
	        if (totalmainvalue == mainsum && totalsecvalue == secsum) {
	            $("#submissiondiv").empty();
	            $("#submissiondiv").html("<br /><input type='submit' form='formsetstats' class='centered standard greenhover' style='font-size:1.1em;' value='Valider'/><br />");
	            console.log($("#submissiondiv").html());
	        } else {
	            $("#submissiondiv").empty();
	            $("#submissiondiv").html("<br /><input type='button' form='formsetstats' class='centered standard' style='color:#888;background-color:#111;border:1px solid #888;' value='Les valeurs entrées ne correspondent pas à vos lancers de dés.'/><br />");
	            console.log($("#submissiondiv").html());
	        }
	    });
	</script>
<?php
} else {
?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create4') }}");
  </script>
<?php
}
?>
