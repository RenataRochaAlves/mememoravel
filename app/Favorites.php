<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    protected $fillable = [
        'user_id',
        'meme_id'
    ];

    public function meme()
    {
        return $this->belongsTo('App\Meme');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
