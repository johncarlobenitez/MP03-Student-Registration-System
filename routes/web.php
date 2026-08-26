<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', [StudentController::class, 'create'])
    ->name('students.create');


Route::post('/students', [StudentController::class, 'store'])
    ->name('students.store');


Route::get('/students/{id}', [StudentController::class, 'show'])
    ->name('students.show');