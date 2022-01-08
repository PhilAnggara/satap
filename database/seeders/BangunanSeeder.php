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
            'nama_bangunan' => 'Bangunan Satu',
            'jumlah_ruangan' => 3,
            'tanggal' => Carbon::parse('2009-1-1'),
            'kondisi' => 'Rusak Ringan',
            'keterangan' => 'Bangunan untuk ruang kelas',
        ]);
        Bangunan::create([
            'kode' => 'BAN-10-0002',
            'nama_bangunan' => 'Bangunan Dua',
            'jumlah_ruangan' => 2,
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => 'Bangunan untuk kantor',
        ]);
        Bangunan::create([
            'kode' => 'BAN-12-0003',
            'nama_bangunan' => 'Bangunan Tiga',
            'jumlah_ruangan' => 5,
            'tanggal' => Carbon::parse('2012-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
    }
}
