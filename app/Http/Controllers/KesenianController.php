<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneralRequest;
use App\Models\Kesenian;
use Illuminate\Http\Request;

class KesenianController extends Controller
{
    
    public function index()
    {
        $title = 'Alat Kesenian';
        $type = 'kesenian';
        $items = Kesenian::all()->sortDesc();
        
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

        $data['kode'] = $this->generateKode('KES', $data, Kesenian::all());
        $data['barcode'] = $this->generateBarcode($data['kode']);

        if ($request['gambar']) {
            $data['gambar'] = $request->file('gambar')->store('gambar/bangunan', 'public');
        }

        Kesenian::create($data);
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

        $data['kode'] = $this->updateKode('KES', $data, $id);
        $data['barcode'] = $this->generateBarcode($data['kode']);

        if ($request['gambar']) {
            $data['gambar'] = $request->file('gambar')->store('gambar/bangunan', 'public');
        }
        
        $item = Kesenian::find($id);
        $item->update($data);
        
        return redirect()->back()->with('success', 'Data Berhasil Disimpan!');
    }
    
    public function destroy($id)
    {
        $item = Kesenian::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }
}
