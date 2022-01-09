<?php

namespace App\Http\Livewire;

use App\Models\Bangunan;
use App\Models\Buku;
use App\Models\Elektronik;
use App\Models\Kesenian;
use App\Models\Laboratorium;
use App\Models\Matematika;
use App\Models\Meubel;
use App\Models\Olahraga;
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
            $meubel = Meubel::where('kode', $kode)->first();
            $elektronik = Elektronik::where('kode', $kode)->first();
            $buku = Buku::where('kode', $kode)->first();
            $laboratorium = Laboratorium::where('kode', $kode)->first();
            $matematika = Matematika::where('kode', $kode)->first();
            $olahraga = Olahraga::where('kode', $kode)->first();
            $kesenian = Kesenian::where('kode', $kode)->first();

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
            } elseif ($buku) {
                $this->found = 1;
                $this->item = $buku;
                $this->cat = "buku";
            } elseif ($laboratorium) {
                $this->found = 1;
                $this->item = $laboratorium;
                $this->cat = "laboratorium";
            } elseif ($matematika) {
                $this->found = 1;
                $this->item = $matematika;
                $this->cat = "matematika";
            } elseif ($olahraga) {
                $this->found = 1;
                $this->item = $olahraga;
                $this->cat = "olahraga";
            } elseif ($kesenian) {
                $this->found = 1;
                $this->item = $kesenian;
                $this->cat = "kesenian";
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
