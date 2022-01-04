<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BangunanRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'nama_bangunan' => 'required|max:255',
            'jumlah_ruangan' => 'required',
            'gambar' => 'image|max:5000',
            'tanggal_berdiri' => 'required|date',
            'kondisi' => 'required|max:255',
            'keterangan' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'gambar.max' => 'Gambar yang diupload harus berukuran maksimal 5MB.'
        ];
    }
}
