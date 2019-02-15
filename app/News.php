<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    public function comments(){
        return $this->hasMany('App\Comment','news_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }


}
