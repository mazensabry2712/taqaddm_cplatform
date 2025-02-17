<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model 
{

    protected $table = 'quizes';
    public $timestamps = true;
    protected $fillable = array('teacher_id', 'course_id', 'name', 'description', 'file');

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

}