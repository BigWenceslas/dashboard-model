<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use DB;
use App\Entreprise;

class ListeEntreprises extends Component
{
    use WithPagination;
    public $nom_ville;
    public $recherche;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        $nbre_entreprises  = Entreprise::count();
        $nbre_formations_gratuites = DB::table('formations')
                                        ->join('categories_formations','categories_formations.id','formations.categorie_id')
                                        ->where('categories_formations.nom','=','Nos Formations gratuites')
                                        ->count();
        $ville_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, ville'))
                        ->groupBy('ville')->get();
        //dd($ville_stockes);
        $categories_stockes = DB::table('entreprises')->select(DB::raw('count(entreprises.id) as nbre, categories_entreprises.nom as categorie'))
                        ->join('categories_entreprises', 'entreprises.categorie', '=', 'categories_entreprises.id')
                        ->groupBy('categories_entreprises.nom')->get();
        $nombre_pages = round(Entreprise::where('ville','!=',null)->count()/5);
        if ($this->nom_ville == "" && $this->recherche == "") {
        $entreprises = Entreprise::where('ville','!=',null)->paginate(5);
        }
        if ($this->nom_ville == "" && $this->recherche != "") {
        $entreprises = Entreprise::where('nom','like','%'.$this->recherche.'%')->where('ville','!=',null)->paginate(5);
        }
        if ($this->nom_ville != "" && $this->recherche == "") {
        $entreprises = Entreprise::where('ville','=',$this->nom_ville)->where('ville','!=',null)->paginate(5);
        }
        if ($this->nom_ville != "" && $this->recherche != "") {
        $entreprises = Entreprise::where('nom','like','%'.$this->recherche.'%')
            ->where('ville','=',$this->nom_ville)->where('ville','!=',null)->paginate(5);
        }   
        //dd($entreprises);
    
        return view('livewire.liste-entreprises',compact('nbre_entreprises','nbre_formations_gratuites','ville_stockes', 
    'entreprises','categories_stockes','nombre_pages'));
    }
}
