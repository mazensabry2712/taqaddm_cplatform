<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model 
{

    protected $table = 'students';
    public $timestamps = true;
    protected $fillable = array('name', 'year', 'academic', 'image', 'phone', 'email', 'password', 'gender', 'teacher_id');

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function parents(){
        $this->belongsToMany(Parentt::class,"student_parent");
    }

}