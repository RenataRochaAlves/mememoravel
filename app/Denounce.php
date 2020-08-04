<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denounce extends Model
{
    protected $fillable = [
        'id_post',
        'id_denunciator',
        'spam',
        'nudity',
        'violence',
        'hate',
        'suicide',
        'other',
        'text_other'
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
