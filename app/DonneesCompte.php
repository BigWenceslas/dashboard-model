<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DonneesCompte extends Model
{
    /**
     * Get the post that owns the comment.
     */

    public function getCompetence()
    {
        return $this->hasMany('App\Competence', 'user_data');
    }
    public function getUser()
    {
        return $this->belongsTo('App\User', 'user');
    }
}
