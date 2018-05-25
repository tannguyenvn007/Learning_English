<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $table = 'questions' ;
    protected $guarded = [];
    public function answer(){
		return $this->hasMany('App\answer ','id_question','id');
    }
    public function topic(){
		return $this->belongsTo('App\topic ','id_question','id');
	}
}
