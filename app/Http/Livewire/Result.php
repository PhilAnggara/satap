<?php

namespace App\Http\Livewire;

use App\Models\Bangunan;
use Livewire\Component;

class Result extends Component
{
    public $found;
    public $item;
    public $cat;

    protected $listeners = ['inputChanged'];
 
    public function inputChanged($kode)
    {
        if (empty($kode)) {

            $this->found = 0;

        } else {

            $bangunan = Bangunan::where('kode', $kode)->first();
            $meubel = Bangunan::where('kode', $kode)->first();
            $elektronik = Bangunan::where('kode', $kode)->first();
            $kbm = Bangunan::where('kode', $kode)->first();

            if ($bangunan) {
                $this->found = 1;
                $this->item = $bangunan;
                $this->cat = "bangunan";
            } elseif ($meubel) {
                $this->found = 1;
                $this->item = $meubel;
                $this->cat = "meubel";
            } elseif ($elektronik) {
                $this->found = 1;
                $this->item = $elektronik;
                $this->cat = "elektronik";
            } elseif ($kbm) {
                $this->found = 1;
                $this->item = $kbm;
                $this->cat = "kbm";
            } else {
                $this->found = 2;
            }
        }
        
    }

    public function render()
    {
        return view('livewire.result');
    }
}
