<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Temoignage extends Model
{

    /**
     * Get the post that owns the comment.
     */
    public function commentor()
    {
        return $this->belongsTo('App\User', 'user');
    }
    
}
