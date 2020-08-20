<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //ゲーム画面用コントローラ
    public function add()
    {
        return view('game');
    }
}
