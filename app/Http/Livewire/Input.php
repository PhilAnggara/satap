<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Input extends Component
{
    public $kode;

    public function updatedKode()
    {
        $this->emit('inputChanged', $this->kode);
    }

    public function render()
    {
        return view('livewire.input');
    }
}
