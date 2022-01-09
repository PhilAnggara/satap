<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneralRequest;
use App\Models\Olahraga;
use Illuminate\Http\Request;

class OlahragaController extends Controller
{
    
    public function index()
    {
        $title = 'Alat Olahraga';
        $type = 'olahraga';
        $items = Olahraga::all()->sortDesc();
        
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

        $data['kode'] = $this->generateKode('OLA', $data, Olahraga::all());
        $data['barcode'] = $this->generateBarcode($data['kode']);

        if ($request['gambar']) {
            $data['gambar'] = $request->file('gambar')->store('gambar/bangunan', 'public');
        }

        Olahraga::create($data);
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

        $data['kode'] = $this->updateKode('MBL', $data, $id);
        $data['barcode'] = $this->generateBarcode($data['kode']);

        if ($request['gambar']) {
            $data['gambar'] = $request->file('gambar')->store('gambar/bangunan', 'public');
        }
        
        $item = Olahraga::find($id);
        $item->update($data);
        
        return redirect()->back()->with('success', 'Data Berhasil Disimpan!');
    }
    
    public function destroy($id)
    {
        $item = Olahraga::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }
}
