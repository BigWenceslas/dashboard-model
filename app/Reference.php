<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Reference extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre', 'descriptif', 'user_data'
    ];

    /**
     * Get the post that owns the comment.
     */
    public function getUserData()
    {
        return $this->belongsTo('App\DonneesCompte', 'user_data');
    }
}
