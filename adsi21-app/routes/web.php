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
    Route::get('principal.users/{user}','UserController@show')->name('principal.users.show');
    // guardar usuarios
    Route::get('principal.users.create','UserController@create')->name('principal.users.create');
    Route::post('principal.users.store','UserController@store')->name('principal.users.store');
    // editar usuarios
    Route::put('principal.users/{user}','UserController@update')->name('principal.users.update');
    Route::get('principal.users/{user}/edit','UserController@edit')->name('principal.users.edit');
    // eliminar usuarios
    Route::delete('principal.users/{user}','UserController@destroy')->name('principal.users.destroy');


    // Roles
    Route::get('principal.roles','RoleController@index')->name('principal.roles.index')
    ->middleware('permission:principal.roles.index');

    // mostrar roles
    Route::get('principal.roles/{role}','RoleController@show')->name('principal.roles.show');
    // guardar roles
    Route::get('principal.roles.create','RoleController@create')->name('principal.roles.create');
    Route::post('principal.roles.store','RoleController@store')->name('principal.roles.store');
    // editar roles
    Route::put('principal.roles/{role}','RoleController@update')->name('principal.roles.update');
    Route::get('principal.roles/{role}/edit','RoleController@edit')->name('principal.roles.edit');
    // eliminar roles
    Route::delete('principal.roles/{role}','RoleController@destroy')->name('principal.roles.destroy');

});


