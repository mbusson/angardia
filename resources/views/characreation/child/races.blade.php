<span id="HUM">
  <div class="woodenFrame">
    <div class="flexcontainer">
      <div class="textbox centeredtext">
        <div class="infotextbox itbleft" style="height:91%;">
          <h3>Classes:</h3><p>Guerrier, Vagabond, Barbare, Paladin, Roublard, Assassin, Clerc, Barde, Moine, Druide, Shaman, Ensorceleur, Magicien</p><br />
          <h3>Compétences:</h3>
          <p><span class="tt" id="adapt"></span></p><p><span class="tt" id="compe"></span></p><p><span class="tt" id="appre"></span></p>
        </div>
        <div class="infotextbox itbright" style="height:91%;">
          <p>Taille moyenne:</p> <h5 class="floating">1m70</h5><p>Vie de base:</p><h5 class="floating">225 <span class="tt" id="hp"></span></h5><p>Mana de base:</p> <h5 class="floating">200 <span class="tt" id="mana"></span></h5><p>Points d'Action:</p> <h5 class="floating">10 <span class="tt" id="ap"></span></h5><p>Points de Mouv.:</p> <h5 class="floating">7 <p> </p> <span class="tt" id="mp"></span></h5><p>Faveurs Divines:</p> <h5 class="floating">7 <span class="tt" id="df"></span></h5>
        </div>
        <div class="flexbox floating-even">
          <h2 style="margin-top: -16px;">Humain</h2>
        </div>
        <div class="flexbox floating-even">
          <span style="position:relative;"><img src="./img/illu/race/humanrace_square.png" class="borderImg"><img src='./img/icons/races/hum.png' class='floatright borderImg' style="z-index:99;"></span>
        </div>
        <div class="flexcontainer">
          <div class="flexbox"><p>Bonus unique:<br /> <strong>7 points de Bonus</strong> à ajouter à votre distribution de caractéristiques</p></div>
        </div>
        <div class="flexcontainer"><img src="./img/misc/separator/clt_spr.png" /></div>
      </div>
    </div>
  </div>
  <div class="flexcontainer">
    <div class="justify flexbox textbox"><p>Les humains sont une race dynamique, qui s’adapte facilement et prolifère rapidement. Cela explique sans doute la raison pour laquelle la race humaine reste dominante, surtout sur Telendÿr.<br /><br />

Leurs empires et leurs nations s’étendent généralement sur de larges territoires, et les membres de ces sociétés hautement hiérarchisées aiment se faire un nom, que ce soit par la pointe de leur épée, par relations, par expertise, par lignée, ou par la puissance de leur magie. Les humains se démarquent également par leur agitation permanente et leur grande diversité.<br /><br />

Leurs sociétés sont très variées, allant des tribus sauvages dont la culture est basée sur l’honneur jusqu’aux familles nobles et décadentes de certaines cités. La curiosité et l’ambition des humains prennent régulièrement le pas sur leur goût pour un mode de vie sédentaire. Nombre d’entre eux quittent leur demeure pour aller explorer les innombrables recoins oubliés du monde, ou pour prendre la tête de puissantes armées et conquérir les territoires voisins, simplement parce que ces possibilités s’offrent à eux.<br /><br />

L’ambition et l’imagination sans fin des humains sont étroitement liées à leur adaptation et leur expansion. Ces traits leur ont permis de s’étendre sur la surface du monde, et de s’habituer à une large variété de climats et d'environnements. Les caractéristiques physiques des humains sont aussi variées que les régions du monde qu’ils ont colonisées. Leurs yeux couvrent toutes les gammes communes, du vert émeraude au bleu clair, sans oublier le marron et autres teintes d’orange. Leurs cheveux incluent toute la gamme entre le jaune pâle du parchemin et la couleur du jais. On trouve aussi une grande diversité de morphologies et de caractéristiques faciales, des tribus à la peau sombre des continents du sud jusqu’aux pillards pâles et violents des terres du nord, chacun se voit affublé d’un physique endémique. En général, plus les humains vivent près des terres méridionales, plus leur couleur de peau est sombre.<br /><br />

La société humaine dans son intégralité est un pot-pourri de systèmes politiques et de modes de vie. Les cultures humaines les plus anciennes possèdent une histoire remontant à un millénaire, mais comparé à d’autres races (en particulier les elfes), la société des humains semble être la définition même du perpétuel changement, leurs empires se divisant constamment puis fusionnant en de nouvelles entités.<br /><br />

Les humains, féconds, dynamiques et nombreux, entrent souvent en contact avec d’autres races. Ces rencontres conduisent souvent à la violence et à la guerre, mais les humains pardonnent rapidement et forment facilement des alliances avec les races qui ne se montrent pas plus violentes qu’eux. Heureusement, leur propre diversité les aide à accepter les autres races de Telendÿr telles qu’elles sont. Les races qui pensent à plus longue échéance les considèrent souvent comme des créatures agressives et destructrices. La réalité est, comme toujours, un peu plus subtile. La plupart des humains ne cherchent qu’à utiliser le temps limité dont ils disposent pour mener des existences bien remplies. Les peuples subissant la lancinante avancée géographique de l’humanité sont souvent assimilés par cette race, très habile pour négocier et pour s’adapter; ils deviennent alors de nouvelles ressources pour leurs incessantes explorations culturelles.<br /><br />

Les humains forment sans doute la plus hétérogène de toutes les races courantes, capables aussi bien de répandre le chaos comme de faire le bien. Certains humains se réunissent en de vastes hordes barbares alors que d’autres construisent de grandes cités qui s’étendent sur des kilomètres. Globalement neutres, ils ont tendance à se rassembler en civilisations dont les buts s’alignent.<br /><br />

Nombre d’humains sont motivés par l’ambition. Beaucoup considèrent la vie d’aventurier comme le meilleur moyen pour obtenir ce qu’ils désirent, qu’il s’agisse d’un statut social, de fortune, de gloire ou de connaissances magiques. Quelques-uns partent également à l’aventure pour le frisson qu’elle procure. Les aventuriers humains peuvent venir de tous horizons et donc remplir n’importe quel rôle au sein d’un groupe.
</p>
</div></div>
<div class="flexcontainer woodenFrame" style="position: relative;overflow:hidden;max-height:80px;">
    <div class="floatleft wide_messagebox" style="z-index:9;">
      <h6>
        Échantillons d'Avatars
      </h6>
    </div>
    <div class="flexcontainer wrap flexbox floating-even" id="avatarList">
      <?php
        $avatars = \App\Avatar::where([
        ['type', '=', 'hum'],
        ['taken', '=', 0]
        ])->get();

        $i = 0;
        foreach ($avatars as $avatar) {
            echo '<img src="./img/avatars/' . $avatar->url . '.jpg" class="smallimages" >';
          if (++$i > 12) break;
        }
      ?>
    </div>
  </div>
</span>

<span id="ELF">
  <div class="woodenFrame">
    <div class="flexcontainer">
      <div class="textbox centeredtext">
        <div class="infotextbox itbleft" style="height:91%;">
          <h3>Classes:</h3><p>Guerrier, Vagabond, Roublard, Assassin, Clerc, Barde, Moine, Druide, Shaman, Ensorceleur, Magicien</p><br />
          <h3>Compétences:</h3>
          <p><span class="tt" id="vis_noct"></span></p><p><span class="tt" id="res_magi"></span></p><p><span class="tt" id="discr"></span></p><p><span class="tt" id="equil"></span></p><p><span class="tt" id="caval"></span></p>
        </div>
        <div class="infotextbox itbright" style="height:91%;">
          <p>Taille moyenne:</p> <h5 class="floating">1m90</h5><p>Vie de base:</p><h5 class="floating">175 <span class="tt" id="hp"></span></h5><p>Mana de base:</p> <h5 class="floating">225 <span class="tt" id="mana"></span></h5><p>Points d'Action:</p> <h5 class="floating">10 <span class="tt" id="ap"></span></h5><p>Points de Mouv.:</p> <h5 class="floating">8 <p> </p> <span class="tt" id="mp"></span></h5><p>Faveurs Divines:</p> <h5 class="floating">7 <span class="tt" id="df"></span></h5>
        </div>
        <div class="flexbox floating-even">
          <h2 style="margin-top: -16px;">Elfe</h2>
        </div>
        <div class="flexbox floating-even">
          <span style="position:relative;"><img src="./img/illu/race/elvenrace_square.png" class="borderImg"><img src='./img/icons/races/elf.png' class='floatright borderImg' style="z-index:99;"></span>
        </div>
        <div class="flexcontainer">
          <div class="flexbox"><p><span class="tt" id="dext"></span> +2</p><p><span class="tt" id="inte"></span> +2</p><p><span class="tt" id="vite"></span> +1</p><p><span class="tt" id="perc"></span> +2</p><p><span class="tt" id="chrm"></span> +2</p></div><div class="flexbox"><p><span class="tt" id="forc"></span> -2</p><p><span class="tt" id="endu"></span> -3</p><p><span class="tt" id="defe"></span> -1</p></div>
        </div>
      </div>
    </div>
  </div>
  <div class="flexcontainer">
    <div class="justify flexbox textbox"><p>Les elfes sont des créatures très proches de la nature, tentant souvent de vivre en harmonie avec celle-ci. Souvent associés aux créatures féériques, bien qu’ils ne soient pas originaires du royaume du même nom (à l’inverse des gnomes), ils vivent en moyenne trois à cinq fois plus longtemps qu’un humain. C’est cette longévité qui leur permet de lier une relation étrange et profonde avec leur environnement.<br /><br />

Bien qu’ils fussent les premiers habitants du monde, leur dispersion - étalée sur le continent - côtoie souvent des colonies humaines et autres bastions gobelinoïdes. Malgré tout, les aventuriers elfes qui ont été élevés et ont grandi dans des enclaves elfiques emportent avec eux la force et la gloire de la culture elfique, la beauté et l’esprit de leur environnement, et les répandent dans le monde, parfois par l’épée ou à l’aide de la magie. Leur patience innée les destine le plus naturellement à une carrière dans les arts magiques.<br /><br />

La vision classique des elfes comme protecteurs des forêts, bien que basée sur des faits réels, est biaisée: les elfes s’adaptent facilement à de nombreux environnements pouvant aller des déserts les plus inhospitaliers aux profondeurs de la mer, ce qui explique leur présence sur presque tous les continents. D’autres s’intéressent aux mystères et à la magie de certains domaines que leurs frères et soeurs ignorent.<br /><br />

Ils sont généralement plus grands que les humains, mais aussi plus gracieux et plus fragiles (une apparence que leurs longues oreilles pointues accentuent). Ils possèdent de larges yeux en forme d’amande et de grandes pupilles de couleur vive. Les elfes se parent généralement d’habits qui rappellent la beauté naturelle par biomimétisme, mais ceux qui vivent en ville s’habillent plutôt selon la mode en vogue. Connus pour leur grâce sans pareille, leur charisme général, leur maîtrise de la magie et leur savoir encyclopédique, les elfes sont tenus en haute estime par la plupart des autres races. Cependant, les communautés elfiques se sentent souvent encerclées par des races plus jeunes, plus agressives et comptant beaucoup plus d’individus que la leur.<br /><br />

