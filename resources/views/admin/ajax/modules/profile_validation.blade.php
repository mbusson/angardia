<?php
  $userid = \Auth::user()->id;
  $unvalProfiles = \App\Message::where([['sent', 'y'], ['approved', 'n'], ['type', 'profile']])->get();
  $pendingProfiles = \App\Message::where([['sent', 'n'], ['approved', 'n'], ['type', 'profile']])->get();
?>

<span id="validate">
  <table class="keywords" cellspacing="0" cellpadding="0">
    <tbody>
      <?php
      foreach ($unvalProfiles as $profile) {
          try {
            $chara = \App\Character::where('id', $profile->characterID)->first();
            $charaname = $chara->name;
          } catch (\Exception $e) {
            $charaname = '<font color="indianred">Personnage Supprimé</font>';
          }
          $string_content = json_encode($profile->content);
          try {
              $quill = new \DBlackborough\Quill\Render($string_content);
              $result = $quill->render();
          } catch (\Exception $e) {
              echo $e->getMessage();
          }
          $content = substr($result , 3, 160);
          echo '<tr class="editNewChar" id="' . $profile->id . '">
                  <td style="padding:0 32px 0 8px;"><strong>' . $charaname . '</strong></td>
                  <td style="padding:8px;">❝' . $content . '...❞ </td>
                </tr>';
      }
      if(empty($unvalProfiles[0])){
        echo '<tr>
              <td colspan="3" style="color: DarkGray;">Aucun nouveau profil à afficher.</td>
            </tr>';
      }
      ?>
    </tbody>
  </table>
</span>


<span id="pending">
  <table class="keywords" cellspacing="0" cellpadding="0">
    <tbody>
      <?php
      foreach ($pendingProfiles as $profile) {
          try {
          $chara = \App\Character::where('id', $profile->characterID)->first();
          $charaname = $chara->name;
        } catch (\Exception $e) {
          $charaname = '<font color="indianred">Personnage Supprimé</font>';
        }
          $sting_content = json_encode($profile->content);
          try {
              $quill = new \DBlackborough\Quill\Render($sting_content);
              $result = $quill->render();
          } catch (\Exception $e) {
              echo $e->getMessage();
          }
          $content = substr($result , 3, 160);
          echo '<tr class=".dynamicTableRow">
                  <td style="padding:0 32px 0 8px;"><strong>' . $charaname . '</strong></td>
                  <td style="padding:8px;">❝' . $content . '...❞ </td>
                </tr>';
      }
      if(empty($pendingProfiles[0])){
        echo '<tr class=".dynamicTableRow">
              <td colspan="3">Aucun nouveau profil à afficher.</td>
            </tr>';
      }
      ?>
    </tbody>
  </table>
</span>