<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiodataRequest extends FormRequest
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
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tmpt_lahir' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            // 'foto' => 'nullable|image|mimes:jpeg,png,gif,jpg',
        ];
    }
}
