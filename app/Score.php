<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    //
    protected $guarded = array('id');
    
    public static $rules = array(
        'user_id' => 'required',
        );
        
        public function user()
    {
        return $this->belongsTo('App\User');
    }
}
