<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class ListeServices extends Component
{
    public function render()
    {
        $categories_services = DB::table('categories_services')->get();
        $services = DB::table('services')
                    ->select('services.*','categories_services.nom as nomCategorie')
                    ->join('categories_services','categories_services.id','services.categorie_id')
                    ->get();

        $devise = DB::table('configurations')
                    ->where('configurations.cle','=','devise')
                    ->first();
    
                    
        return view('livewire.liste-services',compact('categories_services','services','devise'));
    }
}
