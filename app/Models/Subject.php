<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'code'
    ];

    public function students(){
        return $this->belongsToMany(
            'App\Models\Student',
            'student_selection',
            'subject_id',
            'student_id');
    }
}
