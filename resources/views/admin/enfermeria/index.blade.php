@extends('layouts.admin')
@section('content')
@can('enfermerium_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.enfermeria.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.enfermerium.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.enfermerium.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Enfermerium">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.fecha') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.hora_de_la_consulta') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.documento') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.nombre') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.grado') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.edad') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.direccion') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.eps') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.grupo_sanguineo') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.rh') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.telefono') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.nombre_del_padre') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.nombre_de_la_madre') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.telefono_del_padre') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.telefono_de_la_madre') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.correo_del_padre') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.correo_de_la_madre') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.descripcion') }}
                        </th>
                        <th>
                            {{ trans('cruds.enfermerium.fields.tratamiento') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enfermeria as $key => $enfermerium)
                        <tr data-entry-id="{{ $enfermerium->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $enfermerium->id ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->fecha ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->hora_de_la_consulta ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->documento ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->nombre ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->grado ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->edad ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->direccion ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->eps ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->grupo_sanguineo ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->rh ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->telefono ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->nombre_del_padre ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->nombre_de_la_madre ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->telefono_del_padre ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->telefono_de_la_madre ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->correo_del_padre ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->correo_de_la_madre ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->descripcion ?? '' }}
                            </td>
                            <td>
                                {{ $enfermerium->tratamiento ?? '' }}
                            </td>
                            <td>
                                @can('enfermerium_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.enfermeria.show', $enfermerium->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('enfermerium_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.enfermeria.edit', $enfermerium->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('enfermerium_delete')
                                    <form action="{{ route('admin.enfermeria.destroy', $enfermerium->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('enfermerium_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.enfermeria.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Enfermerium:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection