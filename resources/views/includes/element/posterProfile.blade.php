<?php
  $equip = \App\Equipment::where('id', $stat->id)->first();
?>
<div class="flexcontainer nomargin between" style="padding: 8px 0 16px 0;border-bottom:5px double #886620;margin-bottom:16px;background:url(./img/bgs/knot_phoenix.png) no-repeat;background-position:center;">
  <div class="flexcontainer nomargin nopadding center" style="background:url(./img/bgs/knotwork.png) no-repeat;background-size: contain;background-position:center;">
    <!-- Avatar and elements -->
    <div class="flexbox nomargin" style="flex: 1 1 0;height:94%;">
      <div class="flexcontainer nomargin vert end" style="padding:8px 0 0;">
        <div class="flexbox leftStickOut stone centeredtext" style="overflow:hidden;">
          <?php echo '<h2 class="stroke" style="font-size:115%;margin:0;padding:0 4px;">' . $stat->name . '</h2>'; ?>
        </div>
        <div class="flexbox leftStickOut stone centeredtext" style="line-height:0.9;">
          {!! healthStatus($stat->hp, $stat->hp_max) !!}
        </div>
      </div>
    </div>
    <div class="flexbox nomargin" style="flex: 1 1 0;">
      <div class="flexcontainer nomargin vert center" style="padding:0;">
        <div class="flexbox nomargin stone" style="margin:0;">
          <div class="avatar">
            <?php echo '<img src="./img/avatars/' . $stat->avatar_url . '.jpg" width="128" height="128" class="tableframe avatar">'; ?>
          </div>
        </div>
        <div class="flexbox nomargin">
          <div class="flexcontainer nomargin" style="padding:0;">
            <div class="flexbox bottomStickOut stone" style='height:24px;width:24px;'>
              {!! iconDisplay($stat->race) !!}
            </div>
            <div class="flexbox bottomStickOut stone" style='height:32px;width:32px;'>
              <?php echo '<h2 class="stroke" style="color:#e6d7a3;position:absolute;top:-10px;left:50%;transform:translateX(-50%);">' . $stat->level . '</h2>'; ?>
            </div>
            <div class="flexbox bottomStickOut stone" style='height:24px;width:24px;'>
              {!! iconDisplay($stat->class) !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flexbox nomargin" style="flex: 1 1 0;height:94%;">
      <div class="flexcontainer nomargin vert start" style="padding:8px 0 0;">
        <div class="flexbox rightStickOut stone stroke centeredtext" style="align-self: flex-start;">
          <strong>{!! ranksDisplay($stat->rank, $stat->gender) !!}</strong>
        </div>
        <div class="flexbox rightStickOut stone stroke" style="align-self: flex-start">
          <strong>{!! titleDisplay($stat->title) !!}</strong>
        </div>
      </div>
    </div>
  </div>
  <!-- || -->
  <div class="flexcontainer nomargin center">
  <!-- Stats-->
    <div class="flexbox nomargin" style="flex: 1 1 0;">
      <div class="flexcontainer nomargin vert end" style="padding:0;font-size:10px;color:#e6d7a3;">
        <div class="flexbox leftStickOut stone centeredtext">
          xx messages
        </div>
        <div class="flexbox leftStickOut stone centeredtext">
          xx quêtes
        </div>
        <div class="flexbox leftStickOut stone centeredtext">
          xx réputation
        </div>
      </div>
    </div>
  <!-- Inventory -->
    <div class="flexbox nomargin stone">
      <div class="flexcontainer">
        <div class="flexcontainer vert center nomargin">
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="rhand">
                  <?php 
                    echo equipItemDisplay($equip->rhand);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="hands">
                  <?php 
                    echo equipItemDisplay($equip->hands);
                  ?>
          </div>
        </div>
        <div class="flexcontainer vert center">
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="head">
                  <?php 
                    echo equipItemDisplay($equip->head);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="chest">
                  <?php 
                    echo equipItemDisplay($equip->chest);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="legs">
                  <?php 
                    echo equipItemDisplay($equip->legs);
                  ?>
          </div>
        </div>
        <div class="flexcontainer vert center">
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="lhand">
                  <?php 
                    echo equipItemDisplay($equip->lhand);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:8px 0;" data-type="waist">
                  <?php 
                    echo equipItemDisplay($equip->waist);
                  ?>
          </div>
        </div>
      <!--trinkets&jewels-->
        <div class="flexcontainer vert center" style="margin-left:16px;">
          <div class="flexbox itemFrame" style="margin:2px;" data-type="neck">
                  <?php 
                    echo equipItemDisplay($equip->neck);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:2px;" data-type="wrist">
                  <?php 
                    echo equipItemDisplay($equip->wrist);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:2px;" data-type="ring1">
                  <?php 
                    echo equipItemDisplay($equip->ring1);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:2px;" data-type="ring2">
                  <?php 
                    echo equipItemDisplay($equip->ring2);
                  ?>
          </div>
        </div>
        <div class="flexcontainer vert center" style="margin-left:-10px;">
          <div class="flexbox itemFrame" style="margin:2px;" data-type="trink1">
                  <?php 
                    echo equipItemDisplay($equip->trink1);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:2px;" data-type="trink2">
                  <?php 
                    echo equipItemDisplay($equip->trink2);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:2px;" data-type="trink3">
                  <?php 
                    echo equipItemDisplay($equip->trink3);
                  ?>
          </div>
          <div class="flexbox itemFrame" style="margin:2px;" data-type="trink4">
                  <?php 
                    echo equipItemDisplay($equip->trink4);
                  ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
