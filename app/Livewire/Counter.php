<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $date;

    public function render()
    {
        $this->date = date('H:i:s');
        return view('livewire.counter');
    }
}
