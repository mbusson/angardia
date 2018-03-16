<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function play()
    {
        return view('play');
    }
    public function create()
    {
        return view('create');
    }
    public function create2()
    {
        return view('create2');
    }
    public function create3()
    {
        return view('create3');
    }
    public function create4()
    {
        return view('create4');
    }
    public function create5()
    {
        return view('create5');
    }
    public function create6()
    {
        return view('create6');
    }
}
