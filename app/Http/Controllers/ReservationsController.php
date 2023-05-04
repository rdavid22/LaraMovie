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
        foreach ($reservations as $reservation) {
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
        request()->validate([
            'screentime_id' => 'required'
        ]);

        $screentime = ScreenTimes::find(request()->screentime_id);

        if ($screentime) {
            if ($screentime['seats'] > 0) {
                $screentime->decrement('seats');
                $screentime->reservations()->create([
                    'screen_time_id' => $screentime->id,
                    'user_id' => request()->user()->id
                ]);
                return redirect()->back()->with('message', 'A foglalás sikeresen megtörtént!');
            }
        }
        return redirect()->back()->with('message', 'Érvénytelen művelet!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservations $reservation)
    {
        // Find screen time in DB by reservation related id & increment available seats
        $related_screen_time = ScreenTimes::find($reservation->screen_time_id);
        $related_screen_time->increment('seats');

        // Destroy user reservation
        $reservation->delete();
        return redirect()->back()->with('message', 'A foglalás sikeresen törölve!');
    }
}