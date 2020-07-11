<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class ListeEntreprises extends Component
{
    public $ville_stockes;
    public $categories_stockes;
    public $entreprises;
    public $name;public $ville_recherche;

    public function render()
    {
        $nbre_entreprises  = DB::table('entreprises')->count();
        $nbre_formations_gratuites = DB::table('formations')
                                        ->join('categories_formations','categories_formations.id','formations.categorie_id')
                                        ->where('categories_formations.nom','=','Nos Formations gratuites')
                                        ->count();
        if ($this->name == '' && $this->ville_recherche == '') {
        $this->entreprises = DB::table('entreprises')->get()->toArray();
        $this->ville_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, ville'))
                        ->groupBy('ville')->get()->toArray();
        $this->categories_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, categorie'))
                        ->groupBy('categorie')->get()->toArray();
        }
        if ($this->name == '' && $this->ville_recherche != '') {
            $this->entreprises = DB::table('entreprises')
                                ->where('entreprises.ville','=',$this->ville_recherche)
                                ->get()->toArray();
            $this->ville_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, ville'))
                ->groupBy('ville')->get()->toArray();
            $this->categories_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, categorie'))
                ->groupBy('categorie')->get()->toArray();
        }

    if ($this->name != '' && $this->ville_recherche == '') {
        $this->entreprises = DB::table('entreprises')
                                ->where('entreprises.nom','like','%'.$this->name.'%')
                                ->orWhere('entreprises.categorie','like','%'.$this->name.'%')
                                ->orWhere('entreprises.description','like','%'.$this->name.'%')
                                ->orWhere('entreprises.services_produits','like','%'.$this->name.'%')
                                ->orWhere('entreprises.adresse','like','%'.$this->name.'%')
                                ->get()->toArray();
        $this->ville_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, ville'))
            ->groupBy('ville')->get()->toArray();
        $this->categories_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, categorie'))
            ->groupBy('categorie')->get()->toArray();
    }

    if ($this->name != '' && $this->ville_recherche != '') {
        $this->entreprises = DB::table('entreprises')
                                ->where('entreprises.nom','like','%'.$this->name.'%')
                                ->orWhere('entreprises.categorie','like','%'.$this->name.'%')
                                ->orWhere('entreprises.description','like','%'.$this->name.'%')
                                ->orWhere('entreprises.services_produits','like','%'.$this->name.'%')
                                ->orWhere('entreprises.adresse','like','%'.$this->name.'%')
                                ->where('entreprises.ville','=',$this->ville_recherche)
                                ->get()->toArray();
        $this->ville_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, ville'))
            ->groupBy('ville')->get()->toArray();
        $this->categories_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, categorie'))
            ->groupBy('categorie')->get()->toArray();
    }

                        //dd($this->ville_stockes);
        return view('livewire.liste-entreprises',compact('nbre_entreprises','nbre_formations_gratuites'));
    }
}
