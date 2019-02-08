<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'address_line_1',
        'address_line_2',
        'address_line_3'
    ];

    protected $hidden = [
        'address_id', 'address_type',
    ];

    public function address(){
        return $this->morphTo();
    }
}
