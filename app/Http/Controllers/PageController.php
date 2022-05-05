<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index()
    {
        $myMovie = new Movie();
        $myMovie->title = 'Cenerentola';
        $myMovie->save();

        $myMovies = Movie::all();
        
        return view('HomePage', ["myMovies" => $myMovies]);
    }
}
