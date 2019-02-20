<?php
if (Auth::check()) {
	// on selectionne le profil du membre connecté et on récupere ses informations
	$userid = Auth::user()->id;
	$username = Auth::user()->name;
	$userinfo = \App\User::where('id', $userid)->first();
	$stat = \App\Character::where('owner', $userid)->first();
	try {
	    $equip = \App\Equipment::where('id', $stat->id)->first();
	} catch (ErrorException $e) {
	    // do nothing if doesn't exist
	}
	if (!function_exists('equipItemDisplay')) {
		function equipItemDisplay($itmID) {
			$itm = \App\Item::where('id', $itmID)->first();
		    if ( isset($itm) ) {
		    	if (!function_exists('parseActionEntry')) {
		    		function parseActionEntry($actionObject, $entry) {
			        	$actionObject = json_decode($actionObject, true);
			        	$actionSummary = "";
					    if(!is_array($actionObject[$entry])){
					      	$actionSummary = $actionObject[$entry];
					    } 
					    else if ($entry == "Bonus") {
					    	foreach ($actionObject[$entry] as $k => $v) {
					      		$actionSummary = $actionSummary . '
					      		<div style="white-space:nowrap;">
									<span>
										<span class="tt stat" id="' . $k . '"></span>
									</span>
									<span class="itmStatValue" style="
										background-color: rgba(107,142,35,0.5);
									">
										<span style="font-weight: bold;font-size:16px;">+' . $v . '</span>
									</span>
								</div>';
					      	}
					    } 
					    else if ($entry == "Malus") {
					    	foreach ($actionObject[$entry] as $k => $v) {
					      		$actionSummary = $actionSummary . '
								<div style="white-space:nowrap;">
									<span>
										<span class="tt stat" id="' . $k . '"></span>
									</span>
									<span class="itmStatValue" style="
										background-color: rgba(165,42,42,0.5);
									">
										<span style="font-weight: bold;font-size:16px;">-' . $v . '</span>
									</span>
								</div>';
					      	}
					    }
					    else if ($entry == "Preset") {
					    	foreach ($actionObject[$entry] as $k => $v) {
					      		$actionSummary = $actionSummary . '
								<div style="white-space:nowrap;padding:0;margin:0;">
									<span class="presetStat" style="background-color: rgba(101, 150, 58,0.5);border-radius: 3px 0 0 3px;" >' . presetKeyDisplay($k) . '</span><span class="presetStat" style="background-color: rgba(95, 166, 204,0.5);border-radius: 0 3px 3px 0;" >' . presetValueDisplay($k, $v) . '</span>
								</div>';
					      	}
					    }
					    else if ($entry == "Skill") {
					    	foreach ($actionObject[$entry] as $k) {
					      		$actionSummary = $actionSummary . '
								<div style="white-space:nowrap;">
									<span class="tt itmStatValueText" style="background-color: rgba(205,133,63,0.5);" id="' . $k . '"></span>
								</div>';
					      	}
					    }
					    return $actionSummary;
					}
				}
				$itmbox = '
					<span class="equipitm">
						<img src="' . $itm->icon . '" />
					</span>
					<div class="equipitmbox">
						<span class="closeItmWindow">⨯</span>
						<div class="infoTitle">' . $itm->name . '</div><br />
						<div>
							<table class="defined_width" >
								<tr>
									<th rowspan="2" style="
										background: rgba(100,100,100,0.5);
										border-radius: 25%;
										border: 1px solid #754c0d;
										width: 32px;
									">
										<img src="' . $itm->icon . '" />
									</th>
									<th>
										<strong>Niv. </strong>
									</th>
									<th>
										<img src="./img/itm/misc/0a.png" height="12" width="12" />
									</th>
									<th>
										<img src="./img/icons/weight.png" height="12" width="12" />
									</th>
									<th>
										<strong>Type</strong>
									</th>
								</tr>
								<tr>
									<td>
										' . $itm->level . '
									</td>
									<td>
										' . $itm->price . '
									</td>
									<td>
										' . $itm->weight . '
									</td>
									<td>
										' . subtypeDisplayName($itm->subtype) . '
									</td>
								</tr>
							</table>
						</div>
						<div>
							<p style="
								margin: 8px;
								padding: 8px;
								border-radius: 3px;
								background-color: rgba(100,100,100,0.3);
							">
								' . $itm->descr . '
							</p>
						</div>
						<div class="flexcontainer wrap" style="
							margin: 0 8px;
							padding: 4px;
							background-color: rgba(204,128,71,0.25);
							border-radius: 3px;
						">
							' . parseActionEntry($itm->action, "Bonus") . '
							' . parseActionEntry($itm->action, "Malus") . '
							' . parseActionEntry($itm->action, "Skill") . '
							' . parseActionEntry($itm->action, "Preset") . '
						</div>
					</div>
				';
				return $itmbox;
			}
		}
	}
	if (!function_exists('menuItemDisplay')) {
		function menuItemDisplay($statname) {
			$userid = Auth::user()->id;
			$stat = \App\Character::where('owner', $userid)->first();
		    if ( $stat ) {
				if ($stat->sidebar == 1) {
					if ($statname == "avatar_url") {
						echo '<img src="./img/avatars/' . $stat->$statname . '.jpg" width="128" height="128" class="tableframe borderImg">';  
					}
					if ($statname == "rank") {
						return $stat->$statname;
					}
					else {
						echo $stat->$statname; 
					}
				}
			}
		}
	}

	if ($stat && $stat->sidebar == 1) {
	?>
	<div id="sidebar_toggle" class="centeredtext">
		<span id="sidebar_toggle_symbol">&raquo;</span>
	</div>
	<div id="sidebar">
		<div id="gaugexp" class="gauge-container">
			<div id="avatar-location">
				<div id="avatar-coordinates">
					<span class="uitxt">
						<span class="help tip-right" role="tooltip">Votre position</span>
						<span id="position"><?php echo $stat->loc_x ?>-<?php echo $stat->loc_y ?></span></span>
				</div>
				<div id="avatar-sub-coordinates">
					<span class="uitxt">
						<span class="help tip-right" role="tooltip">Votre localisation</span>
						<span id="subposition"><?php echo $stat->loc_sub ?></span>
					</span>
				</div>
				<div id="avatar-world">
					<span class="uitxt">
						<span class="help tip-left" role="tooltip">Votre monde</span>
						<span id="world"><?php echo $stat->loc_world ?></span>
					</span>
				</div>
			</div>
			<div id="avatar-icons">
				<div id="avatar-ap">
					<span class="help tip-right" role="tooltip">Points d'Action</span>
					<span class="uitxt">
						<span id="apcount"><?php echo $stat->ap ?></span>
					</span>
				</div>
				<div id="avatar-mp">
					<span class="help tip-right" role="tooltip">Points de Mouvement</span>
					<span class="uitxt">
						<span id="mpcount"><?php echo $stat->mp ?></span>
					</span>
				</div>
				<div id="avatar-dp">
					<span class="help tip-right" role="tooltip">Faveurs Divines</span>
					<span class="uitxt">
						<span id="dfcount"><?php echo $stat->df ?></span>
					</span>
				</div>
				<div id="avatar-icon1">
					<span class="help tip-left" role="tooltip">Régen. Faveurs Divines</span>
					<span class="uitxt">
						<span id="dfregen"><?php echo $stat->df_regen ?></span>
					</span>
				</div>
				<div id="avatar-icon2">
					<span class="help tip-left" role="tooltip">Régen. Points de Mouvement</span>
					<span class="uitxt">
						<span id="mpregen"><?php echo $stat->mp_regen ?></span>
					</span>
				</div>
				<div id="avatar-icon3">
					<span class="help tip-left" role="tooltip">Régen. Points d'Action</span>
					<span class="uitxt">
						<span id="apregen"><?php echo $stat->ap_regen ?></span>
					</span>
				</div>
				<div id="avatar-mana">
					<span class="help tip-left" role="tooltip">Régen. Mana</span>
					<span class="uitxt">
						<span id="manaregen"><?php echo $stat->mana_regen ?></span>
					</span>
				</div>
				<div id="avatar-vie">
					<span class="help tip-left" role="tooltip">Régen. Vie</span>
					<span class="uitxt">
						<span id="hpregen"><?php echo $stat->hp_regen ?></span>
					</span>
				</div>
			</div>
			<div id="avatar-character">
				<div id="tree" class="avatar-bigelem">
					<span class="help tip-right" role="tooltip">Votre Généalogie</span>
				</div>
				<div class="avatar-smallelem">
					<span class="uitxt">
						<span class="help tip-top-right" role="tooltip">Votre Race (<?php echo raceName($stat->race, $stat->gender); ?>)</span>
						<?php echo "<img src='./img/icons/races/" . $stat->race . ".png' height='19px' width='18px' style='opacity: 0.8;'>" ?>
					</span>
				</div>
				<div id="level" class="avatar-bigelem">
					<span class="help tip-top" role="tooltip">Votre Niveau</span>
					<h2 style="color: #e6d7a3;"><span id="herolevel">1</span></h2>
				</div>
				<div class="avatar-smallelem">
					<span class="uitxt">
						<span class="help tip-top-left" role="tooltip">Votre Classe (<?php echo className($stat->class, $stat->gender); ?>)</span>
						<?php echo "<img src='./img/icons/classes/" . strtolower($stat->class) . ".png' height='19px' width='18px' style='opacity: 0.95;'>" ?>
					</span>
				</div>
				<div id="lore" class="avatar-bigelem">
					<span class="help tip-left" role="tooltip">Votre Biographie</span>
				</div>
			</div>
			<div id="avatar" class="avatar">
				<?php 
				menuItemDisplay("avatar_url", "img"); 
				?>
			</div>
		</div>
		<div id="name-stats">
			<div class="flexcontainer vert stack">
				<div class="namedisplay flexbox">
					<span class="floating">
						<h2 class="inlineh2">
						<?php
						menuItemDisplay("name");
						?>
						</h2>
					</span>
				</div>
				<div class="flexcontainer flexbox">
					<div class="titledisplay flexbox">
						<span class="help tip-top" role="tooltip">Votre Titre</span>
						<span class="floating verticalcentering centeredtext">
							{!! titleDisplay($stat->title) !!}
						</span>
					</div>
					<div class="rankdisplay flexbox">
						<span class="help tip-top" role="tooltip">Votre Rang</span>
						<span class="floating verticalcentering centeredtext">
							{!! ranksDisplay($stat->rank, $stat->gender) !!}
						</span>
					</div>
				</div>
				<div class="hpdisplay flexbox">
					<span class="centered">
						<div class="bar-container">
							<img src="./img/icons/stats/hp.png" />
							<div id="hpbar">
							  <svg class="svg_bar">
							    <path id="hp_svg" d="M0 0 V 13 H 150 V -13 Z" fill="#a32006" stroke="#a32006">
							    </path>
							  </svg>
							  <span id="hp_value"></span>
							</div>
						</div>
					</span>
				</div>
				<div class="manadisplay flexbox">
					<span class="centered">
						<div class="bar-container">
							<img src="./img/icons/stats/mana.png" />
							<div id="manabar">
							  <svg class="svg_bar">
							    <path id="mana_svg" d="M0 0 V 13 H 150 V -13 Z" fill="#2b63a0" stroke="#2b63a0">
							    </path>
							  </svg>
							  <span id="mana_value"></span>
							</div>
						</div>
					</span>
				</div>
			</div>
		</div>
		<div class="inv-stats">
			<div id="sidebar_inv">
				<div class="invWrapper">
					<div class="flexcontainer center nomargin nopadding">
						<!--jewels-->
					    <div class="flexcontainer vert center" style="margin:0;">
					      <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;" data-type="neck">
					      	<?php 
					      		echo equipItemDisplay($equip->neck);
					      	?>
					      	<span class="help tip-right" role="tooltip">Collier</span>
					      </div>
					      <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;" data-type="ring1">
					      	<?php 
					      		echo equipItemDisplay($equip->ring1);
					      	?>
					      	<span class="help tip-right" role="tooltip">Anneau</span>
					      </div>
					      <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;" data-type="ring2">
					      	<?php 
					      		echo equipItemDisplay($equip->ring2);
					      	?>
					      	<span class="help tip-right" role="tooltip">Anneau</span>
					      </div>
					      <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;" data-type="class">
					      	<?php 
					      		echo equipItemDisplay($equip->class);
					      	?>
					      	<span class="help tip-right" role="tooltip">Objet de Classe</span>
					      </div>
					    </div>
					    <!--inv-->
					    <div class="flexcontainer center nomargin nopadding" style="margin-bottom:32px;">
					      <div class="flexcontainer vert center nomargin nopadding">
					        <div class="flexbox centerBorder" style="margin:1px 0;height:24px;width:24px;" data-type="rhand">
					        	<?php 
						      		echo equipItemDisplay($equip->rhand);
						      	?>
					        	<span class="help tip-right" role="tooltip">Main Droite</span>
					        </div>
					        <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;" data-type="hands">
					        	<?php 
						      		echo equipItemDisplay($equip->hands);
						      	?>
					        	<span class="help tip-right" role="tooltip">Mains</span>
					        </div>
					      </div>
					      <div class="flexcontainer vert center nomargin nopadding">
					        <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;" data-type="head">
					        	<?php 
						      		echo equipItemDisplay($equip->head);
						      	?>
					        	<span class="help tip-bottom-right" role="tooltip">Tête</span>
					        </div>
					        <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;" data-type="chest">
					        	<?php 
						      		echo equipItemDisplay($equip->chest);
						      	?>
					        	<span class="help tip-bottom-right" role="tooltip">Plastron</span>
					        </div>
					        <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;" data-type="feet">
					        	<?php 
						      		echo equipItemDisplay($equip->legs);
						      	?>
					        	<span class="help tip-top-right" role="tooltip">Pieds</span>
					        </div>
					      </div>
					      <div class="flexcontainer vert center nomargin nopadding">
					        <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;" data-type="lhand">
					        	<?php 
						      		echo equipItemDisplay($equip->lhand);
						      	?>
					        	<span class="help tip-left" role="tooltip">Main Gauche</span>
					        </div>
					        <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;" data-type="waist">
					        	<?php 
						      		echo equipItemDisplay($equip->waist);
						      	?>
					        	<span class="help tip-left" role="tooltip">Ceinture</span>
					        </div>
					      </div>
					    </div>
					    <div class="flexcontainer center nomargin nopadding">
					      <!--trinkets-->
					      <div class="flexcontainer vert center" style="margin:0;" data-type="trink1">
					        <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;">
					        	<?php 
						      		echo equipItemDisplay($equip->trink1);
						      	?>
					        	<span class="help tip-left" role="tooltip">Accessoire</span>
					        </div>
					        <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;" data-type="trink2">
					        	<?php 
						      		echo equipItemDisplay($equip->trink2);
						      	?>
					        	<span class="help tip-left" role="tooltip">Accessoire</span>
					        </div>
					        <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;" data-type="trink3">
					        	<?php 
						      		echo equipItemDisplay($equip->trink3);
						      	?>
					        	<span class="help tip-left" role="tooltip">Accessoire</span>
					        </div>
					        <div class="flexbox centerBorder" style="margin:1px;height:24px;width:24px;" data-type="trink4">
					        	<?php 
						      		echo equipItemDisplay($equip->trink4);
						      	?>
					        	<span class="help tip-left" role="tooltip">Accessoire</span>
					        </div>
					      </div>
					    </div>
					    <div id="goldCount">
					    	<h6 class="stroke" style="display:inline-block;margin-top:16px;"><span id="goldamt"><?php echo $stat->gold ?></span></h6>
					    	<span class="help tip-top-left" role="tooltip">Pièces d'Or</span>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="full-stats">
			<div class="statsWrapper">
				<?php
					$statistics = array();
					$statisticsDisplay = '';
					$statistics['forc'] = getStats('forc', $stat->e_forc, $stat->id);
					$statistics['dext'] = getStats('dext', $stat->e_dext, $stat->id);
					$statistics['inte'] = getStats('inte', $stat->e_inte, $stat->id);
					$statistics['endu'] = getStats('endu', $stat->e_endu, $stat->id);
					$statistics['defe'] = getStats('defe', $stat->e_defe, $stat->id);
					$statistics['vite'] = $stat->vite;
					$statistics['perc'] = getStats('perc', $stat->e_perc, $stat->id);
					$statistics['chan'] = getStats('chan', $stat->e_chan, $stat->id);
					$statistics['chrm'] = getStats('chrm', $stat->e_chrm, $stat->id);
					$statistics['sage'] = getStats('sage', $stat->e_sage, $stat->id);
					$statistics['volo'] = getStats('volo', $stat->e_volo, $stat->id);
					$statistics['ling'] = getStats('ling', $stat->e_ling, $stat->id);
					foreach ($statistics as $key => $one_stat) {
						if ($key == "forc") {
							$statisticsDisplay = $statisticsDisplay . '<span class="nowrap">';
						} else if ($key == "endu" || $key == "sage") {
							$statisticsDisplay = $statisticsDisplay . '</span> <span class="nowrap">';
						} else if ($key == "perc") {
							$statisticsDisplay = $statisticsDisplay . '</span><br /><span class="nowrap">';
						}
						$statisticsDisplay = $statisticsDisplay . '<div class="nestedImg"><span class="tt" id="' . $key . '"></span><h5 style="display:inline;padding:0 4px;margin:0;display: inline-block;width:3ch;min-height:24px;"><span data-type="' . $key . '" data-content="' . $one_stat . '">' . $one_stat . '</span></h5></div>';
						if ($key == "ling") {
							$statisticsDisplay = $statisticsDisplay . '</span>';
						}
					}
					echo $statisticsDisplay;
				?>
			</div>
		</div>
		<div class="info-stats">
			<div class="infoTitle">Autres Informations</div>
			<!--div class="wrapInfo"-->
				<div class="infoContent" data-simplebar>
					<ul>
						<li>Béni par Raïa.</li>
						<li>Bonus journalier: +18 en Linguistique.</li>
						<li>Vous êtes tombé malade suite au contact avec du guano plein de mauvaises choses. Cela ne se mange pas. -8 en FOR.</li>
						<li>Vous êtes enceint.</li>
						<li>Gueule de bois.</li>
						<li>Le mage de Berghärd aimerait s'entretenir avec vous.</li>
					</ul>
				</div>
			<!--/div-->
		</div>
	</div>
	<script type="text/javascript">
	$(document).ready(function() {
		function makePercent(value, max) {
			return Math.floor(value/max*100);
		}
		setInterval(changeValue, 3000);
		function changeValue() {
			$.ajax({
			    type: 'GET', 
			    url : '{{ route("getStats") }}', 
			    global: false,
			    success : function (data) {
			        updateBar(data['hp'], data['hp_max'], 
			        	"hp_value", "hp_svg", "#a32006", "#c63b03", "#ea7a02");
					updateBar(data['mana'], data['mana_max'], 
						"mana_value", "mana_svg", "#2b63a0", "#2f78a3", "#65b2ce");
					gaugexp.setValueAnimated(makePercent(data['xp'], data['xp_max']), 2);
					$('#position').html(data['loc_x']+'-'+data['loc_y']);
					$('#subposition').html(data['loc_sub']);
					$('#world').html(data['loc_world']);
					$('#apcount').html(data['ap']);
					$('#mpcount').html(data['mp']);
					$('#dfcount').html(data['df']);
					$('#apregen').html(data['ap_regen']);
					$('#mpregen').html(data['mp_regen']);
					$('#dfregen').html(data['df_regen']);
					$('#hpregen').html(data['hp_regen']);
					$('#manaregen').html(data['mana_regen']);
					$('#herolevel').html(data['level']);
					$('#goldamt').html(data['gold']);
			    }
			});
		};
		changeValue();
		/* Gauges */
		// XP
		var gaugexp = Gauge(
			document.getElementById("gaugexp"), {
			  max: 100,
			  value: 0,
			  radius: 100,
			  displayType: "gauge"
			}
		);
		// Vie & Mana
		// creating the helpers
		function display(value, dom_elem) {
			var domElem = document.getElementById(dom_elem);
			domElem.innerHTML = value + "%";
		}
		/* UI drawing */
		function updateBar(value, max, number_elem, bar_elem, col1, col2, col3) {
			var finalValue = makePercent(value, max);
			var domElem = document.getElementById(bar_elem);
			if (finalValue <= 10) {
			  TweenLite.to(domElem, 1, {attr:{fill: col3}, ease: Power2.easeInOut});
			} else if (finalValue <= 25) {
			  TweenLite.to(domElem, 1, {attr:{fill: col2}, ease: Power2.easeInOut});
			} else if (finalValue >= 26) {
			  TweenLite.to(domElem, 1, {attr:{fill: col1}, ease: Power2.easeInOut});
			}
			display(finalValue, number_elem);
			var d = ["M", 0, 0, 
			    "V", 13,
			    "H", (finalValue*1.5),
			    "V", -13,
			    "Z"].join(" ");
			TweenLite.to(domElem, 1, {attr:{d:d}, ease: Power2.easeInOut});
		};
	});
	</script>
	<?php
	}
} else {
	?><style>#sidebar, #sidebar_toggle {display: none;}</style><?php 
}
?>