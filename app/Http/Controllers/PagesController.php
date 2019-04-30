<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// CONTROLER LA NAVIGATION DES PAGES
class PagesController extends Controller
{
    // Retourne la page d'accueil en lui envoyant le titre de la page
    public function index()
    {
        $title = "Bienvenue sur FindYourBeach";
        return view('pages.index', compact('title'));
    }
    // Retourne la page de la liste des plages en lui envoyant le titre de la page
    public function listeDesPlages()
    {
        $title = "Liste des plages";
        return view('pages.liste-des-plages', compact('title'));
    }
    // Retourne la page pour ajouter une plage en lui envoyant le titre de la page
    public function ajouterUnePlage()
    {
        $title = "Ajouter une plage";
        return view('pages.ajouter-une-plage')->with('title',$title);
    }
    // Retourne la page pour modifier une plage en lui envoyant le titre de la page
    public function modifierUnePlage()
    {
        $title = "Modifier une plage";
        return view('pages.modifier-une-plage')->withTitle($title);
    }
}
