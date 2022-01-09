<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneralRequest;
use App\Models\Matematika;
use Illuminate\Http\Request;

class MatematikaController extends Controller
{
    
    public function index()
    {
        $title = 'Alat Matematika';
        $type = 'matematika';
        $items = Matematika::all()->sortDesc();
        
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

        $data['kode'] = $this->generateKode('MAT', $data, Matematika::all());
        $data['barcode'] = $this->generateBarcode($data['kode']);

        if ($request['gambar']) {
            $data['gambar'] = $request->file('gambar')->store('gambar/bangunan', 'public');
        }

        Matematika::create($data);
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

        $data['kode'] = $this->updateKode('MAT', $data, $id);
        $data['barcode'] = $this->generateBarcode($data['kode']);

        if ($request['gambar']) {
            $data['gambar'] = $request->file('gambar')->store('gambar/bangunan', 'public');
        }
        
        $item = Matematika::find($id);
        $item->update($data);
        
        return redirect()->back()->with('success', 'Data Berhasil Disimpan!');
    }
    
    public function destroy($id)
    {
        $item = Matematika::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }
}
