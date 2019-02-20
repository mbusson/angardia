/* ---------------- */
/* --- TOOLTIPS --- */
/* ---------------- */

// Tooltip definition
var ttList = {
/* ---------------- */
/* --- TALENTS ---- */
/* ---------------- */
  acrob: {
      name: "<span class='tttext'>Acrobatie</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Acrobatie</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Les détenteurs de ce talent bénéficient d'un bien meilleur équilibre et d'une aisance supérieure pour exécuter des performances acrobatiques.</div>",
      type: "talent"
  }, 
  adapt: { //class-related
      name: "<span class='tttext'>Adaptabilité</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Adaptabilité</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Applique un bonus à la totalité des jets de test que vous devez passer.<br /><br /><strong>Attention:</strong> Ce bonus ne s'applique pas sur les tests de combat.</div>",
      type: "talent"
  },
  agili: { //class-related
      name: "<span class='tttext'>Agilité</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Agilité</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Cette faculté applique un léger bonus à tous les tests de dextérité et de vitesse que son possesseur subit.</div>",
      type: "talent"
  },
  ais_roch: { //class-related
      name: "<span class='tttext'>Aisance&nbsp;de&nbsp;Terrain:&nbsp;Roche</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Aisance de Terrain: Roche</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Bénéficie d'une bonus dans toutes les statistiques (sauf la Linguistique) sur un terrain rocheux.</div>",
      type: "talent"
  }, 
  alert: { //class-related
      name: "<span class='tttext'>Alerte</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Alerte</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Détecte les pièges plus facilement.</div>",
      type: "talent"
  }, 
  ambid: {
      name: "<span class='tttext'>Ambidextre</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Ambidextre</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Avoir une arme (différente) dans chaque main augmente les dégâts finaux de chaque attaque directe.</div>",
      type: "talent"
  }, 
  ami_anim: {
      name: "<span class='tttext'>Ami&nbsp;des&nbsp;Animaux</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Ami des Animaux</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Possède une faculté innée à comprendre le comportement des animaux et à leur inspirer confiance. Dans certains cas, il est même possible de s'en faire des amis.</div>",
      type: "talent"
  }, 
  anthr: { //class-related
      name: "<span class='tttext'>Anthropomorphie</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Anthropomorphie</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Un anthropomorphe peut se transformer en humain une fois pas jour sans coût ni tests. Reprendre sa forme naturelle n’a pas de coût non plus.</div>",
      type: "talent"
  }, 
  appre: { //class-related
      name: "<span class='tttext'>Apprentissage</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Apprentissage</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Lorsque votre métier monte en niveau, vous gagnez un point de compétence lié à cette profession.</div>",
      type: "talent"
  },
  art_guer: { //class-related
      name: "<span class='tttext'>Art&nbsp;de&nbsp;la&nbsp;Guerre</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Art de la Guerre</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>A chaque montée de niveau, vous gagnez un point de force supplémentaire.</div>",
      type: "talent"
  }, 
  artil: { //class-related
      name: "<span class='tttext'>Artillier</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Artillier</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Seuls les artilliers ont la faculté de créer des bombes artisanales, ou de désamorcer des pièges explosifs non-magiques sans test.</div>",
      type: "talent"
  }, 
  arm_diss: { //class-related
      name: "<span class='tttext'>Arme&nbsp;Dissimulée</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Arme Dissimulée</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Lors d'une fouille, les porteurs de ce talent sont garantis de préserver au moins une petite arme sur eux. S'ils ne portent aucune petite arme, alors la fouille se déroule normalement.</div>",
      type: "talent"
  }, 
  athle: { //class-related
      name: "<span class='tttext'>Athlète</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Athlète</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Bénéficie d'un bonus passif à tous les tests de constitution.</div>",
      type: "talent"
  }, 
  balay: {
      name: "<span class='tttext'>Balayage</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Balayage</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Contre plusieurs ennemis, votre attaque de base a une chance de toucher deux cibles au lieu d'une.</div>",
      type: "talent"
  }, 
  bluff: {
      name: "<span class='tttext'>Bluff</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Bluff</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Mentir est une seconde nature, et les chances de réussite en tromperie sont plus élevées.</div>",
      type: "talent"
  }, 
  caval: { //class-related
    name: "<span class='tttext'>Cavalier</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Cavalier</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Monte naturellement des créatures chevauchables sans formation ni tests.</div>",
      type: "talent"
  }, 
  charg: { //class-related
    name: "<span class='tttext'>Charge</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Charge</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Au premier tour de combat, votre attaque de base touche tous les ennemis.</div>",
      type: "talent"
  }, 
  compe: { //class-related
    name: "<span class='tttext'>Compétent</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Compétent</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>A chaque montée de niveau multiple de 5, gagnez un point de compétence supplémentaire à distribuer.</div>",
    type: "talent"
  }, 
  conce: { //class-related
    name: "<span class='tttext'>Concentration</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Concentration</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Chaque coup reçu est sujet à une absorption de dommages de 25 à 75%.</div>",
    type: "talent"
  }, 
  con_chi: { //class-related
    name: "<span class='tttext'>Concentration&nbsp;de&nbsp;Chi</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Concentration de Chi</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Vous bénéficiez de 10% de dommages bonus au corps à corps.</div>",
    type: "talent"
  }, 
  diplo: {
    name: "<span class='tttext'>Diplomate</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Diplomate</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Brille en situation de crise sociale et sait calmer une chamaillerie.</div>",
    type: "talent"
  }, 
  discr: { //class-related
    name: "<span class='tttext'>Discrétion</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Discrétion</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Jouit d'un bonus considérable aux jets de discrétion.</div>",
    type: "talent"
  }, 
  diver: {
    name: "<span class='tttext'>Divertissant</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Divertissant</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Sait captiver les foules, ou divertir une cible par une performance.</div>",
    type: "talent"
  }, 
  eblou: { //class-related
    name: "<span class='tttext'>Ébloui</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Ébloui</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Une trop soudaine exposition à la lumière du jour aveugle le porteur de cette caractéristique,  et il bénéficie d'une moins bonne visibilité générale au soleil.</div>",
    type: "talent"
  }, 
  ele_feu: {
    name: "<span class='tttext'>Pyromancie</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Pyromancie</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Tous vos sorts de feu (y compris les sorts hybrides: feu/terre [magma], feu/air [déflagration],...) ignorent la résistance au feu de votre cible.</div>",
    type: "talent"
  },
  ele_air: {
    name: "<span class='tttext'>Aéromancie</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Aéromancie</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Tous vos sorts d'air (y compris les sorts hybrides: eau/air [sorts atmosphériques], air/acide [nuage toxique],...) ignorent la résistance à l'air de votre cible.</div>",
    type: "talent"
  },
  ele_eau: {
    name: "<span class='tttext'>Hydromancie</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Hydromancie</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Tous vos sorts d'eau (y compris les sorts hybrides: eau/air [sorts atmosphériques], eau/terre [plantes],...) ignorent la résistance à l'eau de votre cible.</div>",
    type: "talent"
  },
  ele_ter: {
    name: "<span class='tttext'>Sismomancie</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Sismomancie</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Tous vos sorts de Terre (y compris les sorts hybrides: feu/terre [magma], eau/terre [plantes],...) ignorent la résistance à la Terre de votre cible.</div>",
    type: "talent"
  },
  ele_aci: {
    name: "<span class='tttext'>Solutomancie</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Solutomancie</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Tous vos sorts d'acide et de poison (y compris les sorts hybrides: eau/acide [mixtures], feu/acide [déflagration],...) ignorent la résistance à l'acide et et aux poisons de votre cible.</div>",
    type: "talent"
  },
  empoi: { //class-related
    name: "<span class='tttext'>Empoisonneur</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Empoisonneur</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Gagne 10% de résistance aux poisons, et ne risque jamais de s'empoisonner par erreur.</div>",
    type: "talent"
  }, 
  equil: { //class-related
    name: "<span class='tttext'>Équilibré</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Équilibré</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Un personnage équilibré bénéficie d'un ample bonus aux jets d'acrobatie et d'escalade.</div>",
    type: "talent"
  }, 
  equit: {
    name: "<span class='tttext'>Équitation</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Équitation</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Faculté de monter à cheval et autres animaux sellés sans tests.</div>",
    type: "talent"
  }, 
  escal: {
    name: "<span class='tttext'>Escalade</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Escalade</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Agile comme un singe, les jets d'escalade bénéficient d'un large bonus.</div>",
    type: "talent"
  }, 
  escro: {
    name: "<span class='tttext'>Escroc</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Escroc</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Possède une excellente faculté  à arnaquer les crédules.</div>",
    type: "talent"
  }, 
  exere: { //class-related
    name: "<span class='tttext'>Exérèse</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Exérèse</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Un pratiquant de l'exérèse est capable d'extraire l'énergie magique (ou Mana) inutilisée d'un de ses alliés afin de l'ajouter à sa propre réserve de mana.</div>",
    type: "talent"
  }, 
  furti: {
    name: "<span class='tttext'>Furtif</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Furtif</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Sait se dissimuler dans son environnement.</div>",
    type: "talent"
  }, 
  gobel: { //class-related
    name: "<span class='tttext'>Gobelinoïde</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Gobelinoïde</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Suite à des siècles d'histoire tumultueuse, les Gobelinoïdes sont sujet à des malus généraux face à la plupart des races humanoïdes, mais bénéficient d'alliances et d'affinités avec les autres verdâtres (principalement les gobelinoïdes et reptiliens).</div>",
    type: "talent"
  }, 
  gueri: {
    name: "<span class='tttext'>Guérisseur</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Guérisseur</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Suite à un entraînement drastique aux arts de la magie régénératrice, un guérisseur gagne une efficacité accrue sur les sorts de guérison.</div>",
    type: "talent"
  }, 
  hai_verd: { //class-related
    name: "<span class='tttext'>Haine&nbsp;des&nbsp;Verdâtres</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Haine des Verdâtres</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Une haine ancestrale qui confère un bonus aux jets d’attaque (physique et magique) contre les reptiliens et gobelinoides.</div>",
    type: "talent"
  }, 
  initi: {
    name: "<span class='tttext'>Initié</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Initié</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>L'entraînement magique des initiés leur confère un savoir-faire poussé sur le lancer de sorts défensifs, accordant plus de protection.</div>",
    type: "talent"
  }, 
  incog: {
    name: "<span class='tttext'>Incognito</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Incognito</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Pratique l'art de se déguiser efficacement et endosser diverses personnalités.</div>",
    type: "talent"
  }, 
  insai: { //class-related
    name: "<span class='tttext'>Insaisissable</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Insaisissable</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Bénéficie d'un bonus de 15% à l'esquive.</div>",
    type: "talent"
  }, 
  insen: { //class-related
    name: "<span class='tttext'>Insensibilité</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Insensibilité</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Chaque gain de niveau vous confère un point de compétence en endurance.</div>",
    type: "talent"
  }, 
  ins_natu: { //class-related
    name: "<span class='tttext'>Instinct&nbsp;Naturel</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Instinct Naturel</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Ce talent confère un bonus aux tests de connaissance naturelle et de survie.</div>",
    type: "talent"
  }, 
  intim: {
    name: "<span class='tttext'>Intimidation</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Intimidation</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Peut influencer plus facilement le comportement des autres par intimidation.</div>",
    type: "talent"
  }, 
  intre: { //class-related
    name: "<span class='tttext'>Intrépide</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Intrépide</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Bénéficie d'un bonus considérable aux jets de sauvegarde contre la terreur.</div>",
    type: "talent"
  }, 
  intui: {
    name: "<span class='tttext'>Intuition</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Intuition</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Ce talent donne une chance supplémentaire de détecter les mensonges et mauvaises intentions.</div>",
    type: "talent"
  }, 
  mai_roub: { //class-related
    name: "<span class='tttext'>Maître&nbsp;Roublard</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Maître Roublard</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Réservé aux Roublards. Cette faculté confère un bonus de réussite conséquent aux jets de discretion.</div>",
    type: "talent"
  }, 
  medit: { //class-related
    name: "<span class='tttext'>Méditation</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Méditation</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Régénère 50% de PV en plus chaque jour.</div>",
    type: "talent"
  }, 
  metam: { //class-related
    name: "<span class='tttext'>Métamorphe</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Métamorphe</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Peut lancer une tentative de métamorphose au prix de faveurs divines.<hr /><strong>Animal (<50cm):</strong> 1FD. <strong>Humanoïde:</strong> 2FD. <strong>Gros animal (2m-3m):</strong> 3FD. <strong>Animal gigantesque (3-4m):</strong> 4FD.<br />Le cout en FD est doublé d’un test de réussite de 70%, 50%, 30% aux statuts Animal Gigantesque, Humain, Gros Animal.<br />La transformation dure un jour (24h), et est réversible. Les DF restent consommés en cas d’échec.</div>",
    type: "talent"
  }, 
  natat: {
    name: "<span class='tttext'>Natation</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Natation</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Sait nager avec aisance, même dans les eaux agitées.</div>",
    type: "talent"
  }, 
  obses: { //class-related
    name: "<span class='tttext'>Obsession</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Obsession</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>L'obsession se traduit par le gain d'un niveau de personnage tous les 3 niveaux de profession (dans une profession de votre choix).</div>",
    type: "talent"
  }, 
  oniro: {
    name: "<span class='tttext'>Oniromancie</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Oniromancie</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Art d'interpréter les rêves, et parfois même d'en tirer des prophéties.</div>",
    type: "talent"
  }, 
  pre_soin: {
    name: "<span class='tttext'>Premiers&nbsp;Soins</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Premiers Soins</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Sait se soigner des blessures mineures sans coût matériel ni mana. Chaque blessure physique (et non magique) reçue provoque une chance de guérison partielle.</div>",
    type: "talent"
  }, 
  pickp: {
    name: "<span class='tttext'>Pickpocket</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Pickpocket</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Grâce à des doigts agiles, les chances de réussite pour voler et dissimuler des objets sont au-dessus de la moyenne.</div>",
    type: "talent"
  }, 
  renvo: { //class-related
    name: "<span class='tttext'>Renvoi de Sort</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Renvoi de Sort</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Cette caractéristique accorde une faible chance de renvoyer un sort adverse.</div>",
    type: "talent"
  }, 
  res_illu: { //class-related
    name: "<span class='tttext'>Résistance&nbsp;aux&nbsp;Illusions</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Résistance aux Illusions</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Cette caractéristique produit instantanément un généreux bonus aux jets de sauvegarde face aux illusions.</div>",
    type: "talent"
  }, 
  res_magi: { //class-related
      name: "<span class='tttext'>Résistance&nbsp;à&nbsp;la&nbsp;Magie</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Résistance à la Magie</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>La résistance à la magie dote ses détenteurs d'un bonus aux jets de défense face à la Magie.</div>",
      type: "talent"
  }, 
  res_pois: { //class-related
      name: "<span class='tttext'>Accoutumance&nbsp;aux&nbsp;Poisons</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Accoutumance aux Poisons</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Dote son détenteur d'une forte résistance aux poisons.</div>",
      type: "talent"
  }, 
  resis: {
      name: "<span class='tttext'>Résistant</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Résistant</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Dote son détenteur d'une meilleure défense et endurance.</div>",
      type: "talent"
  }, 
  roi_evas: {
      name: "<span class='tttext'>Roi&nbsp;de&nbsp;l’évasion</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Roi de l’évasion</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Sait se défaire de ses entraves avec plus de facilités.</div>",
      type: "talent"
  }, 
  ruptu: { //class-related
      name: "<span class='tttext'>Rupture</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Rupture</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Vos attaques au Corps à Corps ont 20% de chances d’avoir des dégâts doublés.</div>",
      type: "talent"
  }, 
  sabot: {
    name: "<span class='tttext'>Saboteur</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Saboteur</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Peut désarmer des pièges simples et saboter des objets mécaniques.</div>",
      type: "talent"
  }, 
  san_pois: { //class-related
    name: "<span class='tttext'>Expérimentation</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Expérimentation</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Vous gagnez 10% additionnels de résistance aux poisons dans toutes les circonstances.</div>",
      type: "talent"
  }, 
  survi: {
    name: "<span class='tttext'>Survie</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Survie</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Détient des connaissances solides et utiles en milieu naturel.</div>",
      type: "talent"
  },
  thaum: {
    name: "<span class='tttext'>Thaumaturge</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Thaumaturge</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Un Thaumaturge sait, par sa connaissance du fonctionnement des poisons, causer de légers dommages additionnels sur les cibles empoisonnées.</div>",
      type: "talent"
  },  
  trapp: {
    name: "<span class='tttext'>Trappeur</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Trappeur</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Sait poser des pièges et traquer une cible bien mieux que le commun des mortels.</div>",
      type: "talent"
  }, 
  vigil: { //class-related
      name: "<span class='tttext'>Vigilant</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Vigilant</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Un personnage vigilant possède des chances modérées d’éviter un piège non détecté.</div>",
      type: "talent"
  }, 
  vis_noct: { //class-related
      name: "<span class='tttext'>Vision&nbsp;Nocturne</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Vision Nocturne</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Un personnage doté de vision nocturne voit dans les ténèbres comme en plein jour.</div>",
      type: "talent"
  }, 
  vis_semi: { //class-related
      name: "<span class='tttext'>Vision&nbsp;Semi-Nocturne</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Vision Semi-Nocturne</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Cette caractéristique confère une meilleure perception dans les ténèbres, mais discerner les environs nécessite un minimum de lumière.</div>",
      type: "talent"
  }, 
  voyag: {
      name: "<span class='tttext'>Voyageur</span><div class='ttbook'></div>",
      title: "<span class='tttext'>Voyageur</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Lorsque vous voyagez plus de 6 cases par jour, toute case de déplacement supplémentaire ne coûtera jamais plus que 1 <img src='/angardia/public/img/icons/stats/mp.png' width='16' height='16'/>.</div>",
      type: "talent"
  }, 
/* ------------------- */
/* --- PROFESSIONS --- */
/* ------------------- */
  ebeni: {
    name: "<span class='tttext'>Ébéniste</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Ébéniste</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Vous pouvez créer des objets en bois lors de vos visites à la scierie si vous possédez les matériaux.</div>",
    type: "job"
  },
  forge: {
    name: "<span class='tttext'>Forgeron</span><div class='ttbook'></div>",
    title: "<span class='tttext'>Forgeron</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Vous pouvez créer des objets en métal lors de vos visites à la forge si vous possédez les matériaux.</div>",
    type: "job"
  },

/* ------------------- */
/* ------ STATS ------ */
/* ------------------- */
  forc: {
    name: "<img src='/angardia/public/img/icons/stats/FOR.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/FOR.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Force</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'><img src='/angardia/public/img/illu/tooltip/FOR.jpg' style='height:78px; width:78px; float:left; box-shadow: 0 0 3px 0 black; margin-right:16px; margin-top: 8px;' class='borderImg' />La force détermine votre potentiel physique, votre puissance kinétique de frappe et de transport d'inventaire.<br /><br />Elle entre en jeu pour tous les calculs d'intensité physiologique, tant pour attaquer que pour soulever, transporter, détruire, maintenir en place, et toute autre action athlétique appelant l'énergie musculaire brute.</div>",
    type: "stat"
  },
  dext: {
    name: "<img src='/angardia/public/img/icons/stats/DEX.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/DEX.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Dextérité</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'><img src='/angardia/public/img/illu/tooltip/DEX.jpg' style='height:78px; width:78px; float:left; box-shadow: 0 0 3px 0 black; margin-right:16px; margin-top: 8px;' class='borderImg' />La dextérité détermine votre précision et vos réflexes, ainsi qu'une partie de votre équilibre. Elle régit vos réactions et votre coordination oculo-manuelle, et plus largement votre motricité.<br /><br />On l'utilise notamment pour éviter des attaques, tenter une prouesse athlétique, effectuer des tirs à distance, pratiquer un travail manuel, et toute autre tâche demandant un travail cognitif intense.</div>",
    type: "stat"
  },
  endu: {
    name: "<img src='/angardia/public/img/icons/stats/END.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/END.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Endurance</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'><img src='/angardia/public/img/illu/tooltip/END.jpg' style='height:78px; width:78px; float:left; box-shadow: 0 0 3px 0 black; margin-right:16px; margin-top: 8px;' class='borderImg' />L'endurance reflète votre potentiel physique et votre résistance.<br />Elle entre en jeu pour calculer les dégâts que vous subissez, votre résistance aux éléments et à la fatigue, vos chances de tomber malade, le taux de sommeil requis pour vous sentir reposé, et autres calculs liés à la vitalité et à la résistance.<br /><br />L'endurance régit, en somme, votre constitution. Presque tous les dégâts physiques que vous recevez passent par ce filtre.</div>",
    type: "stat"
  },
  defe: {
    name: "<img src='/angardia/public/img/icons/stats/DEF.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/DEF.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Défense</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'><img src='/angardia/public/img/illu/tooltip/DEF.jpg' style='height:78px; width:78px; float:left; box-shadow: 0 0 3px 0 black; margin-right:16px; margin-top: 8px;' class='borderImg' />Votre défense est souvent associée à l'endurance, car ce sont les deux facultés qui vous séparent bien souvent de la mort. A l'inverse de l'endurance, la défense n'est pas une statistique physique. Elle est liée à votre entraînement et vos réflexes de survie dans les situations de combat, ainsi qu'à votre savoir-faire en matière d'utilisation de votre armure.<br /><br />Alors que l'endurance sert à calculer votre résistance dans des situations plus générales, la défense est exclusivement dédiée aux dommages directement reçus (tant par le biais d'attaques physiques ou magiques que par des pièges), et pèse bien plus lourd dans le calcul de ces derniers.</div>",
    type: "stat"
  },
  inte: {
    name: "<img src='/angardia/public/img/icons/stats/INT.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/INT.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Intelligence</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'><img src='/angardia/public/img/illu/tooltip/INT.jpg' style='height:78px; width:78px; float:left; box-shadow: 0 0 3px 0 black; margin-right:16px; margin-top: 8px;' class='borderImg' />L'intelligence jauge les capacités cérébrales d'un personnage. Elle détermine l'apprentissage, la logique et la capacité à raisonner en-dehors de la matrice, ainsi que vos facultés à utiliser la magie.<br /><br />Quelques exemple de niveau d'intelligence:<br />[0 = Comateux]<br />[3 = Capable de comprendre la parole]<br />[7 = Peu intelligent]<br />[10 = Q.I. moyen]<br />[14 = Intelligent]<br />[25 = Surdoué]</div>",
    type: "stat"
  },
  vite: {
    name: "<img src='/angardia/public/img/icons/stats/VIT.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/VIT.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Vitesse</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>La vitesse détermine purement et simplement votre rapidité physique. Elle est utile en tant que modificateur, et est souvent couplée à la dextérité. Elle définit aussi, au début du jeu, votre mobilité de départ (ou 'Points de Mouvement').</div>",
    type: "stat"
  },
  sage: {
    name: "<img src='/angardia/public/img/icons/stats/SAG.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/SAG.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Sagesse</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'><img src='/angardia/public/img/illu/tooltip/SAG.jpg' style='height:78px; width:78px; float:left; box-shadow: 0 0 3px 0 black; margin-right:16px; margin-top: 8px;' class='borderImg' />La sagesse reflète votre spiritualité et votre capacité à prendre la décision provoquant le moins de conséquences néfastes pour votre personne. Le bon sens et l'intuition y sont aussi liés, et un haut quota de sagesse vous permet de limiter les risques de retombées négatives lors de l'utilisation de la magie.<br />Régulièrement, vos réussites de sagesse provoqueront la réception d'un message de la part du système de jeu, contenant des informations confidentielles vous aidant à résoudre votre problème.<br /><br />Exemple:<br />Votre équipe est coincée dans une pièce dont la lourde porte de pierre est tombée. Vous réussissez un jet de sagesse, réconfortez votre équipe en minimisant le problème, et les guidez vers la solution: un classique ensemble d'incriptions murales à déchiffrer selon une vieille formule que vous avez déjà croisée.</div>",
    type: "stat"
  },
  chrm: {
    name: "<img src='/angardia/public/img/icons/stats/CHM.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/CHM.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Charisme</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'><img src='/angardia/public/img/illu/tooltip/CHM.jpg' style='height:78px; width:78px; float:left; box-shadow: 0 0 3px 0 black; margin-right:16px; margin-top: 8px;' class='borderImg' />Le charisme mesure la personnalité et le magnétisme d'un personnage, déterminant une capacité à convaincre, mener un groupe, séduire, négocier, mentir, intimider ou produire une performance artistique.<br /><br />Il s'agit probablement de l'une des capacités les plus versatiles et utiles du système de jeu lorsqu'elle est couplée à la bonne classe de personnage, à savoir les personnages furtifs et rusés, comme les roublards, les bardes ou encore les assassins.</div>",
    type: "stat"
  },
  chan: {
    name: "<img src='/angardia/public/img/icons/stats/CHA.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/CHA.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Chance</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'><img src='/angardia/public/img/illu/tooltip/CHA.jpg' style='height:78px; width:78px; float:left; box-shadow: 0 0 3px 0 black; margin-right:16px; margin-top: 8px;' class='borderImg' />La chance est une unité conceptuelle liée aux faveurs que les dieux vous accordent. Elle cause des bonus ou des malus sur une grande variété de statistiques ou de lancers de dés, et définit le taux de coups critiques, trouvailles, rencontres et autres jets de sauvegarde.<br /><br />La chance est l'une des statistiques principales du système de butins, et impacte un nombre très vaste de calculs en tant que modificateur.</div>",
    type: "stat"
  },
  volo: {
    name: "<img src='/angardia/public/img/icons/stats/VOL.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/VOL.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Volonté</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'><img src='/angardia/public/img/illu/tooltip/VOL.jpg' style='height:78px; width:78px; float:left; box-shadow: 0 0 3px 0 black; margin-right:16px; margin-top: 8px;' class='borderImg' />La volonté est une statistique souvent associée à la magie car elle établit votre force mentale, augmentant le taux de succès de vos sorts, votre résistance aux illusions et aux autres tentatives de manipulation mentale. Elle impacte aussi votre capacité à tenir votre niveau moral en toute situation, et à résister au charisme des autres.<br /><br />La volonté vous permet de rester sain d'esprit, concentré sur votre objectif, et de déjouer nombre de maléfices.</div>",
    type: "stat"
  },
  perc: {
    name: "<img src='/angardia/public/img/icons/stats/PER.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/PER.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Perception</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'><img src='/angardia/public/img/illu/tooltip/PER.jpg' style='height:78px; width:78px; float:left; box-shadow: 0 0 3px 0 black; margin-right:16px; margin-top: 8px;' class='borderImg' />Le niveau de perception d'un personnage décide de sa capacité à repérer tout ce qui sort du commun dans son environnement, et sentir un danger imminent. Elle couvre les cinq sens, mais ajoute aussi un bonus aux jets d'intuition (qui sont aussi liés à la sagesse).<br /><br />La perception définit aussi la partie la plus importante de votre taux d'esquive en combat, avec la vitesse et la dextérité comme modificateurs.</div>",
    type: "stat"
  },
  ling: {
    name: "<img src='/angardia/public/img/icons/stats/LIN.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/LIN.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Linguistique</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'><img src='/angardia/public/img/illu/tooltip/LIN.jpg' style='height:78px; width:78px; float:left; box-shadow: 0 0 3px 0 black; margin-right:16px; margin-top: 8px;' class='borderImg' />Tout personnage au-dessus du niveau 3 d'intelligence peut comprendre sa propre langue, mais la linguistique définit la capacité à apprendre d'autres langues, ainsi qu'à déchiffrer des langues inconnues. Chaque personnage parle par défaut le commun, beaucoup parlent aussi leur langue natale dès le départ, mais tout personnage peut ajouter une langue à son panel tous les 5 niveaux passé le niveau 10. Un personnage avec LIN 11 parle donc deux langues, LIN 16 trois langues, etc...<br /><br />Lors du passage à la tranche linguistique supérieure, vous devrez décider de quelle langue ajouter à votre panel. Attention, cette langue devra être approuvée par un administrateur et justifier d'une étude conséquente.</div>",
    type: "stat"
  },
  ap: {
    name: "<img src='/angardia/public/img/icons/stats/ap.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/ap.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Points d'Action</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Les PA <img src='/angardia/public/img/icons/stats/ap.png'/> représentent votre capital de points à investir dans vos activités quotidiennes.<br /><br />Certaines opérations ne coûtent rien, mais la plupart des intéractions avec votre environnement - et surtout les demandes de modération manuelle - se monnaient en PA <img src='/angardia/public/img/icons/stats/ap.png'/>.</div>",
    type: "stat"
  },
  ap_max: {
    name: "<img src='/angardia/public/img/icons/stats/ap_max.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/ap_max.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Maximum de Points d'Action</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Cette valeur définit le maximum de points d'action <img src='/angardia/public/img/icons/stats/ap.png'/> que vous pouvez accumuler.</div>",
    type: "stat"
  },
  ap_regen: {
    name: "<img src='/angardia/public/img/icons/stats/ap_regen.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/ap_regen.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Régénération des Points d'Action</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Cette valeur définit le taux de régénération de vos points d'action <img src='/angardia/public/img/icons/stats/ap.png'/>.</div>",
    type: "stat"
  },
  mp: {
    name: "<img src='/angardia/public/img/icons/stats/mp.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/mp.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Points de Mouvement</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Les PM <img src='/angardia/public/img/icons/stats/mp.png'/> totalisent la distance sur laquelle vous pouvez voyager.<br /><br />Chaque déplacement d'une case sur la carte coûte 1 PM <img src='/angardia/public/img/icons/stats/mp.png'/>.</div>",
    type: "stat"
  },
  mp_max: {
    name: "<img src='/angardia/public/img/icons/stats/mp_max.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/mp_max.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Maximum de Points de Mouvement</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Cette valeur définit le maximum de points de mouvement <img src='/angardia/public/img/icons/stats/mp.png'/> que vous pouvez accumuler.</div>",
    type: "stat"
  },
  mp_regen: {
    name: "<img src='/angardia/public/img/icons/stats/mp_regen.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/mp_regen.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Régénération des Points de Mouvement</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Cette valeur définit le taux de régénération de vos points de mouvement <img src='/angardia/public/img/icons/stats/mp.png'/>.</div>",
    type: "stat"
  },
  df: {
    name: "<img src='/angardia/public/img/icons/stats/df.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/df.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Faveurs Divines</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Les FD <img src='/angardia/public/img/icons/stats/df.png'/> peuvent être appelées pour retenter certains lancers de dés ratés, ou pour effectuer certaines actions spéciales. Vous pouvez aussi en dépenser avant d'effectuer une action, afin de demander l'aide d'une divinité. Les chances de réussite sont plutôt faibles dans ce cas de figure.<br /><br />Lorsque vous mourez, vous dépensez l'intégralité de vos FD <img src='/angardia/public/img/icons/stats/df.png'/> pour essayer de revenir à la vie. Plus vous dépensez de FD <img src='/angardia/public/img/icons/stats/df.png'/> de cette manière, plus vos chances de miracle sont élevées. Un échec de résurrection après utilisation de vos FD <img src='/angardia/public/img/icons/stats/df.png'/> ne change cependant rien, et votre mort restera alors définitive.</div>",
    type: "stat"
  },
  df_max: {
    name: "<img src='/angardia/public/img/icons/stats/df_max.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/df_max.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Maximum de Faveurs Divines</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Cette valeur définit le maximum de Faveurs Divines <img src='/angardia/public/img/icons/stats/df.png'/> que vous pouvez accumuler.</div>",
    type: "stat"
  },
  df_regen: {
    name: "<img src='/angardia/public/img/icons/stats/df_regen.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/df_regen.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Régénération des Faveurs Divines</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Cette valeur définit le taux de régénération de vos Faveurs Divines <img src='/angardia/public/img/icons/stats/df.png'/>.</div>",
    type: "stat"
  },
  hp: {
    name: "<img src='/angardia/public/img/icons/stats/hp.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/hp.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Vie</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Votre vie <img src='/angardia/public/img/icons/stats/hp.png'/> est une représentation de votre état de santé.<br /><br />Atteindre 0 signifie que vous mourez (la mort dans Angardia est définitive mais peut être évitée par un test de FD <img src='/angardia/public/img/icons/stats/df.png'/> ). Une barre de vie à 25% signifie que vous êtes mourant et/ou estropié. 75% est synonyme de blessures légères.</div>",
    type: "stat"
  },
  hp_max: {
    name: "<img src='/angardia/public/img/icons/stats/hp_max.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/hp_max.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Maximum de Points de Vie</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Cette valeur définit le maximum de Points de Vie <img src='/angardia/public/img/icons/stats/hp.png'/> que vous pouvez accumuler.</div>",
    type: "stat"
  },
  hp_regen: {
    name: "<img src='/angardia/public/img/icons/stats/hp_regen.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/hp_regen.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Régénération des Points de Vie</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Cette valeur définit le taux de régénération de vos Points de Vie <img src='/angardia/public/img/icons/stats/hp.png'/>.</div>",
    type: "stat"
  },
  mana: {
    name: "<img src='/angardia/public/img/icons/stats/mana.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/mana.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Mana</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>La mana <img src='/angardia/public/img/icons/stats/mana.png'/> est une représentation de l'énergie magique à votre disposition.<br /><br />Lorsque le niveau de mana est trop bas, vous ne pourrez plus jeter certains sorts.<br />Atteindre 0 est synonyme de la perte de points d'esprit, en fonction du résultat de certains tests. Si votre mana est sous 25%, vous perdez des points d'esprit de manière périodique.</div>",
    type: "stat"
  },
  mana_max: {
    name: "<img src='/angardia/public/img/icons/stats/mana_max.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/mana_max.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Maximum de Points de Mana</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Cette valeur définit le maximum de Points de Mana <img src='/angardia/public/img/icons/stats/mana.png'/> que vous pouvez accumuler.</div>",
    type: "stat"
  },
  mana_regen: {
    name: "<img src='/angardia/public/img/icons/stats/mana_regen.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/stats/mana_regen.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Régénération des Points de Mana</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Cette valeur définit le taux de régénération de vos Points de Mana <img src='/angardia/public/img/icons/stats/mana.png'/>.</div>",
    type: "stat"
  },
  bonus_capacity: {
    name: "<img src='/angardia/public/img/icons/weight.png' class='ttimg' /><div class='ttbook'></div>",
    icon: " <img src='/angardia/public/img/icons/weight.png' style='max-height:24px;' /> ",
    icon_type: " <img src='/angardia/public/img/icons/stats/stats.png' style='max-height:24px;' /> ",
    title: "<span class='tttext'>Capacité de Portage</span><div class='ttbook'></div>",
    text: "<div class='textbox justify'>Cette valeur définit le poids supplémentaire que vous pouvez transporter. Le reste de la capacité de portage est défini par votre force.</div>",
    type: "stat"
  },
  /* ------------------- */
  /* ------ VOCAB ------ */
  /* ------------------- */
    ectoplasme: {
      name: "<span class='tttext'>ectoplasme</span><div class='ttbook'></div>",
      title: "<span class='tttext'>ectoplasme</span><div class='ttbook'></div>",
      text: "<div class='textbox justify'>Tout être non-mort, dont la volonté est guidée par un spectre ou une mana animant un corps sans vie. Cette catégorie inclut les zombis, squelettes, vampires, spectres, goules,...</div>",
      type: "stat"
    },
};

