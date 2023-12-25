<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtitle;

class SubtitleController extends Controller
{
    public function index()
    {
    $subtitles = Subtitle::all();

    return view('subtitles.index', compact('subtitles'));
    }
}