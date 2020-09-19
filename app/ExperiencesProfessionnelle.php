<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ExperiencesProfessionnelle extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'poste', 'annee','duree',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function getUserData()
    {
        return $this->belongsTo('App\DonneesCompte', 'user_data');
    }
}