Les elfes ont tendance à considérer les autres races comme trop impulsives et irréfléchies et à facilement les rejeter. Ils sont cependant très doués pour cerner les personnalités et les qualités des individus. Ils voient les gnomes comme des curiosités, des être étranges (parfois même dangereux), et éprouvent une certaine pitié envers les halfelins, car les petites gens leur semblent dépourvus d’attaches et de foyer originel. Les humains, quant à eux, fascinent les elfes. Le nombre important de demi-elfes en est la preuve, même si les elfes ne s’attachent généralement pas aux descendants nés hors de leur foyer. Quant aux créatures à peau verte (gobelins, hobgobelins,...), ils leur inspirent de la méfiance.<br /><br />

Ils se laissent guider par les émotions et les caprices, mais ils accordent une grande importance à la gentillesse et à la beauté, et préfèrent les dieux qui partagent leur amour du mysticisme.<br /><br />

La plupart de ceux qui partent à l’aventure sont mus par le désir d’explorer le monde. Ils quittent leurs royaumes d’origine à la recherche d’anciennes magies ou d’empires oubliés fondés par leurs ancêtres des millénaires plus tôt. Le côté éphémère de la vie d’aventurier et la liberté qui la caractérise attirent naturellement les elfes élevés au sein des communautés humaines ou ceux qui recherchent le sens de la vie et pensent le trouver dans l’agitation de leur cheminement. Les elfes évitent généralement le combat au corps à corps à cause de leur constitution relativement fragile, et préfèrent se tourner vers des classes magiques ou d’archerie.</p>
</div></div>
  <div class="flexcontainer woodenFrame" style="position: relative;overflow:hidden;max-height:80px;">
    <div class="floatleft wide_messagebox" style="z-index:9;">
      <h6>
        Échantillons d'Avatars
      </h6>
    </div>
    <div class="flexcontainer wrap flexbox floating-even" id="avatarList">
      <?php
        $avatars = \App\Avatar::where([
        ['type', '=', 'elf'],
        ['taken', '=', 0]
        ])->get();

        $i = 0;
        foreach ($avatars as $avatar) {
            echo '<img src="./img/avatars/' . $avatar->url . '.jpg" class="smallimages" />';
          if (++$i > 12) break;
        }
      ?>
    </div>
  </div>
</span>

<span id="DEM">
  <div class="woodenFrame">
    <div class="flexcontainer">
      <div class="textbox centeredtext">
        <div class="infotextbox itbleft" style="height:91%;">
          <h3>Classes:</h3><p>Guerrier, Vagabond, Roublard, Assassin, Barde, Moine, Ensorceleur, Magicien</p><br />
          <h3>Compétences:</h3>
          <p><span class="tt" id="vis_semi"></span></p><p><span class="tt" id="res_magi"></span></p><p><span class="tt" id="adapt"></span></p><p><span class="tt" id="equil"></span></p>
        </div>
        <div class="infotextbox itbright" style="height:91%;">
          <p>Taille moyenne:</p> <h5 class="floating">1m80</h5><p>Vie de base:</p><h5 class="floating">200 <span class="tt" id="hp"></span></h5><p>Mana de base:</p> <h5 class="floating">225 <span class="tt" id="mana"></span></h5><p>Points d'Action:</p> <h5 class="floating">10 <span class="tt" id="ap"></span></h5><p>Points de Mouv.:</p> <h5 class="floating">7 <p> </p> <span class="tt" id="mp"></span></h5><p>Faveurs Divines:</p> <h5 class="floating">7 <span class="tt" id="df"></span></h5>
        </div>
        <div class="flexbox floating-even">
          <h2 style="margin-top: -16px;">Demi-Elfe</h2>
        </div>
        <div class="flexbox floating-even">
          <span style="position:relative;"><img src="./img/illu/race/halfelfrace_square.png" class="borderImg"><img src='./img/icons/races/dem.png' class='floatright borderImg' style="z-index:99;"></span>
        </div>
        <div class="flexcontainer">
          <div class="flexbox">
            <p><span class="tt" id="volo"></span> +2</p><p><span class="tt" id="perc"></span> +2</p><p><span class="tt" id="chrm"></span> +2</p>
          </div><div class="flexbox">
            <p><span class="tt" id="endu"></span> -1</p>
          </div>
        </div>
        <div class="flexcontainer"><img src="./img/misc/separator/clt_spr.png" /></div>
      </div>
    </div>
  </div>
  <div class="flexcontainer">
    <div class="justify flexbox textbox"><p>Parmi toutes les particularités des elfes, c’est avant tout leur beauté qui a conquis leurs compagnons humains. Depuis que ces deux races se sont rencontrées, les humains considèrent les elfes comme des modèles de perfection physique, voyant sans doute en eux une version idéale de leur propre apparence. De leur côté, de nombreux elfes entretiennent une mystérieuse attirance pour les humains, peut-être à cause de la passion et de l’impétuosité dont les membres de cette race moins ancienne font preuve tout au long de leur courte vie.<br /><br />

De temps en temps, ces sentiments réciproques mènent à des relations amoureuses, généralement courtes même selon les critères humains, débouchant souvent sur la naissance de demi-elfes, des individus qui descendent de deux cultures différentes mais n’appartiennent ni à l’une ni à l’autre. Les demi-elfes peuvent procréer ensemble mais même les demi-elfes de « sang pur » ainsi créés sont considérés comme des bâtards tant par les humains que par les elfes.<br /><br />

Dans de rares occurrences, certains demi-elfes ont notamment des racines gnome ou halfelin. L’ADN Elfique étant l’un des plus vieux du monde, leur compatibilité génétique est extrêmement large.<br /><br />

Les demi-elfes sont les orphelins de la société, des individus à la fois charismatiques et passionnés, mais qui ne se sentent jamais vraiment chez eux. De nombreux demi-elfes se lancent dans des carrières, mais ils éprouvent souvent du mal à se cantonner à un seul métier. D’autres cherchent le bonheur en poursuivant des quêtes spirituelles ou en affinant leurs talents magiques innés, et d’autres encore se résignent à vivre en ermites dans les contrées sauvages, ou en misanthropes subsistant, jour après jour, en profitant des autres.<br /><br />

On trouve chez les demi-elfes des apparences très variées, mais ils semblent tous dotés d’une allure gracieuse héritée des elfes. Les talents particuliers des demi-elfes varient en fonction de leur éducation, leurs expériences passées, leur force de caractère et la manière dont ils appréhendent la dualité de leur nature.<br /><br />

Bien que les demi-elfes soient bien connus des habitants de Telendÿr, les rencontres entre humains et elfes suscitent souvent bien plus de consternation que de sentiments romantiques. Il reste rare pour des demi-elfes d’avoir eu une enfance épanouie dans une famille où l’amour abonde. Le plus souvent, ils sont pour leurs parents une erreur, un fardeau. Mais ce passé plutôt sombre les a, pour la plupart, endurcis et préparés à une vie sur la route (quand il n’est pas la motivation même de leur départ).<br /><br />

Les demi-elfes sont plus grands que les humains, mais plus petits que les elfes. Ils héritent de la silhouette élancée et de la beauté de leur parent elfe mais empruntent la couleur de peau de leur parent humain. Leurs oreilles sont pointues comme celles des elfes, mais de manière moins prononcée, avec un arrondi plus fort. La coloration de leurs yeux, semblables à ceux des humains, varie sur un large spectre de couleurs exotiques allant d’ambre à maltaise, jusqu’au vert émeraude.<br /><br />

Comme ils ne possèdent aucune culture propre, les demi-elfes sont contraints de se montrer très souples et de s’adapter à chaque type d’environnement. Les humains et les elfes les trouvent généralement attirants, décelant en eux les mêmes qualités que chez leurs parents. Cependant, les demi-elfes ne parviennent généralement pas à s’intégrer dans leurs sociétés respectives, car chacune de ces deux races retrouve en eux trop de choses évoquant l’autre culture. Certains demi-elfes trouvent ce manque d’acceptation très pesant, alors que d’autres considèrent que cette absence de culture formelle leur donne une liberté totale et tirent une grande force du statut unique que cela leur confère.<br /><br />

Les demi-elfes connaissent la solitude, et ils savent que la personnalité d’un individu résulte moins de sa race que des expériences qu’il a vécues. C’est pour cela qu’ils sont généralement prompts à se lier d’amitié ou à forger des alliances avec les autres races, et moins enclins à juger les personnes qu’ils rencontrent sur des premières impressions. La solitude des demi-elfes influence naturellement leur personnalité et leur philosophie. La cruauté ne fait pas nécessairement partie de leur nature, pas plus que la capacité à se fondre dans la masse ou à se plier à des conventions sociales.<br /><br />

De nombreux demi-elfes sont des nomades traversant les terres à la recherche d’un endroit où ils pourraient se sentir bien. L’envie de prouver leur valeur à la communauté et de se faire un nom – peut-être même rendre leur nom légendaire – pousse de nombreux aventuriers demi-elfes à mener une vie marquée par le courage.</p>
</div></div>
  <div class="flexcontainer woodenFrame" style="position: relative;overflow:hidden;max-height:80px;">
    <div class="floatleft wide_messagebox" style="z-index:9;">
      <h6>
        Échantillons d'Avatars
      </h6>
    </div>
    <div class="flexcontainer wrap flexbox floating-even" id="avatarList">
      <?php
        $avatars = \App\Avatar::where([
        ['type', '=', 'dem'],
        ['taken', '=', 0]
        ])->get();

        $i = 0;
        foreach ($avatars as $avatar) {
            echo '<img src="./img/avatars/' . $avatar->url . '.jpg" class="smallimages" />';
          if (++$i > 12) break;
        }
      ?>
    </div>
  </div>
</span>

