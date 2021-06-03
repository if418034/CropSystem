<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHasilPanenRequest extends FormRequest
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
            'jenis_tanaman' => [
                'required', 'string',
            ],
            'berat' => [
                'required', 'integer',
            ],
            'jenisPupuk' => [
                'required', 'string',
            ],
            'nama_petani' => [
                'required', 'string',
            ],
            'nomor-wa' => [
                'required', 'string',
            ],
        ];
    }
}
