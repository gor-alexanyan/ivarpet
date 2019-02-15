<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['comment','user_id','news_id'];


    public function news(){
        return $this->belongsTo('App\News','news_id','id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function likes(){
        return $this->hasMany('App\Like');
    }
}
