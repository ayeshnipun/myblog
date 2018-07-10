<?php

namespace TecHour;

use Illuminate\Database\Eloquent\Model;
use TecHour\Post;

class Commentt extends Model
{
    public function post(){
        return $this->belongsTo('TecHour\Post');
    }
}
