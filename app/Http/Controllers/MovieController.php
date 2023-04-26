<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Session;
use Storage;

class MovieController extends Controller
{
    // Show all, or filtered category movie
    public function index()
    {
        // If the request contains a category / search filter, check it
        if (request()->kategoria || request()->kereses) {

            // Filter through the db by the model's scope filter
            $query_result = Movie::latest()->filter(request(['kategoria', 'kereses']))->get();

            // If it didn't found any movie with the parameters, returns a "not found" message
            if (count($query_result) == 0) {
                return view('movies.index', [
                    'genre_category' => request()->kategoria,
                    'error' => 'Nincs találat!'
                ]);

            }
            
            // If user called this route by the search filter, show the results
            elseif (request()->kereses) {
                return view('movies.index', [
                    'search' => 'true',
                    'movies' => $query_result,
                    'search_query' => request()->kereses,
                    'count_of_result' => count($query_result)
                ]);
            }

            // If user called this route by the category filter, show the results
            else {
                return view('movies.index', [
                    'genre_category' => request()->kategoria,
                    'movies' => $query_result
                ]);
            }
        }
        // Show all movie for the user
        else {
            return view('movies.index', [
                'movies' => Movie::latest()->simplePaginate(6)
            ]);
        }
    }

    // Show single movie
    public function show(string $movie_title)
    {
        // Search through the database for the movie by title
        $movie = Movie::where('title', $movie_title)->with('screenTimes')->first();
        
        // If eloquent founds one, returns it, else throws a 404
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
        // Returns the create view
        return view('movies.create');
    }

    // Store the newly added movie in the database
    public function store()
    {
        // Validate request parameters
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

        // Check if request has a cover image
        if (request()->hasFile('cover')) {
            $requestFields['cover'] = request()->file('cover')->store('covers', 'public');
        }

        // Check if request has a big cover image
        if (request()->hasFile('cover_big')) {
            $requestFields['cover_big'] = request()->file('cover_big')->store('covers_big', 'public');
        }

        // Concatenate genres to a string
        $genre_str = "";
        foreach (request()->genre as $genre) {
            $genre_str = $genre_str . $genre . ', ';
        }
        $requestFields['genre'] = $genre_str;

        // Create a movie object in the database with the validated request fields
        Movie::create($requestFields);

        // Add a successfull message to the session flash 
        $session_message = 'A(z) ' . '\'' . $requestFields['title'] . '\'' . ' sikeresen hozzáadva!';
        Session::flash('message', $session_message);

        // Redirect to the all movies page
        return to_route('admin.movies');
    }

    // Shows edit page
    public function edit(string $movie_title)
    {
        // Search through database by the movie title 
        $movie = Movie::where('title', $movie_title)->first();
        
        // Return view to user with the movie object
        return view('movies.edit', [
            'movie' => $movie,
        ]);
    }

    // Updates a single movie
    public function update()
    {
        // Validate fields
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

        // Check if request contains the small cover image
        if (request()->hasFile('cover')) {
            $requestFields['cover'] = request()->file('cover')->store('covers', 'public');
        }

        // Check if request contains the big cover image
        if (request()->hasFile('cover_big')) {
            $requestFields['cover_big'] = request()->file('cover_big')->store('covers_big', 'public');
        }

        // Concatenate genres to a string
        $genre_str = "";
        foreach (request()->genre as $genre) {
            $genre_str = $genre_str . $genre . ', ';
        }

        // Add concatenated string to the request field
        $requestFields['genre'] = $genre_str;

        // Search movie by id & update it with the request parameters
        Movie::where('id', request()->id)->update($requestFields);

        // Redirect user with success message
        return to_route('admin.movies')->with('message', 'A(z) ' . '\'' . $requestFields['title'] . '\'' . ' sikeresen módosítva!');
    }

    // Deletes an entity from the database
    public function destroy()
    {
        // Search movie in db by id
        $movie = Movie::find(request()->id);

        // Delete movie instance from database
        $movie->delete();

        // Delete small cover from storage
        if($movie->cover && Storage::disk('public')->exists($movie->cover))
        {
            Storage::disk('public')->delete($movie->cover);
        }

        // Delete big cover from storage
        if($movie->cover_big && Storage::disk('public')->exists($movie->cover_big))
        {
            Storage::disk('public')->delete($movie->cover_big);
        }

        // Redirect with successful message
        return to_route('admin.movies')->with('message', 'A(z) ' . '\'' . request()->title . '\'' . ' sikeresen törölve!');
    }
}