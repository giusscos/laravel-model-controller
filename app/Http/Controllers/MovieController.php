<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {

        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    public function show($id){

        $movie = Movie::find($id);

        return view('movies.show', compact('movie'));
    }
}
