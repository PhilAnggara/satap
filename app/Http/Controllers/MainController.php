<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use App\Models\Buku;
use App\Models\Elektronik;
use App\Models\Kesenian;
use App\Models\Laboratorium;
use App\Models\Matematika;
use App\Models\Meubel;
use App\Models\Olahraga;
use App\Models\User;
use Illuminate\Http\Request;
use Picqer;

class MainController extends Controller
{
    public function home()
    {
        $a = Bangunan::all()->count();
        $b = Meubel::all()->count();
        $c = Elektronik::all()->count();
        $d = Buku::all()->count() + Laboratorium::all()->count() + Matematika::all()->count() + Olahraga::all()->count() + Kesenian::all()->count();

        return view('pages.dashboard', [
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d
        ]);
    }
    
    public function barcode()
    {
        return view('pages.scan-barcode');
    }
    
    public function deleteImage(Request $request, $id)
    {
        $data = $request->all();

        if ($data['table'] == 'bangunan') 
        {
            $item = Bangunan::find($id);
        } 
        elseif ($data['table'] == 'meubel') 
        {
            $item = Meubel::find($id);
        }
        elseif ($data['table'] == 'elektronik') 
        {
            $item = Elektronik::find($id);
        }
        elseif ($data['table'] == 'buku') 
        {
            $item = Buku::find($id);
        }
        elseif ($data['table'] == 'laboratorium') 
        {
            $item = Laboratorium::find($id);
        }
        elseif ($data['table'] == 'matematika') 
        {
            $item = Matematika::find($id);
        }
        elseif ($data['table'] == 'olahraga') 
        {
            $item = Olahraga::find($id);
        }
        elseif ($data['table'] == 'kesenian') 
        {
            $item = Kesenian::find($id);
        }

        $item->gambar = "";
        $item->save();

        return redirect()->back()->with('success', 'Gambar Berhasil Dihapus!');
    }

    public function generateBarcodeManualy($kode)
    {
        $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        file_put_contents('storage/gambar/example/'.$kode.'.png', $generator->getBarcode($kode, $generator::TYPE_CODE_128, 4, 300));

        return back();
    }
}
