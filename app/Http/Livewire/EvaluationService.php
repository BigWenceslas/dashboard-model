<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use DB;

class EvaluationService extends Component
{
    public $question_1; public $question_2; public $question_3;
    public $question_4; public $question_5; public $question_6;
    public $question_7; public $question_8; public $question_9;
    public $question_10;

    public function submit()
    {
        $this->validate([
            'question_1' => 'required','question_2' => 'required', 'question_3' => 'required',
            'question_4' => 'required','question_5' => 'required', 'question_6' => 'required',
            'question_7' => 'required','question_8' => 'required', 'question_9' => 'required',
            'question_10' => 'required',
        ]);
        
    $dateJour = new \DateTime('now');

    DB::table('evaluations')->insert(
    ['question_1' => $this->question_1, 'question_2' => $this->question_2,
     'question_3' => $this->question_3, 'question_4' => $this->question_4,
     'question_5' => $this->question_5, 'question_6' => $this->question_6,
     'question_7' => $this->question_7, 'question_8' => $this->question_8,
     'question_9' => $this->question_9, 'question_10' => $this->question_10,
     'created_at' => $dateJour, 'updated_at' => $dateJour,]
    );

    session()->flash('message', 'Votre requete a ete prise en compte.');

        
    }

    public function render()
    {
        return view('livewire.evaluation-service');
    }
}
