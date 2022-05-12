<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pelamarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'no_telp' => 'required',
            'no_wa' => 'required',
            'nama_pekerjaan' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_lengkap.required' => 'kolom nama lengkap tidak boleh kosong !',
            'no_telp.required' => 'kolom no telepon tidak boleh kosong !',
            'no_wa.required' => 'kolom no wa tidak boleh kosong !',
            'nama_pekerjaan.required' => 'kolom nama pekerjaan tidak boleh kosong !',
        ];
    }
}
