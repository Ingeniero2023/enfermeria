<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Tipo De Consulta
    Route::apiResource('tipo-de-consulta', 'TipoDeConsultaApiController');

    // Enfermeria
    Route::apiResource('enfermeria', 'EnfermeriaApiController');
});
