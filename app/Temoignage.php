<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Temoignage extends Model
{
    use Translatable;
    protected $translatable = ['texte'];

    /**
     * Get the post that owns the comment.
     */
    public function commentor()
    {
        return $this->belongsTo('App\User', 'user');
    }
    
}
