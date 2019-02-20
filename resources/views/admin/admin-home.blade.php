@include('includes.element.admin_header')
<nav>
  <ul id="tabs">
    <li id="m_home" class="current">
      <span class="caption">
        <span class="captiontext">Accueil</span>
        <img src="../img/admin/home.png" height="40px" width="40px">
      </span>
    </li>
    <li id="m_mess">
      <span class="caption">
        <span class="captiontext">Messages</span>
        <img src="../img/admin/messages.png" height="40px" width="40px">
      </span>
    </li>
    <li id="m_char">
      <span class="caption">
        <span class="captiontext">Personnages</span>
        <img src="../img/admin/personnages.png" height="40px" width="40px">
      </span>
    </li>
    <li id="m_item">
      <span class="caption">
        <span class="captiontext">Objets</span>
        <img src="../img/admin/objets.png" height="40px" width="40px">
      </span>
    </li>
    <li id="m_maps">
      <span class="caption">
        <span class="captiontext">Carte</span>
        <img src="../img/admin/map.png" height="40px" width="40px">
      </span>
    </li>
    <li id="m_univ">
      <span class="caption">
        <span class="captiontext">Univers</span>
        <img src="../img/admin/univers.png" height="40px" width="40px">
      </span>
    </li>
    <li id="m_grap">
      <span class="caption">
        <span class="captiontext">Graphismes</span>
        <img src="../img/admin/graphismes.png" height="40px" width="40px">
      </span>
    </li>
    <li id="m_note">
      <span class="caption">
        <span class="captiontext">Notes</span>
        <img src="../img/admin/notes.png" height="40px" width="40px">
      </span>
    </li>
    <li id="m_mode">
      <span class="caption">
        <span class="captiontext">Modération</span>
        <img src="../img/admin/moderation.png" height="40px" width="40px">
      </span>
    </li>
    <li id="m_acce">
      <span class="caption">
        <span class="captiontext">Accès</span>
        <img src="../img/admin/acces.png" height="40px" width="40px">
      </span>
    </li>
    <li id="m_conf">
      <span class="caption">
        <span class="captiontext">Configuration</span>
        <img src="../img/admin/config.png" height="40px" width="40px">
      </span>
    </li>
    <li id="m_inbo">
      <span class="caption">
        <span class="captiontext">Courrier</span>
        <img src="../img/admin/courrier.png" height="40px" width="40px"></a>
      </span>
    </li>
  </ul>
  <span id="indicator"></span>
</nav>
<div id="content">
  <section>
    @include('admin.section.home')
  </section>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</div>
@include('includes.element.footer')
<script src="/angardia/public/js/tooltips.js"></script>