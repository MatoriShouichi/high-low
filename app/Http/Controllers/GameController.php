<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //ゲーム画面用アクション
    public function game_add(Request $request)
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
    
    //タイトル画面表示
    public function title_add()
    {
        return view('title');
    }
    
    //How to play表示
    public function howto_add()
    {
        return view('howto');
    }
    
    //ハイスコア表示
    public function hiscore_add()
    {
        return view('highscore');
    }
    
    //ゲームオーバー用表示
    public function gameover_add(Request $request)
    {
        return view('gameover', ['score' => $request->score]);
    }
    
    //エントリー画面用表示
    public function entry_add(Request $request)
    {
        return view ('entry', ['score' => $request->score]);
    }
    
        //ジャッジ用アクション
public function judge(Request $request)
    {
        
        if($request->mynum > $request->cpunum && $request->decision == "high"){
            // 選択high,結果highで正解
            $highlow = "high";
            $judge = "正解";
            $request->score++;
            return view('judge', ['score' => $request->score, 'life' => $request->life, 'mynum' => $request->mynum, 'cpunum' => $request->cpunum, 'decision' => $request->decision, 'highlow' => $highlow, 'judge' => $judge]);
        }elseif($request->mynum <= $request->cpunum && $request->decision == "low"){
            // 選択low,結果lowで正解
            $highlow = "low";
            $judge = "正解";
            $request->score++;
            return view('judge', ['score' => $request->score, 'life' => $request->life, 'mynum' => $request->mynum, 'cpunum' => $request->cpunum, 'decision' => $request->decision, 'highlow' => $highlow, 'judge' => $judge]);
        }elseif($request->mynum > $request->cpunum && $request->decision == "low"){
            // 選択low,結果highで不正解
            $highlow = "high";
            $judge = "不正解";
            $request->life--;
            if($request->life == 0){
                return redirect (route('gameover', ['score' => $request->score]));
            }else{
                return view('judge', ['score' => $request->score, 'life' => $request->life, 'mynum' => $request->mynum, 'cpunum' => $request->cpunum, 'decision' => $request->decision, 'highlow' => $highlow, 'judge' => $judge]);
            }
        }else{
            // 選択high,結果lowで不正解
            $highlow = "low";
            $judge = "不正解";
            $request->life--;
            if($request->life == 0){
                return redirect (route('gameover', ['score' => $request->score]));
            }else{
                return view('judge', ['score' => $request->score, 'life' => $request->life, 'mynum' => $request->mynum, 'cpunum' => $request->cpunum, 'decision' => $request->decision, 'highlow' => $highlow, 'judge' => $judge]);
            }
        }
    }
}
