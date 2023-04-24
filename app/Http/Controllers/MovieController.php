<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Session;

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
                'movies' => Movie::latest()->simplePaginate(6)
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
        return view('movies.create');
    }

    public function store()
    {
        $requestFields = request()->validate([
            'title' => 'required',
            'director' => 'required',
            'length' => 'required',
            'cast' => 'required',
            'trailer' => 'required',
            'age' => 'required',
            'genre' => 'required',
            'premier' => 'required',
            'description' => 'required'
        ]);

        if(request()->hasFile('cover')) {
            $requestFields['cover'] = request()->file('cover')->store('covers', 'public');
        }
        if(request()->hasFile('cover_big')) {
            $requestFields['cover_big'] = request()->file('cover_big')->store('covers_big', 'public');
        }
        
        $genre_str = "";
        foreach(request()->genre as $genre){
            $genre_str = $genre_str . $genre . ', ';
        }
        $requestFields['genre'] = $genre_str;

        Movie::create($requestFields);

        $session_message = 'A(z) ' . '\'' . $requestFields['title'] . '\'' . ' sikeresen hozzáadva!';
        Session::flash('movie_added', $session_message);

        return redirect('/filmek');
    }
}