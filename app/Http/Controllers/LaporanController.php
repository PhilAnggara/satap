<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Buku;
use App\Models\Meubel;
use App\Models\Bangunan;
use App\Models\Kesenian;
use App\Models\Olahraga;
use App\Models\Elektronik;
use App\Models\Matematika;
use App\Models\Laboratorium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LaporanController extends Controller
{
    public function laporanKeseluruhan()
    {
        $date = Carbon::now()->isoFormat('MMMM YYYY');
        $now = Carbon::now()->isoFormat('D MMMM Y');
        $title = 'Laporan Inventaris Barang';

        $bangunan = Bangunan::all();
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
            'bangunan' => $bangunan,
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

    public function filterKondisi(Request $request)
    {
        $date = Carbon::now()->isoFormat('MMMM YYYY');
        $now = Carbon::now()->isoFormat('D MMMM Y');
        $title = 'Laporan Inventaris Barang ('. $request->kondisi .')';

        $bangunan = Bangunan::where('kondisi', $request->kondisi)->get();
        $meubel = Meubel::where('kondisi', $request->kondisi)->get();
        $elektronik = Elektronik::where('kondisi', $request->kondisi)->get();
        $buku = Buku::where('kondisi', $request->kondisi)->get();
        $laboratorium = Laboratorium::where('kondisi', $request->kondisi)->get();
        $matematika = Matematika::where('kondisi', $request->kondisi)->get();
        $olahraga = Olahraga::where('kondisi', $request->kondisi)->get();
        $kesenian = Kesenian::where('kondisi', $request->kondisi)->get();

        $items = collect($meubel);

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pages.pdf.filter-kondisi', [
            'title' => $title,
            'items' => $items,
            'bangunan' => $bangunan,
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
    
    public function filterTanggal(Request $request)
    {
        if ($request->tgl_awal > $request->tgl_akhir) {
            return redirect()->back()->with('gagal', 'Tanggal awal lebih besar dari tanggal akhir!');
        }

        // $request->validate([
        //     'tgl_awal' => 'required|date',
        //     'tgl_akhir' => 'required|date|after:tgl_awal'
        // ]);

        $date = Carbon::now()->isoFormat('MMMM YYYY');
        $now = Carbon::now()->isoFormat('D MMMM Y');

        $awal = Carbon::parse($request->tgl_awal)->isoFormat('D MMM Y');
        $akhir = Carbon::parse($request->tgl_akhir)->isoFormat('D MMM Y');
        $title = 'Laporan Inventaris Barang ('. $awal .' - '. $akhir .')';

        $bangunan = Bangunan::whereBetween('tanggal', [$request->tgl_awal, $request->tgl_akhir])->get();
        $meubel = Meubel::whereBetween('tanggal', [$request->tgl_awal, $request->tgl_akhir])->get();
        $elektronik = Elektronik::whereBetween('tanggal', [$request->tgl_awal, $request->tgl_akhir])->get();
        $buku = Buku::whereBetween('tanggal', [$request->tgl_awal, $request->tgl_akhir])->get();
        $laboratorium = Laboratorium::whereBetween('tanggal', [$request->tgl_awal, $request->tgl_akhir])->get();
        $matematika = Matematika::whereBetween('tanggal', [$request->tgl_awal, $request->tgl_akhir])->get();
        $olahraga = Olahraga::whereBetween('tanggal', [$request->tgl_awal, $request->tgl_akhir])->get();
        $kesenian = Kesenian::whereBetween('tanggal', [$request->tgl_awal, $request->tgl_akhir])->get();

        $items = collect($meubel);

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pages.pdf.filter-tanggal', [
            'title' => $title,
            'awal' => $awal,
            'akhir' => $akhir,
            'items' => $items,
            'bangunan' => $bangunan,
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
}
