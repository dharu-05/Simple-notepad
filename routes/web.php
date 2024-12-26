<?php


use App\Http\Controllers\NoteController;

Route::get('/', [NoteController::class, 'index']);  // Set the index route to the NoteController
Route::resource('notes', NoteController::class);