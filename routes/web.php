<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('vmisdashboard');
});
Route::resource('vehicle','VmisVehicleController');
Route::resource('driver','VmisDriverController');
Route::resource('VmisRequestToTransportOfficer','VmisRequestToTransportOfficerController');
Route::get('/pendingrequest','VmisRequestToTransportOfficerController@pendingRequests')->name('pendingRequests');
Route::get('/proceedfurther/{id}','VmisRequestToTransportOfficerController@proceedFurther')->name('proceedfurther');
Route::get('/requestsent','VmisRequestToTransportOfficerController@sentRequests')->name('sentRequests');
Route::post('/reqsentfurther','VmisRequestToTransportOfficerController@requestSentFurtherToDirectors')->name('requestsentfurthertoauthority');
