<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DonneesEvaluation extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'contenu', 'user_data','pourcentage_completion'
    ];

    /**
     * Get the post that owns the comment.
     */
    public function getUser()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
