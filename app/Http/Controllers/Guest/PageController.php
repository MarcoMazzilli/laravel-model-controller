<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){

        $movies = Movie::all();


        return view('home', compact('movies'));
    }

    public function details($id){

        $movie = Movie::where('id', $id)->first();
        // $movie = Movie::find($id);
        // @dd($movie);


        return view('details',compact('movie'));
    }

}
