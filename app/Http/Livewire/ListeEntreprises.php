<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class ListeEntreprises extends Component
{
    public function render()
    {
         $entreprises = DB::table('entreprises')
                    ->get();
        return view('livewire.liste-entreprises',compact('entreprises'));
    }
}
