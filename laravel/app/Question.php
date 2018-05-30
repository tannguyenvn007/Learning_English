<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';
   
    protected $guarded= [];
    public function question(){
        return $this->hasMany('App\User_test','id_question','id');

    }
    public function user_test(){
        return $this->hasMany('App\User_test','id_question','id');

    }
    public function Topic(){
        return $this->belongTo('App\Topics','id_topics','id');

    }
}
