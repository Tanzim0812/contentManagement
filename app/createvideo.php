<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class createvideo extends Model
{
    protected $fillable = [
        'title',
        'body',
        'link',
        'status',
    ];
}
