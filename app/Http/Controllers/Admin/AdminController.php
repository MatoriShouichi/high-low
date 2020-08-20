<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //管理者用コントローラ
    public function add()
    {
        return view('admin.admin');
    }
}
