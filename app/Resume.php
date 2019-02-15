<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable=['name',
        'surname',
        'profession',
        'b_day',
        'b_month',
        'b_year',
        'address',
        'work_experience',
        'education',
        'ability',
        'lang',
        'certificate',
        'hobby',
        'resume_pic',
        'gender'];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
