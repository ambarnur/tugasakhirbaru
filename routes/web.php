<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
    Route::resource('lembaga', 'LembagaController');
    Route::resource('pemilihan', 'PemilihanController');
   
    Route::get('pemilihan/calon/{id}', 'CalonController@index');
    Route::get('pemilihan/calon/create/{id}', 'CalonController@create');
    Route::post('pemilihan/calon/', 'CalonController@store');
    Route::get('pemilihan/calon/edit/{id}', 'CalonController@edit');
    // Route::get('pemilihan/calon/edit/{id}', function($id){
    //     dd($id);
    // });
    Route::put('pemilihan/calon/{id}', 'CalonController@update');
    Route::delete('pemilihan/calon/{id}', 'CalonController@destroy');
});

/*
|------------------------------------------------------------------------------------
| Admin Lembaga
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin_lembaga', 'as' => 'admin_lembaga' . '.', 'middleware'=>['auth', 'Role:15']], function () {
    Route::get('/', 'Admin_lembaga\DashboardController@index')->name('dash');
    Route::resource('users', 'Admin_lembaga\UserController');
    Route::resource('pemilihan', 'Admin_lembaga\PemilihanController');
    Route::resource('tps', 'Admin_lembaga\TpsController');
    Route::post('/generateSample', 'Admin_lembaga\TpsController@generateSample');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'LembagaController@index')->name('lembaga');
Route::post('/', 'LembagaController@create')->name('lembaga');
Route::get('/', 'Admin_lembaga\PemilihanController@index')->name('admin_lembaga\pemilihan');


Route::get('admin_lembaga/pemilihan/calon/{id}', 'Admin_lembaga\CalonController@index');
Route::get('admin_lembaga/pemilihan/calon/create/{id}', 'Admin_lembaga\CalonController@create');
Route::post('admin_lembaga/pemilihan/calon/', 'Admin_lembaga\CalonController@store');
Route::get('admin_lembaga/pemilihan/calon/edit/{id}', 'Admin_lembaga\CalonController@edit');
Route::put('admin_lembaga/pemilihan/calon/{id}', 'Admin_lembaga\CalonController@update');
Route::delete('admin_lembaga/pemilihan/calon/{id}', 'Admin_lembaga\CalonController@destroy');

Route::post('get_kabupaten_by_provinsi', 'DaerahController@getKabupatenByProvinsi');
Route::post('get_kecamatan_by_kabupaten', 'DaerahController@getKecamatanByKabupaten');
Route::post('get_kelurahan_by_kecamatan', 'DaerahController@getKelurahanByKecamatan');
