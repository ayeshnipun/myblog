<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Commentt; 

class Post extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comment(){
        return $this->hasMany('App\Commentt');
    }
}
