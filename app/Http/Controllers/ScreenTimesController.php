<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\ScreenTimes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScreenTimesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

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

        return redirect()->back()->with('screentime_added', 'Időpont sikeresen hozzáadva');
    }

    /**
     * Display the specified resource.
     */
    public function show(ScreenTimes $screenTimes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScreenTimes $screenTimes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ScreenTimes $screenTimes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScreenTimes $screenTimes)
    {
        //
    }
}
