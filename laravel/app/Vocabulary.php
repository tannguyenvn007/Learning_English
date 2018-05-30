<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $table = 'vocabulary';
    protected $fillable = ['name'];
   
    protected $guarded= [];
    public function Comment(){
        return $this->hasMany('App\Comment','id_user','id');

    }
}
