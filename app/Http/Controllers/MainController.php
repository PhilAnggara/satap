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
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

    public function cetakLaporan()
    {
        $date = Carbon::now()->isoFormat('MMMM YYYY');
        $now = Carbon::now()->isoFormat('D MMMM Y');
        $title = 'Laporan Inventaris Barang';

        $meubel = Meubel::all();
        $elektronik = Elektronik::all();
        $buku = Buku::all();
        $laboratorium = Laboratorium::all();
        $matematika = Matematika::all();
        $olahraga = Olahraga::all();
        $kesenian = Kesenian::all();

        $items = collect($meubel);

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pages.pdf.laporan', [
            'title' => $title,
            'items' => $items,
            'meubel' => $meubel,
            'elektronik' => $elektronik,
            'buku' => $buku,
            'laboratorium' => $laboratorium,
            'matematika' => $matematika,
            'olahraga' => $olahraga,
            'kesenian' => $kesenian,
        ]);

        return $pdf->stream($title);
    }

    public function generateBarcodeManualy($kode)
    {
        $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        file_put_contents('storage/gambar/example/'.$kode.'.png', $generator->getBarcode($kode, $generator::TYPE_CODE_128, 4, 300));

        return back();
    }
}
