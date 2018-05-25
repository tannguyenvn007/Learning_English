<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_result extends Model
{
    protected $table = 'user_results' ;
    protected $guarded = [];
    public function user(){
		return $this->belongsTo('App\User','id_user','id');
    }
    public function Topic(){
		return $this->belongsTo('App\topic','id_user','id');
    }
    public function answer(){
		return $this->belongsTo('App\answer','id_user','id');
  }
  public function question(){
		return $this->belongsTo('App\question','id_user','id');
	}
}
