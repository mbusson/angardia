<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'characters';
    protected $fillable = array(
        'race', 'class', 'name', 'alignment', 
        'level', 'xp',
        'id', 'owner', 
        'loc_world', 'loc_x', 'loc_y', 'loc_sub',
        'ap', 'ap_max', 'ap_regen',
        'mp', 'mp_max', 'mp_regen',
        'df', 'df_max', 'df_regen',
        'hp', 'hp_max', 'hp_regen',
        'mana', 'mana_max', 'mana_regen',
        'gold', 'equipment_id', 'trophies_id', 'inventory_id',
        'main_trait_1', 'main_trait_2', 'main_trait_3', 'main_trait_4', 'main_trait_5',
        'main_trait_6', 'main_trait_7', 'main_trait_8', 'main_trait_9', 'main_trait_0',
        'sec_trait_1', 'sec_trait_2', 'sec_trait_3', 'sec_trait_4', 'sec_trait_5',
        'sec_trait_6', 'sec_trait_7', 'sec_trait_8', 'sec_trait_9', 'sec_trait_0'
    );

    public $timestamps = false;

}
