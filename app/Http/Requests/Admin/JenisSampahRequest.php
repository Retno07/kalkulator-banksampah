<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class JenisSampahRequest extends FormRequest
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
        'jenis_sampah' =>'required|max:225',
        'deskripsi_sampah' =>'required|max:225',
        'foto_sampah' =>'required|max:225',
        'harga_sampah' =>'required|max:225',
        ];
    }
}
