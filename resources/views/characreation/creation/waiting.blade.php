<?php
// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$stat = \App\Character::where('owner', $userid)->first();
$profile = \App\Message::where([
	    ['posterID', $userid],
	    ['loc_x', '0'],
	    ['loc_y', '0'],
	    ['characterID', $stat->id],
	    ['type', 'profile']
	])->first();

if ( $stat->stats_set != 1 ) {
?>

  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>

<?php
} else if ($profile->sent == "n" && $profile->approved == "n" && $profile->comment == "n") {
	// IF profile DENIED
?>

<div class='brickncobble maincontentview' data-simplebar>
	<div class="crowned floating"><h2>Profil Refusé</h2></div>
	<div class="infotextbox itbcenter">
		<h4>Votre profil a malheureusement été refusé.</h4><br />

		<p>Il peut y avoir diverses raisons à cela, les plus communes étant:</p>
		<ul>
			<li>Une mauvaise orthographe</li>
			<li>Un manque de roleplay</li>
			<li>Trop d'incohérences avec l'univers d'Angardia</li>
			<li>Un personnage exagérément puissant</li>
			<li>Une utilisation d'injures à outrance</li>
			<li>Des propos racistes, sexistes ou intolérants<br /><font size="2">(hors-roleplay ou prononcés avec un sérieux un peu trop convaincant)</font></li>
			<li>Un profil illisible</li>
			<li>Une tentative de triche</li>
			<li>Toute autre violation de notre Charte</li>
		</ul>
	</div>

	<div style="text-align:center;position:relative;display:block;padding:1rem;margin:1rem;background:rgba(216, 114, 97, 0.85);border:1px solid rgba(black,.15);border-radius:2px;color:black;">
		<strong>Votre profil a été refusé.</strong>
	</div>

	<div class="textbox">
		<div class="infotextbox itbright">
			<img src="./img/illu/float/scribe.jpg" class="borderImg" />
		</div>

	<h4>Que faire maintenant?</h4><br />
		<p>
			Dans une telle situation, il est difficile de vous donner une réponse fixe. En effet, la raison du refus peut avoir été rattrapable (par exemple un personnage vraiment incohérent avec la personnalité exprimée dans votre biographie), auquel cas nous recommanderions de recommencer la création d'un personnage correspondant plus avec votre personnalité réelle, si celle-ci transparaissait trop dans votre roleplay.<br /><br />
		</p>
		<p>
			S'il s'agit, en revanche, d'une raison plus sérieuse (violation de la charte, propos intolérables, tentative de donner à votre personnage des facultés disproportionnées, etc.), nous avons tendance à penser que ces dernières perdureront avec votre prochain personnage. En créer un nouveau serait donc une perte de temps, car nous saurons si le posteur est la même personne physique.
		</p>
	</div>
</div>

<?php
} else if ($profile->sent == "n" && $profile->approved == "n" && $profile->comment != "n") {
	// IF profile COMMENTED
?>

<div class='brickncobble maincontentview' data-simplebar>
	<div class="crowned floating"><h2>Ce n'est pas encore fini</h2></div>
	<div class="infotextbox itbcenter">
		<h4>Votre profil a été lu et commenté.</h4><br />

		<p>Cela signifie généralement que ce dernier n'est pas encore au point. Généralement, il suffit de vérifier l'orthographe de votre biographie et vos références au lore, ainsi que la cohérence de votre personnage.<br />Vous trouverez plus de détails concernant la raison du refus dans le commentaire ci-dessous.</p>
	</div>

	<div style="text-align:center;position:relative;display:block;padding:1rem;margin:1rem;background:rgba(216, 142, 97, 0.85);border:1px solid rgba(black,.15);border-radius:2px;color:black;">
		<strong>Votre profil est actuellement en attente de modification de votre part.</strong><br />
	</div>
	<div style="background-color:#ccc;padding:1rem;margin:1rem;border-radius:2px;opacity:0.85;color:black;">
		<h4>Commentaire des Maîtres du Jeu</h4><hr /><br />
		<p>
			<?php
				$commentRaw = $profile->comment;
				try {
				  $quillInst = new \DBlackborough\Quill\Render($commentRaw);
				  $resultCom = $quillInst->render();
				  echo $resultCom;
				} catch (\Exception $e) {
				  echo $e->getMessage();
				}
			?>
		</p>
	</div>

	<div class="textbox">
		<div class="infotextbox itbright">
			<img src="./img/illu/float/scribe.jpg" class="borderImg" />
		</div>
		<h4>Votre Profil</h4><br />
		<p>
			<?php
				$quill_json = json_encode($profile->content);

				try {
				  $quill = new \DBlackborough\Quill\Render($quill_json);
				  $result = $quill->render();
				} catch (\Exception $e) {
				  echo $e->getMessage();
				}
				$content = substr($result , 3, -3);
				echo $content;
			?>
		</p><br /><br />
		<a href="{{ route('create7') }}" class="floating"><button class="greenhover" style="font-size:1em;">Éditer votre biographie</button></a>
	</div>
</div>

<?php
} else if ($profile->sent == "y" && $profile->approved == "y") {
	// IF profile APPROVED
?>

<div class='brickncobble maincontentview' data-simplebar>
	<div class="crowned floating"><h2>Bienvenue</h2></div><br />
	<div style="text-align:center;position:relative;display:block;padding:1rem;margin:1rem;background:rgba(130, 170, 80, 0.85);border:1px solid rgba(black,.15);border-radius:2px;color:black;">
		<strong>Votre profil est désormais validé!</strong><br />Bienvenue sur les terres de Telendÿr.
	</div><br />
	<div class="infotextbox itbcenter">
		<h4>Félicitations!</h4><br />

		<p>Vous allez maintenant pouvoir accéder au contenu du jeu, et parcourir un vaste monde en quête d'aventure.</p><br />
	</div>
	<div class="textbox" style="height:100%;" >
		<p>
			Le petit village forestier de Berghärd vous ouvre les bras. Découvrez ses habitants et ses secrets au fil de vos premiers jours, et faites vos preuves auprès des gardes de la région. Ces derniers vous laisseront peut-être alors sortir, car suite à l'annonce récente d'ineffables dangers rôdant dans la pénombre des bois alentours, une quarantaine a été déclarée par le chef du village.<br /><br />En effet, les habitants tombent malades les uns après les autres, touchés par "l'Affliction", un mal étrange et contagieux qui secoue les environs. Il semblerait que cette maladie soit portée par la faune des sylves, soudainement touchée par ce fléau qui dépasse la frontière des espèces.
		</p>
	</div>
	<div style="background-image:url('https://www.wallpaperup.com/uploads/wallpapers/2016/05/14/954011/6db4dce5494e2b8388812600ce5c12e2-700.jpg');background-position:center;height:200px;border-radius:0.5em;box-shadow:0 0 5px black;margin:8px;position:relative;">
		<input type="button" class="button stroke greenhover" value="Commencez votre Aventure!" style="font-size:1.5em;box-shadow:0 0 5px black;font-family: 'Milonga', cursive;padding:8px;position:relative;left:50%;top:50%;transform:translate(-50%, -50%)" />
	</div>
</div>

<?php
} else {
?>

<div class='brickncobble maincontentview' data-simplebar>
	<div class="crowned floating"><h2>En attendant votre validation...</h2></div>
	<div class="infotextbox itbcenter">
		<h4>Où en est-on?</h4><br />

		<p>Et voilà, votre profil a été envoyé à l'administration!<br />Nous nous chargerons de le relire dès que possible.<br />Une fois que nous aurons fini, nous reviendrons vers vous avec l'état de votre demande:<ul><li>Est-elle refusée?</li><li>Est-elle acceptée?</li><li>Nécessite-t-elle quelques modifications?</li></ul><br />
		Vous obtiendrez la réponse sur cette page, n'hésitez pas à la garder dans un coin de votre navigateur.</p><br />
	</div>

	<div style="text-align:center;position:relative;display:block;padding:1rem;margin:1rem;background:rgba(97, 155, 216, 0.85);border:1px solid rgba(black,.15);border-radius:2px;color:black;">
		<strong>Votre profil est actuellement en attente de validation.</strong><br />Le temps d'attente estimé est de 24h maximum.
	</div>

	<div class="textbox">
		<div class="infotextbox itbright">
			<img src="./img/illu/float/scribe.jpg" class="borderImg" />
		</div>

	<h4>Mais... Que puis-je faire en attendant?</h4><br />
	<p>En attendant, vous pouvez toujours <a href="{{ route('create7') }}"><button class="greenhover" style="font-size:0.8em;">relire et éditer votre biographie</button></a> si vous êtes perfectionniste!Nous savons généralement reconnaître les joueurs qui investissent beaucoup d'efforts dans leur présentation. ツ</p><br /><p>Sachez aussi qu'une fois votre profil validé vous ne pourrez plus le modifier. Cela nous permet de préserver une cohérence continue entre notre univers et votre personnage. Nous recommandons donc de vous assurez que vous êtes pleinement satisfait(e) de votre profil avant sa validation.</p><br />

	
	<p>Vous pouvez aussi visiter notre <a href="javascript:void(0)"><button class="greenhover" style="font-size:0.8em;">Lexicon</button></a>, afin de vous préparer au grand saut dans l'inconnu d'Angardia! Cela vous donnera des bases de connaissance solides avant de partir braver d'innombrables dangers. Comme le disait tante Ysild, un aventurier préparé est un aventurier qui reste entier. Et nombre d'anciens valident cet adage: Grödd le Borgne, Selena "n'a qu'un bras", etc.</p><br />

	<p>Et enfin, vous pouvez aussi bien entendu consulter <a href="javascript:void(0)"><button class="greenhover" style="font-size:0.8em;">notre forum</button></a>! Il regorge d'informations utiles et vous trouverez très probablement des compagnons de discussion sympathiques avec qui partager un bon moment. Il y a aussi fort à parier que toutes vos questions trouveront leurs réponses là-bas: nous nous félicitons de notre communauté réactive, amicale et patiente.</p><br />

	<p>Ah, et j'allais presque oublier... <strong>Bienvenue sur Angardia!</strong><br />Nous espérons que vous passerez la validation et que nous pourrons vous compter parmi nos joueurs!</p>
	</div>
</div>
<?php
}
?>
