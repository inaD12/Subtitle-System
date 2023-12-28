<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtitle;

class SubtitleController extends Controller
{
    public function index()
    {
    $subtitles = Subtitle::paginate(10);

    return view('subtitles.index', compact('subtitles'));
    }

    public function show(Subtitle $subtitle)
    {
        return view('subtitles.subtitle', compact('subtitle'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $subtitles = Subtitle::whereHas('film', function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        })->get();

        return view('subtitles.index', ['subtitles' => $subtitles]);
    }
}
