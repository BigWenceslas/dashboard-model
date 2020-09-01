<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
Use DB;

class ContactForm extends Component
{
    public $nom;
    public $prenom;
    public $telephone;
    public $email;
    public $message;
    public $countryCode;

    public function submit()
    {
        $this->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        
    $dateJour = new \DateTime('now');
    
    DB::table('contacts')->insert(
        ['nom' => $this->nom, 'prenom' => $this->prenom,
         'email' => $this->email, 'telephone' => $this->countryCode . $this->telephone,
         'created_at' => $dateJour, 'updated_at' => $dateJour,
         'message' => $this->message]
    );

    session()->flash('message', 'Votre requete a ete prise en compte.');
    }
    

    public function render()
    {
        return view('livewire.contact-form');
    }
}
