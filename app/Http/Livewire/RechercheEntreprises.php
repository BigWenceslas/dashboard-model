<?php

namespace App\Http\Livewire;

use Livewire\Component;
Use DB;

class RechercheEntreprises extends Component
{
    public function render()
    {
        $nbre_entreprises  = DB::table('entreprises')->count();
        $nbre_formations_gratuites = DB::table('formations')
                                        ->join('categories_formations','categories_formations.id','formations.categorie_id')
                                        ->where('categories_formations.nom','=','Nos Formations gratuites')
                                        ->count();
        return view('livewire.recherche-entreprises', compact('nbre_entreprises','nbre_formations_gratuites'));
    }
}
