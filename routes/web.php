<?php
Route::get('/', function () {     return view('welcome'); });

Route::get('/folders/{id}/tasks','App\Http\Controllers\TaskController@index')->name('tasks.index');
Route::get('/folders/create', 'App\Http\Controllers\FolderController@showCreateForm')->name('folders.create');
Route::post('/folders/create', 'App\Http\Controllers\FolderController@create');
Route::get('/folders/{id}/tasks/create', 'App\Http\Controllers\TaskController@showCreateForm')->name('tasks.create');
Route::post('/folders/{id}/tasks/create', 'App\Http\Controllers\TaskController@create');
Route::get('/folders/{id}/tasks/{task_id}/edit', 'App\Http\Controllers\TaskController@showEditForm')->name('tasks.edit');
Route::post('/folders/{id}/tasks/{task_id}/edit', 'App\Http\Controllers\TaskController@edit');
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Auth::routes();
// Route::get('/archives/', function() {     
//     return '記事一覧'; 
// });  

// Route::get('/archives/{category}/', function($category) {     
//     return $category.'は変態'; 
// });

// Route::get('/info', function () {
//     return 'Hello World';

// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