<span id="HAL">
  <div class="woodenFrame">
    <div class="flexcontainer">
      <div class="textbox centeredtext">
        <div class="infotextbox itbleft" style="height:91%;">
          <h3>Classes:</h3><p>Roublard, Barde, Assassin, Vagabond</p><br />
          <h3>Compétences:</h3>
          <p><span class="tt" id="appre"></span></p><p><span class="tt" id="intre"></span></p><p><span class="tt" id="discr"></span></p><p><span class="tt" id="equil"></span></p>
        </div>
        <div class="infotextbox itbright" style="height:91%;">
          <p>Taille moyenne:</p> <h5 class="floating">1m</h5><p>Vie de base:</p><h5 class="floating">175 <span class="tt" id="hp"></span></h5><p>Mana de base:</p> <h5 class="floating">100 <span class="tt" id="mana"></span></h5><p>Points d'Action:</p> <h5 class="floating">11 <span class="tt" id="ap"></span></h5><p>Points de Mouv.:</p> <h5 class="floating">9 <p> </p> <span class="tt" id="mp"></span></h5><p>Faveurs Divines:</p> <h5 class="floating">13 <span class="tt" id="df"></span></h5><p>Régén. Fav. Div.: x2</p>
        </div>
        <div class="flexbox floating-even">
          <h2 style="margin-top: -16px;">Halfelin</h2>
        </div>
        <div class="flexbox floating-even">
          <span style="position:relative;"><img src="./img/illu/race/halrace_square.png" class="borderImg"><img src='./img/icons/races/hal.png' class='floatright borderImg' style="z-index:99;"></span>
        </div>
        <div class="flexcontainer">
          <div class="flexbox">
            <p><span class="tt" id="dext"></span> +2</p><p><span class="tt" id="vite"></span> +2</p><p><span class="tt" id="chan"></span> +5</p><p><span class="tt" id="volo"></span> +2</p><p><span class="tt" id="chrm"></span> +2</p><p><span class="tt" id="perc"></span> +2</p>
          </div><div class="flexbox">
            <p><span class="tt" id="forc"></span> -5</p><p><span class="tt" id="endu"></span> -3</p><p><span class="tt" id="defe"></span> -5</p><p><span class="tt" id="sage"></span> -2</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flexcontainer">
    <div class="justify flexbox textbox"><p>Les halfelins sont des créatures optimistes, dotées d’une chance hors-norme et naturellement joyeuses. Leur passion pour les voyages, leur petite taille et leur attitude fanfaronne et curieuse en font souvent des compagnons de route attachants. À la fois émotifs et faciles à vivre, ces opportunistes sans pareille préfèrent éviter les affrontements afin d’être prêts à saisir toutes les opportunités. Les halfelins ne se laissent aller à des crises violentes ou émotionnelles que rarement, bien moins souvent que les autres races d’humeur plus changeante. Ils ne perdent quasiment jamais leur sens de l’humour, même face à un désastre imminent.<br /><br />

Comme leur physique ne leur permet pas toujours de se défendre à armes égales, ils ont appris à laisser couler les choses et se faire discrets. Mais leur curiosité prend souvent le pas sur leur bon sens et les pousse vers des décisions douteuses ou dans des situations difficiles. Cette même curiosité les incite à voyager, à explorer de nouveaux endroits et à tenter de nouvelles expériences. Malgré cela, les halfelins possèdent un sens du foyer développé. Il n’est d’ailleurs pas rare d’en voir certains dépenser plus que de raison pour améliorer le confort de leur demeure.<br /><br />

Les halfelins vivent rarement au sein de communautés mono-culturelles. Cependant, ils partagent entre eux (et, dans une moindre mesure, avec les gnomes) une connivence qui unit ceux qui savent ce que c’est d’être petits et ignorés dans un monde rempli de créatures plus grandes. Ils ne possèdent pas de terres propres et ne contrôlent aucun bastion plus grand que des petits villages ruraux. La plupart du temps, ils cohabitent avec leurs cousins humains au sein des cités de ces derniers et subsistent tant bien que mal grâce à un savoir-faire individuel ou à ce qu’ils parviennent à grappiller. Beaucoup d’entre eux mènent des vies tout à fait satisfaisantes dans l’ombre de leurs voisins de grande taille, mais certains préfèrent l’alternative de se tourner vers une vie nomade, avec pour ambition d’explorer le monde et voir ce qu’il a à offrir.<br /><br />

N’attirant guère l’attention grâce à leur taille réduite, ils possèdent une étonnante capacité à se fondre dans l’immensité du monde qui les entoure. Rapides, agiles et entêtés, les halfelins se mêlent aux sociétés des autres races et se rendent bien vite indispensables. Même si les préjugés des autres races les décrivent comme des roublards et des chapardeurs (des allégations supportées par de nombreux exemples), les halfelins ne sont pas forcément l’un ou l’autre. La plupart d’entre eux ont plutôt un caractère facile et sociable et, même si leur curiosité leur cause parfois des problèmes, ils font face à l’adversité avec une ténacité et un courage inversement proportionnels à leur petite taille. Le halfelin moyen est fier de sa capacité à ne pas se faire remarquer. C’est grâce à cette dernière que nombre d'entre eux sont d’excellents voleurs ou escrocs. Bien conscients de l’image que cela donne de leur race, ils font en général tout leur possible pour se montrer honnêtes et amicaux avec les races plus grandes. Ils s’entendent assez bien avec les gnomes, même si beaucoup de halfelins savent rester méfiants envers ces créatures excentriques. De manière générale, les humains et les halfelins coexistent en bonne entente mais, comme certaines nations humaines du Sud les voient surtout comme de bons esclaves, les halfelins restent prudents dans leurs relations avec eux.<br /><br />

Les halfelins se montrent loyaux envers leurs amis et leur famille, mais ils ont dû se résoudre à accepter le fait que, parfois, il est nécessaire de chaparder pour survivre. La majorité des halfelins sont donc d’un alignement neutre.<br /><br />

La chance innée des halfelins et leur goût immodéré des voyages en font des aventuriers idéaux. Certains s’allient d’ailleurs avec des aventuriers halfelins juste dans l’espoir que leur mystérieuse bonne fortune soit contagieuse.</p>
</div></div>
  <div class="flexcontainer woodenFrame" style="position: relative;overflow:hidden;max-height:80px;">
    <div class="floatleft wide_messagebox" style="z-index:9;">
      <h6>
        Échantillons d'Avatars
      </h6>
    </div>
    <div class="flexcontainer wrap flexbox floating-even" id="avatarList">
      <?php
        $avatars = \App\Avatar::where([
        ['type', '=', 'hal'],
        ['taken', '=', 0]
        ])->get();

        $i = 0;
        foreach ($avatars as $avatar) {
            echo '<img src="./img/avatars/' . $avatar->url . '.jpg" class="smallimages" />';
          if (++$i > 12) break;
        }
      ?>
    </div>
  </div>
</span>

<span id="GNO">
  <div class="woodenFrame">
    <div class="flexcontainer">
      <div class="textbox centeredtext">
        <div class="infotextbox itbleft" style="height:91%;">
          <h3>Classes:</h3><p>Ensorceleur, Barde, Shaman, Roublard, Assassin, Druide, Magicien</p><br />
          <h3>Compétences:</h3>
          <p><span class="tt" id="appre"></span></p><p><span class="tt" id="obses"></span></p><p><span class="tt" id="vis_semi"></span></p><p><span class="tt" id="res_illu"></span></p><p><span class="tt" id="hai_verd"></span></p>
        </div>
        <div class="infotextbox itbright" style="height:91%;">
          <p>Taille moyenne:</p> <h5 class="floating">0.85m</h5><p>Vie de base:</p><h5 class="floating">150 <span class="tt" id="hp"></span></h5><p>Mana de base:</p> <h5 class="floating">250 <span class="tt" id="mana"></span></h5><p>Points d'Action:</p> <h5 class="floating">10 <span class="tt" id="ap"></span></h5><p>Points de Mouv.:</p> <h5 class="floating">7 <p> </p> <span class="tt" id="mp"></span></h5><p>Faveurs Divines:</p> <h5 class="floating">15 <span class="tt" id="df"></span></h5>
        </div>
        <div class="flexbox floating-even">
          <h2 style="margin-top: -16px;">Gnome</h2>
        </div>
        <div class="flexbox floating-even">
          <span style="position:relative;"><img src="./img/illu/race/gnomerace_square.png" class="borderImg"><img src='./img/icons/races/gno.png' class='floatright borderImg' style="z-index:99;"></span>
        </div>
        <div class="flexcontainer">
          <div class="flexbox">
            <p><span class="tt" id="endu"></span> +2</p><p><span class="tt" id="inte"></span> +2</p><p><span class="tt" id="perc"></span> +1</p><p><span class="tt" id="volo"></span> +2</p><p><span class="tt" id="chrm"></span> +1</p>
          </div><div class="flexbox">
            <p><span class="tt" id="forc"></span> -3</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flexcontainer">
    <div class="justify flexbox textbox"><p>L’histoire des gnomes commence dans le mystérieux royaume des créatures féeriques, un endroit aux couleurs vives et aux étendues naturelles sauvages. Un bastion où les mortels ne peuvent pénétrer. Alors que les Elfes sont vaguement liés à ce royaume spirituel, les gnomes sont originaires de ce dernier. Pour de sombres raisons (cf. “Histoire du Royaume Féérique”, vol.3), les anciens gnomes ont dû fuir ce royaume il y a bien longtemps et sont venus se réfugier en notre monde. Malgré cet exode, les gnomes n’ont jamais complètement renoncé à leurs racines féeriques et ne se sont jamais entièrement adaptés à la société des mortels. C’est sans doute pour cela qu’aux yeux des autres races, ils restent des étrangers incompréhensibles.<br /><br />

Mus par leur héritage, de nombreux gnomes aiment les endroits sauvages où divers esprits se rassemblent. Les cercles de pierre, cairns et maisons de fées de notre plan les attirent, car ils émanent la même vibration d'énergie magique qu’eux-mêmes. Cependant, de plus en plus de gnomes quittent ces lieux pour les villes, où leur curiosité innée et leur amour de la création les incitent à s’intéresser au commerce, à l’artisanat et aux ateliers. Ils peuvent ainsi y étudier et promouvoir leurs dernières découvertes. Ces gnomes-là possèdent généralement des traits raciaux bien différents de ceux qui ont été élevés au milieu des rochers et des arbres.<br /><br />

Ils figurent parmi les races de base les plus petites: ils ne font généralement pas plus d’un mètre de hauteur. Leur couleur de peau varie du brun terreux au rose, apparemment sans tenir compte des liens familiaux. Les gnomes possèdent des muscles faciaux très élastiques et certains d’entre eux ont des bouches et des yeux extrêmement grands, leur donnant parfois une apparence effrayante ou étonnante. Les gnomes aiment se démarquer, ce qui explique l’utilisation d’accessoires esthétiques des plus excentriques. Leur physique s’adapte souvent à leur environnement de provenance, un gnome des profondeurs aura par exemple une peau de pierre, ce qui en fait une race à part.<br /><br />

Les gnomes sont excentriques: commettre des bêtises fait partie de leur mode de vie. Il n'est pas rare de les voir utiliser la dérision pour déclencher l’hilarité et désarçonner leurs adversaires.<br /><br />

À l’inverse des autres races, les gnomes ne s’organisent généralement pas en structures sociales classiques. Ces créatures fondamentalement fantasques voyagent souvent seules ou avec des compagnons de passage et cherchent sans cesse à vivre de nouvelles expériences, toujours plus excitantes. Les relations qu’ils forment ne durent que très rarement, que ce soit entre gnomes ou avec des individus d’une autre race. Les gnomes éprouvent quelques difficultés à établir des relations avec les autres races, à la fois sur le plan émotionnel et sur le plan physique. L’humour gnome est spécial et semble souvent méchant ou dénué de sens aux autres races. De leur côté, les gnomes ont tendance à voir les individus des races plus grandes comme des géants stupides et lents. Ils s’entendent assez bien avec les halfelins et les humains mais adorent jouer des tours aux Hobgobelins qui, selon eux, ont vraiment besoin de se dérider un peu.<br /><br />

