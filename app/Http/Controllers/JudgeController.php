<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JudgeController extends Controller
{
    //
    public function add(Request $request)
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
                return view('gameover');
            }else{
                return view('judge', ['score' => $request->score, 'life' => $request->life, 'mynum' => $request->mynum, 'cpunum' => $request->cpunum, 'decision' => $request->decision, 'highlow' => $highlow, 'judge' => $judge]);
            }
        }else{
            // 選択high,結果lowで不正解
            $highlow = "low";
            $judge = "不正解";
            $request->life--;
            if($request->life == 0){
                return view('gameover');
            }else{
                return view('judge', ['score' => $request->score, 'life' => $request->life, 'mynum' => $request->mynum, 'cpunum' => $request->cpunum, 'decision' => $request->decision, 'highlow' => $highlow, 'judge' => $judge]);
            }
        }
    }
}
