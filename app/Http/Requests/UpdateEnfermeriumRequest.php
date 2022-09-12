<?php

namespace App\Http\Requests;

use App\Models\Enfermerium;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEnfermeriumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('enfermerium_edit');
    }

    public function rules()
    {
        return [
            'fecha' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'hora_de_la_consulta' => [
                'required',
                'date_format:' . config('panel.time_format'),
            ],
            'documento' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'nombre' => [
                'string',
                'required',
            ],
            'grado' => [
                'string',
                'required',
            ],
            'edad' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'direccion' => [
                'string',
                'required',
            ],
            'eps' => [
                'string',
                'required',
            ],
            'grupo_sanguineo' => [
                'string',
                'required',
            ],
            'rh' => [
                'string',
                'required',
            ],
            'telefono' => [
                'string',
                'required',
            ],
            'nombre_del_padre' => [
                'string',
                'required',
            ],
            'nombre_de_la_madre' => [
                'string',
                'required',
            ],
            'telefono_del_padre' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'telefono_de_la_madre' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'correo_del_padre' => [
                'required',
            ],
            'correo_de_la_madre' => [
                'required',
            ],
            'descripcion' => [
                'required',
            ],
        ];
    }
}
