<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Angardia - Online Roleplaying Game</title>
	<link rel="stylesheet" href="css/home_style.css">
	<link rel="stylesheet" href="css/simplebar.css">
	<link rel="stylesheet" href="css/jquery-ui/jquery-ui.min.css">
	<script src="js/tweaks.js"></script>
	<script src="js/simplebar.js"></script>
</head>
<body>
	<?php
		$news = DB::table('news')->orderBy('id', 'desc')->get();
	?>
	<div id="banner">
		<div id="logo_div">
			<img id="logo" src="img/Logo1.png" alt="Angardia - Online Roleplaying Game">
		</div>
		<div id="play">
			<a href="play"><div id="playbtn"><h1 class="outlined">Jouer</h1></div></a>
		</div>
		<div id="news" data-simplebar>
			<div class="new">
				<?php 
					foreach ($news as $new) {
						echo '<div class="title">'.$new->title.'</div>
						<div class="content"><p>'.$new->content.'</p></div>
						<div class="date">- '.date('j/n/y, G:i', strtotime($new->date)).'</div>
						<hr/><br/>';
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>