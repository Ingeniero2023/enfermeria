<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyTipoDeConsultumRequest;
use App\Http\Requests\StoreTipoDeConsultumRequest;
use App\Http\Requests\UpdateTipoDeConsultumRequest;
use App\Models\TipoDeConsultum;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TipoDeConsultaController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('tipo_de_consultum_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tipoDeConsulta = TipoDeConsultum::all();

        return view('admin.tipoDeConsulta.index', compact('tipoDeConsulta'));
    }

    public function create()
    {
        abort_if(Gate::denies('tipo_de_consultum_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tipoDeConsulta.create');
    }

    public function store(StoreTipoDeConsultumRequest $request)
    {
        $tipoDeConsultum = TipoDeConsultum::create($request->all());

        return redirect()->route('admin.tipo-de-consulta.index');
    }

    public function edit(TipoDeConsultum $tipoDeConsultum)
    {
        abort_if(Gate::denies('tipo_de_consultum_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tipoDeConsulta.edit', compact('tipoDeConsultum'));
    }

    public function update(UpdateTipoDeConsultumRequest $request, TipoDeConsultum $tipoDeConsultum)
    {
        $tipoDeConsultum->update($request->all());

        return redirect()->route('admin.tipo-de-consulta.index');
    }

    public function show(TipoDeConsultum $tipoDeConsultum)
    {
        abort_if(Gate::denies('tipo_de_consultum_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tipoDeConsulta.show', compact('tipoDeConsultum'));
    }

    public function destroy(TipoDeConsultum $tipoDeConsultum)
    {
        abort_if(Gate::denies('tipo_de_consultum_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tipoDeConsultum->delete();

        return back();
    }

    public function massDestroy(MassDestroyTipoDeConsultumRequest $request)
    {
        TipoDeConsultum::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
