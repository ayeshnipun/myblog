<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Commentt; 

class Post extends Model
{
    public function comments(){
        return $this->hasMany('App\Commentt');
    }
}
