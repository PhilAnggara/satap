<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Picqer;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function generateKode($prefix, $data, $collection)
    {
        $year = Carbon::parse($data['tanggal'])->isoFormat('YY');

        if ($collection->isEmpty()) {
            $tail = '0001';
        } else {
            $tail = Str::padLeft($collection->last()->id + 1, 4, 0);
        }

        $kode = $prefix. "-". $year. "-". $tail;

        return $kode;
    }

    public function updateKode($prefix, $data, $id)
    {
        $year = Carbon::parse($data['tanggal'])->isoFormat('YY');
        $tail = Str::padLeft($id, 4, 0);

        $kode = $prefix. "-". $year. "-". $tail;

        return $kode;
    }

    public function generateBarcode($kode)
    {
        $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        file_put_contents('storage/gambar/barcode/'.$kode.'.png', $generator->getBarcode($kode, $generator::TYPE_CODE_128, 4, 300));
        $barcode = 'gambar/barcode/'.$kode.'.png';

        return $barcode;
    }
}
