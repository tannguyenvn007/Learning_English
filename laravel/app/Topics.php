<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    protected $table = 'topics';
   
    protected $guarded= [];

    public function user_test(){
        return $this->hasMany('App\User_test','id_topics','id');

    }
    public function question(){
        return $this->hasMany('App\User_test','id_topics','id');

    }
    public function answer(){
        return $this->hasMany('App\User_test','id_topics','id');

    }
}
