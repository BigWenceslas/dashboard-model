<?php

namespace App\Http\Livewire;
use DB;

use Livewire\Component;

class ListeFormations extends Component
{
    public $formationsByName='';
    public $formationsResult;
    public function render()
    {
        $categories_formations = DB::table('categories_formations')->get();
         $devise = DB::table('configurations')
                    ->where('configurations.cle','=','devise')
                    ->first();
                    if ($this->formationsResult == '') {
                    $this->formationsResult = DB::table('formations')
                                ->select('formations.*','categories_formations.nom as nomCategorie')
                                ->join('categories_formations','categories_formations.id','formations.categorie_id')
                                ->get()->toArray();
                    } else {
                    $this->formationsResult = DB::table('formations')
                                ->select('formations.*','categories_formations.nom as nomCategorie')
                                ->join('categories_formations','categories_formations.id','formations.categorie_id')
                                ->where('formations.nom','like','%'.$this->formationsByName.'%')
                                ->get()->toArray();
                    }
                    

        return view('livewire.liste-formations',compact('categories_formations','devise'));
    }
}
