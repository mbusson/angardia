<div>
  <ul class="menu">
  	<li id="itemsList">Liste</li>
    <li id="newItem">Créer</li>
  </ul>
  <hr class="blackhr" />
  <span style="text-decoration:underline;font-weight:bold;">Chercher par nom:</span>
  <span style="white-space:nowrap;">
    <input id='nameSearch' type='text' style='display:inline;width:6.5vw;padding:0;margin:0;z-index:999;' />
  </span>
  <ul class="mini_menu">
    <li id="trinket">Accessoires</li>
    <li id="ring">Anneau</li>
    <li id="weapon1hand">Armes (1)</li>
    <li id="weapon2hand">Armes (2)</li>
    <li id="chest">Armures</li>
    <li id="drink">Boissons</li>
    <li id="shield">Boucliers</li>
    <li id="wrist">Bracelet</li>
    <li id="loot">Butins</li>
    <li id="head">Casques</li>
    <li id="waist">Ceintures</li>
    <li id="neck">Collier</li>
    <li id="misc">Divers</li>
    <li id="hands">Gants</li>
    <li id="ingredient">Ingrédients</li>
    <li id="legs">Jambières</li>
    <li id="food">Nourriture</li>
    <li id="classItem">Obj. Classe</li>
    <li id="quest">Obj. Quête</li>
    <li id="tool">Outils</li>
    <li id="scroll">Parchemins</li>
    <li id="potion">Potions</li>
  </ul>
  <script>
  	$('#newItem').click(function() {
      $('#mainAdminContentsView').empty();
		  $('#mainAdminContentsView').load("{{ route('m_item_new') }}");
  	});
  	$('#itemsList').click(function() {
      $('#mainAdminContentsView').empty();
		  $('#mainAdminContentsView').load("{{ route('getAllItms') }}");
  	});
    // name search
    $('#nameSearch').keyup(delay(function (e) {
      var searchTerm = $(this).val();
      $('#mainAdminContentsView').empty();
      let searchName = {'name': searchTerm};
      $.post( '{{ route("getItmByName") }}', searchName)
        .done(function(data){
          $('#mainAdminContentsView').html(data);
        })
        .fail(function(){
          displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!</strong></font>');
      });
    }, 500));
    // sub-menu
    $('#potion').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'potion']) }}");
    });
    $('#head').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'head']) }}");
    });
    $('#chest').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'chest']) }}");
    });
    $('#hands').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'hands']) }}");
    });
    $('#legs').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'legs']) }}");
    });
    $('#waist').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'waist']) }}");
    });
    $('#weapon1hand').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'one_handed']) }}");
    });
    $('#weapon2hand').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'two_handed']) }}");
    });
    $('#shield').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'shield']) }}");
    });
    $('#trinket').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'trinket']) }}");
    });
    $('#classItem').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'classItem']) }}");
    });
    $('#neck').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'neck']) }}");
    });
    $('#ring').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'ring']) }}");
    });
    $('#wrist').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'wrist']) }}");
    });
    $('#scroll').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'scroll']) }}");
    });
    $('#tool').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'tool']) }}");
    });
    $('#quest').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'quest']) }}");
    });
    $('#ingredient').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'ingredient']) }}");
    });
    $('#loot').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'loot']) }}");
    });
    $('#food').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'food']) }}");
    });
    $('#drink').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'drink']) }}");
    });
    $('#misc').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getItmBySubType', ['subtype' => 'misc']) }}");
    });
  </script>
</div>