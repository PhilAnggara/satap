<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use Illuminate\Http\Request;
use Picqer;

class MainController extends Controller
{
    public function home()
    {
        return view('pages.dashboard');
    }
    
    public function barcode()
    {
        return view('pages.scan-barcode');
    }
    
    public function deleteImage(Request $request, $id)
    {
        $data = $request->all();

        if ($data['table'] == 'Bangunan') 
        {
            $item = Bangunan::find($id);
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
