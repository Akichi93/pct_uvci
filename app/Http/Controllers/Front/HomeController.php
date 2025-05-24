<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil
     */
    public function index()
    {
        return view('front.welcome');
    }

    /**
     * Affiche la page de connexion
     */
    public function login()
    {
        return view('front.login');
    }

    /**
     * Affiche la page d'inscription
     */
    public function register()
    {
        return view('front.register');
    }

    /**
     * Affiche le tableau de bord utilisateur
     */
    public function dashboard()
    {
        return view('front.dashboard');
    }
}
