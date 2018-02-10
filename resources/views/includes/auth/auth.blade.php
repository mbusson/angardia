<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1], $remember)) {
            // Authentication passed...
            return redirect()->intended('HomeController@play');
            ?> <div id="welcome_popup"><p>Bienvenue, {{ Auth::user()->name }} !</p> <br> <a href="{{ route('logout') }}">Déconnexion</a></div> <?php
        }
    }
}

if (Auth::check()) {
    
} else {
    echo 'You need to log in'; //login interface
    ?>
    <ul>
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
    </ul>
    <?php
}

?>