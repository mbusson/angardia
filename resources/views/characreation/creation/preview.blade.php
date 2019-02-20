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
} else {
?>

<div class='brickncobble maincontentview' data-simplebar>
	<div class="crowned floating"><h2>Votre Profil</h2></div>
	<div class="textbox">
		@include('includes.element.posterProfile')
		<?php
			echo $profile->content;
		?>
		@include('includes.element.postInfo_noedit')
		<br />
		<form action="{{ route('sendProfile') }}"><button type="submit" class="centered greenhover" style="font-size:1em;"><strong>Confirmer votre Biographie</strong></button></form>
	</div>
</div>
<?php
}
?>
