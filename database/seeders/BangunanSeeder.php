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
            'tanggal' => Carbon::parse('2019-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => 'Bangunan untuk ruang kelas',
        ]);
    }
}