C’est avec une grande passion, voire avec une grande dévotion, qu’ils s’adonnent à un artisanat, à une profession ou encore à une collection. Les gnomes adorent la magie et la musique, mais aussi les mécanismes complexes et le fait de créer des choses de leurs propres mains. Chaque gnome, quelle que soit sa passion, s’y investit corps et âme. Un gnome obsédé et absorbé par un sujet parvient rarement à penser à autre chose et se donnera tous les moyens nécessaires pour devenir un maître en son domaine de prédilection. Selon les gnomes, l’action vaut toujours mieux que l’inaction. La plupart d’entre eux emportent plusieurs longs projets inachevés ou un objet divertissant au cours de chacun de leurs voyages, histoire de ne pas s’ennuyer pendant les moments creux.<br /><br />

Les gnomes sont des plaisantins impulsifs dont il est parfois difficile de comprendre les buts ou les méthodes, mais ils ont généralement bon cœur. Ils laissent souvent éclater leurs émotions de manière vive, mais ils retrouvent facilement leur calme, surtout après un moment de solitude au sein de la nature.<br /><br />

Leur passion pour les voyages pousse naturellement les gnomes à partir à l’aventure, ce qu’ils font généralement pour vivre de nouvelles expériences: rien n’est plus excitant que les innombrables dangers auxquels les aventuriers doivent faire face. Les gnomes compensent leur faiblesse physique par un penchant marqué pour la magie des ensorceleurs ou l’art des bardes.
</p>
</div></div>
  <div class="flexcontainer woodenFrame" style="position: relative;overflow:hidden;max-height:80px;">
    <div class="floatleft wide_messagebox" style="z-index:9;">
      <h6>
        Échantillons d'Avatars
      </h6>
    </div>
    <div class="flexcontainer wrap flexbox floating-even" id="avatarList">
      <?php
        $avatars = \App\Avatar::where([
        ['type', '=', 'gno'],
        ['taken', '=', 0]
        ])->get();

        $i = 0;
        foreach ($avatars as $avatar) {
            echo '<img src="./img/avatars/' . $avatar->url . '.jpg" class="smallimages" />';
          if (++$i > 12) break;
        }
      ?>
    </div>
  </div>
</span>

<span id="DRO">
  <div class="woodenFrame">
    <div class="flexcontainer">
      <div class="textbox centeredtext">
        <div class="infotextbox itbleft" style="height:91%;">
          <h3>Classes:</h3><p>Vagabond, Guerrier, Roublard, Assassin, Clerc, Barde, Moine, Druide, Shaman, Ensorceleur, Magicien</p><br />
          <h3>Compétences:</h3>
          <p><span class="tt" id="vis_noct"></span></p><p><span class="tt" id="res_magi"></span></p><p><span class="tt" id="discr"></span></p><p><span class="tt" id="empoi"></span></p><p><span class="tt" id="eblou"></span></p>
        </div>
        <div class="infotextbox itbright" style="height:91%;">
          <p>Taille moyenne:</p> <h5 class="floating">1m75</h5><p>Vie de base:</p><h5 class="floating">175 <span class="tt" id="hp"></span></h5><p>Mana de base:</p> <h5 class="floating">225 <span class="tt" id="mana"></span></h5><p>Points d'Action:</p> <h5 class="floating">10 <span class="tt" id="ap"></span></h5><p>Points de Mouv.:</p> <h5 class="floating">8 <p> </p> <span class="tt" id="mp"></span></h5><p>Faveurs Divines:</p> <h5 class="floating">7 <span class="tt" id="df"></span></h5>
        </div>
        <div class="flexbox floating-even">
          <h2 style="margin-top: -16px;">Drow</h2>
        </div>
        <div class="flexbox floating-even">
          <span style="position:relative;"><img src="./img/illu/race/drowrace_square.png" class="borderImg"><img src='./img/icons/races/dro.png' class='floatright borderImg' style="z-index:99;"></span>
        </div>
        <div class="flexcontainer">
          <div class="flexbox">
            <p><span class="tt" id="dext"></span> +2</p><p><span class="tt" id="inte"></span> +2</p><p><span class="tt" id="vite"></span> +1</p><p><span class="tt" id="perc"></span> +1</p><p><span class="tt" id="chrm"></span> +2</p>
          </div><div class="flexbox">
            <p><span class="tt" id="forc"></span> -2</p><p><span class="tt" id="endu"></span> -3</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flexcontainer">
    <div class="justify flexbox textbox"><p>Cruels et malins, les drows sont le reflet opposé de la race des elfes. Certaines histoires racontent que, lorsque toutes les conditions sont réunies, un elfe particulièrement haineux peut se transformer en drow, mais pour cela il faut que l’individu concerné éprouve une haine authentique qui le consume. Aussi appelés elfes noirs, ils vivent dans les profondeurs de la terre, dans des cités raffinées bâties dans la roche. Les drows se manifestent rarement aux habitants de la surface : ils préfèrent rester connus comme des légendes urbaines tout en poursuivant leurs sinistres projets grâce à des intermédiaires et à des agents.<br /><br />

Les drows sont à peu près de taille humaine, mais partagent la même carrure fine et les mêmes traits que les Elfes, y compris leurs longues oreilles pointues. Leurs yeux n’ont que rarement des pupilles visibles et sont généralement complètement rouges ou blancs. La peau des drows peut aller du noir charbon au violet pâle. Ils ont souvent les cheveux blancs ou argentés, mais il n’est pas rare de trouver des drows aux cheveux noirs et autres variantes. Ils n’ont aucun amour pour d’autres personnes qu’eux-mêmes, et sont doués pour manipuler les autres créatures. S’ils ne sont pas nés mauvais, leur culture et leur société sont profondément empreintes de malice. <br /><br />

Les drows vivent traditionnellement dans une société de classes matriarcale, mais on constate quelques variantes dans les communautés des tréfonds. Les galeries menant aux profondeurs des villes Drow partent principalement des failles des montagnes du Sud, entre Fyrma et les Terres Désolées, et plus on s'approche des tréfonds, de la roche-mère située au-dessus de la lave vivante, plus les conditions de vie deviennent drastiques. Les hommes endossent généralement un rôle martial et défendent leur espèce contre les menaces extérieures, tandis que les femmes assument des positions d’autorité et de commandement. Le fait qu’un drow sur cent naît avec des capacités exceptionnelles et soit ainsi considéré comme noble, et que la majorité de ces drows spéciaux soient des femmes, vient renforcer les rôles de genre. Divers organes définissent la politique drow, chacun de ces derniers étant gouverné par une matriarche noble.<br /><br />

Les drows sont très motivés par leur propre intérêt et leur évolution sociale. Ainsi, leur société grouille d’intrigues et de complots politiques, le drow moyen luttant pour s’attirer les faveurs de la noblesse, et la noblesse s’élevant au pouvoir en recourant aux assassinats, à la séduction et à la trahison.<br /><br />

Les drows ont un sens profond de la supériorité raciale et répartissent les non-drows en deux groupes : les esclaves, et ceux qui ne le sont pas encore. Néanmoins, dans la pratique, les races qui partagent des inclinations similaires (comme les hobgobelins et les reptiliens des terres du Sud) et celles qui se soumettent volontairement peuvent être traitées comme des races de serviteurs, et se voir accorder une certaine confiance et une position modeste dans la société drow. D’autres, comme les nains, gnomes et halfelins, ne sont bons que pour le fouet. Les drows manipulateurs prennent un malin plaisir à exploiter le caractère faible des humains. La haine que les drows vouent aux elfes les isole des autres races, et ils ne souhaitent que la ruine de tout ce qui concerne leurs cousins de la surface.<br /><br />

Les drows placent le pouvoir et la survie au premier plan, et n’ont aucun problème à assumer les choix odieux qu’ils peuvent être amenés à faire au nom de ces impératifs. Après tout, ils ne se contentent pas de survivre à l’adversité, puisqu’ils peuvent la vaincre. Ils n’ont que faire de la compassion et se montrent impitoyables avec leurs ennemis, qu’ils soient anciens ou contemporains. Les drows conservent certaines caractéristiques elfiques, comme le fait d’être enclins à éprouver de fortes passions, mais ils les canalisent à des fins négatives comme la haine, la vengeance, la soif de pouvoir et la jouissance charnelle dominatrice, voire sadique.<br /><br />

Esclavagistes et conquérants, les drows cherchent à étendre leur territoire et beaucoup aiment à raviver de vieilles querelles entre les nations concernant des terres désolées dont l’appartenance est disputée. Les hommes drows privilégient les classes spécialisées dans les pratiques martiales ou la discrétion. Les femmes drows choisissent généralement des classes leur permettant de commander d’autres êtres, comme barde ou nécromant, et les pervertissent à leurs fins propres. Les deux genres ont un talent inné pour l’art de la magie, et peuvent devenir des magiciens ou des ensorceleurs. Les drows font des paladins noirs parfaits, mais on décourage souvent les hommes de s’engager dans cette voie. La noblesse féminine n’apprécie guère l’idée que des hommes à la volonté marquée se laissent aller vers plus d’indépendance, et entretiennent une relation directe avec un Prétendant ou autre divinité.
</p>
</div></div>
  <div class="flexcontainer woodenFrame" style="position: relative;overflow:hidden;max-height:80px;">
    <div class="floatleft wide_messagebox" style="z-index:9;">
      <h6>
        Échantillons d'Avatars
      </h6>
    </div>
    <div class="flexcontainer wrap flexbox floating-even" id="avatarList">
      <?php
        $avatars = \App\Avatar::where([
        ['type', '=', 'dro'],
        ['taken', '=', 0]
        ])->get();

        $i = 0;
        foreach ($avatars as $avatar) {
            echo '<img src="./img/avatars/' . $avatar->url . '.jpg" class="smallimages" />';
          if (++$i > 12) break;
        }
      ?>
    </div>
  </div>
</span>

