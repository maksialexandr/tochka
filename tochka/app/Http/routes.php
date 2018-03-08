<?php

Route::group(['prefix' => '/api/v1/task/'], function(){
    Route::any('/{task}', ['as' => 'task.show', 'uses' => 'TaskController@showDetail']);
    Route::any('/', ['as' => 'task', 'uses' => 'TaskController@getList']);
});

Route::any('/', ['as' => 'tasks', 'uses' => 'TaskController@index']);
Route::any('/generate', ['as' => 'tasks.generate', 'uses' => 'TaskController@generate']);
Route::any('/task/{task}', ['as' => 'task.show.popup', 'uses' => 'TaskController@show']);