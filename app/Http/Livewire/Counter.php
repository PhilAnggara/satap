<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{
    public $count;

    protected $listeners = ['echo:my-channel,NewUser' => 'recount'];
 
    public function recount()
    {
        $this->count = User::where('approved',0)->count();
    }

    public function mount()
    {
        $this->count = User::where('approved',0)->count();
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
