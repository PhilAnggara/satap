<?php

namespace Database\Seeders;

use App\Models\Meubel;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meubel::create([
            'kode' => 'MBL-10-0001',
            'barcode' => 'gambar/example/MBL-10-0001.png',
            'nama_bangunan' => 'Meja',
            'jumlah_ruangan' => 3,
            'gambar' => 'gambar/example/img-1.jpg',
            'tanggal' => Carbon::parse('2009-1-1'),
            'kondisi' => 'Rusak Ringan',
            'keterangan' => 'Bangunan untuk ruang kelas',
        ]);
    }
}
