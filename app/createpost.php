<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class createpost extends Model
{
    protected $fillable = [
        'title',
        'body',
        'image',
        'status',
    ];
}
