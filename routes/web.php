<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;
use App\Models\Table;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home/home', [
        "title" => "Home"
    ]);
});

Route::get('student/all', [StudentsController::class, 'index']);
Route::get('student/detail/{student}', [StudentsController::class, 'show']);

Route::get('teacher/all', [TeacherController::class, 'index']);
Route::get('teacher/detail/{teacher}', [TeacherController::class, 'show']);




