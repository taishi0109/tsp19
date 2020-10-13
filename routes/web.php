<?php

Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');

Route::get('/archives/', function() {     
    return '記事一覧'; 
});  

Route::get('/archives/{category}/', function($category) {     
    return $category.'は変態'; 
});