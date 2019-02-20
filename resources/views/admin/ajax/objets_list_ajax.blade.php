<span id="itemlist">
	<div class="tableWrapper">
	  <table class="items" style="table-layout:fixed;width:100%;">
	    <tbody>
		    <?php
		      	foreach ($items as $item) {
		      		$classes = explode(",", $item->classes);
		      		$classesDisplay = '';
		      		foreach ($classes as $class) {
		      			$classesDisplay = $classesDisplay . '<img src="../img/icons/classes/' . $class . '.png" height="32" width="32" style="padding:0;">';
		      		}
	        	echo '
	      		<tr class="itemID" id="' . $item->id . '">
	          		<td colspan="2" class="name"><strong>
		          		<span>' . $item->name . '
		          		</span>
		          		</strong><br />
		          		<span style="color: #999;font-size:0.8em;">[ ' . $item->id . ' ]</span>
	          		</td>
	          		<td class="icon" colspan="1">
	          			<span class="icon"><img src=".' . $item->icon . '" height="24" width="24" /></span><div class="edit icon"></div></strong>
	          		</td>
	          		<td colspan="1" class="level" style="font-size:1.1em;">
	          			Lv
		          		<strong>
		          		<span>' . $item->level . '</span></strong>
	          		</td>
	          		<td colspan="3" style="line-height:14px;transform:scale(0.75);">
	          			<strong>
	          				<span data-type="classes" data-content="' . $item->classes . '" style="border-bottom:none;">' . $classesDisplay . '</span>
	          			</strong>
	          		</td>
	          		<td colspan="1">
	          			<strong>
	          				<span data-type="price" data-content="' . $item->price . '">' . $item->price . '</span><img src="../img/itm/misc/0a.png" width="18" height="18" style="margin-left:4px;margin-bottom:-5px;" /></span>
	          			</strong>
	          		</td>
	          		<td colspan="1">
	          			<strong>
	          				<span data-type="weight" data-content="' . $item->weight . '">' . $item->weight . '</span><img src="../img/icons/weight.png" style="margin-left:4px;margin-bottom:-5px;" /></span>
	          			</strong>
	          		</td>
	    			<td colspan="6" style="padding: 0 16px;">
	          			<span class="editable descr">
	          				<span data-type="descr" data-content="' . $item->descr . '" style="letter-spacing:-0.25px;">' . substr($item->descr, 0, 128) . ((strlen($item->descr) <= 128) ? "" : "...") . '</span>
	          			</span>
	          		</td>
	    		</tr>';
	    	}
	    ?>
	    </tbody>
	  </table>
	</div>
</span>