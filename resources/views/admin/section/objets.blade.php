<div class="flexcont">
    <div class="flexbox" style="min-width:7%;text-align:center;padding:4px;height:auto;">
    	<?php
		    $items = \App\Item::orderBy('level')->get();
		?>
        @include('admin.ajax.objmenu_ajax', $items)
    </div>
    <div class="flexbox" id="mainAdminContentsView" style="min-width:85%;">
        @include('admin.ajax.objets_ajax')
    </div>
</div>