<?php

use App\Http\Controllers\GoogleController;

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Tipo De Consulta
    Route::delete('tipo-de-consulta/destroy', 'TipoDeConsultaController@massDestroy')->name('tipo-de-consulta.massDestroy');
    Route::post('tipo-de-consulta/parse-csv-import', 'TipoDeConsultaController@parseCsvImport')->name('tipo-de-consulta.parseCsvImport');
    Route::post('tipo-de-consulta/process-csv-import', 'TipoDeConsultaController@processCsvImport')->name('tipo-de-consulta.processCsvImport');
    Route::resource('tipo-de-consulta', 'TipoDeConsultaController');

    // Enfermeria
    Route::delete('enfermeria/destroy', 'EnfermeriaController@massDestroy')->name('enfermeria.massDestroy');
    Route::resource('enfermeria', 'EnfermeriaController');

    // Ingreso Enfermeria
    Route::delete('ingreso-enfermeria/destroy', 'IngresoEnfermeriaController@massDestroy')->name('ingreso-enfermeria.massDestroy');
    Route::resource('ingreso-enfermeria', 'IngresoEnfermeriaController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

 // google autenticate

 Route::get('auth/google', [GoogleController::class, 'googleRedirect']);
 Route::get('auth/google/callback', [GoogleController::class, 'googleCallback']);