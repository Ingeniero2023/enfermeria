<?php

namespace App\Http\Requests;

use App\Models\TipoDeConsultum;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTipoDeConsultumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('tipo_de_consultum_create');
    }

    public function rules()
    {
        return [
            'tipo' => [
                'string',
                'nullable',
            ],
        ];
    }
}