<span id="GOB">
  <div class="woodenFrame">
    <div class="flexcontainer">
      <div class="textbox centeredtext">
        <div class="infotextbox itbleft" style="height:91%;">
          <h3>Classes:</h3><p>Vagabond, Guerrier, Barbare, Roublard, Assassin, Shaman, Ensorceleur</p><br />
          <h3>Compétences:</h3>
          <p><span class="tt" id="gobel"></span></p><p><span class="tt" id="discr"></span></p><p><span class="tt" id="artil"></span></p><p><span class="tt" id="caval"></span></p>
        </div>
        <div class="infotextbox itbright" style="height:91%;">
          <p>Taille moyenne:</p> <h5 class="floating">0.9m</h5><p>Vie de base:</p><h5 class="floating">175 <span class="tt" id="hp"></span></h5><p>Mana de base:</p> <h5 class="floating">100 <span class="tt" id="mana"></span></h5><p>Points d'Action:</p> <h5 class="floating">13 <span class="tt" id="ap"></span></h5><p>Régén. PA: x2</p><p>Points de Mouv.:</p> <h5 class="floating">10 <span class="tt" id="mp"></span></h5><p>Faveurs Divines:</p> <h5 class="floating">8 <span class="tt" id="df"></span></h5>
        </div>
        <div class="flexbox floating-even">
          <h2 style="margin-top: -16px;">Gobelin</h2>
        </div>
        <div class="flexbox floating-even">
          <span style="position:relative;"><img src="./img/illu/race/gobrace_square.png" class="borderImg"><img src='./img/icons/races/gob.png' class='floatright borderImg' style="z-index:99;"></span>
        </div>
        <div class="flexcontainer">
          <div class="flexbox">
            <p><span class="tt" id="dext"></span> +4</p><p><span class="tt" id="vite"></span> +2</p><p><span class="tt" id="perc"></span> +3</p>
          </div><div class="flexbox">
            <p><span class="tt" id="forc"></span> -3</p><p><span class="tt" id="inte"></span> -2</p><p><span class="tt" id="chrm"></span> -4</p>
          </div>
        </div>
        <div class="flexcontainer"><img src="./img/misc/separator/clt_spr.png" /></div>
      </div>
    </div>
  </div>
  <div class="flexcontainer">
    <div class="justify flexbox textbox"><p>Les gobelins sont une race de créatures aussi petites que des enfants, d'affreux petits humanoïdes mesurant à peine plus de 90 centimètres, au corps décharné, surmonté d’une tête démesurée généralement chauve, avec de grandes oreilles et des yeux perçants. Leur couleur de peau varie en fonction de leur environnement; les couleurs courantes incluent les tons verts, gris et marrons, mais on trouve des gobelins à la peau noire, voire même à la peau pâle. Leur bouche immense aux dents pointues sert bien leurs appétits voraces. Ils sont d’une nature si destructrice qu’ils sont méprisés par le reste des habitants de Telendÿr. Lâches et faibles, ils sont souvent manipulés ou asservis par les êtres plus puissants ayant besoin de fantassins dévastateurs, mais facilement remplaçables. Les gobelins comptant sur leur propre intelligence pour survivre trouvent abri aux frontières de la société et se nourrissent des déchets et des membres les plus faibles des peuples civilisés. La plupart des autres races les voient comme de virulents parasites impossibles à exterminer. Les gobelins peuvent manger presque n’importe quoi, mais préfèrent la viande et considèrent la chair humaine, gnome et elfique comme un met délicieux et difficile à obtenir. S’ils craignent les races plus grandes qu’eux, leur mémoire courte et leurs appétits insatiables les poussent régulièrement à entrer en guerre ou à lancer des attaques contre elles, pour satisfaire leurs besoins pernicieux et remplir leur garde-manger.<br /><br />

Violents, mais féconds, les gobelins vivent dans des structures tribales primitives soumises à de constants changements de pouvoir. Rarement capables de subvenir à leurs propres besoins par l’agriculture ou la chasse et la cueillette, les tribus gobelines vivent là où la nourriture abonde, ou près des endroits où elles peuvent la voler. Étant donné qu’ils sont incapables de construire des fortifications dignes de ce nom et ont été rejetés de la plupart des lieux facilement accessibles, les gobelins vivent généralement dans des endroits reculés et désagréables. Leurs pauvres talents pour l’architecture et la planification les forcent à s’abriter dans des grottes sommaires, des villages délabrés et des structures abandonnées. Certains sont doués avec les outils, ou pour l’agriculture, et les rares objets d'une quelconque valeur qu’ils possèdent sont généralement des instruments dont se sont débarrassés des humains ou d’autres races civilisées.<br /><br />

Du fait de leur piètre faculté d’anticipation, les petites tribus sont dominées par les guerriers les plus forts. Même les chefs gobelins les plus solides savent que leur survie dépend des attaques qu’ils lancent régulièrement pour sécuriser les sources de nourriture, et tuer les jeunes membres les plus agressifs de la tribu. Les gobelins hommes et femmes sont aussi laids et vicieux les uns que les autres, et il existe peu de femmes gobelin étant donné les affres que celles-ci peuvent subir de la part de leurs camarades. De plus, l’accouchement est particulièrement violent, un ou plusieurs bébés gobelins de la portée tuant quasi-systématiquement la mère qui l’a porté.<br /><br />

Les bébés gobelins sont pratiquement autonomes peu de temps après leur naissance, et ces enfants sont presque traités comme des animaux de compagnie. Beaucoup de tribus élèvent collectivement leurs enfants dans des cages ou des enclos qui permettent aux adultes de les ignorer et ne pas risquer de se faire arracher l'oeil par surprise. La mortalité est élevée chez les jeunes gobelins, et lorsque les adultes ne leur donnent pas à manger ou lorsque la nourriture vient à manquer, les jeunes apprennent très tôt que le cannibalisme est parfois le meilleur moyen de survivre au sein des tribus gobelines.<br /><br />

Les gobelins ne voient généralement les autres êtres que comme des mets succulents, ce qui fait d’eux de piètres partenaires pour la plupart des races civilisées. Les gobelins survivent souvent aux frontières de la société humaine : ils chassent les faibles ou les voyageurs égarés et attaquent parfois les petits villages pour satisfaire leurs appétits voraces. Ils ressentent une hostilité particulière envers les gnomes et célèbrent la capture ou le massacre de ces créatures en festoyant. De la plupart des races de base, les hobgobelins sont les plus tolérants envers les gobelins, car ils partagent avec eux une ascendance commune et font face aux mêmes problèmes d’intolérance. Mais, le plus souvent, les gobelins n’ont pas conscience de la sympathie que leur témoignent les hobgobelins et les évitent parce qu’ils sont plus grands, plus méchants et moins goûteux que les autres humanoïdes.<br /><br />

Les aventuriers gobelins sont généralement curieux et enclins à explorer le monde, mais ils se font souvent tuer à cause de leurs propres méfaits et de leur stupidité, ou massacrer pour leurs actes de destruction aléatoires. Du fait de leur nature, il leur est presque impossible d’interagir avec les races civilisées : ils partent donc souvent à l’aventure aux frontières de la civilisation ou dans les espaces sauvages. Les individus courageux qui survivent assez longtemps chevauchent souvent des chiens de guerre ou d’autres montures exotiques, et se concentrent sur l’archerie pour éviter les affrontements au contact avec des ennemis plus grands qu’eux. Les lanceurs de sorts gobelins préfèrent la magie de feu et les bombes à presque toute autre méthode pour semer le chaos.
</p>
</div></div>
  <div class="flexcontainer woodenFrame" style="position: relative;overflow:hidden;max-height:80px;">
    <div class="floatleft wide_messagebox" style="z-index:9;">
      <h6>
        Échantillons d'Avatars
      </h6>
    </div>
    <div class="flexcontainer wrap flexbox floating-even" id="avatarList">
      <?php
        $avatars = \App\Avatar::where([
        ['type', '=', 'gob'],
        ['taken', '=', 0]
        ])->get();

        $i = 0;
        foreach ($avatars as $avatar) {
            echo '<img src="./img/avatars/' . $avatar->url . '.jpg" class="smallimages" />';
          if (++$i > 12) break;
        }
      ?>
    </div>
  </div>
</span>

<span id="HOB">
  <div class="woodenFrame">
    <div class="flexcontainer">
      <div class="textbox centeredtext">
        <div class="infotextbox itbleft" style="height:91%;">
          <h3>Classes:</h3><p>Vagabond, Guerrier, Barbare, Moine, Shaman</p><br />
        <h3>Compétences:</h3>
        <p><span class="tt" id="intre"></span></p><p><span class="tt" id="gobel"></span></p><p><span class="tt" id="intim"></span></p>
        </div>
        <div class="infotextbox itbright" style="height:91%;">
          <p>Taille moyenne:</p> <h5 class="floating">1m55</h5><p>Vie de base:</p><h5 class="floating">250 <span class="tt" id="hp"></span></h5><p>Mana de base:</p> <h5 class="floating">125 <span class="tt" id="mana"></span></h5><p>Points d'Action:</p> <h5 class="floating">10 <span class="tt" id="ap"></span></h5><p>Points de Mouv.:</p> <h5 class="floating">7 <p> </p> <span class="tt" id="mp"></span></h5><p>Faveurs Divines:</p> <h5 class="floating">6 <span class="tt" id="df"></span></h5>
        </div>
        <div class="flexbox floating-even">
          <h2 style="margin-top: -16px;">Hobgobelin</h2>
        </div>
        <div class="flexbox floating-even">
          <span style="position:relative;"><img src="./img/illu/race/hobrace_square.png" class="borderImg"><img src='./img/icons/races/hob.png' class='floatright borderImg' style="z-index:99;"></span>
        </div>
        <div class="flexcontainer">
          <div class="flexbox">
            <p><span class="tt" id="dext"></span> +2</p><p><span class="tt" id="forc"></span> +4</p><p><span class="tt" id="endu"></span> +4</p><p><span class="tt" id="defe"></span> +2</p>
          </div><div class="flexbox">
            <p><span class="tt" id="sage"></span> -2</p><p><span class="tt" id="chrm"></span> -3</p><p><span class="tt" id="inte"></span> -1</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flexcontainer">
    <div class="justify flexbox textbox"><p>Guerriers féroces, les hobgobelins survivent grâce à la conquête. Ils doivent les matières premières qui alimentent leurs machines de guerre à leurs raids, et leur armement et leurs bâtiments au labeur d’esclaves se tuant au travail. Naturellement ambitieux et envieux, les hobgobelins cherchent à améliorer leur niveau de vie aux dépens de leurs semblables, mais en combat, ils mettent leurs petits différends de côté et se battent en suivant une discipline qui égale celle des meilleurs soldats des autres races. Ils n’éprouvent guère d’affection les uns pour les autres et ne se font pas confiance, surtout entre différents clans. La vie de ces brutes se résume à servir leurs supérieurs, à dominer ceux qui leur sont inférieurs et à saisir les rares opportunités de gloire et de montée en grade.<br /><br />

Robustes et musclés, les hobgobelins sont un peu plus petits que les humains moyens, et leurs longs bras, leur torse bombé et leurs jambes relativement courtes leur donnent presque une carrure de primate. Les hobgobelins ont une peau blanche, marron ou d'un gris-vert maladif. Leur taille et leur carrure mises à part, les hobgobelins ressemblent à leurs cousins les gobelins.<br /><br />

