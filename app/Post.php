<?php

namespace TecHour;

use Illuminate\Database\Eloquent\Model;
use TecHour\Commentt; 

class Post extends Model
{
    public function user(){
        return $this->belongsTo('TecHour\User');
    }

    public function comment(){
        return $this->hasMany('TecHour\Commentt');
    }
}
