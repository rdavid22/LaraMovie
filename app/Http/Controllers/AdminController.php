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
            'reservations' => Reservations::with('user', 'screenTime')->get()
        ]);
    }

    // Shows all user
    public function users()
    {
        return view('movies.admin.users', [
            'users' => User::get(),
        ]);
    }

    // Deletes a user from the model by the request parameter: 'id' 
    public function destroy_user()
    {
        if(request()->is_admin)
        {
            return redirect()->back()->with('message', 'Adminisztrátori fiókot nem lehet törölni!');
        }
        else {
            $user = User::find(request()->id);
            $user->delete();
            return redirect()->back()->with('message', 'Felhasználó sikeresen törölve!');
        }
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