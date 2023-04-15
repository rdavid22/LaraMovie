<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('welcome', [
            'movies' => $movies
        ]);
    }

    // Show all movie
    public function all()
    {
        return view('movies.index', [
            'movies' => Movie::all()
        ]);
    }

    // Show single movie
    public function show(string $movie_title)
    {
        $movie = Movie::where('title', $movie_title)->first();

        if ($movie != null) {
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