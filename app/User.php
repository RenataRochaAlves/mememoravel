<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function messages()
    // {
    //     return [
    //         'name.required' => 'O campo é obrigatório',
    //         'email.required' => 'O campo é obrigatório',
    //         'username.required' => 'O campo é obrigatório',
    //         'password.required' => 'O campo é obrigatório',
    //         'email.unique:users' => 'O e-mail já foi cadastrado',
    //         'username.unique:users' => 'O username já foi cadastrado',
    //         'password.confirmed' => 'A senha e a confirmação precisam ser iguais'
    //     ];
    // }

    public function memes()
    {
        return $this->hasMany('App\Meme');
    }

    public function denounces()
    {
        return $this->hasMany('App\Denounce');
    }
}
