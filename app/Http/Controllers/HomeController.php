<?php

namespace App\Http\Controllers;

use App\Models\Couleur;
use App\Models\Voiture;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home (){
        $couleurs= Couleur::all();
       
        return view('home', compact('couleurs'));
    }
}