// Tooltip building
function buildTooltips(){
  $(".tt").each(function(i) {
    let ttId = $(this).attr("id");
    $(this).html(ttList[ttId].name);
  });
}
// UI building
function buildGuiTooltips(){
  // remove existing tooltips
  if ( $( ".tooltip" ).length ) {
    $( ".tooltip" ).stop().animate({
    top:"-100%"
  }, 500, function() {
    $(this).remove();
  });
  }
  //create new
  var ttId = $(this).attr("id");
  $( "<div/>", {
    "class": "tooltip",
    html: "<div class='crowned iconify'><h2>" + ttList[ttId].title + "</h2></div><hr /><p>" + ttList[ttId].text + "</p><br /><h6>Cliquer pour fermer.</h6>",
    click: function() {
      $( ".tooltip" ).animate({ top:"-100%" }, 300, function() {
        (this.target).remove()
      });
      $("#playview").css("filter", "none");
    }
  })
    .appendTo( "body" );
  if (ttList[ttId].icon) {
    $( "div.iconify > h2" ).prepend(ttList[ttId].icon);
  }
  if (ttList[ttId].icon_type) {
    $( "div.iconify > h2" ).append(ttList[ttId].icon_type);
  }
  $(".tooltip").animate({ top: "50%" }, 300);
  $("#playview").css("filter", "blur(2px) brightness(50%)");
}
// Triggers
$(document).ready(buildTooltips);
$(document).ajaxComplete(buildTooltips);
$(document).ready( function() {
  $(".tt").click(buildGuiTooltips);
});
$(document).ajaxComplete( function() {
  $(".tt").click(buildGuiTooltips);
});