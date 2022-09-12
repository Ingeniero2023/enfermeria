<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEnfermeriumRequest;
use App\Http\Requests\StoreEnfermeriumRequest;
use App\Http\Requests\UpdateEnfermeriumRequest;
use App\Models\Enfermerium;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnfermeriaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('enfermerium_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enfermeria = Enfermerium::all();

        return view('admin.enfermeria.index', compact('enfermeria'));
    }

    public function create()
    {
        abort_if(Gate::denies('enfermerium_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.enfermeria.create');
    }

    public function store(StoreEnfermeriumRequest $request)
    {
        $enfermerium = Enfermerium::create($request->all());

        return redirect()->route('admin.enfermeria.index');
    }

    public function edit(Enfermerium $enfermerium)
    {
        abort_if(Gate::denies('enfermerium_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.enfermeria.edit', compact('enfermerium'));
    }

    public function update(UpdateEnfermeriumRequest $request, Enfermerium $enfermerium)
    {
        $enfermerium->update($request->all());

        return redirect()->route('admin.enfermeria.index');
    }

    public function show(Enfermerium $enfermerium)
    {
        abort_if(Gate::denies('enfermerium_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.enfermeria.show', compact('enfermerium'));
    }

    public function destroy(Enfermerium $enfermerium)
    {
        abort_if(Gate::denies('enfermerium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enfermerium->delete();

        return back();
    }

    public function massDestroy(MassDestroyEnfermeriumRequest $request)
    {
        Enfermerium::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
