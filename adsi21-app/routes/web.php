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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function (){
    
    Route::get('/home', 'HomeController@index')->name('home');

    // Modulo principal

    // Usuarios
    Route::get('principal.users','UserController@index')->name('principal.users.index')
    ->middleware('permission:principal.users.index');

    // mostrar usuario
    Route::get('principal.users/{user}','UserController@show')->name('principal.users.show')
    ->middleware('permission:principal.users.show');
    // guardar usuarios
    Route::get('principal.users.create','UserController@create')->name('principal.users.create')
    ->middleware('permission:principal.users.create');
    Route::post('principal.users.store','UserController@store')->name('principal.users.store')
    ->middleware('permission:principal.users.create');
    // editar usuarios
    Route::put('principal.users/{user}','UserController@update')->name('principal.users.update')
    ->middleware('permission:principal.users.edit');
    Route::get('principal.users/{user}/edit','UserController@edit')->name('principal.users.edit')
    ->middleware('permission:principal.users.edit');
    // eliminar usuarios
    Route::delete('principal.users/{user}','UserController@destroy')->name('principal.users.destroy')
    ->middleware('permission:principal.users.destroy');
    // exportar excel
    Route::get('User-List.xlsx','UserController@exportExcel')->name('principal.users.exportExcel')
    ->middleware('permission:principal.users.index');

    Route::post('principal.users','UserController@importExcel')->name('principal.users.importExcel')
    ->middleware('permission:principal.users.index');


    // Roles
    Route::get('principal.roles','RoleController@index')->name('principal.roles.index')
    ->middleware('permission:principal.roles.index');

    // mostrar roles
    Route::get('principal.roles/{role}','RoleController@show')->name('principal.roles.show')
    ->middleware('permission:principal.roles.show');
    // guardar roles
    Route::get('principal.roles.create','RoleController@create')->name('principal.roles.create')
    ->middleware('permission:principal.roles.create');
    Route::post('principal.roles.store','RoleController@store')->name('principal.roles.store')
    ->middleware('permission:principal.roles.create');
    // editar roles
    Route::put('principal.roles/{role}','RoleController@update')->name('principal.roles.update')
    ->middleware('permission:principal.roles.edit');
    Route::get('principal.roles/{role}/edit','RoleController@edit')->name('principal.roles.edit')
    ->middleware('permission:principal.roles.edit');
    // eliminar roles
    Route::delete('principal.roles/{role}','RoleController@destroy')->name('principal.roles.destroy')
    ->middleware('permission:principal.roles.edit');


    // Pais
    Route::get('principal.pais','PaisController@index')->name('principal.pais.index')
    ->middleware('permission:principal.pais.index');

    // mostrar Pais
    Route::get('principal.pais/{pais}','PaisController@show')->name('principal.pais.show')
    ->middleware('permission:principal.pais.show');
    // guardar Pais
    Route::get('principal.pais.create','PaisController@create')->name('principal.pais.create')
    ->middleware('permission:principal.pais.create');
    Route::post('principal.pais.store','PaisController@store')->name('principal.pais.store')
    ->middleware('permission:principal.pais.create');
    // editar Pais
    Route::put('principal.pais/{pais}','PaisController@update')->name('principal.pais.update')
    ->middleware('permission:principal.pais.edit');
    Route::get('principal.pais/{pais}/edit','PaisController@edit')->name('principal.pais.edit')
    ->middleware('permission:principal.pais.edit');
    // eliminar Pais
    Route::delete('principal.pais/{pais}','PaisController@destroy')->name('principal.pais.destroy')
    ->middleware('permission:principal.pais.destroy');


    // Dptos
    Route::get('principal.dptos','DptoController@index')->name('principal.dptos.index')
    ->middleware('permission:principal.dptos.index');

    // mostrar Dptos
    Route::get('principal.dptos/{dpto}','DptoController@show')->name('principal.dptos.show')
    ->middleware('permission:principal.dptos.show');
    // guardar Dptos
    Route::get('principal.dptos.create','DptoController@create')->name('principal.dptos.create')
    ->middleware('permission:principal.dptos.create');
    Route::post('principal.dptos.store','DptoController@store')->name('principal.dptos.store')
    ->middleware('permission:principal.dptos.create');
    // editar Dptos
    Route::put('principal.dptos/{dpto}','DptoController@update')->name('principal.dptos.update')
    ->middleware('permission:principal.dptos.edit');
    Route::get('principal.dptos/{dpto}/edit','DptoController@edit')->name('principal.dptos.edit')
    ->middleware('permission:principal.dptos.edit');
    // eliminar Dptos
    Route::delete('principal.dptos/{dpto}','DptoController@destroy')->name('principal.dptos.destroy')
    ->middleware('permission:principal.dptos.destroy');

});


