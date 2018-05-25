<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    protected $table = 'topics' ;
    protected $guarded = [];
    public function question(){
		return $this->hasMany('App\question','id_topic','id');
    }
    public function vocabulary(){
		return $this->hasMany('App\vocabulary','id_topic','id');
    }
    public function user_result(){
		return $this->hasMany('App\user_result ','id_topic','id');
	}
}
