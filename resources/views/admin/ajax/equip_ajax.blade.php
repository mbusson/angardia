<?php
	$chara = \App\Character::where('id', $equip->id)->first();
?>
<div class="editEquip" id=<?php echo $equip->id; ?> >
	<div class="flexcont between" style="
		border:1px solid #aaa;
		background-color: #ddd;
		margin: 0;padding: 4px;
	">
		<div colspan="1" class="backBtn" id="backToChar" style="width:10vw">⤺</div>
		<div>
			<h1>Inventaire de <?php echo $chara->name; ?></h1>
		</div>
		<div title="Activation Accès Joueur">
			<?php 
				if ($equip->can_access = 'y') { ?>
					<input type="checkbox" id="switch" checked="true" data-value="y" /><label class="toggle" for="switch">Toggle</label> <?php
				}
				else { ?>
					<input type="checkbox" id="switch"  data-value="n" /><label class="toggle" for="switch">Toggle</label> <?php
				}
			?>
		</div>
	</div>
	<div style="
		border:1px solid #aaa;
		background-color: #ddd;
		margin: 0;padding: 4px;
	">
		<div class="flexcont wrap center" >
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Cou</h1>
				<div>
					<?php 
						if (!empty($equip->neck)) {
							$neck_itm = \App\Item::where('id', $equip->neck)->first();
							echo $neck_itm->name . '<br />
							<img height="32" width="32" src=".' . $neck_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="neck">';
						$neck_list = \App\Item::where('subtype', 'like', '%neck%')->get();
						foreach ($neck_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Tête</h1>
				<div>
					<?php 
						if (!empty($equip->head)) {
							$head_itm = \App\Item::where('id', $equip->head)->first();
							echo $head_itm->name . '<br />
							<img height="32" width="32" src=".' . $head_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="head">';
						$head_list = \App\Item::where('subtype', 'like', '%head%')->get();
						foreach ($head_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Obj. Classe</h1>
				<div>
					<?php 
						if (!empty($equip->class)) {
							$class_itm = \App\Item::where('id', $equip->class)->first();
							echo $class_itm->name . '<br />
							<img height="32" width="32" src=".' . $class_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="class">';
						$class_list = \App\Item::where('subtype', 'like', '%class%')->get();
						foreach ($class_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
		</div>
		<div class="flexcont wrap center" >
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Main Droite</h1>
				<div>
					<?php 
						if (!empty($equip->rhand)) {
							$rhand_itm = \App\Item::where('id', $equip->rhand)->first();
							echo $rhand_itm->name . '<br />
							<img height="32" width="32" src=".' . $rhand_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="rhand">';
						$rhand_list = \App\Item::where('subtype', 'like', '%handed%')->get();
						foreach ($rhand_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Corps</h1>
				<div>
					<?php 
						if (!empty($equip->chest)) {
							$chest_itm = \App\Item::where('id', $equip->chest)->first();
							echo $chest_itm->name . '<br />
							<img height="32" width="32" src=".' . $chest_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="chest">';
						$chest_list = \App\Item::where('subtype', 'like', '%chest%')->get();
						foreach ($chest_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Main Gauche</h1>
				<div>
					<?php 
						if (!empty($equip->lhand)) {
							$lhand_itm = \App\Item::where('id', $equip->lhand)->first();
							echo $lhand_itm->name . '<br />
							<img height="32" width="32" src=".' . $lhand_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="lhand">';
						$lhand_list = \App\Item::where('subtype', 'like', '%handed%')->get();
						foreach ($lhand_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
		</div>
		<div class="flexcont wrap center" >
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Mains</h1>
				<div>
					<?php 
						if (!empty($equip->hands)) {
							$hands_itm = \App\Item::where('id', $equip->hands)->first();
							echo $hands_itm->name . '<br />
							<img height="32" width="32" src=".' . $hands_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="hands">';
						$hands_list = \App\Item::where('subtype', 'like', '%hands%')->get();
						foreach ($hands_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Taille</h1>
				<div>
					<?php 
						if (!empty($equip->waist)) {
							$waist_itm = \App\Item::where('id', $equip->waist)->first();
							echo $waist_itm->name . '<br />
							<img height="32" width="32" src=".' . $waist_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="waist">';
						$waist_list = \App\Item::where('subtype', 'like', '%waist%')->get();
						foreach ($waist_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Poignet</h1>
				<div>
					<?php 
						if (!empty($equip->wrist)) {
							$wrist_itm = \App\Item::where('id', $equip->wrist)->first();
							echo $wrist_itm->name . '<br />
							<img height="32" width="32" src=".' . $wrist_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="wrist">';
						$wrist_list = \App\Item::where('subtype', 'like', '%wrist%')->get();
						foreach ($wrist_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
		</div>
		<div class="flexcont wrap center" >
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Anneau 1</h1>
				<div>
					<?php 
						if (!empty($equip->ring1)) {
							$ring1_itm = \App\Item::where('id', $equip->ring1)->first();
							echo $ring1_itm->name . '<br />
							<img height="32" width="32" src=".' . $ring1_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="ring1">';
						$ring1_list = \App\Item::where('subtype', 'like', '%ring%')->get();
						foreach ($ring1_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Jambes</h1>
				<div>
					<?php 
						if (!empty($equip->legs)) {
							$legs_itm = \App\Item::where('id', $equip->legs)->first();
							echo $legs_itm->name . '<br />
							<img height="32" width="32" src=".' . $legs_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="legs">';
						$legs_list = \App\Item::where('subtype', 'like', '%legs%')->get();
						foreach ($legs_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Anneau 2</h1>
				<div>
					<?php 
						if (!empty($equip->ring2)) {
							$ring2_itm = \App\Item::where('id', $equip->ring2)->first();
							echo $ring2_itm->name . '<br />
							<img height="32" width="32" src=".' . $ring2_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="ring2">';
						$ring2_list = \App\Item::where('subtype', 'like', '%ring%')->get();
						foreach ($ring2_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
		</div>
		<div class="flexcont wrap center" >
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Accessoire</h1>
				<div>
					<?php 
						if (!empty($equip->trink1)) {
							$trink1_itm = \App\Item::where('id', $equip->trink1)->first();
							echo $trink1_itm->name . '<br />
							<img height="32" width="32" src=".' . $trink1_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="trink1">';
						$trink1_list = \App\Item::where('subtype', 'like', '%trinket%')->get();
						foreach ($trink1_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Accessoire</h1>
				<div>
					<?php 
						if (!empty($equip->trink2)) {
							$trink2_itm = \App\Item::where('id', $equip->trink2)->first();
							echo $trink2_itm->name . '<br />
							<img height="32" width="32" src=".' . $trink2_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="trink2">';
						$trink2_list = \App\Item::where('subtype', 'like', '%trinket%')->get();
						foreach ($trink2_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Accessoire</h1>
				<div>
					<?php 
						if (!empty($equip->trink3)) {
							$trink3_itm = \App\Item::where('id', $equip->trink3)->first();
							echo $trink3_itm->name . '<br />
							<img height="32" width="32" src=".' . $trink3_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="trink3">';
						$trink3_list = \App\Item::where('subtype', 'like', '%trinket%')->get();
						foreach ($trink3_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
			<div class="flexbox flexvert between" style="width:10vw;">
				<h1>Accessoire</h1>
				<div>
					<?php 
						if (!empty($equip->trink4)) {
							$trink4_itm = \App\Item::where('id', $equip->trink4)->first();
							echo $trink4_itm->name . '<br />
							<img height="32" width="32" src=".' . $trink4_itm->icon . '" />';
						}
						echo '<br /><br /><select class="changeItem" id="trink4">';
						$trink4_list = \App\Item::where('subtype', 'like', '%trinket%')->get();
						foreach ($trink4_list as $item) {
							echo '<option value="' . $item->id . '" data-type="' . $item->subtype . '">' . $item->name . ', nv.' . $item->level . '</option>';
						}
						echo '</select>';
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	/* -- Back button --- */
	$('#backToChar').click( function () {
  		$.ajax({
		    type: 'GET', 
		    url : 'm_char', 
		    success : function (data) {
		        $('#content').html(data);
		    }
		});
	});
	/* -- Change item --- */
	$('select.changeItem').change( function () {
  		var id = $('.editEquip').attr('id'),
  			newItmType = $(this).attr('id'),
  			newItmId = $(this).val();
  		var r = confirm("Remplacer l'objet pour cette cellule d'inventaire??");
		if (r == true) {
			let newItmData = {'id': id, 'slot': newItmType, 'itmId': newItmId};
		  	$.post( '{{ route("replaceEquip") }}', newItmData )
			  	.done(function(){
			  		displayAdminAction('<strong>Équipement mis à jour!</strong>');
			  	})
			  	.fail(function(){
			  		displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!</strong></font>');
			});
		} else {
		  txt = "Action annulée";
		} 
	});
	// enable / disable access
	$('input#switch').off('click').click(function() {
		if ($(this).data('value') == 'y') {
			$(this).data('value', 'n');
		}
		else if ($(this).data('value') == 'n') {
			$(this).data('value', 'y');
		}
		let selectedEquipID = $('.editEquip').attr('id'),
			toggle = $(this).data('value'),
			sendNewToggle = {'id': selectedEquipID, 'toggle': toggle};
		$.post( '{{ route("toggleEquip") }}', sendNewToggle )
	      	.done(function(){
	      		displayAdminAction('<strong>Accès à l\'équipement mis à jour!</strong>');
	      	})
	      	.fail(function(){
	      		displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!</strong></font>');
	    });
	});
</script>