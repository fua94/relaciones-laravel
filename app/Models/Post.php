<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body'
    ];

    protected $hidden = [
        'post_id', 'post_type',
    ];

    public function post(){
        return $this->morphTo();
    }
}
