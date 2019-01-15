<?php


Route::get('/', 'PostController@index');
Route::post('/criarpostagem', 'PostController@store')->name('criarpostagem');
Route::delete('/{id}/delete', 'PostController@destroy')->name('deletarpost');
Route::get('/download/{id}', 'PostController@download')->name('downloadarquivo');
