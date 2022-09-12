@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.enfermerium.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.enfermeria.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="fecha">{{ trans('cruds.enfermerium.fields.fecha') }}</label>
                <input class="form-control date {{ $errors->has('fecha') ? 'is-invalid' : '' }}" type="text" name="fecha" id="fecha" value="{{ old('fecha') }}" required>
                @if($errors->has('fecha'))
                    <span class="text-danger">{{ $errors->first('fecha') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.fecha_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="hora_de_la_consulta">{{ trans('cruds.enfermerium.fields.hora_de_la_consulta') }}</label>
                <input class="form-control timepicker {{ $errors->has('hora_de_la_consulta') ? 'is-invalid' : '' }}" type="text" name="hora_de_la_consulta" id="hora_de_la_consulta" value="{{ old('hora_de_la_consulta') }}" required>
                @if($errors->has('hora_de_la_consulta'))
                    <span class="text-danger">{{ $errors->first('hora_de_la_consulta') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.hora_de_la_consulta_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="documento">{{ trans('cruds.enfermerium.fields.documento') }}</label>
                <input class="form-control {{ $errors->has('documento') ? 'is-invalid' : '' }}" type="number" name="documento" id="documento" value="{{ old('documento', '') }}" step="1" required>
                @if($errors->has('documento'))
                    <span class="text-danger">{{ $errors->first('documento') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.documento_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nombre">{{ trans('cruds.enfermerium.fields.nombre') }}</label>
                <input class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" type="text" name="nombre" id="nombre" value="{{ old('nombre', '') }}" required>
                @if($errors->has('nombre'))
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.nombre_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="grado">{{ trans('cruds.enfermerium.fields.grado') }}</label>
                <input class="form-control {{ $errors->has('grado') ? 'is-invalid' : '' }}" type="text" name="grado" id="grado" value="{{ old('grado', '') }}" required>
                @if($errors->has('grado'))
                    <span class="text-danger">{{ $errors->first('grado') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.grado_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="edad">{{ trans('cruds.enfermerium.fields.edad') }}</label>
                <input class="form-control {{ $errors->has('edad') ? 'is-invalid' : '' }}" type="number" name="edad" id="edad" value="{{ old('edad', '') }}" step="1" required>
                @if($errors->has('edad'))
                    <span class="text-danger">{{ $errors->first('edad') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.edad_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="direccion">{{ trans('cruds.enfermerium.fields.direccion') }}</label>
                <input class="form-control {{ $errors->has('direccion') ? 'is-invalid' : '' }}" type="text" name="direccion" id="direccion" value="{{ old('direccion', '') }}" required>
                @if($errors->has('direccion'))
                    <span class="text-danger">{{ $errors->first('direccion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.direccion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="eps">{{ trans('cruds.enfermerium.fields.eps') }}</label>
                <input class="form-control {{ $errors->has('eps') ? 'is-invalid' : '' }}" type="text" name="eps" id="eps" value="{{ old('eps', '') }}" required>
                @if($errors->has('eps'))
                    <span class="text-danger">{{ $errors->first('eps') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.eps_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="grupo_sanguineo">{{ trans('cruds.enfermerium.fields.grupo_sanguineo') }}</label>
                <input class="form-control {{ $errors->has('grupo_sanguineo') ? 'is-invalid' : '' }}" type="text" name="grupo_sanguineo" id="grupo_sanguineo" value="{{ old('grupo_sanguineo', '') }}" required>
                @if($errors->has('grupo_sanguineo'))
                    <span class="text-danger">{{ $errors->first('grupo_sanguineo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.grupo_sanguineo_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="rh">{{ trans('cruds.enfermerium.fields.rh') }}</label>
                <input class="form-control {{ $errors->has('rh') ? 'is-invalid' : '' }}" type="text" name="rh" id="rh" value="{{ old('rh', '') }}" required>
                @if($errors->has('rh'))
                    <span class="text-danger">{{ $errors->first('rh') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.rh_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="telefono">{{ trans('cruds.enfermerium.fields.telefono') }}</label>
                <input class="form-control {{ $errors->has('telefono') ? 'is-invalid' : '' }}" type="text" name="telefono" id="telefono" value="{{ old('telefono', '') }}" required>
                @if($errors->has('telefono'))
                    <span class="text-danger">{{ $errors->first('telefono') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.telefono_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nombre_del_padre">{{ trans('cruds.enfermerium.fields.nombre_del_padre') }}</label>
                <input class="form-control {{ $errors->has('nombre_del_padre') ? 'is-invalid' : '' }}" type="text" name="nombre_del_padre" id="nombre_del_padre" value="{{ old('nombre_del_padre', '') }}" required>
                @if($errors->has('nombre_del_padre'))
                    <span class="text-danger">{{ $errors->first('nombre_del_padre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.nombre_del_padre_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nombre_de_la_madre">{{ trans('cruds.enfermerium.fields.nombre_de_la_madre') }}</label>
                <input class="form-control {{ $errors->has('nombre_de_la_madre') ? 'is-invalid' : '' }}" type="text" name="nombre_de_la_madre" id="nombre_de_la_madre" value="{{ old('nombre_de_la_madre', '') }}" required>
                @if($errors->has('nombre_de_la_madre'))
                    <span class="text-danger">{{ $errors->first('nombre_de_la_madre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.nombre_de_la_madre_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="telefono_del_padre">{{ trans('cruds.enfermerium.fields.telefono_del_padre') }}</label>
                <input class="form-control {{ $errors->has('telefono_del_padre') ? 'is-invalid' : '' }}" type="number" name="telefono_del_padre" id="telefono_del_padre" value="{{ old('telefono_del_padre', '') }}" step="1" required>
                @if($errors->has('telefono_del_padre'))
                    <span class="text-danger">{{ $errors->first('telefono_del_padre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.telefono_del_padre_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="telefono_de_la_madre">{{ trans('cruds.enfermerium.fields.telefono_de_la_madre') }}</label>
                <input class="form-control {{ $errors->has('telefono_de_la_madre') ? 'is-invalid' : '' }}" type="number" name="telefono_de_la_madre" id="telefono_de_la_madre" value="{{ old('telefono_de_la_madre', '') }}" step="1" required>
                @if($errors->has('telefono_de_la_madre'))
                    <span class="text-danger">{{ $errors->first('telefono_de_la_madre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.telefono_de_la_madre_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="correo_del_padre">{{ trans('cruds.enfermerium.fields.correo_del_padre') }}</label>
                <input class="form-control {{ $errors->has('correo_del_padre') ? 'is-invalid' : '' }}" type="email" name="correo_del_padre" id="correo_del_padre" value="{{ old('correo_del_padre') }}" required>
                @if($errors->has('correo_del_padre'))
                    <span class="text-danger">{{ $errors->first('correo_del_padre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.correo_del_padre_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="correo_de_la_madre">{{ trans('cruds.enfermerium.fields.correo_de_la_madre') }}</label>
                <input class="form-control {{ $errors->has('correo_de_la_madre') ? 'is-invalid' : '' }}" type="email" name="correo_de_la_madre" id="correo_de_la_madre" value="{{ old('correo_de_la_madre') }}" required>
                @if($errors->has('correo_de_la_madre'))
                    <span class="text-danger">{{ $errors->first('correo_de_la_madre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.correo_de_la_madre_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="descripcion">{{ trans('cruds.enfermerium.fields.descripcion') }}</label>
                <textarea class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" name="descripcion" id="descripcion" required>{{ old('descripcion') }}</textarea>
                @if($errors->has('descripcion'))
                    <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.enfermerium.fields.descripcion_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection