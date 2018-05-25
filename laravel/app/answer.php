<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $table = 'answers' ;
    protected $guarded = [];
    public function question(){
		return $this->hasMany('App\question','id_answer','id');
    }
    public function user_result(){
		return $this->belongsTo('App\user_result ','id_answer','id');
	}
}
