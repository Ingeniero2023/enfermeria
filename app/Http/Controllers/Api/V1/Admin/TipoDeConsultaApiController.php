<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTipoDeConsultumRequest;
use App\Http\Requests\UpdateTipoDeConsultumRequest;
use App\Http\Resources\Admin\TipoDeConsultumResource;
use App\Models\TipoDeConsultum;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TipoDeConsultaApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('tipo_de_consultum_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TipoDeConsultumResource(TipoDeConsultum::all());
    }

    public function store(StoreTipoDeConsultumRequest $request)
    {
        $tipoDeConsultum = TipoDeConsultum::create($request->all());

        return (new TipoDeConsultumResource($tipoDeConsultum))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(TipoDeConsultum $tipoDeConsultum)
    {
        abort_if(Gate::denies('tipo_de_consultum_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TipoDeConsultumResource($tipoDeConsultum);
    }

    public function update(UpdateTipoDeConsultumRequest $request, TipoDeConsultum $tipoDeConsultum)
    {
        $tipoDeConsultum->update($request->all());

        return (new TipoDeConsultumResource($tipoDeConsultum))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(TipoDeConsultum $tipoDeConsultum)
    {
        abort_if(Gate::denies('tipo_de_consultum_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tipoDeConsultum->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
