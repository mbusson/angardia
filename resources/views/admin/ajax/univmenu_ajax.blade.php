<div>
  <ul class="menu">
  	<li id="lexList">Liste</li>
    <li id="newLex">Créer</li>
  </ul>
  <hr class="blackhr" />
  <span style="text-decoration:underline;font-weight:bold;">Chercher par nom:</span>
  <span style="white-space:nowrap;">
    <input id='nameSearch' type='text' style='display:inline;width:6.5vw;padding:0;margin:0;z-index:999;' />
  </span>
  <ul class="mini_menu">
    <li id="Index">Index</li>
    <li id="Livre">Livres</li>
    <li id="Événement">Événements</li>
    <li id="Endroit">Endroits</li>
    <li id="Dieu">Divinités</li>
    <li id="Personne">Personnes</li>
    <li id="Faune">Faune</li>
    <li id="Flore">Flore</li>
    <li id="Organisation">Organisations</li>
    <li id="Langue">Langues</li>
    <li id="Race">Races</li>
    <li id="Classe">Classes</li>
    <li id="Autre">Autres</li>
  </ul>
  <script>
    $('#newLex').off('click').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('m_lexicon_new') }}");
    });
    $('#lexList').off('click').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getAllLexs') }}");
    });
    // name search
    $('#nameSearch').keyup(delay(function (e) {
      var searchTerm = $(this).val();
      $('#mainAdminContentsView').empty();
      let searchName = {'name': searchTerm};
      $.post( '{{ route("getLexByName") }}', searchName)
        .done(function(data){
          $('#mainAdminContentsView').html(data);
        })
        .fail(function(){
          displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!</strong></font>');
      });
    }, 500));
    // sub-menu
    $('#Index').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getLexByType', ['type' => 'Index']) }}");
    });
    $('#Livre').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getLexByType', ['type' => 'Livre']) }}");
    });
    $('#Événement').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getLexByType', ['type' => 'Événement']) }}");
    });
    $('#Endroit').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getLexByType', ['type' => 'Endroit']) }}");
    });
    $('#Dieu').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getLexByType', ['type' => 'Dieu']) }}");
    });
    $('#Personne').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getLexByType', ['type' => 'Personne']) }}");
    });
    $('#Organisation').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getLexByType', ['type' => 'Organisation']) }}");
    });
    $('#Langue').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getLexByType', ['type' => 'Langue']) }}");
    });
    $('#Race').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getLexByType', ['type' => 'Race']) }}");
    });
    $('#Classe').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getLexByType', ['type' => 'Classe']) }}");
    });
    $('#Autre').click(function() {
      $('#mainAdminContentsView').empty();
      $('#mainAdminContentsView').load("{{ route('getLexByType', ['type' => 'Autre']) }}");
    });
  </script>
</div>