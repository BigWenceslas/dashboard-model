<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'email','telephone', 'pieces_jointes', 'message',
    ];

    
}
