<span id="HUM">
  <div class="flexcontainer Rtable Rtable--4cols">
    <div class="flexbox Rtable-cell">
      <h5>Classes disponibles:</h5><br /><h6>Paladin, Clerc, Assassin, Roublard, Moine</h6><br />
      <h4>Trait 1</h4><h4>Trait 2</h4>
    </div>
    <span style="width: 32px;"></span>
    <div class="flexcontainervert Rtable-cell">
      <div class="flexbox floating-even"><h3>Nom de la Race</h3></div>
      <div class="flexcontainer">
        <div class="flexbox"><h5>Bonus +X</h5><h5>Bonus +X</h5><h5>Bonus +X</h5><h5>Bonus +X</h5><h5>Bonus +X</h5></div>
        <div class="flexbox"><h5>Malus +X</h5><h5>Malus +X</h5><h5>Malus +X</h5><h5>Malus +X</h5><h5>Malus +X</h5></div>
      </div>
    </div>
    <span style="width: 32px;"></span>
    <div class="flexbox Rtable-cell"><h5>Taille moyenne: 1m95</h5><br /><br /><h5>Vie de base: 200</h5><h5>Mana de base: 200</h5><br /><br /><h5>Bonus de vitesse: +1</h5></div>
  </div>
  <div class="flexcontainer Rtable">
    <div class="flexbox Rtable-cell floating-even" id="avatarList" style="max-height: 80px;">
      <?php
        $avatars = \App\Avatar::where([
        ['type', '=', 'hum'],
        ['taken', '=', 0]
        ])->get();

        $i = 0;
        foreach ($avatars as $avatar) {
            echo '<img src="./img/avatars/' . $avatar->url . '.jpg" width="64px" height="64px" style="margin-right:5px;">';
          if (++$i > 9) break;
        }
      ?>
    </div>
  </div>
  <div class="flexcontainer">
    <div class="flexbox"><p>description de la race</p></div>
  </div>
</span>