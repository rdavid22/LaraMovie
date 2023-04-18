<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class HomeController extends Controller
{
    // Show homepage
    public function index()
    {
        $genre_family = Movie::where('genre', 'like', '%' . 'Családi' . '%')->get();
        return view('home', [
            'family' => $genre_family
        ]);
    }
}
