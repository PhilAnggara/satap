<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('pages.dashboard');
    }
    
    public function barcode()
    {
        return view('pages.scan-barcode');
    }
    
    public function deleteImage(Request $request, $id)
    {
        $data = $request->all();

        if ($data['table'] == 'Bangunan') 
        {
            $item = Bangunan::find($id);
        }

        $item->gambar = "";
        $item->save();

        return redirect()->back()->with('success', 'Gambar Berhasil Dihapus!');
    }
}
