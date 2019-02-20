<?php
        $characters = \App\Character::orderBy('id', 'desc')->take(5)->get();
?>

<span id="charalist">
	<div class="tableWrapper">
	  <table class="keywords" style="table-layout:fixed;width:100%;">
	    <tbody>
	      <?php
	      foreach ($characters as $character) {
	          $user = \App\User::where('id', $character->owner)->first();
	          if ($character->gender == "m") {
	          	$gender = "♂";
	          } else if ($character->gender == "f") {
	          	$gender = "♀";
	          }
	          if ($character->sidebar == 1 && $character->stats_set == 1) {
	          	$active = '<div style="display:inline-block;height:8px;width:8px;border-radius:50%;background-color:OliveDrab;" title="Validé"></div> ';
	          } else {
	          	$active = '<div style="display:inline-block;height:8px;width:8px;border-radius:50%;background-color:Salmon;" title="Pas encore validé"></div> ';
	          }
	          $traits = array();
	          $traitsDisplay = '';
	          $traits[] = $character->class_trait_1;
	          for ($x = 1; $x <= 5; $x++)
				{
				    $entry = 'race_trait_' . $x;
				    $traits[] = $character->$entry;
				}
			  for ($x = 0; $x <= 9; $x++)
				{
				    $entry = 'main_trait_' . $x;
				    $traits[] = $character->$entry;
				}
			  for ($x = 0; $x <= 9; $x++)
				{
				    $entry = 'sec_trait_' . $x;
				    $traits[] = $character->$entry;
				}
			  foreach ($traits as $trait) {
			  	if ($trait != NULL) {
			  		$traitsDisplay = $traitsDisplay . '<span class="tt" style="border:1px solid #ccc;background-color: #eee;border-radius: 0.5em;padding:1px;margin:1px;font-size: 1em;white-space:nowrap;" id="' . $trait . '"></span> ';
			  	}
			  }
	          echo '<tr>
		          		<td colspan="2" class="name edit_info"><strong>' . $active . ' ' . $character->name . ' </strong></td>
		          		<td colspan="2" class="level edit_info"><span style="font-size:1.1em;">Niveau <strong>' . $character->level . '</strong> (' . $character->xp . ')</span></td>
		    			<td colspan="2" style="font-size:0.65em;">[ID] ' . $character->id . '</td>
		    		</tr><tr>
		    			<td colspan="1" class="race centerImg"><img src="../img/icons/races/' . $character->race . '.png" /></td>
		    			<td colspan="4" class="avatar_url centerImg"><img src="../img/avatars/' . $character->avatar_url . '.jpg" width="64" height="64" style="display:block;"/></td>
		    			<td colspan="1" class="race centerImg"><img src="../img/icons/classes/' . $character->class . '.png" /></td>
		    		</tr><tr>
		    			<td colspan="3" class="class edit_info">' . ranksDisplay($character->rank, $character->gender) . '</td>
		    			<td colspan="3" class="class edit_info">' . titleDisplay($character->title) . '</td>
		    		</tr><tr>
		    			<td colspan="6">' . $traitsDisplay . '</td>
		    		</tr><tr class="smallImages">
		    			<td colspan="2" class="name edit_info"><span class="tt" id="ap"></span><font color="OliveDrab"> ' . $character->ap . '</font> / <font color="Salmon">' . $character->ap_max . '</font> / <font color="SteelBlue">' . $character->ap_regen . '</font></td>
		    			<td colspan="2" class="name edit_info"><span class="tt" id="mp"></span><font color="OliveDrab"> ' . $character->mp . '</font> / <font color="Salmon">' . $character->mp_max . '</font> / <font color="SteelBlue">' . $character->mp_regen . '</font></td>
		    			<td colspan="2" class="name edit_info"><span class="tt" id="df"></span><font color="OliveDrab"> ' . $character->df . '</font> / <font color="Salmon">' . $character->df_max . '</font> / <font color="SteelBlue">' . $character->df_regen . '</font></td>
		    		</tr><tr class="smallImages">
		    			<td colspan="3" class="name edit_info"><span class="tt" id="hp"></span><font color="OliveDrab"> ' . $character->hp . '</font> / <font color="Salmon">' . $character->hp_max . '</font> / <font color="SteelBlue">' . $character->hp_regen . '</font></td>
		    			<td colspan="3" class="name edit_info"><span class="tt" id="mana"></span><font color="OliveDrab"> ' . $character->mana . '</font> / <font color="Salmon">' . $character->mana_max . '</font> / <font color="SteelBlue">' . $character->mana_regen . '</font></td>
		    		</tr><th colspan="6" style="height:8px;background:#bbb;"></th>';
	      }
	      if(empty($unvalProfiles[0])){
	        echo '<tr>
	              <td colspan="6" style="color: DarkGray;">5 derniers personnages créés.</td>
	            </tr>';
	      }
	      ?>
	    </tbody>
	  </table>
	</div>
</span>