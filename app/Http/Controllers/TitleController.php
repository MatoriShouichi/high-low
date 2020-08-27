<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TitleController extends Controller
{
    //タイトル画面用コントローラ
    public function add()
    {
        /*
        $score = -1;
        $life = 2;
        $mynum = mt_rand(1,10);
        $cpunum = mt_rand(1,10);
        */
        return view('title');
        //, ['score' => $score, 'life' => $life, 'mynum' => $mynum, 'cpunum' => $cpunum]);
    }
}
