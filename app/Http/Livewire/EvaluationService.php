<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use DB;

class EvaluationService extends Component
{
    public $question_1;
    public $question_2;
    public $question_3;
    public $question_4;
    public $question_5;
    public $question_6;
    public $question_7;
    public $question_8;
    public $question_9;
    public $question_10;

    public function submit()
    {
        $this->validate([
            'question_1' => 'required',
            'question_2' => 'required',
            'question_3' => 'required',
            'question_4' => 'required',
            'question_5' => 'required',
            'question_6' => 'required',
            'question_7' => 'required',
            'question_8' => 'required',
            'question_9' => 'required',
            'question_10' => 'required',
        ]);
    }

    public function saveContact()
    {
        
    }

    public function render()
    {
        return view('livewire.evaluation-service');
    }
}
