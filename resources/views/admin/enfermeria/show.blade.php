@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.enfermerium.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.enfermeria.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.id') }}
                        </th>
                        <td>
                            {{ $enfermerium->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.fecha') }}
                        </th>
                        <td>
                            {{ $enfermerium->fecha }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.hora_de_la_consulta') }}
                        </th>
                        <td>
                            {{ $enfermerium->hora_de_la_consulta }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.documento') }}
                        </th>
                        <td>
                            {{ $enfermerium->documento }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.nombre') }}
                        </th>
                        <td>
                            {{ $enfermerium->nombre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.grado') }}
                        </th>
                        <td>
                            {{ $enfermerium->grado }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.edad') }}
                        </th>
                        <td>
                            {{ $enfermerium->edad }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.direccion') }}
                        </th>
                        <td>
                            {{ $enfermerium->direccion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.eps') }}
                        </th>
                        <td>
                            {{ $enfermerium->eps }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.grupo_sanguineo') }}
                        </th>
                        <td>
                            {{ $enfermerium->grupo_sanguineo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.rh') }}
                        </th>
                        <td>
                            {{ $enfermerium->rh }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.telefono') }}
                        </th>
                        <td>
                            {{ $enfermerium->telefono }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.nombre_del_padre') }}
                        </th>
                        <td>
                            {{ $enfermerium->nombre_del_padre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.nombre_de_la_madre') }}
                        </th>
                        <td>
                            {{ $enfermerium->nombre_de_la_madre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.telefono_del_padre') }}
                        </th>
                        <td>
                            {{ $enfermerium->telefono_del_padre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.telefono_de_la_madre') }}
                        </th>
                        <td>
                            {{ $enfermerium->telefono_de_la_madre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.correo_del_padre') }}
                        </th>
                        <td>
                            {{ $enfermerium->correo_del_padre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.correo_de_la_madre') }}
                        </th>
                        <td>
                            {{ $enfermerium->correo_de_la_madre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.descripcion') }}
                        </th>
                        <td>
                            {{ $enfermerium->descripcion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enfermerium.fields.tratamiento') }}
                        </th>
                        <td>
                            {{ $enfermerium->tratamiento }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.enfermeria.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection