<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class MovieController extends Controller
{
    // Show all movie
    public function index()
    {
        if (request()->kategoria) {
            return view('movies.index', [
                'movies' => Movie::latest()->filter(request(['kategoria']))->get(),
                'genre_category' => request()->kategoria
            ]);
        } else {
            return view('movies.index', [
                'movies' => Movie::all()
            ]);
        }
    }

    // Show single movie
    public function show(string $movie_title)
    {
        $movie = Movie::where('title', $movie_title)->first();

        if ($movie) {
            return view('movies.show', [
                'movie' => $movie
            ]);
        } else {
            abort(404);
        }
    }

    // Show Create Movie Form
    public function create()
    {
        return view('listings.create');
    }
}