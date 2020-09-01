<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DonneesCompte extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function getUser()
    {
        return $this->belongsTo('App\User', 'user');
    }
}