Ils vivent dans des communautés tyranniques, chacune étant sous l’autorité absolue d’un général hobgobelin. Chacun reçoit un entraînement militaire, et ceux qui excellent servent dans l’armée tandis que les autres endossent des rôles plus subalternes. Ceux qui ne sont pas jugés à la hauteur pour le service militaire n’ont guère de statut social, valant à peine plus que les esclaves les plus privilégiés. Le genre et la naissance ne sont pas un frein à l’avancement, qui est presque uniquement déterminé par le mérite personnel. Les hobgobelins évitent de trop s’attacher, même à leurs petits. L’accouplement n’est qu’une affaire d’intérêts et se limite presque toujours aux individus de même rang. Tout enfant qui en résulte est enlevé à sa mère et sevré de force au bout de trois semaines. Les petits deviennent très vite matures : il ne faut pas plus de 6 mois à la plupart d’entre eux pour apprendre à parler et à se débrouiller seul. L’enfance d’un hobgobelin dure à peine 5 ans, s’en suivra une période triste remplie d’entraînements brutaux aux arts de la guerre.<br /><br />

Les hobgobelins voient les autres races comme des outils, des instruments à asservir, à intimider et à mettre au travail. Sans esclaves, leur société s’effondrerait puisqu’elle dépend énormément du labeur volé. Un esclave blessé, malade ou rebelle est un outil cassé, un déchet inutile bon à jeter aux ordures. Il n’est pas étonnant que les communautés de hobgobelins ne comptent aucune autre race parmi leurs amis, et rares sont celles qui leur sont alliées. Ils vouent une hostilité toute particulière aux nains (lorsque ces derniers n’avaient pas encore disparus) et aux elfes, diablement difficiles à réduire en esclavage. Ces deux races mènent en effet une véritable vendetta contre les gobelinoïdes. Les halfelins et les gobelins font des esclaves particulièrement prisés: les premiers pour leur agilité et pour la facilité avec laquelle il est possible de leur briser la nuque; les seconds pour le talent avec lequel ils s’épanouissent dans les conditions les plus dures. Même si les hobgobelins n’ont guère d’affection pour les leurs, ils traitent généralement les esclaves gobelinoïdes mieux que les autres races. Il est même courant qu’une communauté gobeline s’assimile volontairement à une colonie hobgobeline, formant une caste spéciale, quelque part entre les esclaves et les citoyens.<br /><br />

Leur vie est très ordonnée et hiérarchique. S’ils ne sont pas fondamentalement mauvais, le traumatisme des entraînements brutaux et inhumains qui constituent leur enfance trop courte laissent la plupart des hobgobelins désabusés et pleins de haine. Ceux qui préservent un bon fond sont les moins nombreux et sont presque exclusivement des individus élevés dans d’autres cultures. Plus nombreux, mais tout de même rares, sont ceux qui ne respectent aucune loi ni dogme, la plupart étant souvent des exilés rejetés par les despotes de leur patrie.<br /><br />

La religion, comme la plupart des intérêts non-militaires, importe peu à la majorité des hobgobelins. La plupart font semblant d’honorer un ou plusieurs dieux par conformisme, et font parfois des offrandes pour s’attirer leurs faveurs ou repousser la mauvaise fortune, sans pour autant vouer de culte, ni même y croire réellement. Ceux qui ressentent une attirance religieuse plus marquée vénèrent souvent des divinités redoutables et tyranniques.<br /><br />

Les aventuriers hobgobelins sont généralement des solitaires iconoclastes qui s’irritent de la stricte hiérarchie de la vie militaire. Les autres ont fui ou ont été exilés après être tombés en disgrâce pour avoir fait preuve de faiblesse ou de lâcheté. Certains caressent le rêve de revenir un jour dans la famille, comblés des richesses et d'histoires de grands exploits qui feraient rougir leurs semblables. Quelques-uns servent des généraux prévoyants qui envoient les jeunes les plus prometteurs à travers le monde afin qu’ils reviennent un jour peut-être comme de valeureux héros de la cause hobgobeline. La plupart ont tendance à pratiquer des classes martiales, notamment de barbare, de guerrier ou de moine. Les arts de la magie n’inspirent aucune confiance à cette société et très rares sont ceux qui les pratiquent, à l’exception des alchimistes qui s’attirent au mieux des louanges ou une admiration réticente pour leurs talents pyrotechniques.
</p>
</div></div>
  <div class="flexcontainer woodenFrame" style="position: relative;overflow:hidden;max-height:80px;">
    <div class="floatleft wide_messagebox" style="z-index:9;">
      <h6>
        Échantillons d'Avatars
      </h6>
    </div>
    <div class="flexcontainer wrap flexbox floating-even" id="avatarList">
      <?php
        $avatars = \App\Avatar::where([
        ['type', '=', 'hob'],
        ['taken', '=', 0]
        ])->get();

        $i = 0;
        foreach ($avatars as $avatar) {
            echo '<img src="./img/avatars/' . $avatar->url . '.jpg" class="smallimages" />';
          if (++$i > 12) break;
        }
      ?>
    </div>
  </div>
</span>

<span id="DVA">
  <div class="woodenFrame">
    <div class="flexcontainer">
      <div class="textbox centeredtext">
        <div class="infotextbox itbleft" style="height:91%;">
          <h3>Classes:</h3><p>Guerrier, Paladin, Shaman, Ensorcelleur</p><br />
          <h3>Compétences:</h3>
          <p><span class="tt" id="vis_noct"></span></p><p><span class="tt" id="res_illu"></span></p><p><span class="tt" id="hai_verd"></span></p><p><span class="tt" id="eblou"></span></p><p><span class="tt" id="ais_roch"></span></p>
        </div>
        <div class="infotextbox itbright" style="height:91%;">
          <p>Taille moyenne:</p> <h5 class="floating">0.8m</h5><p>Vie de base:</p><h5 class="floating">275 <span class="tt" id="hp"></span></h5><p>Mana de base:</p> <h5 class="floating">150 <span class="tt" id="mana"></span></h5><p>Points d'Action:</p> <h5 class="floating">10 <span class="tt" id="ap"></span></h5><p>Points de Mouv.:</p> <h5 class="floating">7 <span class="tt" id="mp"></span></h5><p>Faveurs Divines:</p> <h5 class="floating">7 <span class="tt" id="df"></span></h5>
        </div>
        <div class="flexbox floating-even">
          <h2 style="margin-top: -16px;">Gnome des Profondeurs</h2>
        </div>
        <div class="flexbox floating-even">
          <span style="position:relative;"><img src="./img/illu/race/gnoprorace_square.png" class="borderImg"><img src='./img/icons/races/dva.png' class='floatright borderImg' style="z-index:99;"></span>
        </div>
        <div class="flexcontainer">
          <div class="flexbox">
            <p><span class="tt" id="forc"></span> +2</p><p><span class="tt" id="endu"></span> +4</p><p><span class="tt" id="defe"></span> +4</p>
          </div><div class="flexbox">
            <p><span class="tt" id="dext"></span> -3</p><p><span class="tt" id="chrm"></span> -4</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flexcontainer">
    <div class="justify flexbox textbox"><p>Dans les sombres entrailles de la terre, les “Dvarnenomm” - en langue des tréfonds - protègent leurs enclaves et leurs petites communautés des terreurs qui gisent dans les profondeurs oubliées. Créatures sérieuses à la peau de roche gris ardoise, ces gnomes sont très différents de leurs cousins de la surface: ils ont choisi de vivre dans les mystérieux bas-fonds du monde, et de protéger tant bien la surface des ignobles créatures qui partagent leurs grottes, leurs cryptes et leurs tunnels, que les profondeurs des intrus attirés par les minerais qui luisent au plus profond de la couche terrestre.<br /><br />

Bien que dotés de magie comme leurs cousins, ils sont bien plus robustes et sont passés maîtres dans l’art de la conjuration et des invocations minérales, au prix d’une maîtrise quasi-nulle des autres éléments. Il est très rare de trouver un Dvarnenomm ayant maîtrisé une magie élémentaire autre que celle de roche. Cependant, ce sont probablement les seuls êtres de ce monde a commander cet élément avec une telle aisance.<br /><br />

Les rares aventuriers ayant croisé des Dvarnenomm ont souvent attesté ne pas les avoir vus plus de quelques secondes. Aussitôt détectés, ils avaient - d’un simple mouvement - ouvert une galerie béante dans la roche, et s'étaient jetés dedans avant de la refermer prestement, comme s'ils tiraient derrière eux un simple tapis de Djinn rocailleux qui empêchait tout passage.<br /><br />

Curiosité parmi les curiosités, la peau de pierre des Dvarnenomm leur confère une classe d’armure naturelle. Ils sont aussi petits que leurs cousins de la surface, mais bien plus résistants, et savent montrer une force brute démesurée en comparaison.<br /><br />

À l’inverse des gnomes de la surface, ils s’organisent en petites communautés composées des rares races pacifiques vivant sous le manteau terrestre. Bien souvent, leur forteresse est organisée autours d’une salle centrale couronnée d’une voûte solide, et s’étend en galeries se déroulant en arcs-de-cercle autour de cet épicentre qui sert de référence culturelle et administrative. Les gnomes des profondeurs sont, par héritage, dévoués à la protection de la colonie grâce à leur résistance hors du commun et leur puissance physique. Ils connaissent des difficultés pour se faire comprendre, les rares fois où ils tentent d'interagir avec des  étrangers à la surface, car leur culture est bien plus franche, sans artifices et sans détours, que les cultures plus subtiles du monde du dessus. Les gnomes des profondeurs, radicalement différents de leurs cousins, sont des êtres dévoués avec un fort sens de l’honneur. Ils se montrent bien souvent émotionnellement détachés et très sérieux, même s’il leur arrive parfois de démontrer une pointe d’humour cynique et pince-sans-rire. Un Dvarnenomm rencontrant un gnome de la surface est une situation rare, mais on peut postuler qu’après un premier jugement, se soldant par une exécration de cet être “sans humour”, le gnome finirait par comprendre que derrière cette peau rocailleuse et ces yeux froids se cache la facétie de ses confrères, enterrée sous des siècles de combats souterrains et de vie rude à repousser gobelins, épieurs, nains trop avides et autres rampants des profondeurs.<br /><br />

Les Dvarnenomm restent des êtres libres, et si la défense de leur communauté est assurée et n’est pas confrontée à une menace imminente, ils peuvent par tradition entreprendre un voyage initiatique qui les formera à faire face à plus de diversité. Cependant, une minorité seulement s’aventure à la surface, du fait des nombreux dangers qui les y attendent et de l’ignorance des êtres “du dessus”. Il arrive également que des Dvarnenomm se bannissent eux-mêmes s’ils estiment avoir fait une faute impardonnable, comme abandonner leur communauté en période de grand péril, remettant leur destin à l’inconnu.
</p>
</div></div>
  <div class="flexcontainer woodenFrame" style="position: relative;overflow:hidden;max-height:80px;">
    <div class="floatleft wide_messagebox" style="z-index:9;">
      <h6>
        Échantillons d'Avatars
      </h6>
    </div>
    <div class="flexcontainer wrap flexbox floating-even" id="avatarList">
      <?php
        $avatars = \App\Avatar::where([
        ['type', '=', 'dva'],
        ['taken', '=', 0]
        ])->get();

        $i = 0;
        foreach ($avatars as $avatar) {
            echo '<img src="./img/avatars/' . $avatar->url . '.jpg" class="smallimages" />';
          if (++$i > 12) break;
        }
      ?>
    </div>
  </div>
