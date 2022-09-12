<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyIngresoEnfermeriumRequest;
use App\Http\Requests\StoreIngresoEnfermeriumRequest;
use App\Http\Requests\UpdateIngresoEnfermeriumRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IngresoEnfermeriaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ingreso_enfermerium_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ingresoEnfermeria.index');
    }

    public function create()
    {
        abort_if(Gate::denies('ingreso_enfermerium_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ingresoEnfermeria.create');
    }

    public function store(StoreIngresoEnfermeriumRequest $request)
    {
        $ingresoEnfermerium = IngresoEnfermerium::create($request->all());

        return redirect()->route('admin.ingreso-enfermeria.index');
    }

    public function edit(IngresoEnfermerium $ingresoEnfermerium)
    {
        abort_if(Gate::denies('ingreso_enfermerium_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ingresoEnfermeria.edit', compact('ingresoEnfermerium'));
    }

    public function update(UpdateIngresoEnfermeriumRequest $request, IngresoEnfermerium $ingresoEnfermerium)
    {
        $ingresoEnfermerium->update($request->all());

        return redirect()->route('admin.ingreso-enfermeria.index');
    }

    public function show(IngresoEnfermerium $ingresoEnfermerium)
    {
        abort_if(Gate::denies('ingreso_enfermerium_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ingresoEnfermeria.show', compact('ingresoEnfermerium'));
    }

    public function destroy(IngresoEnfermerium $ingresoEnfermerium)
    {
        abort_if(Gate::denies('ingreso_enfermerium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ingresoEnfermerium->delete();

        return back();
    }

    public function massDestroy(MassDestroyIngresoEnfermeriumRequest $request)
    {
        IngresoEnfermerium::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
