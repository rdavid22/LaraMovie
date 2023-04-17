<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class HomeController extends Controller
{
    // Show homepage
    public function index()
    {
        return view('home', [
            'movies' => Movie::all()
        ]);
    }
}
