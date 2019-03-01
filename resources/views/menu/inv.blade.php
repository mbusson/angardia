<div id="menuChara" class="menuWindow">
  <?php
    $userid = Auth::user()->id;
    $username = Auth::user()->name;
    $userinfo = \App\User::where('id', $userid)->first();
    $stat = \App\Character::where('owner', $userid)->first();
    try {
        $equip = \App\Equipment::where('id', $stat->id)->first();
        $inv = \App\Inventory::where('id', $stat->id)->first();
    } catch (ErrorException $e) {
        // do nothing if doesn't exist
    }
    if (!function_exists('menuItemDisplay')) {
      	function menuItemDisplay($statname) {
	        $userid = Auth::user()->id;
	        $stat = \App\Character::where('owner', $userid)->first();
          	if ( $stat ) {
				if ($stat->sidebar == 1) {
					if ($statname == "avatar_url") {
					echo '<img src="./img/avatars/' . $stat->$statname . '.jpg" width="128" height="128" class="tableframe borderImg">';  
					}
				}
			}
      	}
    }
    if (!function_exists('equipItemDisplay')) {
      function equipItemDisplay($itmID, $equipped) {
        $itm = \App\Item::where('id', $itmID)->first();
          if ( isset($itm) ) {
            if (!function_exists('parseActionEntry')) {
              function parseActionEntry($actionObject, $entry) {
                  $actionObject = json_decode($actionObject, true);
                  $actionSummary = "";
                if(!is_array($actionObject[$entry])){
                    $actionSummary = $actionObject[$entry];
                } 
                else if ($entry == "Bonus") {
                  foreach ($actionObject[$entry] as $k => $v) {
                      $actionSummary = $actionSummary . '
                      <div style="white-space:nowrap;">
                        <span>
                          <span class="tt stat" id="' . $k . '"></span>
                        </span>
                        <span class="itmStatValue" style="
                          background-color: rgba(107,142,35,0.5);
                        ">
                          <span style="font-weight: bold;font-size:16px;">+' . $v . '</span>
                        </span>
                      </div>';
                    }
                } 
                else if ($entry == "Malus") {
                  foreach ($actionObject[$entry] as $k => $v) {
                      $actionSummary = $actionSummary . '
                  <div style="white-space:nowrap;">
                    <span>
                      <span class="tt stat" id="' . $k . '"></span>
                    </span>
                    <span class="itmStatValue" style="
                      background-color: rgba(165,42,42,0.5);
                    ">
                      <span style="font-weight: bold;font-size:16px;">-' . $v . '</span>
                    </span>
                  </div>';
                    }
                }
                else if ($entry == "Preset") {
                  foreach ($actionObject[$entry] as $k => $v) {
                      $actionSummary = $actionSummary . '
                  <div style="white-space:nowrap;padding:0;margin:0;">
                    <span class="presetStat" style="background-color: rgba(101, 150, 58,0.5);border-radius: 3px 0 0 3px;" >' . presetKeyDisplay($k) . '</span><span class="presetStat" style="background-color: rgba(95, 166, 204,0.5);border-radius: 0 3px 3px 0;" >' . presetValueDisplay($k, $v) . '</span>
                  </div>';
                    }
                }
                else if ($entry == "Skill") {
                  foreach ($actionObject[$entry] as $k) {
                      $actionSummary = $actionSummary . '
                  <div style="white-space:nowrap;">
                    <span class="tt itmStatValueText" style="background-color: rgba(205,133,63,0.5);" id="' . $k . '"></span>
                  </div>';
                    }
                }
                return $actionSummary;
            }
          }
          if ($equipped) {
            $buttons = '<br />
              <div style="margin: 4px;">
                <button type="submit" class="GUIbtn removeItm" style="font-size:1em;" data-content="' . $itm->id . '">
                  Enlever
                </button>
              </div>';
          }
          else if ($itm->type == "use") {
            $buttons = '<br />
              <div style="margin: 4px;">
                <button type="submit" class="GUIbtn useItm" style="font-size:1em;" data-content="' . $itm->id . '">
                  Utiliser
                </button>
                <button type="submit" class="GUIbtn discardItm" style="font-size:1em;" data-content="' . $itm->id . '">
                  Jeter
                </button>
              </div>';
          }
          else if ($itm->type == "equip") {
            $buttons = '<br />
              <div style="margin: 4px;">
                <button type="submit" class="GUIbtn equipItm" style="font-size:1em;" data-content="' . $itm->id . '">
                  Équiper
                </button>
                <button type="submit" class="GUIbtn discardItm" style="font-size:1em;" data-content="' . $itm->id . '">
                  Jeter
                </button>
              </div>';
          }
          else {
            $buttons = '<br />
              <div style="margin: 4px;">
                <button type="submit" class="GUIbtn discardItm" style="font-size:1em;" data-content="' . $itm->id . '">
                  Jeter
                </button>
              </div>';
          }
          $itmbox = '
            <span class="invitm ' . $itm->type . '">
              <img src="' . $itm->icon . '" />
            </span>
            <div class="invitmbox">
              <div class="infoTitle">' . $itm->name . '</div><br />
              <div>
                <table class="defined_width" >
                  <tr>
                    <th rowspan="2" style="
                      background: rgba(100,100,100,0.5);
                      border-radius: 25%;
                      border: 1px solid #754c0d;
                      width: 32px;
                    ">
                      <img src="' . $itm->icon . '" />
                    </th>
                    <th>
                      <strong>Niv. </strong>
                    </th>
                    <th>
                      <img src="./img/itm/misc/0a.png" height="12" width="12" />
                    </th>
                    <th>
                      <img src="./img/icons/weight.png" height="12" width="12" />
                    </th>
                    <th>
                      <strong>Type</strong>
                    </th>
                  </tr>
                  <tr>
                    <td>
                      ' . $itm->level . '
                    </td>
                    <td>
                      ' . $itm->price . '
                    </td>
                    <td>
                      ' . $itm->weight . '
                    </td>
                    <td>
                      ' . subtypeDisplayName($itm->subtype) . '
                    </td>
                  </tr>
                </table>
              </div>
              <div>
                <p style="
                  margin: 8px;
                  padding: 8px;
                  border-radius: 3px;
                  background-color: rgba(100,100,100,0.3);
                ">
                  ' . $itm->descr . '
                </p>
              </div>
              <div class="flexcontainer wrap" style="
                margin: 0 8px;
                padding: 4px;
                background-color: rgba(204,128,71,0.25);
                border-radius: 3px;
              ">
                ' . parseActionEntry($itm->action, "Bonus") . '
                ' . parseActionEntry($itm->action, "Malus") . '
                ' . parseActionEntry($itm->action, "Skill") . '
                ' . parseActionEntry($itm->action, "Preset") . '
              </div>
              ' . $buttons . '
            </div>
          ';
          return $itmbox;
        }
      }
    }
  ?>
  <div class='crowned' style="display:block;">
    <h2>Inventaire</h2>
  </div>
  <span id="closeMainMenuItem" class="bigClose" style="display:inline-block;">
    <img src="./img/gui/menu/Close.png" width="32" height="32" style="margin:8px;">
  </span>
  <div class="flexcontainer wrap between">
    <!-- -- -- STATS -- -- -->
    <div class="flexbox nomargin stone" style="font-size:80%;max-width:10%;">
      <?php
        $statistics = array();
        $statisticsDisplay = '<table class="shadowed dark" style="height:100%;">';
        $statistics['forc'] = [$stat->e_forc, getStats('forc', $stat->e_forc, $stat->id)];
        $statistics['dext'] = [$stat->e_dext, getStats('dext', $stat->e_dext, $stat->id)];
        $statistics['inte'] = [$stat->e_inte, getStats('inte', $stat->e_inte, $stat->id)];
        $statistics['endu'] = [$stat->e_endu, getStats('endu', $stat->e_endu, $stat->id)];
        $statistics['defe'] = [$stat->e_defe, getStats('defe', $stat->e_defe, $stat->id)];
        $statistics['perc'] = [$stat->e_perc, getStats('perc', $stat->e_perc, $stat->id)];
        $statistics['chan'] = [$stat->e_chan, getStats('chan', $stat->e_chan, $stat->id)];
        $statistics['chrm'] = [$stat->e_chrm, getStats('chrm', $stat->e_chrm, $stat->id)];
        $statistics['sage'] = [$stat->e_sage, getStats('sage', $stat->e_sage, $stat->id)];
        $statistics['volo'] = [$stat->e_volo, getStats('volo', $stat->e_volo, $stat->id)];
        $statistics['ling'] = [$stat->e_ling, getStats('ling', $stat->e_ling, $stat->id)];
        foreach ($statistics as $key => $one_stat) {
          if ($one_stat[1] > $one_stat[0]) {
            $statisticsDisplay = $statisticsDisplay . '<tr><td><span class="tt" id="' . $key . '"></span></td><td><h2 style="display:inline;padding:0 4px;margin: 0;display: inline-block;min-height:24px;"><span style="color:SteelBlue;opacity:0.9;">' . $one_stat[1] . '</span><span style="opacity:0.5;letter-spacing:-3px;">/' . $one_stat[0] . '</span></h2></td></tr>';
          }
          else if ($one_stat[1] == $one_stat[0]) {
            $statisticsDisplay = $statisticsDisplay . '<tr><td><span class="tt" id="' . $key . '"></span></td><td><h2 style="display:inline;padding:0 4px;margin: 0;display: inline-block;min-height:24px;"><span style="color:olivedrab;opacity:0.9;">' . $one_stat[0] . '</span></h2></td></tr>';
          }
          else if ($one_stat[1] < $one_stat[0]) {
            $statisticsDisplay = $statisticsDisplay . '<tr><td><span class="tt" id="' . $key . '"></span></td><td><h2 style="display:inline;padding:0 4px;margin: 0;display: inline-block;min-height:24px;"><span style="color:FireBrick;opacity:0.9;">' . $one_stat[1] . '</span><span style="opacity:0.5;letter-spacing:-3px;">/' . $one_stat[0] . '</span></h2></td></tr>';
          }
        }
        $statisticsDisplay = $statisticsDisplay . '</table';
        echo $statisticsDisplay;
      ?>
    </div>
  </div>
  <div class="flexcontainer vert">
    <!-- -- -- AVATAR -- -- -->
    <div class="flexbox nomargin stone" style="font-size:80%;height:216px;width:216px;">
      <div id="gaugexp" class="gauge-container" style="background-image: url('./img/gui/avatar_bg_null.png');">
        <div id="avatar-location">
          <div id="avatar-coordinates">
            <span class="uitxt">
              <span class="help tip-right" role="tooltip">Votre position</span>
              <?php echo $stat->loc_x ?>-<?php echo $stat->loc_y ?></span>
          </div>
          <div id="avatar-sub-coordinates">
            <span class="uitxt">
              <span class="help tip-right" role="tooltip">Votre localisation</span>
              <?php echo $stat->loc_sub ?>
            </span>
          </div>
          <div id="avatar-world">
            <span class="uitxt">
              <span class="help tip-left" role="tooltip">Votre monde</span>
              <?php echo $stat->loc_world ?>
            </span>
          </div>
        </div>
        <div id="avatar-icons">
          <div id="avatar-ap">
            <span class="help tip-right" role="tooltip">Points d'Action</span>
            <span class="uitxt">
              <?php echo $stat->ap ?>
            </span>
          </div>
          <div id="avatar-mp">
            <span class="help tip-right" role="tooltip">Points de Mouvement</span>
            <span class="uitxt">
              <?php echo $stat->mp ?>
            </span>
          </div>
          <div id="avatar-dp">
            <span class="help tip-right" role="tooltip">Faveurs Divines</span>
            <span class="uitxt">
              <?php echo $stat->df ?>
            </span>
          </div>
          <div id="avatar-icon1">
            <span class="help tip-left" role="tooltip">Régen. Faveurs Divines</span>
            <span class="uitxt">
              <?php echo $stat->df_regen ?>
            </span>
          </div>
          <div id="avatar-icon2">
            <span class="help tip-left" role="tooltip">Régen. Points de Mouvement</span>
            <span class="uitxt">
              <?php echo $stat->mp_regen ?>
            </span>
          </div>
          <div id="avatar-icon3">
            <span class="help tip-left" role="tooltip">Régen. Points d'Action</span>
            <span class="uitxt">
              <?php echo $stat->ap_regen ?>
            </span>
          </div>
          <div id="avatar-mana">
            <span class="help tip-left" role="tooltip">Régen. Mana</span>
            <span class="uitxt">
              <?php echo $stat->mana_regen ?>
            </span>
          </div>
          <div id="avatar-vie">
            <span class="help tip-left" role="tooltip">Régen. Vie</span>
            <span class="uitxt">
              <?php echo $stat->hp_regen ?>
            </span>
          </div>
        </div>
        <div id="avatar-character">
          <div id="tree" class="avatar-bigelem">
            <span class="help tip-right" role="tooltip">Votre Généalogie</span>
          </div>
          <div class="avatar-smallelem">
            <span class="uitxt">
              <span class="help tip-top-right" role="tooltip">Votre Race (<?php echo raceName($stat->race, $stat->gender); ?>)</span>
              <?php echo "<img src='./img/icons/races/" . $stat->race . ".png' height='19px' width='18px' style='opacity: 0.8;'>" ?>
            </span>
          </div>
          <div id="level" class="avatar-bigelem">
            <span class="help tip-top" role="tooltip">Votre Niveau</span>
            <h2 style="color: #e6d7a3;">1</h2>
          </div>
          <div class="avatar-smallelem">
            <span class="uitxt">
              <span class="help tip-top-left" role="tooltip">Votre Classe (<?php echo className($stat->class, $stat->gender); ?>)</span>
              <?php echo "<img src='./img/icons/classes/" . strtolower($stat->class) . ".png' height='19px' width='18px' style='opacity: 0.95;'>" ?>
            </span>
          </div>
          <div id="lore" class="avatar-bigelem">
            <span class="help tip-left" role="tooltip">Votre Biographie</span>
          </div>
        </div>
        <div id="avatar" class="avatar">
          <?php 
          menuItemDisplay("avatar_url"); 
          ?>
        </div>
      </div>
    </div>
    <!-- -- -- EQUIPMENT -- -- -->
    <div class="flexbox nomargin stone" style="width:216px;">
      <div class="flexcontainer">
        <div class="flexcontainer vert center nomargin">
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="rhand">
                  <?php 
                    echo equipItemDisplay($equip->rhand, true);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="hands">
                  <?php 
                    echo equipItemDisplay($equip->hands, true);
                  ?>
          </div>
        </div>
        <div class="flexcontainer vert center">
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="head">
                  <?php 
                    echo equipItemDisplay($equip->head, true);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="chest">
                  <?php 
                    echo equipItemDisplay($equip->chest, true);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="legs">
                  <?php 
                    echo equipItemDisplay($equip->legs, true);
                  ?>
          </div>
        </div>
        <div class="flexcontainer vert center">
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="lhand">
                  <?php 
                    echo equipItemDisplay($equip->lhand, true);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="waist">
                  <?php 
                    echo equipItemDisplay($equip->waist, true);
                  ?>
          </div>
        </div>
      <!--trinkets&jewels-->
        <div class="flexcontainer vert center" style="margin-left:2px;">
          <div class="flexbox itemFrame" style="margin:2px;" data-type="neck">
                  <?php 
                    echo equipItemDisplay($equip->neck, true);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:2px;" data-type="wrist">
                  <?php 
                    echo equipItemDisplay($equip->wrist, true);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:2px;" data-type="ring1">
                  <?php 
                    echo equipItemDisplay($equip->ring1, true);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:2px;" data-type="ring2">
                  <?php 
                    echo equipItemDisplay($equip->ring2, true);
                  ?>
          </div>
        </div>
        <div class="flexcontainer vert center" style="margin-left:-10px;">
          <div class="flexbox itemFrame" style="margin:2px;" data-type="trink1">
                  <?php 
                    echo equipItemDisplay($equip->trink1, true);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:2px;" data-type="trink2">
                  <?php 
                    echo equipItemDisplay($equip->trink2, true);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:2px;" data-type="trink3">
                  <?php 
                    echo equipItemDisplay($equip->trink3, true);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:2px;" data-type="trink4">
                  <?php 
                    echo equipItemDisplay($equip->trink4, true);
                  ?>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Equipment -->
  </div>
  <!-- -- -- INVENTORY -- -- -->
  <div class="flexbox nomargin stone" style="min-height:50vh; width: calc(83% - 432px);">
    <div id="invList">
      <div id="invWeight">
        <?php echo calculateTotalWeight() ?>
      </div>
      <div id="invGold">
        <h6 style="display:inline-block"><?php echo $stat->gold; ?></h6>
        <img src="./img/itm/misc/0a.png" width="18" height="18" style="margin-left:4px;margin-bottom:-5px;" />
      </div>
      <div class="invItmHeader">Consommables</div>
      <div class="flexcontainer wrap stack use">
        <?php
          try {
            $invitms = json_decode($inv->content, true);
            foreach ($invitms["Items"] as $invitm) {
              foreach ($invitm as $key => $val) {
                if ($key == "id") {
                  echo '<span class="invItmDisplay" id="' . $val . '" style="position: relative;"><div class="flexbox itemFrame" style="margin:4px;background:rgba(70,40,25,0.75);">'
                         . equipItemDisplay($val, false) . '</div>';
                }
                if ($key == "amt") {
                  echo '<div class="amtTooltip">'
                         . $val . '</div></span>';
                }
              }
            }
          } catch (ErrorException $e) {
            // do nothing
          }
        ?>
      </div>
      <div class="invItmHeader">Équipement</div>
      <div class="flexcontainer wrap stack equip">
      </div>
      <div class="invItmHeader">Autres</div>
      <div class="flexcontainer wrap stack trigger passive">
      </div>
    </div>
  </div>
  <!-- -- -- INFO -- -- -->
  <div class="nomargin stone" id="flexmenuinfocontainer">
    <div class="infoTitle">Détails</div>
    <div id="infocontainer">
      <p><br />Cliquez sur un objet pour en afficher les caractéristiques.<br /><br />Cela vous permettra aussi d'équiper, jeter ou déséquiper un objet.<br /><br />Vous ne pouvez vendre des objets que dans un magasin, ou auprès de marchands ambulants.<br /><br />En haut à droite de l'inventaire, vous trouverez votre capacité de portage.<br />En bas, l'or que vous transportez.<br /><br /></p>
    </div>
  </div>
  <script>
    /* inventory ordering */
    function reArrangeInv() {
            var equip = $('div.flexcontainer.wrap.stack.equip'),
                use = $('div.flexcontainer.wrap.stack.use'),
                misc = $('div.flexcontainer.wrap.stack.trigger.passive');
                equip.append($('span.invitm.equip').parents('span.invItmDisplay'));
                use.append($('span.invitm.use').parents('span.invItmDisplay'));
                misc.append($('span.invitm.trigger').parents('span.invItmDisplay'));
                misc.append($('span.invitm.passive').parents('span.invItmDisplay'));
    }
    $(document).ready(reArrangeInv());
    /* menu display setup */
    $('div#mainMenuDiv').addClass('autoHeightMenu');
    $('#closeMainMenuItem').click(function(){
      $("#playview").css({"filter":"none"});
      $("#mainMenuDiv").animate({ opacity: 0 }, 300, function() {
        $('.menuWindow').remove();
        $("#mainMenuDiv").removeClass('autoHeightMenu').css({'display': 'none'});
      });
    });
    /* item depiction box display */
    function delInvDetailBox(box) {
      box.animate({ opacity: 0 }, 50, function() {
        box.removeClass("equipboxvisi").addClass("invitmbox");
        box.remove();
      });
    }
    function newInvDetailBox(newBox) {
      delInvDetailBox($('.equipboxvisi'));
      setTimeout(function() {
          var newelem = newBox.clone();
          $("div.infoTitle").remove();
          $("#infocontainer").html(newelem);
          newelem.removeClass("invitmbox").addClass("equipboxvisi");
          newelem.animate({ opacity: 1 }, 50);
        }, 51
      );
    }
    $('div#menuChara.menuWindow').off('click').on('click', '.invitm', function(){
      var box = $(this).parent('div').find('.invitmbox');
      newInvDetailBox(box);
    });
    /* HANDLE INVENTORY ACTIONS */
    // "Enlever"
    $('#flexmenuinfocontainer').on("click", "button.GUIbtn.removeItm", function(){
      console.log('clicked');
      var contents = $(this).data('content'),
          itmData = {'itm': contents};
        $.post( '{{ route("unequipitm") }}', itmData )
          .done(function(data){
            delInvDetailBox($('div.equipboxvisi'));// hide old itmbox
            if (data[0] == "2hand") {
              $('div.itemFrame[data-type="rhand"]').find('button.removeItm').removeClass('removeItm').addClass('equipItm').html('Équiper');
              $('div.itemFrame[data-type="lhand"]').find('button.removeItm').removeClass('removeItm').addClass('equipItm').html('Équiper');
              var moveElem = $('div.itemFrame[data-type="rhand"]').html();
              var moveElem = $('div.itemFrame[data-type="lhand"]').html(); // copy item DOM elems
              $('div.itemFrame[data-type="rhand"]').empty();
              $('div.itemFrame[data-type="lhand"]').empty(); // empty old elem
              $('#invList div.flexcontainer.wrap.stack.equip').append('\
                <span class="invItmDisplay" id="'+data[1]+'" style="position: relative;"><div class="flexbox itemFrame" style="margin:4px;background:rgba(70,40,25,0.75);">\
                '+moveElem+'\
                </div>\
                <div class="amtTooltip">'+data[2]+'</div></span>\
                </span>\
                '); // make new elem to right place
            } else {
              $('div.itemFrame[data-type="'+data[0]+'"]').find('button.removeItm').removeClass('removeItm').addClass('equipItm').html('Équiper');
              var moveElem = $('div.itemFrame[data-type="'+data[0]+'"]').html(); // copy item DOM elems
              $('div.itemFrame[data-type="'+data[0]+'"]').empty(); // empty old elem
              $('#invList div.flexcontainer.wrap.stack.equip').append('\
                <span class="invItmDisplay" id="'+data[1]+'" style="position: relative;"><div class="flexbox itemFrame" style="margin:4px;background:rgba(70,40,25,0.75);">\
                '+moveElem+'\
                </div>\
                <div class="amtTooltip">'+data[2]+'</div></span>\
                </span>\
                '); // make new elem to right place
            }
          })
          .fail(function(){
            //
        });
    });
    // "Enlever"
    $('#flexmenuinfocontainer').on("click", "button.GUIbtn.equipItm", function(){
      console.log('clicked');
      var contents = $(this).data('content'),
          itmData = {'itm': contents};
        $.post( '{{ route("equipitm") }}', itmData )
          .done(function(data){
            console.log(data);
            if (data[0] == "2hand") {
              // if 2 handed...
              if (data[2][0]) {
                // remove old rhand itm view
                $('div.itemFrame[data-type="rhand"]').find('button.removeItm').removeClass('removeItm').addClass('equipItm').html('Équiper');
                var moveElemR = $('div.itemFrame[data-type="rhand"]').html();
                $('div.itemFrame[data-type="rhand"]').empty();
                // move it to inv
                $('#invList div.flexcontainer.wrap.stack.equip').append('\
                <span class="invItmDisplay" id="'+data[2][0]+'" style="position: relative;"><div class="flexbox itemFrame" style="margin:4px;background:rgba(70,40,25,0.75);">\
                '+moveElemR+'\
                </div>\
                <div class="amtTooltip">1</div></span>\
                </span>\
                ');
              }
              if (data[2][1]) {
                // remove old lhand itm view
                $('div.itemFrame[data-type="lhand"]').find('button.removeItm').removeClass('removeItm').addClass('equipItm').html('Équiper');
                var moveElemL = $('div.itemFrame[data-type="lhand"]').html();
                $('div.itemFrame[data-type="lhand"]').empty();
                // if previous item isn't 2-handed
                if (data[2][1] != data[2][0]) {
                  // move it to inv
                  $('#invList div.flexcontainer.wrap.stack.equip').append('\
                  <span class="invItmDisplay" id="'+data[2][1]+'" style="position: relative;"><div class="flexbox itemFrame" style="margin:4px;background:rgba(70,40,25,0.75);">\
                  '+moveElemL+'\
                  </div>\
                  <div class="amtTooltip">1</div></span>\
                  </span>\
                  ');
                }
              }
              // now to move the item from inv to equip
              delInvDetailBox($('div.equipboxvisi'));// hide old itmbox
              var moveInvElem = $('span.invItmDisplay#'+data[1]+' div.flexbox.itemFrame').html(); // copy item DOM elems
              $('div.itemFrame[data-type="rhand"]').append(moveInvElem); // move to equip
              $('div.itemFrame[data-type="lhand"]').append(moveInvElem);
              $('span.invItmDisplay#'+data[1]).remove();
              $('div.itemFrame[data-type="rhand"]').find('button.equipItm').removeClass('equipItm').addClass('removeItm').html('Enlever');
              $('div.itemFrame[data-type="lhand"]').find('button.equipItm').removeClass('equipItm').addClass('removeItm').html('Enlever');
            }
            // now, the scenario where a new item that is NOT two-handed 
            // replaces either a two-handed, or a regular item
            else if (data[2] != "replaceditm") {
              var uniquedata = data[2]; // will be replaced if old weapon is 2-handed
              if (data[2][1]) {
                // if replaces dual weap, get opposite hand and delete its display
                var otherhand = (data[0] == "rhand" ? "lhand" : "rhand");
                $('div.itemFrame[data-type="'+otherhand+'"]').find('button.removeItm').removeClass('removeItm').addClass('equipItm').html('Équiper');
                $('div.itemFrame[data-type="'+otherhand+'"]').empty();
                var uniquedata = data[2][0];
              }
              // then remove the targeted replaced item
              $('div.itemFrame[data-type="'+data[0]+'"]').find('button.removeItm').removeClass('removeItm').addClass('equipItm').html('Équiper');
              var moveElem = $('div.itemFrame[data-type="'+data[0]+'"]').html(); // copy item DOM elems
              $('div.itemFrame[data-type="'+data[0]+'"]').empty(); // empty old elem
              $('#invList div.flexcontainer.wrap.stack.equip').append('\
                <span class="invItmDisplay" id="'+uniquedata+'" style="position: relative;"><div class="flexbox itemFrame" style="margin:4px;background:rgba(70,40,25,0.75);">\
                '+moveElem+'\
                </div>\
                <div class="amtTooltip">1</div></span>\
                </span>\
                '); // and append it back to the inventory
            }
            // now to move the new item from inv to equip
            delInvDetailBox($('div.equipboxvisi'));// hide old itmbox
            var moveElem = $('span.invItmDisplay#'+data[1]+' div.flexbox.itemFrame').html(); // copy item DOM elems
            $('div.itemFrame[data-type="'+data[0]+'"]').append(moveElem); // move to equip
            $('span.invItmDisplay#'+data[1]).remove();
            $('div.itemFrame[data-type="'+data[0]+'"]').find('button.equipItm').removeClass('equipItm').addClass('removeItm').html('Enlever');
          })
          .fail(function(){
            //
        });
    });
    $('#flexmenuinfocontainer').on("click", "button.GUIbtn.useItm", function(){
      console.log('clicked');
      var contents = $(this).data('content'),
          itmData = {'itm': contents};
        $.post( '{{ route("useitm") }}', itmData )
          .done(function(){
            //
          })
          .fail(function(){
            //
        });
    });
    $('#flexmenuinfocontainer').on("click", "button.GUIbtn.discardItm", function(){
      var contents = $(this).data('content'),
          itmData = {'itm': contents};
        $('#mainMenuDiv').append('\
          <div id="destroyItmGUI" style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%);text-align:center;">\
            <div class="textbox">\
            <p>Voulez-vous vraiment détruire cet objet?</p>\
              <button class="redhover" id="destroyItm">Oui</button>\
            </a><br /><br />\
            <button id="closeDestroyItm" class="greenhover button">Revenir au Jeu</button>\
            </div>\
          </div>\
          ');
        $('#destroyItm').off('click').click(function() {
          $.post( '{{ route("discarditm") }}', itmData )
          .done(function(data){
            delInvDetailBox($('div.equipboxvisi'));// hide old itmbox
            $('span.invItmDisplay#'+data).remove(); // empty old elem
            $('#destroyItmGUI').remove();
          })
          .fail(function(){
            //
          });
        });
        $('#closeDestroyItm').off('click').click(function() {
          $('#destroyItmGUI').remove();
        });
    });
  </script>
</div>
<br />