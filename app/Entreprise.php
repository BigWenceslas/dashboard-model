<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoriesEntreprise;


class Entreprise extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function getCategoriesEntreprise()
    {
        return $this->belongsTo(CategoriesEntreprise::class, 'categorie');
    }
}
