<?php

namespace App\Http\Controllers;

use App\Http\Requests\BangunanRequest;
use App\Models\Bangunan;
use Illuminate\Http\Request;

class BangunanController extends Controller
{
    
    public function index()
    {
        $items = Bangunan::all()->sortDesc();
        
        return view('pages.bangunan', [
            'items' => $items
        ]);
    }
    
    public function create()
    {
        //
    }
    
    public function store(BangunanRequest $request)
    {
        $data = $request->all();

        $data['kode'] = $this->generateKode(Bangunan::all(), 'BAN', $data);

        if ($request['gambar']) {
            $data['gambar'] = $request->file('gambar')->store('gambar/bangunan', 'public');
        }

        Bangunan::create($data);
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
    
    public function update(BangunanRequest $request, $id)
    {
        $data = $request->all();

        if ($request['gambar']) {
            $data['gambar'] = $request->file('gambar')->store('gambar/bangunan', 'public');
        }
        
        $item = Bangunan::find($id);
        $item->update($data);
        
        return redirect()->back()->with('success', 'Data Berhasil Disimpan!');
    }
    
    public function destroy($id)
    {
        $item = Bangunan::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }
}
