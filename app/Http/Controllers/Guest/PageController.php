<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function home()
    {
        //RICHIAMO LA CLASSE MOVIE CHE STA DENTRO MODELS E METTO QUELLO CHE MI RESTITUISCE IL DATABASE IN UNA VARIABILE MOVIES
        $movies = Movie::all();
        //CREO UNA VARIABILE DATA CHE MI RESTITUISCE UN ARRAY ASSOCIATIVO
        $data = [
            "movies" => $movies
        ];
        return view('home', $data);
    }

    public function movie()
    {
        $movies = Movie::all();
        $data = [
            "movies" => $movies
        ];
        return view('movies', $data);
    }
}
