<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneralRequest;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    
    public function index()
    {
        $title = 'Buku';
        $type = 'buku';
        $items = Buku::all()->sortDesc();
        
        return view('pages.kbm', [
            'items' => $items,
            'title' => $title,
            'type' => $type
        ]);
    }
    
    public function create()
    {
        //
    }
    
    public function store(GeneralRequest $request)
    {
        $data = $request->all();

        $data['kode'] = $this->generateKode('BKU', $data, Buku::all());
        $data['barcode'] = $this->generateBarcode($data['kode']);

        if ($request['gambar']) {
            $data['gambar'] = $request->file('gambar')->store('gambar/bangunan', 'public');
        }

        Buku::create($data);
        return redirect()->back()->with('success', 'Data Berhasil Disimpan!');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(GeneralRequest $request, $id)
    {
        $data = $request->all();

        $data['kode'] = $this->updateKode('BKU', $data, $id);
        $data['barcode'] = $this->generateBarcode($data['kode']);

        if ($request['gambar']) {
            $data['gambar'] = $request->file('gambar')->store('gambar/bangunan', 'public');
        }
        
        $item = Buku::find($id);
        $item->update($data);
        
        return redirect()->back()->with('success', 'Data Berhasil Disimpan!');
    }
    
    public function destroy($id)
    {
        $item = Buku::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }
}
