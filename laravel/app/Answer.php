<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answer';
   
    protected $guarded= [];
    public function question(){
        return $this->belongTo('App\Question','id_question','id');

    }
    public function user_test(){
        return $this->hasMany('App\User_test','id_answer','id');

    }
}
