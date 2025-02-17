<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model 
{

    protected $table = 'resources';
    public $timestamps = true;
    protected $fillable = array('name', 'description', 'file', 'course_id');

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

}