<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Kesenian;
use App\Models\Laboratorium;
use App\Models\Matematika;
use App\Models\Olahraga;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class KbmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'kode' => 'BKU-10-0001',
            'barcode' => 'gambar/example/BKU-10-0001.png',
            'nama_barang' => 'Buku A',
            'jumlah' => 10,
            'gambar' => 'gambar/example/img-1.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        Buku::create([
            'kode' => 'BKU-10-0002',
            'barcode' => 'gambar/example/BKU-10-0002.png',
            'nama_barang' => 'Buku B',
            'jumlah' => 20,
            'gambar' => 'gambar/example/img-2.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        Buku::create([
            'kode' => 'BKU-10-0003',
            'barcode' => 'gambar/example/BKU-10-0003.png',
            'nama_barang' => 'Buku C',
            'jumlah' => 30,
            'gambar' => 'gambar/example/img-3.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        
        Laboratorium::create([
            'kode' => 'LAB-10-0001',
            'barcode' => 'gambar/example/LAB-10-0001.png',
            'nama_barang' => 'Alat Laboratorium A',
            'jumlah' => 10,
            'gambar' => 'gambar/example/img-1.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        Laboratorium::create([
            'kode' => 'LAB-10-0002',
            'barcode' => 'gambar/example/LAB-10-0002.png',
            'nama_barang' => 'Alat Laboratorium B',
            'jumlah' => 20,
            'gambar' => 'gambar/example/img-2.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        Laboratorium::create([
            'kode' => 'LAB-10-0003',
            'barcode' => 'gambar/example/LAB-10-0003.png',
            'nama_barang' => 'Alat Laboratorium C',
            'jumlah' => 30,
            'gambar' => 'gambar/example/img-3.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        
        Matematika::create([
            'kode' => 'MAT-10-0001',
            'barcode' => 'gambar/example/MAT-10-0001.png',
            'nama_barang' => 'Alat Matematika A',
            'jumlah' => 10,
            'gambar' => 'gambar/example/img-1.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        Matematika::create([
            'kode' => 'MAT-10-0002',
            'barcode' => 'gambar/example/MAT-10-0002.png',
            'nama_barang' => 'Alat Matematika B',
            'jumlah' => 20,
            'gambar' => 'gambar/example/img-2.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        Matematika::create([
            'kode' => 'MAT-10-0003',
            'barcode' => 'gambar/example/MAT-10-0003.png',
            'nama_barang' => 'Alat Matematika C',
            'jumlah' => 30,
            'gambar' => 'gambar/example/img-3.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        
        Olahraga::create([
            'kode' => 'OLA-10-0001',
            'barcode' => 'gambar/example/OLA-10-0001.png',
            'nama_barang' => 'Alat Olahraga A',
            'jumlah' => 10,
            'gambar' => 'gambar/example/img-1.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        Olahraga::create([
            'kode' => 'OLA-10-0002',
            'barcode' => 'gambar/example/OLA-10-0002.png',
            'nama_barang' => 'Alat Olahraga B',
            'jumlah' => 20,
            'gambar' => 'gambar/example/img-2.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        Olahraga::create([
            'kode' => 'OLA-10-0003',
            'barcode' => 'gambar/example/OLA-10-0003.png',
            'nama_barang' => 'Alat Olahraga C',
            'jumlah' => 30,
            'gambar' => 'gambar/example/img-3.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        
        Kesenian::create([
            'kode' => 'KES-10-0001',
            'barcode' => 'gambar/example/KES-10-0001.png',
            'nama_barang' => 'Alat Musik A',
            'jumlah' => 10,
            'gambar' => 'gambar/example/img-1.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        Kesenian::create([
            'kode' => 'KES-10-0002',
            'barcode' => 'gambar/example/KES-10-0002.png',
            'nama_barang' => 'Alat Musik B',
            'jumlah' => 20,
            'gambar' => 'gambar/example/img-2.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
        Kesenian::create([
            'kode' => 'KES-10-0003',
            'barcode' => 'gambar/example/KES-10-0003.png',
            'nama_barang' => 'Alat Musik C',
            'jumlah' => 30,
            'gambar' => 'gambar/example/img-3.jpg',
            'tanggal' => Carbon::parse('2010-1-1'),
            'kondisi' => 'Baik',
            'keterangan' => '-',
        ]);
    }
}
