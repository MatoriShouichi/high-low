<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowtoController extends Controller
{
    //How to play用コントローラ
    public function add()
    {
        return view('howto');
    }
}
