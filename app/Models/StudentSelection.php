<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentSelection extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'student_id',
        'subject_id'
    ];

    public function student(){
        return $this->belongsToMany('App\Models\Student');
    }

    public function subjetc(){
        return $this->belongsToMany('App\Models\Subject');
    }
}
