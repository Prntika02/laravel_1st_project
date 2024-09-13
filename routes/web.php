<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('todo.form'); 
Route::get('/todos-all',[TodoController::class,'alltodos'])->name('todo.all'); 
Route::post('/store',[TodoController::class,'storetodo'])->name('todo.store');
Route::get('/edit/{id}',[TodoController::class,'editTodo'])->name('todo.edit');
Route::patch('/update/{id}',[TodoController::class,'updateTodo'])->name('todo.update');
Route::get('/update-status/{id}',[TodoController::class,'updateStatus'])->name('todo.status');
Route::get('/delete/{id}',[TodoController::class,'deleteTodo'])->name('todo.delete');
