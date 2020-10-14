<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class ListeServices extends Component
{
    public $servicesByName='';
    public $servicesResult;

    public function render()
    {
        $categories_services = DB::table('categories_services')->get();

        $devise = DB::table('configurations')
                    ->where('configurations.cle','=','devise')
                    ->first();

        if ($this->servicesByName == '') {
        $this->servicesResult = DB::table('services')
                    ->select('services.*','categories_services.nom as nomCategorie')
                    ->join('categories_services','categories_services.id','services.categorie_id')
                    ->get()->toArray();
        } else {
        $this->servicesResult = DB::table('services')
                    ->select('services.*','categories_services.nom as nomCategorie')
                    ->join('categories_services','categories_services.id','services.categorie_id')
                    ->where('services.nom','like','%'.$this->servicesByName.'%')
                    ->get()->toArray();
        }           
        return view('livewire.liste-services',compact('categories_services','devise'));
    }

}
