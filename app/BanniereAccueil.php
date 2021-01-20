<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class BanniereAccueil extends Model
{
    use Translatable;
    protected $translatable = ['titre', 'description','bouton_inscription'];
}
