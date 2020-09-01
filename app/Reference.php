<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Reference extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function getUserData()
    {
        return $this->belongsTo('App\DonneesCompte', 'user_data');
    }
}