</span>

<span id="CHA">
  <div class="woodenFrame">
    <div class="flexcontainer">
      <div class="textbox centeredtext">
        <div class="infotextbox itbleft" style="height:91%;">
          <h3>Classes:</h3><p>Ensorceleur, Roublard, Assassin, Druide, Magicien</p><br />
          <h3>Compétences:</h3>
          <p><span class="tt" id="empoi"></span></p><p><span class="tt" id="res_magi"></span></p><p><span class="tt" id="res_illu"></span></p><p><span class="tt" id="metam"></span></p><p><span class="tt" id="discr"></span></p>
        </div>
        <div class="infotextbox itbright" style="height:91%;">
          <p>Taille moyenne:</p> <h5 class="floating">1m75</h5><p>Vie de base:</p><h5 class="floating">150 <span class="tt" id="hp"></span></h5><p>Mana de base:</p> <h5 class="floating">275 <span class="tt" id="mana"></span></h5><p>Points d'Action:</p> <h5 class="floating">10 <span class="tt" id="ap"></span></h5><p>Points de Mouv.:</p> <h5 class="floating">7 <span class="tt" id="mp"></span></h5><p>Faveurs Divines:</p> <h5 class="floating">11 <span class="tt" id="df"></span></h5>
        </div>
        <div class="flexbox floating-even">
          <h2 style="margin-top: -16px;">Changelin</h2>
        </div>
        <div class="flexbox floating-even">
          <span style="position:relative;"><img src="./img/illu/race/charace_square.png" class="borderImg"><img src='./img/icons/races/cha.png' class='floatright borderImg' style="z-index:99;"></span>
        </div>
        <div class="flexcontainer">
          <div class="flexbox">
            <p><span class="tt" id="inte"></span> +3</p><p><span class="tt" id="volo"></span> +2</p><p><span class="tt" id="chrm"></span> +3</p><p><span class="tt" id="perc"></span> +2</p>
          </div><div class="flexbox">
            <p><span class="tt" id="forc"></span> -2</p><p><span class="tt" id="endu"></span> -2</p><p><span class="tt" id="chan"></span> -1</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flexcontainer">
    <div class="justify flexbox textbox"><p>Les changelins sont le fruit des amours des guenaudes et de leurs amants, ces derniers contraints par la menace, par la magie ou par la folie. Abandonnées sur le seuil de potentiels parents de substitution, elles sont élevées par des étrangers. Généralement grandes et minces, les cheveux sombres, les séduisantes changelins ressemblent davantage à la race de leur père. Elles sont toujours de sexe féminin et leurs yeux vairons et leur peau anormalement pâle trahissent leur véritable héritage. À la puberté, elles perçoivent « l’appel », une voix spirituelle et hypnotique les enjoignant à voyager et à découvrir leurs véritables origines. Celles qui ignorent cet appel choisissent leur propre destin ; celles qui y répondent découvrent leur mère et peuvent atteindre une grande puissance en se transformant elles-mêmes en guenaudes, de puissantes sorcières spécialisées dans l’art de la tromperie.<br /><br />

Jeunes et belles femmes à l’apparence irrésistible, leur peau laiteuse et leurs yeux de couleurs différentes sont le seul signe de leur dérangeante lignée directe avec les descendantes d’Alena, la première disciple d’Alaroth.<br /><br />

Disséminées de par le monde depuis la dispersion de cet ordre, elles ne sont pas endémiques d’une région en particulier. On en trouve bien peu dans les régions du sud, à cause de la chasse aux guenaudes qui s’y déroula pendant quatre siècles et se termina en l’an 867, mais par la force des choses, certaines changelins sont parvenues à y retourner sous couvert d’une fausse identité et de magie illusoire changeant leur apparence.<br /><br />

Étant donné la sombre nature de leur héritage, beaucoup d’entre elles ont été persécutées à travers les âges, bien que les âmes charitables continuent de recueillir les pauvres enfants abandonnés à la naissance. Objectivement, un changelin peut aussi bien finir par sauver son village tout entier ou accomplir de hauts faits, que retomber dans la soif de pouvoir et de connaissance propre à son sang. Elles naissent aussi pures d’esprit qu’un enfant humain, maist il n’est pas rare de les voir se tourner vers un bien sombre destin . Non pas à cause de leur lignée, mais bien plus par les moqueries, rejets, et persécutions de la part de leurs semblables.<br /><br />

Les changelins font d’excellentes compagnonnes de voyage, faisant preuve de personnalités aussi diverses qu’il est imaginable. Leurs pouvoirs de métamorphose et leur charme inné les rendent également fort appréciées dès qu’il s’agit d’accomplir un travail un peu plus subtil et intellectuel que de regarder Guertrude la barbare aligner des kobolds sur un champ de bataille.<br /><br />

Nombre de changelins partent à l'aventure après avoir reçu leur appel spirituel, à la recherche de leurs origines. Mais certaines d’entre elles refusent d’écouter l’appel, trop effrayées de se perdre dans la folie et les tentations maléfiques d'Alaroth, et partent à l’aventure pour leurs raisons propres.
</p>
</div></div>
  <div class="flexcontainer woodenFrame" style="position: relative;overflow:hidden;max-height:80px;">
    <div class="floatleft wide_messagebox" style="z-index:9;">
      <h6>
        Échantillons d'Avatars
      </h6>
    </div>
    <div class="flexcontainer wrap flexbox floating-even" id="avatarList">
      <?php
        $avatars = \App\Avatar::where([
        ['type', '=', 'cha'],
        ['taken', '=', 0]
        ])->get();

        $i = 0;
        foreach ($avatars as $avatar) {
            echo '<img src="./img/avatars/' . $avatar->url . '.jpg" class="smallimages" />';
          if (++$i > 12) break;
        }
      ?>
    </div>
  </div>
</span>

<span id="CAL">
  <div class="woodenFrame">
    <div class="flexcontainer">
      <div class="textbox centeredtext">
        <div class="infotextbox itbleft" style="height:91%;">
          <h3>Classes:</h3><p>Magicien, Roublard, Ensorceleur, Assassin, Clerc, Moine, Vagabond, Shaman</p><br />
          <h3>Compétences:</h3>
          <p><span class="tt" id="res_magi"></span></p><p><span class="tt" id="discr"></span></p><p><span class="tt" id="intre"></span></p><p><span class="tt" id="obses"></span></p>
        </div>
        <div class="infotextbox itbright" style="height:91%;">
          <p>Taille moyenne:</p> <h5 class="floating">1m50</h5><p>Vie de base:</p><h5 class="floating">175 <span class="tt" id="hp"></span></h5><p>Mana de base:</p> <h5 class="floating">250 <span class="tt" id="mana"></span></h5><p>Points d'Action:</p> <h5 class="floating">10 <span class="tt" id="ap"></span></h5><p>Points de Mouv.:</p> <h5 class="floating">7 <p> </p> <span class="tt" id="mp"></span></h5><p>Faveurs Divines:</p> <h5 class="floating">11 <span class="tt" id="df"></span></h5>
        </div>
        <div class="flexbox floating-even">
          <h2 style="margin-top: -16px;">Calandre</h2>
        </div>
        <div class="flexbox floating-even">
          <span style="position:relative;"><img src="./img/illu/race/calrace_square.png" class="borderImg"><img src='./img/icons/races/cal.png' class='floatright borderImg' style="z-index:99;"></span>
        </div>
        <div class="flexcontainer">
          <div class="flexbox">
            <p><span class="tt" id="dext"></span> +2</p><p><span class="tt" id="inte"></span> +3</p><p><span class="tt" id="ling"></span> +3</p><p><span class="tt" id="perc"></span> +2</p>
          </div><div class="flexbox">
            <p><span class="tt" id="forc"></span> -2</p><p><span class="tt" id="endu"></span> -2</p><p><span class="tt" id="defe"></span> -1</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flexcontainer">
    <div class="justify flexbox textbox"><p>Les calandres, similaires à des corneilles humanoïdes, sont connus pour être une race de charognards et d’infatigables voleurs. Ces aspects sont si ancrés dans la culture populaire qu’on oublie souvent de mentionner le don de ces derniers pour les études et la magie. Essentiellement motivés par la richesse et le succès, les calandres sont vaniteux et très sensibles aux flatteries. Rusés et hautement intelligents, ils cherchent toutes les occasions pour profiter de la situation, parfois aux dépens des autres. Ils peuvent se montrer très compétitifs, ce qui les rend parfois impulsifs et imprudents.<br /><br />

Alors que certains prétendent que leur comportement est inné, d’autres pensent que leur égocentrisme est culturel, qu’il s’agit d’une adaptation qu’ils ont développée et maîtrisée pour supporter des siècles d’oppression. Les calandres sont des survivants. Pour beaucoup, le vol et la ruse leur offrent l’opulence temporaire que les autres races tiennent pour acquis. Par le passé, les humains et les races puissantes comme les elfes traquaient ces êtres aviens pour en faire des esclaves et des serviteurs. Beaucoup survécurent comme charognards, en cherchant leur nourriture dans l’ombre des villes ou en vivotant comme chasseurs-cueilleurs dans la nature. Leurs descendants luttent désormais pour trouver leur place dans la société contemporaine, se battant contre les stéréotypes négatifs ou se résignant, malheureusement, à les accepter. La ruse et le maniement des grimoires et du poignard sont pour eux le seul moyen de s’en sortir dans un monde cruel, voire impitoyable.<br /><br />

Depuis un peu moins d’un siècle, certains d’entre eux sont parvenus à atteindre un plus haut statut social grâce à leurs recherches. En utilisant leur intellect pacifiquement afin de prouver leur valeur, ces rares individus ont offert à leur race une lueur d’espoir. Depuis lors, le nombre de magiciens et scientifiques calandres a augmenté drastiquement, au grand dam de nombre de savants d’autres races qui n’en veulent pas pour apprentis malgré leur talent inné.<br /><br />

Leurs bras comme leurs jambes, squelettiques bien que d’apparence plus humaine qu’avienne, se terminent par de puissantes serres: deux aux mains, trois aux pieds. Bien qu’ils soient incapables de voler, leur corps est couvert de plumes irisées - leur plumage est généralement noir, mais il présente souvent des reflets nacrés. Leur peau, leurs serres, leur bec et leurs yeux sont de la même couleur, et la plupart des membres des autres races ont beaucoup de mal à les différencier les uns des autres. Il arrive par conséquent que des calandres - souhaitant être plus facilement reconnaissables aux yeux des autres humanoïdes - décolorent certaines de leurs plumes ou ornent leur bec de teinture, de peinture ou toute autre décoration. S’ils font à peu près la même taille que les humains, ils sont menus et ont tendance à se tenir voûtés.<br /><br />

