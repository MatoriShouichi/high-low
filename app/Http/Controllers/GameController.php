<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //ゲーム画面用コントローラ
    public function add(Request $request)
    {
        //ゲーム開始直後は0ポイントスタート、以降1点ずつプラス
        if(isset($request->score)){
            $score = $request->score;
            $life = $request->life;
        }else{
            $score = 0;
            $life = 3;
        }
        $mynum = mt_rand(1,10);
        $cpunum = mt_rand(1,10);
        
        return view('game', ['score' => $score, 'life' => $life, 'mynum' => $mynum, 'cpunum' => $cpunum]);
    }
}
