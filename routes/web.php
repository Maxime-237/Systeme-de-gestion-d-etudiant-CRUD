<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

//stuents routes
//Display all students
Route::get('/students', [StudentsController::class, 'index'])->name('students.index');

//route to display the form creating a student
Route::get('/students/create', [StudentsController::class, 'create'])->name('students.create');

//Store a student in the students table
Route::post('/students', [StudentsController::class, 'store'])->name('students.store');

//Show deails of a specific student by ID
Route::get('/students/{student}', [StudentsController::class, 'show'])->name('students.show');

//Edit an existing student
Route::get('/students/{student}/edit', [StudentsController::class, 'edit'])->name('students.edit');

//Update an existing student
Route::put('/students/{student}', [StudentsController::class, 'update'])->name('students.update');

//Delete an existing student
Route::delete('/students/{student}', [StudentsController::class, 'destroy'])->name('students.destroy');
