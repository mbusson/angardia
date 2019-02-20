<span id="itemlist">
	<div class="tableWrapper">
	  <table class="items" style="table-layout:fixed;width:100%;">
	    <tbody>
		<?php
		echo '<tr>
				<th colspan="1">ID</th>
				<th colspan="2">Nom</th>
				<th colspan="1">Icône</th>
				<th colspan="16">Contenu</th>
			</tr>';
		foreach ($lexi as $lex) {
			echo '
      		<tr class="lexID" id="' . $lex->id . '">
      			<td colspan="1">
          			<span data-type="id" data-content="' . $lex->id . '"> [' . $lex->id . '] </span>
          		</td>
          		<td colspan="2" class="name">
          			<strong>
		          		<span data-type="title" data-content="' . $lex->title . '">' . $lex->title . '
		          		</span>
	          		</strong>
          		</td>
          		<td colspan="1">
          			<span data-type="icon" data-content="' . $lex->icon . '"><img src="../' . $lex->icon . '" height="32" width="32" /></span>
          		</td>
    			<td colspan="16" style="padding: 0 16px;">
          			<span class="editable descr">
          				<span>' . substr($lex->content, 0, 80) . ((strlen($lex->content) <= 80) ? "" : "...") . '</span><div class="edit descr"></div>
          			</span>
          		</td>
    		</tr>
    		<th colspan="20" style="height:8px;background:#bbb;">
    		</th>';
		}
	    ?>
	    </tbody>
	  </table>
	</div>
	<script>
		$('tr.lexID').off('click').click(function(){
			let selectedEquipID = $(this).attr('id'),
				selectedEquiID = {'id': selectedEquipID};
			$.get( '{{ route("getLexById") }}', selectedEquiID)
		      	.done(function(data){
		      		$('#mainAdminContentsView').html(data);
		      	})
		      	.fail(function(){
		      		displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!<br />'+route.dir+'</strong></font>');
		    });
		});
	</script>
</span>