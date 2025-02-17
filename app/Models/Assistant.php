<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assistant extends Model 
{

    protected $table = 'assistants';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'password', 'phone', 'age', 'gender', 'whatsapp', 'telegram', 'facebook_link', 'teacher_id');

    public function teacher_id()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

}