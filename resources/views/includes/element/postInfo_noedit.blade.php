<div class="flexcontainer" style="justify-content: space-between;margin:16px 0;border-bottom:5px double #886620;border-top:1px solid #886620;">
	<div class="flexcontainer nomargin" style="color:rgba(0,0,0,0.6);">
		<div class="flexbox" style="border:1px solid rgba(0,0,0,0.5);border-top: 0;border-bottom: 0;padding:0 16px;">
		  <?php echo getSeason($profile->created_at) ?>, le <?php echo makeDate($profile->created_at) ?>
		</div>
		<div class="flexbox" style="border-right: 1px solid rgba(0,0,0,0.5);padding:0 16px;">
		<?php 
		if (($profile->created_at) != ($profile->updated_at)) {
			echo 'Dernière édition: ' . makeDate($profile->updated_at) . '';
		}
		?>
		</div>
	</div>
</div>