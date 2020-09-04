<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
Use DB;
use Livewire\WithFileUploads;
use App\Contact;

class ContactForm extends Component
{
    use WithFileUploads;
    public $nom;
    public $prenom;
    public $telephone;
    public $email;
    public $message;
    public $countryCode;
    public $sujet;
    public $pieces_jointes;

    public function submit()
    {
        $this->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required|min:7',
            'email' => 'required',
            'message' => 'required|min:6',
        ]);

        if ($this->sujet == "image") {
            $this->validate([
                'pieces_jointes.*' => 'image|required',
            ]);
        }elseif($this->sujet == "document"){
            $this->validate([
                'pieces_jointes.*' => 'file|required',
            ]);
        }
        
    $dateJour = new \DateTime('now');

    //Send Email

    //End Send Email

    //Store Contact
    $fichiers = [];
    foreach ($this->pieces_jointes as $piece_jointe) {
       // dd($piece_jointe);
        $piece_jointe->store('contacts','l_file');
        $fichiers[] = $piece_jointe->getFileName();
    }
    $contact = Contact::create([
        'nom' => $this->nom,
        'prenom' => $this->prenom,
        'telephone' => $this->countryCode. " " .$this->telephone,
        'email' => $this->email,
        'message' => $this->message,
        'pieces_jointes' => implode('|',$fichiers)
    ]);
    //End Store Contact

    session()->flash('message', 'Votre requete a ete prise en compte.');
    }
    

    public function render()
    {
        return view('livewire.contact-form');
    }
}
