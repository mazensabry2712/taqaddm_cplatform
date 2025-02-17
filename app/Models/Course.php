<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model 
{

    protected $table = 'courses';
    public $timestamps = true;
    protected $fillable = array('name', 'description', 'video', 'teacher_id');

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }
    
    public function resources()
    {
        return $this->hasMany('App\Models\Resource');
    }

    public function qizes()
    {
        return $this->hasMany('App\Models\Quiz');
    }

}