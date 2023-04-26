<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use App\Http\Controllers\Controller;
use App\Models\ScreenTimes;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', request()->user()->id)->with('reservations')->first();
        $reservations = $user->reservations;
        
        $user_reservations = array();
        foreach($reservations as $reservation)
        {
            array_push($user_reservations, ScreenTimes::where('id', $reservation['screen_time_id'])->with('movie')->first());
        }

        return view('movies.reservations.index', [
            'reservations' => $user_reservations,
            'reservation_ids' => $reservations
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $screentime = ScreenTimes::find(request()->screentime_id);
        
        $screentime->reservations()->create([
            'screen_time_id' => $screentime->id,
            'user_id' => request()->user()->id
        ]);

        return redirect()->back()->with('message', 'A foglalás sikeresen megtörtént!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservations $reservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservations $reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservations $reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservations $reservations)
    {
        Reservations::find(request()->reservation_id)->delete();
        return redirect()->back()->with('message', 'A foglalás sikeresen törölve!');
    }
}
