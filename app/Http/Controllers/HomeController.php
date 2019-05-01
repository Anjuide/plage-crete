<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Récupérer l'id de l'utilisateur connecté
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        // Retourner la vue home en lui passant les plages de l'utilisateur
        return view('home')->with('beaches', $user->beaches);
    }
}