Ils ont des yeux légèrement enfoncés et situés de chaque côté de la tête, qui leur donnent une vision binoculaire et un champ de vision plus panoramique que celui des autres humanoïdes. Comme beaucoup d’aviens, ils ont les os creux et se reproduisent en pondant des oeufs.<br /><br />

Les calandres vivent entre eux dans des communautés très soudées. Dans les centres urbains, ils se regroupent généralement dans des bas-quartiers communautaires tandis que ceux qui vivent dans les zones rurales s’installent dans des villages isolés. Dans l’ensemble, ils restent discrets à propos de leur culture, mélange de traditions anciennes parsemées d’éléments culturels plus contemporains empruntés aux races des régions voisines. La récupération culturelle s’étend également au langage, et les dialectes régionaux des calandres sont ponctués de termes et d’expressions empruntés à d’autres langues. Ajoutez cela au caractère studieux de cette race, et vous saurez pourquoi ils ont un don pour les langues et en apprennent très vite de nouvelles. La plupart de leurs communautés ont tendance à suivre une structure tribale. Les lois restent assez libres et subjectives, et les membres du clan règlent les conflits par arbitrage public, et parfois par des combats. Si chacun est libre de s’exprimer au sein de sa société, dans la plupart des villages ils s’en remettent toujours à leurs révérés anciens pour leur sagesse et leurs conseils.<br /><br />

Peu de races tolèrent facilement les calandres. De toutes les races de base, seuls les humains les autorisent à vivre dans leurs villes en toute égalité. Lorsque cela arrive, ils forment systématiquement leurs propres ghettos, généralement dans les quartiers les plus pauvres. Car qu’importe leur tolérance, la plupart des humains entretiennent le moins de contacts possible avec les calandres. Ceux-ci se lient parfois d’amitié avec les halfelins et les gnomes, mais seulement quand ils partagent des intérêts mutuels. Les autres races partagent souvent une vision similaire à celle des humains en ce qui concerne ces derniers, mais elles les découragent plus activement de s’installer dans leurs royaumes.<br /><br />

Les calandres peuvent être inconstants à l’égard de leurs affiliations religieuses, renonçant rapidement à leurs traditions et croyances quand elles cessent de leur profiter concrètement. Beaucoup se tournent vers le polythéisme, choisissant les divinités qui répondent le mieux à leurs croyances du moment.<br /><br />

N’ayant pas grand-chose à perdre quand ils quittent leur foyer, beaucoup s’engagent dans une vie d’aventures en quête de célébrité, de fortune et de gloire. La croyance populaire calandre décrit la vie sur la route comme une série d’expériences et d’épreuves qui mènent à l’illumination.<br /><br />

Certains interprètent cette voie comme un chemin vers la puissance spirituelle, d'autres la considèrent comme un moyen de parfaire les arts du maniement du poignard et de la magie. Ces individus cherchent souvent à réussir en incarnant les qualités raciales des calandres et affichent fièrement leur héritage. Malgré leur fragilité d’avien, ils font d’excellents roublards et rôdeurs du fait de leurs réflexes rapides et de leur esprit encore plus vif, tandis que ceux qui entretiennent un lien étroit avec le monde spirituel deviennent souvent ensorceleurs, magiciens, prêtres ou oracles. Ceux qui sont formés à la pratique des arts martiaux s’emploient comme mercenaires et gardes du corps, afin de mettre leurs talents à profit. La facilité d’apprentissage des calandres et leur penchant pour l’art de la discrétion en font également une des races les plus à l’aise avec les techniques de magicien et ensorceleur furtifs.</p>
</div></div>
  <div class="flexcontainer woodenFrame" style="position: relative;overflow:hidden;max-height:80px;">
    <div class="floatleft wide_messagebox" style="z-index:9;">
      <h6>
        Échantillons d'Avatars
      </h6>
    </div>
    <div class="flexcontainer wrap flexbox floating-even" id="avatarList">
      <?php
        $avatars = \App\Avatar::where([
        ['type', '=', 'cal'],
        ['taken', '=', 0]
        ])->get();

        $i = 0;
        foreach ($avatars as $avatar) {
            echo '<img src="./img/avatars/' . $avatar->url . '.jpg" class="smallimages" />';
          if (++$i > 12) break;
        }
      ?>
    </div>
  </div>
</span>

<span id="VOL">
  <div class="woodenFrame">
    <div class="flexcontainer">
      <div class="textbox centeredtext">
        <div class="infotextbox itbleft" style="height:91%;">
          <h3>Classes:</h3><p>Barde, Roublard, Druide, Shaman, Moine, Clerc, Ensorceleur, Vagabond, Magicien</p><br />
        <h3>Compétences:</h3>
        <p><span class="tt" id="metam"></span></p><p><span class="tt" id="anthr"></span></p><p><span class="tt" id="discr"></span></p><p><span class="tt" id="equil"></span></p><p><span class="tt" id="res_illu"></span></p>
        </div>
        <div class="infotextbox itbright" style="height:91%;">
          <p>Taille moyenne:</p> <h5 class="floating">1m60</h5><p>Vie de base:</p><h5 class="floating">175 <span class="tt" id="hp"></span></h5><p>Mana de base:</p> <h5 class="floating">175 <span class="tt" id="mana"></span></h5><p>Points d'Action:</p> <h5 class="floating">10 <span class="tt" id="ap"></span></h5><p>Points de Mouv.:</p> <h5 class="floating">8 <span class="tt" id="mp"></span></h5><p>Faveurs Divines:</p> <h5 class="floating">10 <span class="tt" id="df"></span></h5>
        </div>
        <div class="flexbox floating-even">
          <h2 style="margin-top: -16px;">Volpe</h2>
        </div>
        <div class="flexbox floating-even">
          <span style="position:relative;"><img src="./img/illu/race/volrace_square.png" class="borderImg"><img src='./img/icons/races/vol.png' class='floatright borderImg' style="z-index:99;"></span>
        </div>
        <div class="flexcontainer">
          <div class="flexbox">
            <p><span class="tt" id="dext"></span> +2</p><p><span class="tt" id="inte"></span> +2</p><p><span class="tt" id="vite"></span> +1</p><p><span class="tt" id="chrm"></span> +3</p><p><span class="tt" id="perc"></span> +1</p>
          </div><div class="flexbox">
            <p><span class="tt" id="endu"></span> -2</p><p><span class="tt" id="forc"></span> -4</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flexcontainer">
    <div class="justify flexbox textbox"><p>Les volpes, ou hommes-renards, sont des métamorphes connus pour leur amour de l’espièglerie et de l’art. On les connaît généralement sous deux formes : celle d’un humain séduisant au corps mince et aux yeux saillants, et leur véritable forme, celle d’un renard anthropomorphe. Malgré leur irrésistible penchant pour les escroqueries, les volpes accordent une grande importance à la loyauté et sont des compagnons sincères. Ils adorent les arts, les énigmes et les histoires, s’organisent en clans ancestraux et puisent leur sagesse parmi les vivants et la force de la nature. Vifs d’esprit et agiles, ils font d’excellents bardes et roublards. Il n’est pas rare que l’un d’eux se lance dans la sorcellerie, tandis que les quelques rares nés avec une fourrure blanche et les yeux clairs deviennent généralement des magiciens dotés de dons divinatoires.<br /><br />

À l’ouest des continents principaux, on trouve une île vaste et chargée d’histoire appelée “Vulpaís”. C’est dans cette contrée qu’ont grandi et évolué les volpes, sans changer leurs frontières depuis des millénaires. Leurs villages sont principalement construits sur des paysages extrêmes, qu’il s’agisse de gorges dangereuses et tranchantes ou d’immenses forêts grouillantes de vie, et sont toujours un havre de paix au milieu du tumulte. Ils sont un exemple d’adaptation plus intense encore que les elfes, et leur nature espiègle fait souvent penser à des communautés d’enfants et d’adolescents libres comme le vent, choisissant d’ignorer les dangers qui les entourent. La réalité est bien différente. Les volpes étudient et assimilent leur environnement mieux que personne, et s’ils ont l’air insouciants c’est qu’ils savent pertinemment que tout est sous contrôle. Leurs bibliothèques sont les plus exhaustives du monde connu - un honneur que les calandres auraient sûrement raflé s’ils avaient une terre natale où entreposer leurs ouvrages - et sont gardées comme les joyaux d’une couronne.<br /><br />

Les volpes font des camarades amusants et guillerets, et sont particulièrement appréciés par les Halfelins et les gnomes pour l’humour particulier et communicatif qui unit les trois races. Le charisme et le savoir des hommes renards font des atouts indéniables pour un groupe d’aventuriers aux intérêts alignés. Mais si ces derniers entraient en dissonance, alors restez assuré qu’un volpe saura protéger son savoir des desseins questionnables de ses camarades les plus viciés.<br /><br />

On pourrait décrire la majorité des volpes avec ces termes: des yeux aux multiples couleurs fendus d’une pupille ovale, une fourrure soyeuse d’un orange sombre et une longue queue agrémentée de cercles plus clairs ( selon l’âge de l’individu, un cercle se formant à chaque année ). Certains chassent le volpe pour tenter de dérober leur queue, connue parmi les praticiens de la magie pour ses qualités supposément uniques.<br /><br />

Il arrive parfois de voir naître des albinos qui obtiennent un statut à part dans la société, à hauteur de moins d’un individu sur 20 000. Ces derniers resteront confinés dans des temples, de leur plus tendre enfance à leur mort, où ils joueront le rôle d’oracle pour toute la race.<br /><br />

Une seule chose règne dans les communautés de Vulpaís: l’ordre. Un ordre fondé sur le bon sens et la compréhension commune des choses de la nature, ainsi que la confiance quasi-sacrée que les Volpes entretiennent les uns pour les autres. Très peu de représentants de cette race auraient la volonté de faire du mal à un de leurs confrères, même au prix de leur propre vie.<br /><br />

Les volpes partant à l’aventure sont souvent motivés par leur soif de connaissance, et partent étayer le savoir de leur peuple dans un domaine en particulier. On les trouve souvent sur la route sous la forme de roublards, de bardes ou de farceurs, mais il arrive parfois d’en reconnaître un sous des traits humains, installé incognito à un point stratégique où il pourra influencer des personnes de pouvoir ou en apprendre plus sur le sujet qui l’intéresse.
</p>
</div>
</div>
  <div class="flexcontainer woodenFrame" style="position: relative;overflow:hidden;max-height:80px;">
    <div class="floatleft wide_messagebox" style="z-index:9;">
      <h6>
        Échantillons d'Avatars
      </h6>
    </div>
    <div class="flexcontainer wrap flexbox floating-even" id="avatarList">
      <?php
        $avatars = \App\Avatar::where([
        ['type', '=', 'vol'],
        ['taken', '=', 0]
        ])->get();

        $i = 0;
        foreach ($avatars as $avatar) {
            echo '<img src="./img/avatars/' . $avatar->url . '.jpg" class="smallimages" />';
          if (++$i > 12) break;
        }
      ?>
    </div>
  </div>
</span>