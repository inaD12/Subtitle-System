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

    public function search(Request $request)
{
    $search = $request->input('search');
    $movies = Film::search($search)->get();

    return view('movies.index', ['movies' => $movies]);
}
}
