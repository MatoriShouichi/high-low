<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'score' => 'required',
        'life' => 'required',
        'mynum' => 'required',
        'cpunum' => 'required',
        'judge' => 'required',
    );
}
