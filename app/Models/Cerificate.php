<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cerificate extends Model 
{

    protected $table = 'cerificates';
    public $timestamps = true;
    protected $fillable = array('name', 'description', 'signature', 'file', 'teacher_id', 'title', 'intro');

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }
}