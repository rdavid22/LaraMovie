<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class MovieController extends Controller
{
    // Show all, or filtered category movie
    public function index()
    {
        if (request()->kategoria || request()->kereses) {
            $query_result = Movie::latest()->filter(request(['kategoria', 'kereses']))->get();

            if (count($query_result) == 0) {
                return view('movies.index', [
                    'genre_category' => request()->kategoria,
                    'error' => 'Nincs találat!'
                ]);

            } elseif (request()->kereses) {
                return view('movies.index', [
                    'search' => 'true',
                    'movies' => $query_result,
                    'search_query' => request()->kereses,
                    'count_of_result' => count($query_result)
                ]);
            } else {
                return view('movies.index', [
                    'genre_category' => request()->kategoria,
                    'movies' => $query_result
                ]);
            }
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