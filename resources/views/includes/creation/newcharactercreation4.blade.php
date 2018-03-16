<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$charastat = \App\Character::where('owner', $userid)->first();

if (!$charastat || $charastat->name == "null" || $charastat->race == "null" || $charastat->class == "null" || $charastat->totalmainstatscapital == 0 || $charastat->totalsecstatscapital == 0) {
// Si il manque une race, classe, nom, valeurs des lancers de dés, on redirige le joueur vers la page 1:

?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>
<?php

} else {

?>

<div class='brickncobble'>
	<div id="Race">
	  <h3>Talent</h3>
	  <p>Choisissez votre talent de départ. Attention, vous n'avez le droit qu'à un talent principal, et un talent secondaire!</p>
	  <form action="{{ route('sendfirsttraits') }}">
	      {{ csrf_field() }}
	    <h4>Principal: </h4>
	    <select name="maintrait">
	      <option value="intuiti">Intuition</option>
	      <option value="survie">Survie</option>
	      <option value="trappeu">Trappeur</option>
	      <option value="forgero">Forgeron</option>
	      <option value="ebenist">Ébéniste</option>
	      <option value="gueriss">Guérisseur</option>
	      <option value="equitat">Équitation</option>
	      <option value="escalad">Escalade</option>
	      <option value="pickpoc">Pickpocket</option>
	      <option value="furtif">Furtif</option>
	    </select>
	    <br><br>
	    <h4>Secondaire: </h4>
	    <select name="sectrait">
	      <option value="ami_anim">Ami des Animaux</option>
	      <option value="evasion">Roi de l'Évasion</option>
	      <option value="intimid">Intimider</option>
	      <option value="perform">Performance</option>
	      <option value="incogni">Incognito</option>
	      <option value="escroc">Escroc</option>
	      <option value="saboteu">Saboteur</option>
	      <option value="diploma">Diplomate</option>
	      <option value="oniroma">Oniromancie</option>
	      <option value="bluff">Bluff</option>
	      <option value="natatio">Natation</option>
	      <option value="acrobat">Acrobatie</option>
	    </select>
	    <br><br>
	    <input type="submit" value="Valider">
	  </form>
	</div>
</div>

<?php
}
?>
