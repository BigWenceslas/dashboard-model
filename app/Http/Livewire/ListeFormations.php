<?php

namespace App\Http\Livewire;
use DB;

use Livewire\Component;

class ListeFormations extends Component
{
    public function render()
    {
        $categories_formations = DB::table('categories_formations')->get();
        $formations = DB::table('formations')
                    ->select('formations.*','categories_formations.nom as nomCategorie')
                    ->join('categories_formations','categories_formations.id','formations.categorie_id')
                    ->get();
        return view('livewire.liste-formations',compact('formations','categories_formations'));
    }
}
