<?php

namespace Database\Seeders;

use App\Models\Bangunan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BangunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bangunan::create([
            'kode' => 'BAN-09-0001',
            'barcode' => 'gambar/example/BAN-09-0001.png',
            'nama_bangunan' => 'Bangunan A',
            // 'jumlah_ruangan' => 3,
            'gambar' => 'gambar/example/img-1.jpg',
            'tanggal' => Carbon::parse('2009-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => 'Ruang kelas',
        ]);
        Bangunan::create([
            'kode' => 'BAN-10-0002',
            'barcode' => 'gambar/example/BAN-10-0002.png',
            'nama_bangunan' => 'Bangunan B',
            // 'jumlah_ruangan' => 2,
            'gambar' => 'gambar/example/img-2.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => 'Kantor',
        ]);
        Bangunan::create([
            'kode' => 'BAN-12-0003',
            'barcode' => 'gambar/example/BAN-12-0003.png',
            'nama_bangunan' => 'Bangunan C',
            // 'jumlah_ruangan' => 5,
            'tanggal' => Carbon::parse('2012-1-1'),
            'kondisi' => 'Rusak Ringan',
            'keterangan' => '-',
        ]);
    }
}
