<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'code',
        'is_active',
        'student_id'
    ];

    public function student(){
        return $this->hasOne('App\Models\Student');
    }
}
