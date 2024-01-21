<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\WorkerController;
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

Route::group(['prefix' => "/student"], function () {
    Route::get('/all', [StudentsController::class, 'index']);
    Route::get('/detail/{student}', [StudentsController::class, 'show']);
    Route::get('/create', [StudentsController::class, 'create']);
    Route::post('/add', [StudentsController::class, 'store']);
    Route::get('/edit/{student}', [StudentsController::class, 'edit']);
    Route::put('/update/{student}', [StudentsController::class, 'update']);
    Route::delete('/delete/{student}', [StudentsController::class, 'destroy']);

});

Route::group(['prefix' => "/teacher"], function () {
    Route::get('/all', [TeacherController::class, 'index']);
    Route::get('/detail/{teacher}', [TeacherController::class, 'show']);
  

});

Route::group(['prefix' => "/worker"], function () {
    Route::get('/all', [WorkerController::class, 'index']);
    Route::get('/detail/{worker}', [WorkerController::class, 'show']);
});




