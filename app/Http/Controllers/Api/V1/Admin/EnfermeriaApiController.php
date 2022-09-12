<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEnfermeriumRequest;
use App\Http\Requests\UpdateEnfermeriumRequest;
use App\Http\Resources\Admin\EnfermeriumResource;
use App\Models\Enfermerium;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnfermeriaApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('enfermerium_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EnfermeriumResource(Enfermerium::all());
    }

    public function store(StoreEnfermeriumRequest $request)
    {
        $enfermerium = Enfermerium::create($request->all());

        return (new EnfermeriumResource($enfermerium))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Enfermerium $enfermerium)
    {
        abort_if(Gate::denies('enfermerium_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EnfermeriumResource($enfermerium);
    }

    public function update(UpdateEnfermeriumRequest $request, Enfermerium $enfermerium)
    {
        $enfermerium->update($request->all());

        return (new EnfermeriumResource($enfermerium))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Enfermerium $enfermerium)
    {
        abort_if(Gate::denies('enfermerium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enfermerium->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
