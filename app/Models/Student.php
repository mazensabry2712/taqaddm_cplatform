<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use CanResetPassword;
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