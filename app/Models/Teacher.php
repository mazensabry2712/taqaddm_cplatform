<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model 
{

    protected $table = 'teachers';
    public $timestamps = true;
    protected $fillable = array('name', 'type', 'image', 'age', 'gender', 'phone', 'email', 'cv', 'facebook_link', 'twitter_link', 'insta_link', 'tiktok_link', 'password');

    public function cerificates()
    {
        return $this->hasMany('App\Models\Cerificate');
    }

    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }

    public function assistants()
    {
        return $this->hasMany('App\Models\Assistant');
    }

    public function quizes()
    {
        return $this->hasMany('App\Models\Quiz');
    }

    public function parents()
    {
        return $this->hasMany('App\Models\Parentt');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }

}