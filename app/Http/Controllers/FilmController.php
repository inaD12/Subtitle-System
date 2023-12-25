<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        $movies = Film::all();

        return view('movies.index', compact('movies'));
    }
}
