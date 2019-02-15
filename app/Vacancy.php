<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{

    protected $fillable = ['work_name','job_desc','skills','user_name','dead_year','dead_day','dead_month','user_avatar'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
