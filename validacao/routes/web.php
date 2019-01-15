<?php
Route::get('/', 'ClienteController@index');

Route::prefix('clientes')->group(function(){
    Route::get('/', 'ClienteController@index')->name('cliente.index');
    Route::get('/create', 'ClienteController@create')->name('cliente.create');
    Route::post('/store','ClienteController@store')->name('cliente.store');
    Route::get('/delete/{id}', 'ClienteController@delete')->name('cliente.delete');
});