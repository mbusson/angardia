<?php
  $userid = Auth::user()->id;
  $user = \App\User::where('id', $userid)->first();
  $stat = \App\Character::where('owner', $userid)->first();
  $param = \App\Parameter::where('id', $stat->id)->first();
?>
<div id="menuLexi" class="menuWindow wide">
  <div style="min-width:75vw;min-height:75vh;">
    <div class='crowned' style="display:block;">
      <h2>Lexicon</h2>
    </div>
    <span id="closeMainMenuItem" class="bigClose" style="display:inline-block;">
      <img src="./img/gui/menu/Close.png" width="32" height="32" style="margin:8px;">
    </span>
  </div>
  <br />
  <div id="lexiconContent">
    <div id="lexMenu">
      <ul>
        <li class="stone"><a onclick="addTab(1)" href="#"><h4>Accueil</h4></a></li>
        <li class="stone"><h4>Recherche</h4></li>
        <li class="stone"><h4>Bibliothèque</h4></li>
        <li class="stone"><h4>Historique</h4></li>
      </ul>
    </div>
    <div id="lexContent" class="stone">
      <!-- TABS -->
      <div id="tabs">
        <ul>
          <?php 
            $tabslist = explode("_", $param->lex_open);
            foreach ($tabslist as $tab) {
              $tabinfo = \App\Lexicon::where('id', $tab)->first();
              echo '<li><img src="./' . $tabinfo->icon . '" height="24" width="24" style="position:absolute;top:50%;left:8px;transform:translateY(-50%);" /><a href="#tabs-' . $tab . '" style="margin-left: 24px;">' . $tabinfo->title . '</a> <span class="ui-icon ui-icon-close" role="presentation" id="' . $tab . '">Fermer</span></li>';
            }
          ?>
        </ul>
        <?php 
          $tabslist = explode("_", $param->lex_open);
          foreach ($tabslist as $tab) {
            $tabinfo = \App\Lexicon::where('id', $tab)->first();
            $content = $tabinfo->content;
            // parse content?
            echo '
            <div id="tabs-' . $tab . '">
              <div class="lexText" data-simplebar>
                <div  class="textbox">
                  <h1 style="text-align:center;">' . $tabinfo->title . '</h1><br />
                  <div class="infobox itbleft">
                    ' . $tabinfo->info . '
                  </div>
                  <div class="imagebox itbright">
                    <img src="./' . $tabinfo->icon . '" class="borderImg" />
                  </div>' . $tabinfo->content . '
                </div>
              </div>
            </div>';
          }
        ?>
      </div>
  <script>
    $('div#mainMenuDiv').addClass('wideMenu');
    $('#closeMainMenuItem').click(function(){
      $("#playview").css({"filter":"none"});
      $("#mainMenuDiv").animate({ opacity: 0 }, 500, function() {
        $('.menuWindow').remove();
        $("#mainMenuDiv").removeClass('wideMenu').css({'display': 'none'});
      });
    });
    /* TABS */
    var tabTitle = $( "#tab_title" ),
      tabContent = $( "#tab_content" ),
      tabTemplate = "<li><a href='#{href}'>#{label}</a> <span class='ui-icon ui-icon-close' role='presentation'>Fermer</span></li>",
      tabCounter = 1;
 
    var tabs = $( "#tabs" ).tabs();
 
    // AddTab button: just opens the dialog
    $( "#add_tab" )
      .button()
      .on( "click", function() {
        dialog.dialog( "open" );
      });
    // Actual addTab function: adds new tab using the input from the form above
    function addTab(id) {
      let selectedTabID = {'id': id};
      $.get( '{{ route("getTab") }}', selectedTabID)
        .done(function(data){
          var label = '<img src="./'+data[3]+'" height="24" width="24" style="position:absolute;top:50%;left:8px;transform:translateY(-50%);" /><span style="margin-left:24px;">'+data[1]+'</span>'; // tab name
              id = "tabs-" + data[0], // tab id
              li = $( tabTemplate.replace( /#\{href\}/g, "#" + id ).replace( /#\{label\}/g, label ) ),
              tabContentHtml = '\
              <div class="lexText" data-simplebar>\
                <div  class="textbox">\
                  <h1 style="text-align:center;">'+data[1]+'</h1>\
                  <div class="infobox itbleft">\
                    '+data[4]+'\
                  </div>\
                  <div class="imagebox itbright">\
                    <img src="./'+data[3]+'" class="borderImg" />\
                  </div>'+data[2]+'\
                </div>\
              </div>';
          li.children('.ui-icon-close').attr( 'id', data[0] );
          tabs.find( ".ui-tabs-nav" ).append( li );
          tabs.append( "<div id='" + id + "'><p>" + tabContentHtml + "</p></div>" );
          tabs.tabs( "refresh" );
          tabCounter++;
        })
        .fail(function(){
          //
      });
    }
    /* remove a tab */
    function delTab(id) {
      let selectedTabID = {'id': id};
      $.get( '{{ route("removeTab") }}', selectedTabID);
    }
    /* removal listener */
    $('#tabs ul').off('click').on( "click", ".ui-icon-close", function(){
      var id = $(this).attr('id');
      delTab(id);
      $(this).closest( "li" ).remove();
      $(this).remove();
      tabs.tabs( "refresh" );
    });
  </script>
</div>