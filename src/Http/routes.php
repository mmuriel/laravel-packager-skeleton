<?php

Route::group([
        'prefix'        => '/:lc:package',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', ':uc:vendor\:uc:package\Http\Controllers\:uc:packageController@index')->name(':lc:package.index');
        Route::get('/hello', function (){
            return "Hola Mundo!";
        })->name(':lc:package.hello');

});