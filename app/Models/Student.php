<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'city_id'
    ];

    public function city(){
        return $this->belongsTo('App\Models\City');
    }

    public function card(){
        return $this->hasOne('App\Models\Card');
    }

    public function subjects(){
        return $this->belongsToMany(
            'App\Models\Subject',
            'student_selections',
            'student_id',
            'subject_id');
    }

    public function posts(){
        return $this->morphMany('App\Models\Post', 'post');
    }

    public function address(){
        return $this->morphOne('App\Models\Address', 'address');
    }
}
