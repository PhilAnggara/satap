<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::where('role','!=','Kepala Sekolah')->get()->sortDesc();
        $count = User::where('approved', 0)->count();
        
        return view('pages.pengguna', [
            'users' => $users,
            'count' => $count
        ]);
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->all();
        
        $item = User::find($id);
        $item->update($data);
        
        return redirect()->back()->with('success', 'Pengguna Berhasil Disetujui!');
    }
    
    public function destroy($id)
    {
        $item = User::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Pengguna Berhasil Dihapus!');
    }
}
