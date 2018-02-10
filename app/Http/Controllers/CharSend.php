<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharSend extends Controller
{
    /**
     * Create a new controller instance.

     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function sendRace(Request $request)
    {
        $userid = \Auth::user()->id;
        $stat = \App\Character::where('owner', $userid)->first();
        $stat->race = $request->input('race');
        $stat->save();

        return redirect()->back();
        
    }

    public function sendClass(Request $request)
    {
        $userid = \Auth::user()->id;
        $stat = \App\Character::where('owner', $userid)->first();
        $stat->class = $request->input('class');
        $stat->save();

        return redirect()->back();
        
    }

    public function sendname(Request $request)
    {
        $userid = \Auth::user()->id;
        $stat = \App\Character::where('owner', $userid)->first();
        $stat->name = $request->input('name');
        $stat->save();

        return redirect()->back();
        
    }

    /*$stat->race = $chara_race;
        $stat->class = $chara_class;
        $stat->alignment = $chara_align;
        $stat->name = $chara_name;
        $stat->level = $chara_level;
        $stat->id = $chara_id;
        $stat->owner = $chara_owner;
        $stat->loc_world = $chara_loc_world;
        $stat->loc_x = $chara_loc_x;
        $stat->loc_y = $chara_loc_y;
        $stat->loc_sub = $chara_loc_sub;
        $stat->xp = $chara_xp;
        $stat->ap = $chara_ap;
        $stat->ap_max = $chara_ap_max;
        $stat->ap_regen = $chara_ap_regen;
        $stat->mp = $chara_mp;
        $stat->mp_max = $chara_mp_max;
        $stat->mp_regen = $chara_mp_regen;
        $stat->df = $chara_df;
        $stat->df_max = $chara_df_max;
        $stat->df_regen = $chara_df_regen;
        $stat->hp = $chara_hp;
        $stat->hp_max = $chara_hp_max;
        $stat->hp_regen = $chara_hp_regen;
        $stat->mana = $chara_mana;
        $stat->mana_max = $chara_mana_max;
        $stat->mana_regen = $chara_mana_regen;
        $stat->gold = $chara_gold;
        $stat->equipment_id = $chara_equipment_id;
        $stat->trophies_id = $chara_trophies_id;
        $stat->inventory_id = $chara_inventory_id;
        $stat->main_trait_1 = $chara_main_trait_1;
        $stat->main_trait_2 = $chara_main_trait_2;
        $stat->main_trait_3 = $chara_main_trait_3;
        $stat->main_trait_4 = $chara_main_trait_4;
        $stat->main_trait_5 = $chara_main_trait_5;
        $stat->main_trait_6 = $chara_main_trait_6;
        $stat->main_trait_7 = $chara_main_trait_7;
        $stat->main_trait_8 = $chara_main_trait_8;
        $stat->main_trait_9 = $chara_main_trait_9;
        $stat->main_trait_0 = $chara_main_trait_0;
        $stat->sec_trait_1 = $chara_sec_trait_1;
        $stat->sec_trait_2 = $chara_sec_trait_2;
        $stat->sec_trait_3 = $chara_sec_trait_3;
        $stat->sec_trait_4 = $chara_sec_trait_4;
        $stat->sec_trait_5 = $chara_sec_trait_5;
        $stat->sec_trait_6 = $chara_sec_trait_6;
        $stat->sec_trait_7 = $chara_sec_trait_7;
        $stat->sec_trait_8 = $chara_sec_trait_8;
        $stat->sec_trait_9 = $chara_sec_trait_9;
        $stat->sec_trait_0 = $chara_sec_trait_0;*/
}
