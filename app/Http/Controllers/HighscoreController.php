<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HighscoreController extends Controller
{
    //ハイスコア用コントローラ
    public function add()
    {
        return view('highscore');
    }
}
