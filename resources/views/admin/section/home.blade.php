<div class="flexcont">
  <div class="flexvert" style="max-width:35%;">
    <div class="flexbox"><h1>Messages</h1>
          @include('admin.ajax.messages_ajax')
    </div>
    <div class="flexbox"><h1>Notes</h1><br />
          @include('admin.ajax.notes_ajax')
    </div>
    <div class="flexbox"><h1>Univers</h1>
          @include('admin.ajax.univers_ajax')
    </div>
  </div>
  <div class="flexvert" style="max-width:35%;">
    <div class="flexbox"><h1>Carte</h1>
      <img src="../img/admin/worldmap.png" height="300px" width="300px" />
    </div>
    <div class="flexbox"><h1>Modération</h1>
          @include('admin.ajax.moderation_ajax')
    </div>
    <div class="flexbox"><h1>Accès</h1>
          @include('admin.ajax.acces_ajax')
    </div>
    <div class="flexbox"><h1>Configuration</h1>
          @include('admin.ajax.configuration_ajax')
    </div>
  </div>
  <div class="flexvert" style="max-width:30%;">
    <div class="flexbox"><h1>Profils</h1>
          @include('admin.ajax.newprofile_ajax')
    </div>
    <div class="flexbox"><h1>Personnages</h1>
          @include('admin.ajax.modules.last_character')
    </div>
  </div>
</div>