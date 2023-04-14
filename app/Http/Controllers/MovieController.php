<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Show all movie
    public function index() {
        return view('listings.index', [
            'listings' => Movie::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    //Show single movie
    public function show(Movie $movie) {
        return view('movies.show', [
            'movie' => ['title' => $movie['title']]
        ]);
    }

    // Show Create Movie Form
    public function create() {
        return view('listings.create');
    }
}
