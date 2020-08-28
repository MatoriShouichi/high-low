<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TitleController extends Controller
{
    //タイトル画面用コントローラ
    public function add()
    {
        return view('title');
    }
}
