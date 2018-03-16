<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharSend extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function sendstats(Request $request)
    {
        $userid = \Auth::user()->id;
        $stat = \App\Character::where('owner', $userid)->first();
        $stat->forc = $request->input('FOR');
        $stat->dext = $request->input('DEX');
        $stat->endu = $request->input('END');
        $stat->defe = $request->input('DEF');
        $stat->inte = $request->input('INT');
        $stat->perc = $request->input('PER');
        $stat->volo = $request->input('VOL');
        $stat->chrm = $request->input('CHR');
        $stat->sage = $request->input('SAG');
        $stat->chan = $request->input('CHA');
        $stat->ling = $request->input('LIN');
        $stat->stats_set = 1;
        $stat->save();
        return redirect()->back();
    }

    public function sendFirstTraits(Request $request)
    {
        $userid = \Auth::user()->id;
        $stat = \App\Character::where('owner', $userid)->first();
        $stat->main_trait_1 = $request->input('maintrait');
        $stat->sec_trait_1 = $request->input('sectrait');
        $stat->save();
        return redirect()->route('create5');
    }

    public function sendAvatar(Request $request)
    {
        $userid = \Auth::user()->id;
        $stat = \App\Character::where('owner', $userid)->first();
        $avatarid = $request->input('avatar');
        $selectedavatar = \App\Avatar::where('id', $avatarid)->first();
        $stat->avatar_url = $selectedavatar->url;
        $stat->save();
        return redirect()->route('create6');
    }

        // DON'T USE THIS ONE outside character creation !!!
    public function deleteCharacter(Request $request)
    {
        $userid = \Auth::user()->id;
        $stat = \App\Character::where('owner', $userid)->first();
        $stat->delete();
        return redirect()->route('create');
        // Removes user-linked character from database !!!
    }

    public function confirmCharacter(Request $request)
    {
        $userid = \Auth::user()->id;
        $stat = \App\Character::where('owner', $userid)->first();
        //lock selected avatar
        $avatar = \App\Avatar::where('url', $stat->avatar_url)->first();
        $avatar->taken = 1;
        $avatar->save();
        return redirect()->back();
        //create inventories
        
        /*there we will have a lot of data-writing to do:
        - lock selected avatar
        - create inventories
        */
    }

}
