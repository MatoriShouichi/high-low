<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameoverController extends Controller
{
    //
    public function add(Request $request)
    {
        return view('gameover', 'score'=>$request->score);
    }
}
