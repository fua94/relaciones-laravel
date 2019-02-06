<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'code'
    ];

    public function student(){
        return $this->hasmany('App\Models\Student');
    }
}