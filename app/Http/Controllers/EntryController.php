<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    //
    public function add(Request $request)
    {
        return view('entry', ['score' => $request->score]);
    }
}
