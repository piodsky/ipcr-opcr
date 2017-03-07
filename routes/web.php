<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
			    return view('welcome');
			});
Route::group(['middleware'=>'auth'], function(){


			Route::get('/frontpage', function () {
			    return view('frontpage');
			});
			Route::get('/home', function () {
			    return view('home');
			});


	/*	Route::get('/ipcr', 'ipcrController@index');
		Route::post('/ipcr', 'ipcrController@store'); 
		Route::get('/ipcr/create', 'ipcrController@create'); 
		Route::get('/ipcr/{ipcr}', 'ipcrController@show')->name('ipcr.show');
		Route::get('/ipcr/{ipcr}/edit', 'ipcrController@edit')->name('ipcr.edit');
		Route::put('/ipcr/{ipcr}', 'ipcrController@update');
		Route::delete('/ipcr/{ipcr}', 'ipcrController@destroy');

*/
		Route::resource('ipcr','ipcrController');
		Route::resource('notes','NotesController');

		Route::get('notes/{ipcrId}/createNote','NotesController@createNote')->name('notes.createNote');


		Route::get('/getPDF','PDFController@getPDF');

Route::get('/home/{name}/office/{location}', 'TestController@test');

});


Auth::routes();

// Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
