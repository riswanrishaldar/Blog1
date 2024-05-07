<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelperTestController;

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
    return view('welcome');
});

Route::get('/home',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/form',[StudentController::class,'index'])->name('form');
Route::post('/formsubmit',[StudentController::class,'store'])->name('store');
Route::get('/show',[StudentController::class,'show'])->name('show');
Route::get('/students/{student}/edit',[StudentController::class,'edit'])->name('students.edit');
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('helper-check',[HelperTestController::class,'checkHelper']);
Route::get('new-check',[HelperTestController::class,'newHelper']);



