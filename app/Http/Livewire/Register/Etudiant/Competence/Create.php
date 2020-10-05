<?php

namespace App\Http\Livewire\Register\Etudiant\Competence;

use Livewire\Component;
use App\Competence as Comp;

class Create extends Component
{

    public $donnees_id;

    public function mount($donnees_id)
    {
        $this->donnees_id = $donnees_id;
    }

    public function store()
    {
        $validatedData = $this->validate([
            'titre' => 'required',
        ]);

        $comp_create = new Comp();
        $comp_create->user_data = $this->donnees_id;
        $comp_create->titre = $this->titre;
        $comp_create->descriptif = $this->descriptif;
        $comp_create->save();

        session()->flash('message', 'Votre competence a ete ajoutee avec succes.');

        $this->resetInputFields();
    }
    
    public function render()
    {
        return view('livewire.register.etudiant.competence.create');
    }
}
