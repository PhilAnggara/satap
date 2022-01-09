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
            'nama_barang' => 'Meja Siswa',
            'jumlah' => 300,
            'gambar' => 'gambar/example/img-1.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        Meubel::create([
            'kode' => 'MBL-10-0002',
            'barcode' => 'gambar/example/MBL-10-0002.png',
            'nama_barang' => 'Kursi Siswa',
            'jumlah' => 300,
            'gambar' => 'gambar/example/img-2.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        Meubel::create([
            'kode' => 'MBL-10-0003',
            'barcode' => 'gambar/example/MBL-10-0003.png',
            'nama_barang' => 'Kursi Kantor',
            'jumlah' => 50,
            'gambar' => 'gambar/example/img-3.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
    }
}
