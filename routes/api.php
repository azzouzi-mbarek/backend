<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/regions', 'RegionController');

Route::group(['prefix' => 'regions'], function () {
    Route::apiResource('/{region}/countries', 'CountryController');

    Route::group(['prefix' => '/{regions}/countries'], function () {
        Route::apiResource('/{country}/levels', 'LevelController');
    });
    Route::group(['prefix' => '/{regions}/countries/{country}/levels'], function () {
        Route::apiResource('/{level}/population', 'PopulationController');
        Route::apiResource('/{level}/legal_frameworks', 'LegalFrameworkController');
        Route::apiResource('/{level}/communication_tools', 'CommunicationToolController');
        Route::apiResource('/{level}/finances', 'FinanceController');
        Route::apiResource('/{level}/evenements', 'EvenementController');
        Route::apiResource('/{level}/programmes', 'ProgrammeController');
        Route::apiResource('/{level}/persons', 'PersonController');
        Route::apiResource('/{level}/institutions', 'InstitutionController');

    });

});
