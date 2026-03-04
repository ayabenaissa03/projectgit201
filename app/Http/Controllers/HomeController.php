<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class HomeController extends Controller
{
    // affiche la page d'accueil
     public function index()
    {
        $nom = 'Oussama';
        $titre = 'Bienvenue sur notre application de gestion';

        // Le 2ème argument de la fonction view() est un tableau de données.
        // La clé ('pageTitle') sera le nom de la variable dans la vue.
        return view('welcome', [
            'pageTitle' => $titre,
            'userName' => $nom
        ]);
    }
}
