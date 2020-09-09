<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joke;

class JokeController extends Controller
{
    // Display a listing of the resource.
    public function index(){
    	$jokes = Joke::all();
    $numJokes = count($jokes);
    $haveJokes = $numJokes>0;
    /* the file: resources/views/jokes/index.blade.php
    will use this "index" function below */
    return view( 'jokes.index', compact('jokes', 'numJokes', 'haveJokes'));
    }
}
