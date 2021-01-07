<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Entreprise;


class CategoriesEntreprise extends Model
{
    /**
     * Get the articles of blog post.
     */
    public function entreprises()
    {
        return $this->hasMany(Entreprise::class);
    }
    
}
