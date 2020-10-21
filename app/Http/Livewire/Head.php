<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Head extends Component
{
    public $viewname;
    public function mount($viewname)
    {
        $this->viewname = $viewname;
    }

    public function render()
    {
        return view('livewire.head');
    }
}
