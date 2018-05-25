<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vocabulary extends Model
{
    protected $table = 'vocabularies' ;
    protected $guarded = [];
    public function topic(){
		return $this->belongsTo('App\topic','id_topic','id');
	}
}
