<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
   
    protected $guarded= [];
    public function User(){
        return $this->belongTo('App\User','id_user','id');

    }
}
