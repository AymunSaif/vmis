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
Route::group(['middleware' => ['auth','role:transportofficer']],function(){
// Route::group(['middleware' => []],function(){
  
  Route::get('/', function () {
      return view('vmisdashboard');
  });

  Route::get('/home',function(){
    return Redirect::to('http://mis.dgme.gov.pk:8080/');
  })->name('home');

  Route::get('/login',function(){
    return Redirect::to('http://mis.dgme.gov.pk:8080/login');
  });

  Route::resource('vehicle','VmisVehicleController');
  Route::resource('driver','VmisDriverController');
  Route::resource('VmisRequestToTransportOfficer','VmisRequestToTransportOfficerController');
  Route::get('/pendingrequest','VmisRequestToTransportOfficerController@pendingRequests')->name('pendingRequests');
  Route::get('/proceedfurther/{id}','VmisRequestToTransportOfficerController@proceedFurther')->name('proceedfurther');
  Route::get('/requestsent','VmisRequestToTransportOfficerController@sentRequests')->name('sentRequests');
  Route::post('/reqsentfurther','VmisRequestToTransportOfficerController@requestSentFurtherToDirectors')->name('requestsentfurthertoauthority');
  Route::get('/home', 'HomeController@index')->name('home');

});
// });

Auth::routes();
