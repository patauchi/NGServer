<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::resource('projects','ProjectController');

// Route::get('/projects','ProjectController@index')->name('projects.index');
// Route::get('/projects/create','ProjectController@create')->name('projects.create');
// Route::post('/projects/store','ProjectController@store')->name('projects.store');
// Route::get('/projects/{project}/edit','ProjectController@edit')->name('projects.edit');
// Route::patch('/projects/{project}','ProjectController@update')->name('projects.update');
// Route::get('/projects/{project}','ProjectController@show')->name('projects.show');
// Route::delete('/projects/{project}','ProjectController@destroy')->name('projects.destroy');

Route::resource('news','NewsController');

// Route::get('/news','NewsController@index')->name('news.index');
// Route::get('/news/create','NewsController@create')->name('news.create');
// Route::post('/news/store','NewsController@store')->name('news.store');
// Route::get('/news/{news}/edit','NewsController@edit')->name('news.edit');
// Route::patch('/news/{news}','NewsController@update')->name('news.update');
// Route::get('/news/{news}','NewsController@show')->name('news.show');
// Route::delete('/news/{news}','NewsController@destroy')->name('news.destroy');

Route::resource('field-guide', 'SpeciesController')
->parameters(['field-guide'=>'species'])
->names('species');

// Route::get('/field-guide', 'SpeciesController@index')->name('species.index');
// Route::get('/field-guide/create', 'SpeciesController@create')->name('species.create');
// Route::post('/field-guide/store','SpeciesController@store')->name('species.store');
// Route::get('/field-guide/{species}/edit','SpeciesController@edit')->name('species.edit');
// Route::patch('/field-guide/{species}','SpeciesController@update')->name('species.update');
// Route::get('/field-guide/{species}','SpeciesController@show')->name('species.show');
// Route::delete('/field-guide/{species}','SpeciesController@destroy')->name('species.destroy');

Auth::routes();
