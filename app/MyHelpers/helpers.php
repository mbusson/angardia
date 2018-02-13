<?php

//-----------------------//
//--Race Name Converter--//
//-----------------------//
if (!function_exists('raceName')) {
    function raceName($shortName) 
    { 
        switch ($shortName) {
            case 'ELF':
                echo "Elfe";
                break;
            case 'DEMELF':
                echo "Demi-Elfe";
                break;
            case 'HUM':
                echo "Humain";
                break;
            case 'HAL':
                echo "Halfelin";
                break;
            case 'GNO':
                echo "Gnome";
                break;
            case 'GNOPRO':
                echo "Gnome des Profondeurs";
                break;
            case 'GOB':
                echo "Gobelin";
                break;
            case 'HOB':
                echo "Hobgobelin";
                break;
            case 'DRO':
                echo "Drow";
                break;
            case 'CAL':
                echo "Calandre";
                break;
            case 'CHA':
                echo "Changelin";
                break;
            case 'VOL':
                echo "Volpes";
                break;
            case 'OND':
                echo "Ondin";
                break;
            case 'SYL':
                echo "Sylphe";
                break;
            case 'SAM':
                echo "Samsarien";
                break;
            case 'VIS':
                echo "Vishkanya";
                break;
        }
    } 
}


//-----------------------------//
//--Character Trait Converter--//
//-----------------------------//
if (!function_exists('charaTrait')) {
    function charaTrait($shortTrait) 
    { 
        switch ($shortTrait) {
            case 'intuiti':
                echo "Intuition";
                break;
            case 'survie':
                echo "Survie";
                break;
            case 'trappeu':
                echo "Trappeur";
                break;
            case 'forgero':
                echo "Forgeron";
                break;
            case 'ebenist':
                echo "Ébéniste";
                break;
            case 'gueriss':
                echo "Guérisseur";
                break;
            case 'equitat':
                echo "Équitation";
                break;
            case 'escalad':
                echo "Escalade";
                break;
            case 'pickpoc':
                echo "Pickpocket";
                break;
            case 'furtif':
                echo "Furtif";
                break;
            case 'ami_anim':
                echo "Ami des Animaux";
                break;
            case 'evasion':
                echo "Roi de l'Évasion";
                break;
            case 'intimid':
                echo "Intimider";
                break;
            case 'perform':
                echo "Performance";
                break;
            case 'incogni':
                echo "Incognito";
                break;
            case 'escroc':
                echo "Escroc";
                break;
            case 'saboteu':
                echo "Saboteur";
                break;
            case 'diploma':
                echo "Diplomate";
                break;
            case 'oniroma':
                echo "Oniromancie";
                break;
            case 'bluff':
                echo "Bluff";
                break;
            case 'natatio':
                echo "Natation";
                break;
            case 'acrobat':
                echo "Acrobate";
                break;
            case 'res_magi':
                echo "Résistance à la Magie";
                break;
            case 'vis_noct':
                echo "Vision Nocturne";
                break;
            case 'adaptab':
                echo "Adaptabilité";
                break;
            case 'discret':
                echo "Discret";
                break;
            case 'intrepi':
                echo "Intrépide";
                break;
            case 'equilib':
                echo "Équilibré";
                break;
            case 'hai_verd':
                echo "Haine des Verdâtres";
                break;
            case 'obsessi':
                echo "Obsession";
                break;
            case 'res_illu':
                echo "Résistance aux Illusions";
                break;
            case 'empoiso':
                echo "Empoisonneur";
                break;
            case 'ebloui':
                echo "Ébloui";
                break;
            case 'artille':
                echo "Artillerie";
                break;
            case 'cavalie':
                echo "Cavalier";
                break;
            case 'metamor':
                echo "Métamorphe";
                break;
            case 'compete':
                echo "Compétent";
                break;
            case 'apprent':
                echo "Apprentissage";
                break;
            case 'ais_roch' :
                echo "Affinité Rocheuse";
                break;
            case 'gobelin' :
                echo "Gobelinoide";
                break;
            case 'anthrop' :
                echo "Anthropomorphie";
                break;
        }
    } 
}



?>