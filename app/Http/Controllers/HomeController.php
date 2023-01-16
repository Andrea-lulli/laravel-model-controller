<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $all_movies = Movie::all();

        $Movie_filtered = Movie::where('title', 'Like', 'T%')->get();

        //dd($all_movies);




        return view('welcome', compact('all_movies'), compact('Movie_filtered'));
    }
}
