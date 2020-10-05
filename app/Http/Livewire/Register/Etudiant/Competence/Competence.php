<?php

namespace App\Http\Livewire\Register\Etudiant\Competence;

use Livewire\Component;
use App\Competence as Comp;

class Competence extends Component
{
    public $titre, $descriptif,$donnees_id;
    public $updateMode = false;


    public function mount($donnees_id)
    {
        $this->donnees_id = $donnees_id;
    }

    public function render()
    {
        $competences = Comp::where('user_data','=',$this->donnees_id)->get();
        return view('livewire.register.etudiant.competence.competence',compact(['competences']));
    }

     private function resetInputFields(){
        $this->name = '';
        $this->email = '';
    }

    public function store()
    {
        dd("ok");
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

        $this->emit('userStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = User::where('id',$id)->first();
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            User::where('id',$id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }
}
