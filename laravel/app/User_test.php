<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_test extends Model
{
    protected $table = 'user_test';
   
    protected $guarded= [];
    public function user (){
        return $this->hasMany('App\User','id_user','id');

    }
    public function question  (){
        return $this->hasMany('App\Question','id_question','id');

    }
    public function answer (){
        return $this->hasMany('App\Answer','id_answer','id');

    }
    public function topic (){
        return $this->hasMany('App\Topics','id_topics','id');

    }
}
