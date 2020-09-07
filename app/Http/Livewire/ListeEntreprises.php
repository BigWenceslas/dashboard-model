<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use DB;
use App\Entreprise;

class ListeEntreprises extends Component
{
    use WithPagination;
    public $name;
    public $ville_recherche;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $nbre_entreprises  = DB::table('entreprises')->count();
        $nbre_formations_gratuites = DB::table('formations')
                                        ->join('categories_formations','categories_formations.id','formations.categorie_id')
                                        ->where('categories_formations.nom','=','Nos Formations gratuites')
                                        ->count();
        $ville_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, ville'))
                        ->groupBy('ville')->get();
        //dd($ville_stockes);
        $entreprises = Entreprise::paginate(5);
        $categories_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, categorie'))
                        ->groupBy('categorie')->get();
        $nombre_pages = round(Entreprise::count()/5);
        
    return view('livewire.liste-entreprises',compact('nbre_entreprises','nbre_formations_gratuites','ville_stockes', 
    'entreprises','categories_stockes','nombre_pages'));
      /*   if ($this->name == '' && $this->ville_recherche == '') {
        $this->entreprises = Entreprise::paginate(9)->toArray();
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
                                ->Where('entreprises.ville','=',$this->ville_recherche)
                                ->where('entreprises.nom','like','%'.$this->name.'%')
                                ->get()->toArray();
        $this->ville_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, ville'))
            ->groupBy('ville')->get()->toArray();
        $this->categories_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, categorie'))
            ->groupBy('categorie')->get()->toArray();
    } */

    //dd($this->ville_stockes);
    }
}
