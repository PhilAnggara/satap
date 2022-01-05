<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function generateKode($collection, $prefix, $data, )
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
}
