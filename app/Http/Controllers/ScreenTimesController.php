<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\ScreenTimes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScreenTimesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.screentimes.create', [
            'movies' => Movie::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request fields
        $requestFields = request()->validate([
            'movie_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'seats' => 'required',
            'price' => 'required',
            'presentation_type' => 'required'
        ]);

        // Set date (concatenate from 2 arr items) & unset not needed array item
        $requestFields['date'] = $requestFields['date'] . ' ' . $requestFields['time'];
        unset($requestFields['time']);

        $movie = Movie::find($request->movie_id);

        $movie->screenTimes()->create($requestFields);

        return to_route('admin.screentimes')->with('message', 'Időpont sikeresen hozzáadva');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScreenTimes $screenTimes)
    {
        $screentime = ScreenTimes::with('movie')->find(request()->id);
        $movies = Movie::all();
        return view('movies.screentimes.edit', [
            'screentime' => $screentime,
            'movies' => $movies,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ScreenTimes $screenTimes)
    {
        $requestFields = $request->validate([
            'movie_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'seats' => 'required',
            'price' => 'required',
            'presentation_type' => 'required'
        ]);

        // Set date (concatenate from 2 arr items) & unset not needed array item
        $requestFields['date'] = $requestFields['date'] . ' ' . $requestFields['time'];
        unset($requestFields['time']);

        // Search screentime by id & update it with the request parameters
        ScreenTimes::where('id', request()->id)->update($requestFields);

        // Redirect user with success message
        return to_route('admin.screentimes')->with('message', 'A vetítés sikeresen módosítva!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScreenTimes $screenTimes)
    {
        $screentime = ScreenTimes::find(request()->id);
        $screentime->delete();
        return redirect()->back()->with('message', 'A vetítés sikeresen törölve!');
    }
}