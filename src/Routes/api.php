<?php
/*
 *  API V1 ROUTES
 */

use Illuminate\Support\Facades\Route;

Route::group([ 'prefix' => 'api/v1', 'as' => 'states-and-cities.' ], function (){

    Route::resources([
        'countries'=>'CountriesApiV1Controller',
        'states'=>'StatesApiV1Controller',
        'cities'=>'CitiesApiV1Controller'
    ]);

    Route::get('countries/{country}/states','StatesApiV1Controller@index');
    Route::get('states/{state}/cities','CitiesApiV1Controller@index');

});
