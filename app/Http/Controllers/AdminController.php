<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Reservations;
use App\Models\ScreenTimes;
use App\Models\User;

class AdminController extends Controller
{
    // Shows the admin dashboard
    public function index()
    {
        return view(
            'movies.admin.index',
            [
                'income' => getIncome(),
                'user_counter' => getCountOfUsers(),
                'movie_counter' => getCountOfMovies(),
                'screentimes_counter' => getCountOfScreenTimes()
            ]
        );
    }

    // Shows the financial page
    public function finances()
    {
        return view('movies.admin.finances', [
            'income' => getIncome(),
            'reservations' => Reservations::with('user', 'screenTime')->get(),
            'movie_titles' => getMovieTitlesFromReservations(),
        ]);
    }

    // Shows all user
    public function users()
    {
        return view('movies.admin.users', [
            'users' => User::get(),
        ]);
    }

    // Shows all movies
    public function movies()
    {
        return view('movies.admin.movies', [
            'movies' => Movie::get(),
        ]);
    }

    // Deletes a user from the model by the request parameter: 'id' 
    public function destroy_user()
    {
        if (request()->is_admin) {
            return redirect()->back()->with('message', 'Adminisztrátori fiókot nem lehet törölni!');
        } else {
            $user = User::find(request()->id);
            $user->delete();
            return redirect()->back()->with('message', 'Felhasználó sikeresen törölve!');
        }
    }

    // Deletes a reservation from the user's model
    public function destroy_finance()
    {
        $reservation = Reservations::find(request()->id);
        $reservation->delete();
        return redirect()->back()->with('message', 'Foglalás sikeresen törölve!');
    }

    public function destroy_movie()
    {
        $movie = Movie::find(request()->id);
        $movie->delete();
        return redirect()->back()->with('message', 'Film sikeresen törölve!');
    }
}


function getIncome()
{
    // Get all user from database with their relations
    $all_user = User::with('reservations')->get();
    $predicted_income = 0;
    foreach ($all_user as $user) {
        foreach ($user['reservations'] as $reservation) {
            $predicted_income += ScreenTimes::where('id', $reservation['screen_time_id'])->first()->price;
        }
    }
    return $predicted_income;
}

function getCountOfUsers()
{
    return User::count();
}

function getCountOfMovies()
{
    return Movie::count();
}

function getCountOfScreenTimes()
{
    return ScreenTimes::count();
}

function getMovieTitlesFromReservations()
{
    $reservations = Reservations::with('screenTime')->get();
    $titles = array();
    foreach ($reservations as $reservation) {
        $movie = Movie::find($reservation['screenTime']->movie_id);
        array_push($titles, $movie->title);
    }
    return $titles;
}