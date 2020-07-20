<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meme extends Model
{
    protected $fillable = [
        'name',
        'link',
        'year',
        'upload_date'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
