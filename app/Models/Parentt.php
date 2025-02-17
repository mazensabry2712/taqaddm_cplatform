<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parentt extends Model 
{
    protected $table = 'parents';
    public $timestamps = true;
    protected $fillable = array('name', 'age', 'email', 'phone', 'gender', 'password', 'teacher_id');

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function students(){
        $this->belongsToMany(Student::class,"student_parent");
    }

}