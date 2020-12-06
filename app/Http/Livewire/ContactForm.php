<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
Use DB;
use Livewire\WithFileUploads;
use App\Contact;
use App\Configuration;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

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
        /* Mail::to("bessala93@gmail.com")->send(new ContactMail($this->message,
        $this->countryCode. ' ' . $this->telephone, $this->email,$this->nom. ' ' . $this->prenom)
        ); */
        Mail::send('mails.contact',
            array(
            'nom' => $this->nom. ' ' . $this->prenom,
            'email' => $this->email,
            'telephone' => $this->countryCode. ' ' . $this->telephone,
            'message2' => $this->message,
            'logo' => env('APP_URL')."/images/Job_logo.png",
            'first_image' => env('APP_URL')."/images/first_imag.png",
            'second_image' => env('APP_URL')."/images/Guy_computer.png"
            ), function($message)
            {
                $adresse_expedition = Configuration::where('cle', 'email_contactez_nous')->first()->valeur;
                $message->from('contact@africkup.com','Africkup');
                $message->to($adresse_expedition, 'Africkup')->subject('Donnees Formulaire Contact');
                //dd($this->pieces_jointes);
                if ($this->pieces_jointes != null) {
                    foreach ($this->pieces_jointes as $key => $piece_jointe) {
                        $message->attach($piece_jointe->getRealPath());
                    }
                }
            });
    //End Send Email

    //Store Contact
    $fichiers = [];
    if ($this->pieces_jointes != null) {
    foreach ($this->pieces_jointes as $piece_jointe) {
       // dd($piece_jointe);
        $piece_jointe->store('contacts','l_file');
        $fichiers[] = $piece_jointe->getFileName();
        }
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
