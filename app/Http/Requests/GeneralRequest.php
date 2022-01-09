<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'nama_barang' => 'required|max:255',
            'gambar' => 'image|max:5000',
            'tanggal' => 'required|date',
            'jumlah' => 'required|integer',
            'kondisi' => 'required|max:255',
            'keterangan' => 'max:255',
        ];
    }

    public function messages()
    {
        return [
            'gambar.max' => 'Gambar yang diupload harus berukuran maksimal 5MB.'
        ];
    }
}
