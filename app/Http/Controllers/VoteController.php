<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;

class VoteController extends Controller
{
	public function index(){
    	$votes = Vote::all();
	    $numvotes = count($votes);
	    $havevotes = $numvotes>0;
	    /* the file: resources/views/votes/index.blade.php
	    will use this "index" function below */
	    return view( 'votes.index', compact('votes', 'numvotes', 'havevotes') );
    }

    public function show($id)
    {
        echo $id;
        $vote = vote::find($id);
        return view('votes.show', compact('vote'));
    }
}
