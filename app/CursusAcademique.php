<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CursusAcademique extends Model
{

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre', 'annee','document','user_data'
    ];


    /**
     * Get the post that owns the comment.
     */
    public function getUserData()
    {
        return $this->belongsTo('App\DonneesCompte', 'user_data');
    }
}
