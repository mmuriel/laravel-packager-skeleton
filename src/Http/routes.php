<?php

Route::group([
        'prefix'        => 'admin/oficios',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'Cameyando\Oficios\Http\Controllers\Oficios\OficiosController@index')->name('admin.oficios.index');
        Route::get('/hello', function (){
            return "Hola Mundo!";
        })->name('admin.oficios.hello');

});