<?php

Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
Route::get('sample.local', 'TaskController@index');